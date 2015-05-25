<?php
    require_once('include/common.inc.php');
    require_once('include/upload.inc.php');
    
    if (isset($_FILES))
    {
        $error = upload_file($_FILES);
        echo '<meta charset="utf-8">';
        echo $error;
    }