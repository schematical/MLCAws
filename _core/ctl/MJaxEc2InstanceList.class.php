<?php
class MJaxEc2InstanceList extends MJaxTable{
	
	public function __construct($objParentControl,  $arrInstances = null){
		parent::__construct($objParentControl);
		$this->AddCssClass('table table-hover');
		$this->AddColumn('Name', 'namespace');
		$this->AddColumn('AwsId', 'awsId');
		$this->AddColumn('DNS', 'dns');
			
		if(is_null($arrInstances)){
			$arrInstances = AWSInstance::LoadArrayByField('idAccount', MLCAuthDriver::IdAccount());
		}
		$this->SetDataEntites($arrInstances);
		foreach($this->arrChildControls as $intIndex => $rowInstance){
			$rowInstance->AddAction($this, 'rowInstance_click');
		}
		
	}
	public function rowInstance_click($strControlId, $strFormId, $strActionParam){
		$objInstance = AWSInstance::LoadById($strActionParam);
		if(method_exists($this->objForm, 'rowInstance_click')){
			$this->objForm->rowInstance_click($objInstance);
		}else{
			
		
			$this->objForm->Alert(new MJaxEc2InstanceEditPanel($this->objForm, $objInstance));
		}
	}
	
}
