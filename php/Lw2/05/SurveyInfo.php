<?php
    require_once 'GetParam.php';
    $email = GetParam('email');
    if (!empty($email))
    {
        if (file_exists("C:\\data\\" . $email . ".txt"))
        {
            $f = fopen("C:\\data\\" . $email . ".txt", "r");
            $user_data = unserialize(fgets($f));
            if (isset($user_data['first_name']))
            {
                echo 'First name: ' . $user_data['first_name'] . '<br>';
            }
            if (isset($user_data['last_name']))
            {
                echo 'Last name: ' . $user_data['last_name'] . '<br>';
            }
            if (isset($user_data['email']))
            {
                echo 'Email: ' . $user_data['email'] . '<br>';
            }
            if (isset($user_data['age']))
            {
                echo 'Age: ' . $user_data['age'] . '<br>';
            }
            fclose($f);
        }		
        else
        {
            echo 'File not found!';
        }	
    }
    else
    {
        echo 'Email is necessary!';
    }