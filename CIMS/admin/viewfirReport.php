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
            <center><u>First Information Report (FIR)</u><table  class="t">
                   <tr style='background-color: #999999'>
                   </tr>
                  <?php
                        include '../connect.php';
                   $idd=$_GET['id'];
                   $query=mysql_query("SELECT * FROM `fir` WHERE  `firno`='$idd'");
                   $query_run=mysql_fetch_array($query);
                   $firno=$query_run['firno'];
				   $cmtIDno=$query_run['cmtIDno'];
                   $date=$query_run['date'];
				   $time=$query_run['time'];
                   $address=$query_run['address'];
                   $district=$query_run['district'];
                   $choose=$query_run['choose'];
                   $place=$query_run['place'];
                   $infotype=$query_run['infotype'];
                   $info=$query_run['info'];
				   $passportno=$query_run['passportno'];
				   $policename=$query_run['policename'];
				   $recivedtime=$query_run['recivedtime'];
                              echo "
                              
                              <tr style='background-color:#CFCFCF'>
                              <td>FIR No</td>
                                    <td>$firno</td>
                              </tr>
							   <tr style='background-color:#E7E7E7'>
                              <td>CmtIdno</td>
                                    <td>$cmtIDno</td>
                              </tr>
							  
                              <tr style='background-color:#E7E7E7'>
                              <td>Date</td>
                                    <td>$date</td>
                              </tr>
							  
							   <tr style='background-color:#E7E7E7'>
                              <td>Time</td>
                                    <td>$time</td>
                              </tr>
							  
							  
                              <tr style='background-color:#CFCFCF'>
                              <td>Address</td>
                                    <td>$address</td>
                              </tr>
                              <tr style='background-color:#CFCFCF'>
                              <td>District</td>
                                    <td>$district</td>
                              </tr>
                              <tr style='background-color:#CFCFCF'>
                              <td>Choose</td>
                                    <td>$choose</td>
                              </tr>
                              <tr style='background-color:#E7E7E7'>
                              <td>Place</td>
                                    <td>$place</td>
                              </tr>
                              <tr style='background-color:#E7E7E7'>
                              <td>Info Type</td>
                                    <td>$infotype</td>
                              </tr>
							  <tr style='background-color:#E7E7E7'>
                              <td>Info</td>
                                    <td>$info</td>
							</tr>	
							<tr style='background-color:#E7E7E7'>
                              <td>Passport No</td>
                                    <td>$passportno</td>
								</tr>	
								<tr style='background-color:#E7E7E7'>
                              <td>Police Name</td>
                                    <td>$policename</td>
									</tr>
							  
                              <tr style='background-color:#E7E7E7'>
                              <td>Recived Time</td>
                                    <td>$recivedtime</td>
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