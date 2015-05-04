<?php
    define('NO_ERR', 'no_error');
    require_once ('include/common.inc.php');
    
    header('Content-Type: text/plain');
    $filename = GetParam('email');
    $error = NO_ERR;
    $surveyInfo = GetSurveyFromFile($filename, $error);
    if ($error == NO_ERR)
    {
        PrintSurvey($surveyInfo);
    }
    else
    {
        if ($error == ERR_NO_NAME)
        {
            echo "There is no parameter 'email' or parameter is empty";
        }
        if ($error == ERR_NO_FILE)
        {
            echo 'File "/data/' . $filename . '.txt" does not exist';
        }
        if ($error == ERR_NO_ACCESS_TO_FILE)
        {
            echo 'No access to file';
        }
    }