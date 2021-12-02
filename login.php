 <?php 
// if(isset($_POST['submit'])){
// $num=$_POST['userid'];
// $pass=$_POST['pass'];

// session_start();
// $connection = mysqli_connect('localhost','root','','mydata');
// $rs="SELECT UserID,Password FROM signup";

// $data = mysqli_query($connection,$rs);
// if(mysqli_num_rows($data)>0)
// {
// 	while($row=mysqli_fetch_array($data))
// 	{
// 		if($row['UserID']==$num && $row['Password']==$pass)
// 		{
// 			 echo "Succesfully logged-in";
// 			 header("refresh:1; url=index.html");
// 			 break;
// 			 echo "<script>alert('successfully logged-in')</script>";
// 			 echo "<script>location.href='index.html'</script>";
// 		}
// 		else{
// 		echo "<script>alert('incorrect id or password')</script>";
// 	echo "<script>location.href='login.html'</script>";
// 	 echo "Incorrect Password";
// 	 header("refresh:1; url=login.html");
// 	 }
// 		}
// 	}
// }
?>
<?php

$e = $_POST['UserID'];
$pass = $_POST['Password'];

$connection = mysqli_connect('localhost',"root",'', "mydata");
if(!$connection){
	echo"error";
}

$fetch_query = "SELECT `pass` FROM `signup` WHERE `UserID`='$e' AND `Password` = '$pass'";
$data = mysqli_query($connection,$fetch_query);
session_start();
if (isset($_SESSION['UserID'])) {
	echo '<script>alert("Login Success")</script>';
	echo '<script>window.location.href="./index.php"</script>';
}else{
	if(mysqli_num_rows($data)>0){
		$_SESSION['UserID'] = $e;
		header("location:./index.html");
	}
	else{
		echo '<script>alert("User Not Found")</script>';
		echo '<script>window.location.href="./index.html"</script>';
	}
}
?> 