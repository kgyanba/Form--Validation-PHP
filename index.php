<?php 
session_start();
// connect to database 
$conn = mysqli_connect('localhost' , 'root', '' ,'Authentication');
if(isset($_POST['submit']))
{
	$user =$_POST['username'];
	$pass = $_POST['password'];
	$confirm =$_POST['confirm'];
	$email = $_POST['email'];
	$num = $_POST['Number'];
if($user === '' || $pass === '' || $confirm === '' || $email === '' || $num === '')
{
	echo "<script>alert('please fill all the info')</script>";
}
else
{
	if($user === '')
	{
		echo "<script>alert('please enter user name')</script>";
	}
	else if($pass === '')
	{
		echo "<script>alert('please enter a password')</script>";
	}
	else if ($confirm === '') {
		echo "<script>alert('please enter a confirm password')</script>";
	}
	else if ($confirm !== $pass) {
		echo "<script>alert('password is not matching')</script>";
	}
	else if($email === '')
	{
		echo "<script>alert('please enter a email')</script>";
	}
	else if($num === '')
	{
		echo "<script>alert('please enter a number')</script>";
	}
	else
	{
		$query = "insert into user(username, password, confirm, email, number) values('$user','$pass','$confirm','$email','$num')";
	mysqli_query($conn,$query);
	echo "form submited succesfully";
	mysqli_close($conn);
	}
	
}

	


}


?>