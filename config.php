<?php
/* Reference from 
https://www.tutorialrepublic.com/php-tutorial/php-mysql-login-system.php */
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'xxx');
define('DB_NAME', 'xxx');
 
/* Attempt to connect to MySQL database */
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($conn === false){
    die("Connection Error: " . mysqli_connect_error());
}
?>
