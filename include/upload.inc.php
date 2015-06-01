<?php
    function GetFName($files)
    {
        $uploaddir = 'uploads/';
        $savedfile = $uploaddir . $files['filename']['name'];
        $file = $files['filename']['tmp_name'];
        return (array($file, $savedfile));
    }

    function UploadFile($files)
    {
        if ($files['filename']['error'] > 0)
        {
            return $messages[$files['filename']['error']];
        }    
        $fName = GetFName($files);
        return (@move_uploaded_file($fName[0], $fName[1])) ? 0 : 9;
    }