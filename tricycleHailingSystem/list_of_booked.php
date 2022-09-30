<?php
 // 1- connect to db
 $conn=mysqli_connect("localhost","root","12345");
mysqli_select_db($conn,"pasakay_system");

 
$passenger_user_name = (isset($_GET['passenger_user_name'])) ? $_GET['passenger_user_name'] : 'defaultUser';
$connect=mysqli_connect($host, $user, $password, $database);

if(mysqli_connect_error())
{ die("cannot connect to database field:". mysqli_connect_error());   }
 // define quesry 

$query="select * from booking_list where passenger_user_name='".$passenger_user_name."' AND status='pending' OR status='confirmed'"; 
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