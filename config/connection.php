<?php
$db_host = 'localhost';
$db_user = 'root';
$db_password = '';
$db_name = 'quantox';

$db_connection = new mysqli($db_host, $db_user, $db_password, $db_name);
// CHECK DATABASE CONNECTION
if($db_connection->error){
    echo "Connection Failed - ".$db_connection->connect_error;
    exit;
}
else{
//    echo "The database is successfully connected";
}
?>