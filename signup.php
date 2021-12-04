<?php
	if(isset($_POST['submit']))
	{
		$var=$_POST['fname'];
        $email=$_POST['email'];
        $phone=$_POST['telp'];
        $u=$_POST['user'];
		$pass=$_POST['pass1'];
		$connection = mysqli_connect('localhost','root','','mydata');
		if(!$connection){
			echo 'connection not created';
			
		}	
		$rs="INSERT INTO signup(Name,EmailID,Phone,UserID,Password) VALUES('$var','$email','$phone','$u','$pass')";
		if(mysqli_query($connection,$rs)){
			header("location:./login.html");
		}
	}
    ?>