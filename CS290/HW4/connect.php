<?php

$dbhost = 'oniddb.cws.oregonstate.edu';
$dbname = 'tomlinsd-db';
$dbuser = 'tomlinsd-db';
$dbpass = '6XlNoBbJJjXt17x4';

$mysql_handle = mysql_connect($dbhost, $dbuser, $dbpass)
    or die("Error connecting to database server");

mysql_select_db($dbname, $mysql_handle)
    or die("Error selecting database: $dbname");

mysql_close($mysql_handle);


?>