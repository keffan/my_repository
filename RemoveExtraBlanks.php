<?php
    if (isset($_GET['text']))
    {
        $str = trim($_GET['text']);
        $str = preg_replace('/\s\s+/', ' ', $str);
        echo "Without extra blanks: " . $str;
    }
    else
    {
        echo "There is no parameter 'text'!";
    }