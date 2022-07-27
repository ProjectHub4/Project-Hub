
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
    <div class="container">
        <div class="navigation">
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
                <h1><b> Student Project View</b> </h1>
                
                <div class="user">
                    
                </div>
            </div>

            <!-- ======================= Cards ================== -->
            <div class="cardBox">
                <div class="card"  >
                    <div>
                    <div class="cardName">Submit your proposals by 25-jan-2022.</div>
                        <div class="numbers">Announcement 1</div>
                       
                    </div>

                    <div class="iconBx">
                        <ion-icon name=""></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                    <div class="cardName">Meetings will be held on the first week of february.</div>
                        <div class="numbers">Announcement 2</div>
                       
                    </div>

                    <div class="iconBx">
                        <ion-icon name=""></ion-icon>
                    </div>
                </div>
            </div>

            <!-- ================ Order Details List ================= -->
            <?php include 'connection.php'; ?>
            <div class="details" >
                <div class="recentOrders" style="background-color:#f5f5f5;">
                    <div class="cardHeader">
                        <h2><b>Projects</b></h2>
                        <a href="http://localhost/project/index.php" class="btn">Refresh</a>
                        <a href="http://localhost/project/projects.php" class="btn">View All</a>
                    </div>

                    <table>
    <thead>
        <table border="5px" cellppadding="5px" cellspacing"5px">
        <tr>
           <td><center><b>Project Title</b></center></td>
            <td><center><b>Name</b></center></td>
            <td><center><b>Supervisor</b></center></td>
            <td><center><b>Date</b></center></td>
            <td><center><b>Remark</b></center></td>
            
           
        </tr>
    </thead>

    <tbody>
       
      
    </tbody>
    <?php
        $query="SELECT * FROM project1";
        $data=mysqli_query($con,$query);
        $result=mysqli_num_rows($data);
        if ($result) {
            while ($row=mysqli_fetch_array($data)) {
                ?>
                <tr>
                <td><?php echo $row['ProjectTitle']; ?>
                    </td>
                    <td><?php echo $row['Name']; ?>
                    </td>
                    <td><?php echo $row['Supervisor']; ?>
                    </td>
                    <td><?php echo $row['Date']; ?>
                    </td>
                    <td><?php echo $row['Remark']; ?>
                    </td>
                </tr>
                <?php
            }
        }
    ?>
</table>
                </div>
                <!-- ================= New Customers ================ -->
                <div class="recentCustomers" style="background-color:#f5f5f5;">
                    <div class="cardHeader" >
                        <h2>Timeline</h2>
                    </div>

                    <table>
                        <tr>
                            <td width="60px">
                            <span class="icon">
                            <ion-icon name="people-outline"></ion-icon>
                        </span>
                        <span class="title"> </span>
                            </td>
                            <td>
                                <h4>SUBMISSION <br> <span> Proposal is due</span></h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                            <span class="icon">
                            <ion-icon name="people-outline"></ion-icon>
                        </span>
                        <span class="title"> </span>
                                
                            </td>
                            <td>
                                <h4>SRS REPORT <br> <span>Uploaded</span></h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                            <span class="icon">
                            <ion-icon name="people-outline"></ion-icon>
                        </span>
                        <span class="title"> </span>
                            </td>
                            <td>
                                <h4>MEETINGS <br> <span>All groups are required to come in D-20 for FYP discussion</span></h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                            <span class="icon">
                            <ion-icon name="people-outline"></ion-icon>
                        </span>
                        <span class="title"> </span>
                                
                            </td>
                            <td>
                                <h4>REPORT SUBMISSION<br> <span>  IGNITE</span></h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                            <span class="icon">
                            <ion-icon name="people-outline"></ion-icon>
                        </span>
                        <span class="title"> </span>
                                
                            </td>
                            <td>
                                <h4>MID PRESENTATION<br> <span>  FYP 1</span></h4>
                            </td>
                        </tr>

                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- =========== Scripts =========  -->
    <script src="assets/js/main.js"></script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>
