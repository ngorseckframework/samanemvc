<?php
namespace src\service\upload;


class SamaneUpload
{
    public function load($formInputName, $folder, $extensionsAllowed = null)
    {
        if(isset($_FILES[$formInputName]['name']))
        {
            $name = $_FILES[$formInputName]['name'];
            $temp = $_FILES[$formInputName]['tmp_name'];
            if($extensionsAllowed != null)
            {
                //$allowed='xls,xlsx';  //which file types are allowed seperated by comma
                $allowed = $extensionsAllowed;
                $extension_allowed=  explode(',', $allowed);
                $file_extension=  pathinfo($name, PATHINFO_EXTENSION);
                if(array_search($file_extension, $extension_allowed))
                {
                    move_uploaded_file($temp, $folder.'/'.$name);
                    return 'file uploaded in public/folder/uploaded';
                }
                else
                {
                    return $file_extension.' is not allowed for uploading file';
                }
            } else {
                move_uploaded_file($temp, $folder.'/'.$name);
                return 'file uploaded in public/folder/uploaded';
            }
        } else {
            return 'file can not be uploaded, out of size memory';
        }
    }
}
?>