<?php
    if (isset($_GET['identifier']))
    {
        $str = trim($_GET['identifier']);
        if (!empty($str))
        {
            if (is_numeric($str[0]))
            {
                echo "Identifier can't start with digit. This identifier isn't correct!!!";
            }
            else
            {
                if (ctype_alnum($str))
                {
                    echo "Yes! This identifier is correct!";
                }
                else
                {
                    echo "This identifier includes unallowable symbols! Only letters and digits are allowed.";
                }
            }
        }
        else
        {
            echo "Identifier is empty!";
        }
    }
    else
    {
        echo "There is no parameter 'identifier'.";
    }