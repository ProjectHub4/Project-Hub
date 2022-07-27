<?php include 'connection.php'; ?>

<!DOCTYPE html>
<html>
<head>
	<title>Progress Report</title>
	<link rel="stylesheet" type="text/css" href="design.css">
</head>
<body>
<form action="" method="POST">

	 <h2>Progress Report</h2>
<div>

     	<label>Project Title</label>
     	<input type="text" name="projecttitle" required><br>

     	<label>Task</label>
     	<input type="text" name="task" required><br>

         <label>Marks</label>
     	<input type="text" name="marks" required><br>

         <form>
        <label>Status:</label>
            <select name= "status">
                <option value="Passed">Passed</option>
                <option value="Failed">Failed</option>
                <option value="Incomplete">Incomplete</option>
             
            </select>
           <br><br> 
<form>
           <label>Performance</label>
            <select name= "performance">
                <option value="Good">Good</option>
                <option value="Bad">Bad</option>
                <option value="Excellent">Excellent</option>
             
            </select>
           <br><br> 
        </form>
        <input type="submit" name="save_btn" value="Submit">
        <input type="button" onclick="location.href='http://localhost/project/perform%20grad.php';" value="Back" />
</div>

     </form>

<?php
if (isset($_POST['save_btn'])) {
    $projecttitle=$_POST['projecttitle'];
    $task=$_POST['task'];
    $performance=$_POST['performance'];
    $marks=$_POST['marks'];
    $status=$_POST['status'];

$query="INSERT INTO project2 (
    projecttitle,task,performance,marks,status) VALUES('$projecttitle','$task','$performance','$marks','status')";
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