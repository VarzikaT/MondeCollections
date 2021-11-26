<?php 

$num=$_POST['name'];
$pass=$_POST['password'];

session_start();
$connection = mysqli_connect('localhost','root','','abhinandan');
$rs="SELECT name,password FROM form";

$data = mysqli_query($connection,$rs);
if(mysqli_num_rows($data)>0)
{
	while($row=mysqli_fetch_array($data))
	{
		if($row['name']==$num && $row['password']==$pass)
		{
			echo "home page";
			break;
		}
		
	}
}
?>