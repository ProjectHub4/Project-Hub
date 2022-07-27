
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard- Student</title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <!-- =============== Navigation ================ -->
    <div class="container" style="background-color:#2a2185;">
        <div class="navigation" style="background-color:#2a2185;">
            <ul>
                <li>
                    <a href="http://localhost/project/index.php">
                        <span class="icon">
                            <ion-icon name=""></ion-icon>
                        </span>
                       <b> <h1 span class="title">Project Hub</span></h1>
                        
                    </a>

                    
                </li>

                <li>
                    <a href="http://localhost/project/index.php">
                        <span class="icon">
                            <ion-icon name="home-outline"></ion-icon>
                        </span>
                        <span class="title">Dashboard</span></b>
                    </a>
                </li>


              

                <li>
                    <a href="http://localhost/project/Meeting.php">
                        <span class="icon">
                            <ion-icon name="people-outline"></ion-icon>
                        </span>
                        <span class="title"> Meetings</span>
                    </a>
                </li>

                <li>
                    <a href="http://localhost/project/review.php">
                        <span class="icon">
                            <ion-icon name="chatbubble-outline"></ion-icon>
                        </span>
                        <span class="title">Reviews</span>
                    </a>
                </li>


                <li>
                    <a href="http://localhost/project/projects.php">
                        <span class="icon">
                            <ion-icon name="book-outline"></ion-icon>
                        </span>
                        <span class="title">Projects</span>
                    </a>
                </li>

                <li>
                    <a href="http://localhost/project/PR.php">
                        <span class="icon">
                            <ion-icon name="star-outline"></ion-icon>
                        </span>
                        <span class="title">Progress Report</span>
                    </a>
                </li>

               
                <li>
                    <a href="http://localhost/project/files.php">
                        <span class="icon">
                            <ion-icon name="card-outline"></ion-icon>
                        </span>
                        <span class="title">Files</span>
                    </a>
                </li>

                <li>
                    <a href="http://localhost/project/login.php">
                        <span class="icon">
                            <ion-icon name="log-out-outline"></ion-icon>
                        </span>
                        <span class="title"> LogOut</span>
                    </a>
                </li>
            </ul>
        </div>

        <!-- ========================= Main ==================== -->
        <div class="main" style="background-color:#f5f5f5;">
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>
                <h1><b>Student Progress Report</b></h1>
                

                <div class="user">
                
                </div>
            </div>

            <!-- ======================= Cards ================== -->
            <div class="cardBox" >
                

                

                

               
            </div>

            <!-- ================ Order Details List ================= -->
            <?php include 'connection.php'; ?>
            <div class="details" >
                <div class="recentOrders" style="background-color:#f5f5f5;">
                    <div class="cardHeader">
                        <h2><b>Progress Report</b></h2>
                        <a href="http://localhost/project/PR.php" class="btn">Refresh</a>
                        </div>

<table>
    <thead>
        <table border="5px" cellppadding="5px" cellspacing"5px">
        <tr>
           <td><center><b>Project Title</b></center></td>
            <td><center><b>Task</b></center></td>
            <td><center><b>Performance</b></center></td>
            <td><center><b>Marks</b></center></td>
            <td><center><b>Status</b></center></td>
            
           
        </tr>
    </thead>

    <tbody>
       
      
    </tbody>
    <?php
        $query="SELECT * FROM project2";
        $data=mysqli_query($con,$query);
        $result=mysqli_num_rows($data);
        if ($result) {
            while ($row=mysqli_fetch_array($data)) {
                ?>
                <tr>
                    <td><?php echo $row['ProjectTitle']; ?>
                    </td>
                    <td><?php echo $row['Task']; ?>
                    </td>
                    <td><?php echo $row['Performance']; ?>
                    </td>
                    <td><?php echo $row['Marks']; ?>
                    </td>
                    <td><?php echo $row['Status']; ?>
                    </td>
                </tr>
                <?php
            }
        }
    ?>
</table>

</div>
   <!-- ================= New Customers ================ -->
                
           

    <!-- =========== Scripts =========  -->
    <script src="assets/js/main.js"></script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>