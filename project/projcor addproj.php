<?php include 'connection.php'; ?>

<!DOCTYPE html>
<html>
<head>
	<title>Add Project </title>
	<link rel="stylesheet" type="text/css" href="design.css">
</head>
<body>
<form action="" method="POST">

	 <h2>Add Project </h2>
     
<div>

     	<label>Project Title</label>
     	<input type="text" name="projecttitle" required><br>

       <label>Task</label>
     	<input type="text" name="name" required><br>

     	<label>Supervisor</label>
     	<input type="text" name="supervisor" required><br>

         <label>Date</label>
     	<input type="date" name="date" required><br>

        <form>
        <label>Remark:</label>
            <select name= "remark">
                <option value="Satisfied">Satisfied</option>
                <option value="Not-Satisfied">Not-Satisfied</option>
                
            </select>
            <br><br>
        </form>
        <input type="submit" name="save_btn" value="Submit">
        <input type="button" onclick="location.href='http://localhost/project/index3.php#';" value="Back" />
        
        
</form>
</div>

     </form>

<?php
if (isset($_POST['save_btn'])) {
    $projecttitle=$_POST['projecttitle'];
    $name=$_POST['name'];
    $supervisor=$_POST['supervisor'];
    $date=$_POST['date'];
    $remark=$_POST['remark'];

$query="INSERT INTO project1 (
    projecttitle,name,supervisor,date,remark) VALUES('$projecttitle','$name','$supervisor','$date','$remark')";
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