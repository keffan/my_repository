<?php
    function GetFName($files)
    {
        $savedfile = UPLOAD_DIR . $files['filename']['name'];
        $file = $files['filename']['tmp_name'];
        return (array($file, $savedfile));
    }

    function UploadFile($files)
    {
        if ($files['filename']['error'] > 0)
        {
            return $files['filename']['error'];
        }    
        $fName = GetFName($files);
        return (@move_uploaded_file($fName[0], $fName[1])) ? 0 : 9;
    }
    
    function isImage($filename)
    {
        $isImage = false;
        if (!is_dir(UPLOAD_DIR . $filename))
        {
            $imageInfo = @getimagesize(UPLOAD_DIR . $filename);
            if ($imageInfo !== false)
                if (strpos($imageInfo['mime'], 'image') !== false)
                   $isImage = true;
        }
        return $isImage;
    }