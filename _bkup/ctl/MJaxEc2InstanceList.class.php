<?php
class MJaxEc2InstanceList extends MJaxTable{
	
	public function __construct($objParentControl,  $arrInstances = null){
		parent::__construct($objParentControl);
		$this->AddCssClass('table');
		$this->AddColumn('Name', 'namespace');
		$this->AddColumn('IP', 'ip_address');
			
		if(is_null($arrInstances)){
			$arrInstances = AWSInstance::LoadArrayByField('idAccount', MLCAuthDriver::IdAccount());
		}
		$this->SetDataEntites($arrInstances);
		
	}
	
}
