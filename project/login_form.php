
<?php

@include 'config1.php';

session_start();

if(isset($_POST['submit'])){

    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass = md5($_POST['password']);
    


$select = "SELECT * FROM user_form WHERE email = '$email' && password = '$pass'";

$result = mysqli_query($conn, $select);

if(mysqli_num_rows($result) > 0){
 
 $row = mysqli_fetch_array($result);

 if($row['user_type'] == 'Admin'){

    $_SESSION['Admin_name'] = $row['name'];
    header('location:AdminPage.php');


 }elseif($row['user_type'] == 'Student'){

    $_SESSION['Student_name'] = $row['name'];
    header('location:Student.php');

    }elseif($row['user_type'] == 'Supervisor'){

        $_SESSION['Supervisor_name'] = $row['name'];
        header('location:Supervisor.php');


}elseif($row['user_type'] == 'ProjCord'){

    $_SESSION['ProjCord_name'] = $row['name'];
    header('location:ProjCord.php');

}elseif($row['user_type'] == 'External'){

    $_SESSION['External_name'] = $row['name'];
    header('location:External.php');
}

}else{
$error[] = 'Incorrect email or password';
}


};
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Login form </title>
        <link rel="stylesheet" href="Style1.css">






<body>









    <div class="form-container" style= "background-image: url(https://wallpaperaccess.com/full/1567677.jpg);">
        
        <form action="" method="post">
        <h3>Login now</h3>
        
        
        <?php
        if(isset($error)){
            foreach($error as $error){
                echo '<span class="error-msg">'.$error.'</span>';
            };
        };
        ?>


        <input type="email" name="email" required placeholder="Enter your email">
        <input type="password" name="password" required placeholder="Enter your password">
        <input type="submit" name="submit" value="login now" class="form-btn">
        


       
</form>
</div>


	
     
</body>
</html>



