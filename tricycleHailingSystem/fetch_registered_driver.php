<?php
$conn=mysqli_connect("localhost","root","12345");
mysqli_select_db($conn,"pasakay_system");

$qry="select * from driver";

$raw=mysqli_query($conn,$qry);

while($res=mysqli_fetch_array($raw))
{
	 $data[]=$res;
}
print(json_encode($data));
?>