<?php
use libs\system\Controller;
use src\service\upload\SamaneUpload;

class UploadController extends Controller{
    public function __construct(){
        parent::__construct();
    }

    public function index()
    {
        return $this->view->load("upload/index");
    }

    public function upload()
    {
        $upload = new SamaneUpload();
        /**
         * Name of form input
         */
        $formInputName = 'fileName';
        /**
         * Root of uploading file
         */
        $folder = 'public/folder/uploaded';
        /**
         * optional 
         * So you can define it to null
         * Example:  $extensionsAllowed = null;
         */
        $extensionsAllowed = 'samane,xlsx,xls,csv,sql';//which file types are allowed seperated by comma : you mast add (samane,)
        
        $result = $upload->load($formInputName, $folder, $extensionsAllowed);

        $data['uploadResult'] = $result;

        return $this->view->load("upload/index", $data);
    }
}
?>