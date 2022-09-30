<?php
 // 1- connect to db
 $host="localhost";
 $user="root";
 $password2="12345";
 $database="pasakay_system";
$id = (isset($_GET['id'])) ? $_GET['id'] : 'defaultUser';
$connect=mysqli_connect($host, $user, $password, $database);

if(mysqli_connect_error())
{ die("cannot connect to database field:". mysqli_connect_error());   }
 // define quesry 
//$sql = "UPDATE MyGuests SET lastname='Doe' WHERE id=2";
$sql="UPDATE booking_list SET status='confirmed' where id='".$id."' "; 

if ($connect->query($sql) === TRUE) {
    echo "Record updated successfully";
  } else {
    echo "Error updating record: " . $conn->error;
  }

  $connect->close();
 
?>

