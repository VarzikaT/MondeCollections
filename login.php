<?php 
if(isset($_POST['submit'])){
$num=$_POST['userid'];
$pass=$_POST['pass'];

session_start();
$connection = mysqli_connect('localhost','root','','mydata');
$rs="SELECT UserID,Password FROM signup";

$data = mysqli_query($connection,$rs);
if(mysqli_num_rows($data)>0)
{
	while($row=mysqli_fetch_array($data))
	{
		if($row['UserID']==$num && $row['Password']==$pass)
		{
			echo "home page";
			break;
		}
		
	}
}
}
?>