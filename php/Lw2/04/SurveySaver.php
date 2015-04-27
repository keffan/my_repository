<?php
    require_once ('include/common.inc.php');
    
    $surveyInfo = GetSurveyFromRequest();
    $saver = SaveSurveyToFile($surveyInfo);
    if ($saver == ERR_NO_NAME)
    {
        echo 'There is no parameter email or email is empty.';
    }
    else
    {
        echo($saver !== false)
        ? 'Data saved.'
        : "Can't create file!";
    }