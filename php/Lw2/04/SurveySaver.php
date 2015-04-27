<?php
    require_once ('include/common.inc.php');
    define(ERR_NO_NAME)
    
    $surveyInfo = GetSurveyFromRequest();
    $saver = SaveSurveyToFile($surveyInfo);
    if ($saver == ERR_NO_NAME)
    {
        echo 'There is no parameter email.';
    }
    else
    {
        echo($saver !== false)
        ? 'Data saved: ' . GetSurveyFilePath($surveyInfo['email']) . ' (' . $saver . ' áàéò).'
        : "Can't save!";
    }