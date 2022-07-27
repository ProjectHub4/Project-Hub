<?php

$host="localhost";
$user="root";
$password="";
$db="user";

$data=mysqli_connect($host,$user,$password,$db);
if($data===false)

{
	die("connection error");
}

if($_SERVER["REQUEST_METHOD"]=="POST")
{
	$username=$_POST["username"];
	$password=$_POST["password"];

	$sql="select * from login where username= '".$username. "'AND password='".$password."'
	";

	$result=mysqli_query($data,$sql);

	$row=mysqli_fetch_array($result);

	if($row["usertype"]=="Student")
	{
		header("location:index.php");
	}
	elseif($row["usertype"]=="ProjectCordinator")
	{
		
		header("location:index3.php");
	}
	elseif($row["usertype"]=="Supervisor")
	{
		
		header("location:index2.php");
	}
	else
	{
		echo "username or password incorrect";
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="design.css">
</head>
<body>
     <form name="#" method=post>

	 <h2>LOGIN</h2>
<div>
     	<label>username</label>
     	<input type="text" name="username" required><br>

     	<label>password</label>
     	<input type="password" name="password" required><br>

</div>
        <button type="submit">Login</button>

     </form>
</body>
</html>