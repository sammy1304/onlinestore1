<?php    # test.php sandbox

define('DBNAME', 'onlinestore1');
define('DBUSER', 'root');
define('DBPASS', 'samuel');


$conn = new PDO('mysql:host=localhost; dbname ='.DBNAME, DBUSER, DBPASS);

//echo


?>