<?php 
abstract class MLCAWSDriver{
	protected static $objEc2 = null;
	public static function Init(){
		if(is_null(self::$objEc2)){
			self::$objEc2 = new AmazonEC2(
				AWS_ACCESS_KEY,
				AWS_ACCESS_SECRET
			);
		}
	}
	public static function GetServerIP($intIndex = 0){
		self::Init();

		$arrInstances = self::DescribeEC2Instances();
		if(count($arrInstances) > $intIndex){
			$objInstance = $arrInstances[$intIndex];
			return $objInstance->ipAddress;
		}else{
			return null;
		}
	}
	public static function DescribeEC2Instances($arrOpt = null){
		self::Init();
		if(is_string($arrOpt)){
			$arrOpt = array(
				MLCAwsInstanceOpts::InstanceId => $arrOpt
			);
		}
		$response = self::$objEc2->describe_instances($arrOpt);		
		$arrInstances = $response->body;//->reservationSet;		
		return $arrInstances;				
	}
	public static function DescribeRDSInstances(){
		self::Init();
		$objDBResponse = self::$objEc2->describe_db_instances();		
		$arrDBInstances = $objDBResponse->body->DescribeDBInstancesResult->DBInstances;
		return $arrDBInstances;
	}
	public static function RunNewInstace($intImageId,  $arrOpt = null, $intMinCount = 1, $intMaxCount = 1){
		$objDBResponse = self::$objEc2->run_instances($intImageId, $intMinCount, $intMaxCount, $arrOpt);
		return $objDBResponse;
	}
	public static function StopInstance($strInstanceId){
		self::Init();
		$objDBResponse = self::$objEc2->stop_instances($strInstanceId);		
		_dp($objDBResponse);
	}
	/////////////////////////////////////////////////////////
	//S3 Bucket Stuff
	///////////////////////////////////////////////////////
	public static function S3(){
		return new S3(AWS_ACCESS_KEY, AWS_ACCESS_SECRET);
	}
}