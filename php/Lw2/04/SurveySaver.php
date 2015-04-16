<?php
    require_once 'GetParam.php';
    $email = GetParam ('email');
    if (!empty($email))
    {
        $f = fopen("C:\\data\\" . $email . ".txt", "w");
        fwrite($f, serialize($_GET));
        fclose($f);
        echo 'Your data is successfully saved!';
    }
    else
    {
        echo 'Email address is necessary!';
    }