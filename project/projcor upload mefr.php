<?php include 'connection.php'; ?>

<!DOCTYPE html>
<html>
<head>
	<title>Meeting Form</title>
	<link rel="stylesheet" type="text/css" href="design.css">
</head>
<body>
<form action="" method="POST">

	 <h2>Meeting Form</h2>
     
<div>

     	<label>Project Title</label>
     	<input type="text" name="projecttitle" required><br>

     	<label>Date</label>
     	<input type="date" name="date" required><br>

         <label>Time</label>
     	<input type="time" name="time" required><br>

        <form>
        <label>Status:</label>
            <select name= "status">
                <option value="Upcoming">Upcoming</option>
                <option value="Attended">Attended</option>
                <option value="Postponed">Postponed</option>
                <option value="NotAttended">NotAttended</option>
                <option value="Student Not Reported">Student Not Reported</option>
            </select>
            <br><br>
        </form>
        <input type="submit" name="save_btn" value="Submit">
        <input type="button" onclick="location.href='http://localhost/project/meeting3.php?';" value="Back" />
        
        
</form>
</div>

     </form>

<?php
if (isset($_POST['save_btn'])) {
    $projecttitle=$_POST['projecttitle'];
    $date=$_POST['date'];
    $time=$_POST['time'];
    $status=$_POST['status'];

$query="INSERT INTO meetingform (
    projecttitle,date,time,status) VALUES('$projecttitle','$date','$time','$status')";
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