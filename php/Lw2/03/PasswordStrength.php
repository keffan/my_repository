<?php
    require 'GetParam.php';
    require 'CalculateStrength.php';
    $password = GetParam('password');
    if (empty($password))
    {
        echo 'Parameter not found!';
    }
    else
    {
        $strength = strlen($password) * 4;
        $strength += CountDigit($password);
        $strength += CountUpperChars($password);
        $strength += CountLowerChars($password);
        $strength += CheckAllChars($password);
        $strength += CheckAllDigits($password);
        $strength += CheckRepeatSymbols($password);
        echo $strength;		
    }