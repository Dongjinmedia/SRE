<?php 

// Database Details
$host     = "173.194.110.228";
$username = "db";
$password = "db";
$db_name  = "mysql";
$tbl_name = "visitor_counter";

// Connect to server and select database.
mysql_connect("$host", "$username", "$password")or die("cannot connect to
 server ");
mysql_select_db("$db_name")or die("cannot select DB"); 

$sql      = "SELECT * FROM $tbl_name";
$result   = mysql_query($sql);
$rows     = mysql_fetch_array($result);
$counter  = $rows['counts'];

// setting counter = 1, if we have no counts value 
if(empty($counter)){
$counter = 1;
$sql1    = "INSERT INTO $tbl_name(counts) VALUES('$counter')";
$result1 = mysql_query($sql1);
}

// print unix time, count and message
$array = ["timestamp" => time(), "counter" => (int)$counter, "message" =>
 "Hello World"];
header('Content-Type: application/json');
echo json_encode($array, JSON_PRETTY_PRINT);

// Incrementing counts value 
$plus_counter=$counter+1; 
$sql2    = "update $tbl_name set counts='$plus_counter'";
$result2 = mysql_query($sql2); 
mysql_close();

?>
