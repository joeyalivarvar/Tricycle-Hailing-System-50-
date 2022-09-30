<?php
$conn=mysqli_connect("localhost","root","12345");
mysqli_select_db($conn,"pasakay_system");


	   $passenger_user_name=$_POST['t1'];
	   $booking_time=$_POST['t2'];
	   $driver_id=$_POST['t3'];
	   $driver_name=$_POST['t4'];	
	   $plate_number=$_POST['t5'];
	   $pickup_point=$_POST['t6'];	
	   $drop_off_point=$_POST['t7'];	   
	   $status=$_POST['t8'];
	   $type=$_POST['t9'];
	   $date=$_POST['t10'];
	   $driver_address=$_POST['t11'];
	   $contact_number=$_POST['t12'];
     

			$qry="INSERT INTO booking_list (passenger_user_name,booking_time,driver_id,driver_name,plate_number,pickup_point,drop_off_point,status,pasakay_type,date,driver_address,contact_number)
			      VALUES ('$passenger_user_name','$booking_time','$driver_id','$driver_name','$plate_number','$pickup_point','$drop_off_point','$status','$type','$date','$driver_address','$contact_number')";

			$res=mysqli_query($conn,$qry);
			
			if($res==true)
			echo "Saved Successfully";
			else
			 echo "Failed to Save";


?>
