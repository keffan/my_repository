<?php
    define('OK', 'ok');
    require_once ('include/common.inc.php');
    
    header('Content-Type: text/plain');
    $filename = GetSurveyFilename('email');
    $error = OK;
    $surveyInfo = GetSurveyFromFile($filename, $error);
    if ($error == OK)
    {
        PrintSurvey($surveyInfo);
    }
    else
    {
        if ($error == ERR_NO_FILE)
        {
            echo 'File ' . $filename . '.txt not exist';
        }
        if ($error == ERR_NO_ACCESS_TO_FILE)
        {
            echo 'No access to file';
        }
    }