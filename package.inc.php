<?php
define('__MLC_AWS__', dirname(__FILE__));
define('__MLC_AWS_CORE__', __MLC_AWS__ . '/_core');
define('__MLC_AWS_CORE_MODEL__', __MLC_AWS_CORE__ . '/model');
define('__MLC_AWS_CORE_VIEW__', __MLC_AWS_CORE__ . '/view');
define('__MLC_AWS_CORE_CTL__', __MLC_AWS_CORE__ . '/ctl');
MLCApplicationBase::$arrClassFiles['MLCAWSDriver'] = __MLC_AWS_CORE__ . '/MLCAWSDriver.class.php';
MLCApplicationBase::$arrClassFiles['S3'] = __MLC_AWS_CORE__ . '/S3.class.php';

MLCApplicationBase::$arrClassFiles['AWSInstance'] = __MLC_AWS_CORE_MODEL__ . '/data_layer/AWSInstance.class.php';
MLCApplicationBase::$arrClassFiles['MJaxEc2InstanceList'] = __MLC_AWS_CORE_CTL__ . '/MJaxEc2InstanceList.class.php';
MLCApplicationBase::$arrClassFiles['MJaxEc2InstanceEditPanel'] = __MLC_AWS_CORE_CTL__ . '/MJaxEc2InstanceEditPanel.class.php';
MLCApplicationBase::$arrClassFiles['MJaxS3UploadBox'] = __MLC_AWS_CORE_CTL__ . '/MJaxS3UploadBox.class.php';


require_once(__MLC_AWS_CORE__ . "/ec2/sdk.class.php");
require_once(__MLC_AWS_CORE__ . "/_enum.inc.php");
MLCAWSDriver::Init();