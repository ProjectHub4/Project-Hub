<?php include 'connection.php'; ?>

<!DOCTYPE html>
<html>
<head>
	<title>Reviews</title>
	<link rel="stylesheet" type="text/css" href="design.css">
</head>
<body>
<form action="" method="POST">

	 <h2>Project Reviews</h2>
<div>

     	<label>Project Title</label>
     	<input type="text" name="projecttitle" required><br>

     	<label>Comment</label>
     	<input type="text" name="comment" required><br>

         <input type="submit" name="save_btn" value="Submit">
         <input type="button" onclick="location.href= 'http://localhost/project/review3.php';"  value="Back" />
        
</div>

     </form>

<?php
if (isset($_POST['save_btn'])) {
    $projecttitle=$_POST['projecttitle'];
    $comment=$_POST['comment'];
   

$query="INSERT INTO review1 (
    projecttitle,comment) VALUES('$projecttitle','$comment')";
    $data=mysqli_query($con,$query);
    if ($data) {
        ?>
        <script type="text/javascript">
            alert("Data Saved Sucessfully");
        </script>
        <?php

    }
    else
    {
        ?>
        <script type="text/javascript">
            alert("Please Try Again");
        </script>
        <?php
    }
    
}

?>

</body>
</html>