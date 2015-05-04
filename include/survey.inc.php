<?php
    define('ERR_NO_NAME', 'no_name');
    define('ERR_NO_FILE', 'no_file');
    define('ERR_NO_ACCESS_TO_FILE', 'no_access');
    
    function GetSurveyFromRequest()
    {
        $survey = array
        (
            'first_name' => GetParam('first_name'),
            'last_name' => GetParam('last_name'),
            'email' => GetParam('email'),
            'age' => GetParam('age')
        );
        return $survey;
    }
    
    function GetSurveyFilePath($filename)
    {
        return 'data/' . $filename . '.txt';
    }
    
    function SaveSurveyToFile($survey)
    {
        $filename = $survey['email'];
        $filePath = GetSurveyFilePath($filename);
        return (!empty($filename)) ? @file_put_contents($filePath, serialize($survey)) : ERR_NO_NAME;
    }
    
    function GetSurveyFromFile($filename, &$errorCode)
    {
        !empty($filename) ? $filePath = GetSurveyFilePath($filename) : $errorCode = ERR_NO_NAME;
        $survey = array();
        if ($errorCode !== ERR_NO_NAME)
        {
            $survey = (file_exists($filePath)) ? file_get_contents($filePath) : $errorCode = ERR_NO_FILE;
        }
        if ($survey === false)
        {
            $errorCode = ERR_NO_ACCESS_TO_FILE;
        }
        return (($survey !== false) && ($errorCode !== ERR_NO_FILE) && ($errorCode !== ERR_NO_NAME)) 
            ? unserialize($survey) 
            : $survey;
    }
    
    function PrintSurvey($survey)
    {
        foreach ($survey as $key => $value) 
        {
            $key = str_replace('_', ' ', $key);
            echo $key . ': ' . (!empty($value) ? $value : '') . "\n";
        }
    }