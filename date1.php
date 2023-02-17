<?php

/**
 * unix epoch = The time from Jan, 01, 1970 till now in seconds 
 * time(); this function gives the time from unix time stamp
 */

echo time();
echo "\n";
echo date('d/m/y');
echo "\n";
echo microtime(true);
echo "\n";


/**
 * Date format
 * 
 */

echo date("d/M/y");
echo "\n";
echo date("dS M,Y"); // 16/Feb/23
echo "\n"; //16th Feb,2023 
echo date("dS F, Y h:i:s"); // 16th February, 2023 08:08:29
