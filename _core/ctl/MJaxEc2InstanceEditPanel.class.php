<?php
/**
* Class and Function List:
* Function list:
* Classes list:
* - AWSInstanceEditPanel extends AWSInstanceEditPanelBase
*/

class MJaxEc2InstanceEditPanel extends MJaxPanel {
 	protected $objAWSInstance = null;
    public $intIdInstance = null;
    public $txtAwsId = null;
    public $txtNamespace = null;
    public $txtDns = null;
    public $txtCreDate = null;
    public $lstIdAccount = null;
    //Regular controls
    public $btnSave = null;
    public $btnDelete = null;
	public $btnRunStartupScript = null;
    public function __construct($objParentControl, $objAWSInstance = null) {
        parent::__construct($objParentControl);
        
		if(!is_null($objAWSInstance)){
			$this->objAWSInstance = MDEApplication::UpdateInstance($objAWSInstance);
		}
        if ($objParentControl->AsssetMode != MJaxAssetMode::MOBILE) {
            $this->strTemplate = __MLC_AWS_CORE_VIEW__ . '/' . get_class($this) .  '.tpl.php';
        }
        $this->CreateFieldControls();
        $this->CreateContentControls();
        $this->CreateReferenceControls();
    }
    public function CreateContentControls() {
        $this->btnSave = new MJaxButton($this);
        $this->btnSave->Text = 'Save';
        $this->btnSave->AddAction(new MJaxClickEvent() , new MJaxServerControlAction($this, 'btnSave_click'));
        $this->btnDelete = new MJaxButton($this);
        $this->btnDelete->Text = 'Delete';
        $this->btnDelete->AddAction(new MJaxClickEvent() , new MJaxServerControlAction($this, 'btnDelete_click'));
		$this->btnRunStartupScript = new MJaxButton($this);
        $this->btnRunStartupScript->Text = 'Script';
        $this->btnRunStartupScript->AddAction(new MJaxClickEvent() , new MJaxServerControlAction($this, 'btnRunStartupScript_click'));
        if (is_null($this->objAWSInstance)) {
            $this->btnDelete->Style->Display = 'none';
			$this->btnRunStartupScript->Style->Display = 'none';
			
        }
    }
    public function CreateFieldControls() {
        $this->txtAwsId = new MJaxTextBox($this);
        $this->txtAwsId->Name = 'awsId';
		$this->txtAwsId->Attr('readonly', 'readonly');
        $this->txtNamespace = new MJaxTextBox($this);
        $this->txtNamespace->Name = 'namespace';
        $this->txtDns = new MJaxTextBox($this);
        $this->txtDns->Name = 'Dns';
		$this->txtDns->Attr('readonly', 'readonly');
        $this->txtCreDate = new MJaxTextBox($this);
        $this->txtCreDate->Name = 'creDate';
		$this->txtCreDate->TextMode = MJaxTextMode::Date;
		$this->txtCreDate->Attr('readonly', 'readonly');
        $this->lstIdAccount = new MJaxListBox($this);
        $this->lstIdAccount->Name = 'idAccount';
        if (!is_null($this->objAWSInstance)) {
        	
			
            $this->intIdInstance = $this->objAWSInstance->idInstance;
            $this->txtAwsId->Text = $this->objAWSInstance->awsId;
            $this->txtNamespace->Text = $this->objAWSInstance->namespace;
            $this->txtDns->Text = $this->objAWSInstance->Dns;
            $this->txtCreDate->Text = $this->objAWSInstance->creDate;
			
			
			
        }
		$arrAccount = AuthAccount::LoadAll()->getCollection();
		foreach($arrAccount as $intIndex => $objAccount){
            $this->lstIdAccount->AddItem(
            	$objAccount->ShortDesc,
            	$objAccount->IdAccount,
            	(
	            	(!is_null($this->objAWSInstance)) &&
	            	($objAccount->IdAccount == $this->objAWSInstance->idAccount)
				)
        	);
		}
    }
    public function CreateReferenceControls() {
        // if(!is_null($this->objAWSInstance->i)){
        // }
        
    }
  
    public function btnDelete_click() {
        $this->objAWSInstance->Delete();
    }
    public function IsNew() {
        return is_null($this->objAWSInstance);
    }
		
    
    public function btnSave_click() {
        if (is_null($this->objAWSInstance)) {
            //Create a new one
            $this->objAWSInstance = MDEApplication::BootInstance();
            
        }
		
        $this->objAWSInstance->namespace = $this->txtNamespace->Text;
        $this->objAWSInstance->Dns = $this->txtDns->Text;        
        $this->objAWSInstance->idAccount = $this->lstIdAccount->SelectedValue;
        $this->objAWSInstance->Save();
		$this->objForm->HideAlert();
    }
	public function btnRunStartupScript_click(){
		MDEApplication::RunStartupScripts($this->objAWSInstance);
	}
    
}
?>