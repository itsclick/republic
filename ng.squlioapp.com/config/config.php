<?php
/*
$hostname_login = "standardexpress.yourwebhostingmysql.com";
$database_login = "schooldev";
$username_login = "schooldev";
$password_login = "schooldev";
$login = mysqli_connect($hostname_login, $username_login, $password_login) or trigger_error(mysqli_error(),E_USER_ERROR); 


$data = mysqli_select_db($login, $database_login);
if(!$data){
die("No database Selected");
}
*/?>


<?php
$hostname_login = "localhost";
$database_login = "ihostukc_syng";
$username_login = "ihostukc_syng234";
$password_login = 'o$Ul9GbChQlv';
$login = mysqli_connect($hostname_login, $username_login, $password_login) or trigger_error(mysqli_error(),E_USER_ERROR); 
$data = mysqli_select_db($login, $database_login);
if(!$data){
die("No database Selected");
}
?>