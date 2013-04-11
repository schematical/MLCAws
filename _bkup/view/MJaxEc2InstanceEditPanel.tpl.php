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
		<label class="control-label" class="control-label" for="<?php echo $_CONTROL->txtIp_address->ControlId; ?>">
			IP
		</label>
		<div class='controls'>	      
	      <?php $_CONTROL->txtIp_address->Render(); ?>
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
		<label class="control-label" class="control-label" for="<?php echo $_CONTROL->txtIdAccount->ControlId; ?>">
			Account
		</label>
		<div class='controls'>	      
	      <?php $_CONTROL->txtIdAccount->Render(); ?>
	    </div>
	</div>
    
    
    
	
	
	 
	 
	<div class="control-group">
		<div class='controls'>
			 <?php $_CONTROL->btnSave->Render(); ?>
			 <?php $_CONTROL->btnDelete->Render(); ?>
	 	</div>
	</div>

</form>