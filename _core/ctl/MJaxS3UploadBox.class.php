<?php
/**
 * Created by JetBrains PhpStorm.
 * User: user1a
 * Date: 4/8/13
 * Time: 1:34 PM
 * To change this template use File | Settings | File Templates.
 */
class MJaxS3UploadBox extends MJaxUploadBox{
    protected $strS3Bucket = null;
    protected $strS3Mode =  S3::ACL_PUBLIC_READ;
    protected $strS3Path = null;
    protected $blnSuccess = false;

    public function ParsePostData() {
        parent::ParsePostData();
        if(!is_null($this->arrFileData)){
            $strFromLoc = $this->arrFileData['tmp_name'];

            //Upload it to the Cloud
            //if(SERVER_ENV != 'local'){
            $this->blnSuccess = MLCAWSDriver::S3()->putObjectFile(
                    $strFromLoc,
                    $this->strS3Bucket,
                     $this->S3FullPath,
                    $this->strS3Mode
                );
            /*}else{
                copy($strFromLoc, __TMP_DIR__ . '/s3/' .  $strS3Name);
                return true;
            }*/
        }
    }
    /////////////////////////
    // Public Properties: GET
    /////////////////////////
    public function __get($strName) {
        switch ($strName) {
            case "S3Mode": return $this->strS3Mode;
            case "S3Bucket": return $this->strS3Bucket;
            case "S3Path": return $this->strS3Path;
            case "S3Success" : return $this->blnSuccess;
            case "S3FullPath" : return $this->strS3Path . '.' . pathinfo($this->arrFileData['name'], PATHINFO_EXTENSION);
            default:
                return parent::__get($strName);
        }
    }
    ///////////////////////// MJaxType::String)
    // Public Properties: SET
    /////////////////////////
    public function __set($strName, $mixValue) {
        $this->blnModified = true;
        switch ($strName) {
            // APPEARANCE
            case "S3Mode": return $this->strS3Mode = $mixValue;
            case "S3Bucket": return $this->strS3Bucket = $mixValue;
            case "S3Path": return $this->strS3Path = $mixValue;
            default:
                parent::__set($strName, $mixValue);

                break;
        }
    }

}