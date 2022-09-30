<?php
 // 1- connect to db
 $host="localhost";
 $user="root";
 $password2="12345";
 $database="pasakay_system";
 
$passenger_user_name = (isset($_GET['passenger_user_name'])) ? $_GET['passenger_user_name'] : 'defaultUser';
$connect=mysqli_connect($host, $user, $password, $database);

if(mysqli_connect_error())
{ die("cannot connect to database field:". mysqli_connect_error());   }
 // define quesry 

$query="select * from booking_list where status='pending'"; 
$result=  mysqli_query($connect, $query);
if(! $result)
{ die("Error in query");}
 //get data from database
//$output=array();
while($row=  mysqli_fetch_assoc($result))
{
 $output[]=$row;  //$row['id']
}
if($output){
print(json_encode($output));// this will print the output in json
}else{

    print("{'msg':'cannot login'}");
}
// 4 clear
mysqli_free_result($result);
//5- close connection
mysqli_close($connect);
?>