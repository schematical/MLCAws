<form class="form-horizontal">  
    	<legend>
   	 	<?php

if (is_null($_CONTROL->IsNew())) { ?>
    	idInstance: <?php echo $_CONTROL->intIdInstance; ?><br/>
    	<?php
} else { ?>
    		New
    	<?php
} ?>
    	</legend>
	
	
    
   	 <div class="control-group">
		<label class="control-label" class="control-label" for="<?php echo $_CONTROL->txtAwsId->ControlId; ?>">
			AWS ID
		</label>
		<div class='controls'>	      
	      <?php $_CONTROL->txtAwsId->Render(); ?>
	    </div>
	</div>
    
   
	
	 <div class="control-group">
		<label class="control-label" class="control-label" for="<?php echo $_CONTROL->txtNamespace->ControlId; ?>">
			Namespace
		</label>
		<div class='controls'>	      
	      <?php $_CONTROL->txtNamespace->Render(); ?>
	    </div>
	</div>
    
    
    
	
    
   
	
	 <div class="control-group">
		<label class="control-label" class="control-label" for="<?php echo $_CONTROL->txtDns->ControlId; ?>">
			IP
		</label>
		<div class='controls'>	      
	      <?php $_CONTROL->txtDns->Render(); ?>
	    </div>
	</div>
    
    
    
	
    
   
	
	 <div class="control-group">
		<label class="control-label" class="control-label" for="<?php echo $_CONTROL->txtCreDate->ControlId; ?>">
			CreDate
		</label>
		<div class='controls'>	      
	      <?php $_CONTROL->txtCreDate->Render(); ?>
	    </div>
	</div>
    
    
    
	
    
   
	
	 <div class="control-group">
		<label class="control-label" class="control-label" for="<?php echo $_CONTROL->lstIdAccount->ControlId; ?>">
			Account
		</label>
		<div class='controls'>	      
	      <?php $_CONTROL->lstIdAccount->Render(); ?>
	    </div>
	</div>
    
    
    
	
	
	 
	<div class="control-group">
		<div class='controls'>
			 <?php $_CONTROL->btnSave->Render(); ?>
			 <?php $_CONTROL->btnDelete->Render(); ?>
			 <?php $_CONTROL->btnRunStartupScript->Render(); ?>
	 	</div>
	</div>

</form>