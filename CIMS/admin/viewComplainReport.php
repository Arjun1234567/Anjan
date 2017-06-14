<?php
session_start();
if (empty($_SESSION['usertypea'])) {
      header("Location: ../index.php");
}
?>
<html>
<head>
<title>
 Crime Information Management System
</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

      <div class="wrapper">

            <div class="header"> <img src="image/in.png" height="120px" width="1350px">



            </div>

            <div>
                  <div class="menu">
                        <table class="table">
                              <tr> 
                                    <td><a href="add.php">Add User</a></td>
                                    <td><a href="delete.php">Delete User</a></td>
                                   
                                    <td><a href="search.php">Search</a></td>
                                    <td><a href="report.php">Report</a></td>
                                    <td><a href="logout.php">Logout</a></td>
                                   

                              </tr>
                        </table>
            </div><hr>
            <div class="area1">
            <center><u>Complain Report</u><table  class="t">
                   <tr style='background-color: #999999'>
                   </tr>
                  <?php
                        include '../connect.php';
                   $idd=$_GET['id'];
                   $query=mysql_query("SELECT * FROM `complain` WHERE  `id`='$idd'");
                   $query_run=mysql_fetch_array($query);
                   $cmtIDno=$query_run['cmtIDno'];
                   $name=$query_run['name'];
                   $sex=$query_run['sex'];
                   $address=$query_run['address'];
				   $phone=$query_run['phone'];
				   $occupation=$query_run['occupation'];
                   $time=$query_run['time'];
                   $date=$query_run['date'];
                   $complain=$query_run['complain'];
				   $nationality=$query_run['nationality'];
                            
                              echo "<tr style='background-color:#CFCFCF'>
                                         <td>Id</td>
                                         <td>$idd</td>
                                    </tr>
									
									<tr style='background-color:#E7E7E7'>
                                         <td>CmtIDNO</td>
                                         <td>$cmtIDno</td>
                                    </tr>
									
                                    <tr style='background-color:#E7E7E7'>
                                         <td>Name</td>
                                         <td>$name</td>
                                    </tr>
                                    <tr style='background-color:#CFCFCF'>
                                          <td>Sex</td>
                                          <td>$sex</td>
                                    </tr>
                                    <tr style='background-color:#E7E7E7'>
                                          <td>Address</td>
                                          <td>$address</td>
                                    </tr>
									
									  <tr style='background-color:#E7E7E7'>
                                          <td>Phone</td>
                                          <td>$phone</td>
                                    </tr>
                                    <tr style='background-color:#CFCFCF'>
                                          <td>Occupation</td>
                                          <td>$occupation</td>
                                   </tr>
                                   <tr style='background-color:#E7E7E7'>
                                          <td>Time</td>
                                          <td>time</td>
                                   </tr>
                                     <tr style='background-color:#E7E7E7'>
                                          <td>Date</td>
                                          <td>$date</td>
                                    </tr>
								   
                                   </tr>
                                   <tr style='background-color:#E7E7E7'>
                                          <td>Complain</td>
                                          <td>$complain</td>
                                  </tr>
								  
								    <tr style='background-color:#E7E7E7'>
                                          <td>Nationality</td>
                                          <td>$nationality</td>
                                    </tr>";
                              
                              
                  ?>
                   </table>
                   <button onclick="window.print()" class="print">print</button>
                 </center>


            </div>
        </div>

            <div class="footer">
                <center>Nepal Police Academy</center>  

            </div>



      </div>
</body>
</html>