<?php
	$name=$_POST['FirstName'];
	$email=$_POST['email'];
	$subject=$_POST['subject'];
	$message=$_POST['yourMessage'];
	$con=mysqli_connect('localhost','root');
	mysqli_select_db($con,'messages');
	$q="INSERT INTO data values ('$name','$email','$subject','$message')";
	$status=mysqli_query($con,$q);
    mysqli_close($con);	
 ?>
<!DOCTYPE html>
<html>
<head>
<title>Success!</title>
<style type="text/css"></style>
</head>
<body bgcolor="black">
<h2>Message Aknowledgement</h2>
<p><?php
if($status==1)
echo "Dear user your message has been successfully recorded. we will be back soon with your query.";
else
echo "Submission failed ,try again";
?>
</body>
</html>