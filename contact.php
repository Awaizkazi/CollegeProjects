<?php

$con=mysqli_connect('localhost','root');

if($con){
	echo "Connection successful";
}else{
	echo "No connection";
}

mysqli_select_db($con,'servicecont');
$Name = $_POST['Name'];
$Email = $_POST['Email'];
$Message = $_POST['Message'];
$Phone = $_POST['Phone'];

$query = "insert into contactuser (Name, Email, Message, Phone)
values('$Name','$Email','$Message','$Phone')";

echo "$query";

mysqli_query($con, $query);
?>
