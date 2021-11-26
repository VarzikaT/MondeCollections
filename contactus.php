<?php
	if(isset($_POST['submit']))
	{
		$v=$_POST['name'];
        $em=$_POST['email'];
        $pho=$_POST['country'];
        $text=$_POST['subject'];
		$connection = mysqli_connect('localhost','root','','mydata');
		if(!$connection){
			echo 'connection not created';
			
		}	
		$rs="INSERT INTO contactus(Name,Email,place,text) VALUES('$v','$em','$pho','$text')";
		if(mysqli_query($connection,$rs)){
			header("location:index.html");
		}
	}
    ?>