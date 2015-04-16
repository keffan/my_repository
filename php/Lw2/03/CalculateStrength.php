<?php
    function CountDigit($parameter)
    {
        $count = 0;
        for ($i = 0; $i < strlen($parameter); ++$i)
        {
            if (ctype_digit($parameter[$i]))
            {
                $count++;
            }
        }
        $count = $count*4;
        return $count;
    }
	
    function CountUpperChars($parameter)
    {
        $count = 0;
        for ($i = 0; $i < strlen($parameter); ++$i)
        {
            if (ctype_upper($parameter[$i]))
            {
                $count++;
            }
        }
        $count = ($count != 0) ? ((strlen($parameter)-$count)*2) : 0;
        return $count;
    }
	
    function CountLowerChars($parameter)
    {
        $count = 0;
        for ($i = 0; $i < strlen($parameter); ++$i)
        {
            if (ctype_lower($parameter[$i]))
            {
                $count++;
            }
        }
        $count = ($count != 0) ? ((strlen($parameter)-$count)*2) : 0;
        return $count;
    }
	
    function CheckAllChars($parameter)
    {
        $count = (ctype_alpha($parameter)) ? strlen($parameter) : 0;
        return -$count;
    }
	
    function CheckAllDigits($parameter)
    {
        $count = (ctype_digit($parameter)) ? strlen($parameter) : 0;
        return -$count;
    }
	
    function CheckRepeatSymbols($parameter)
    {
        $count = 0;
        foreach (count_chars($parameter, 1) as $val)
        {
            if ($val > 1)
            {
                $count = $count - $val;
            }
        }
        return $count;
    }