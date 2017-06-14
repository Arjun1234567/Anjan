<?php
session_start();
if (empty($_SESSION['usertypea'])) {
      header("Location: ../index.php");
}
?>
<html>
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

		<div class="content">
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
            <center><u>Report</u></center><br>
            	
            	
            	<table class="report">
                        <tr>
                              <td>Total Registered Criminal</td>
                              <td>
                                    <?php
                                    require '../connect.php';
                                    $query=mysql_query("SELECT * FROM `criminal`");
                                    $row=mysql_num_rows($query);
                                    echo $row;
                                    ?>
                              </td>

                              <td><center><form action="RegCriminalReport.php" methode="POST">
                                                <input type="submit" name="btn" class="bltn" value="view">
                                          </form></center></td>
                        </tr>
                        <tr>
                              <td>Total First Information Report (FIR)</td>
                              <td>
                                    <?php
                                    $query=mysql_query("SELECT * FROM `fir`");
                                    $row=mysql_num_rows($query);
                                    echo $row;
                                    ?>
                              </td>
                              <td><center><form action="firReport.php" methode="POST">
                                                <input type="submit" name="btn" class="bltn" value="view">
                                          </form></center></td>
                        </tr>
                        <tr>
                              <td>Total Complaint Report</td>
                              <td>
                                    <?php
                                    $query=mysql_query("SELECT * FROM `complain`");
                                    $row=mysql_num_rows($query);
                                    echo $row;
                                    ?>
                              </td>
                            <td><center><form action="complaintReport.php" methode="POST">
                                                <input type="submit" name="btn" class="bltn" value="view">
                                          </form></center></td>
                        </tr>
                 
				 
                        <tr>
                              <td>Total Most Wanted Report</td>
                              <td>
                                    <?php
                                    $query=mysql_query("SELECT * FROM `wanted`");
                                    $row=mysql_num_rows($query);
                                    echo $row;
                                    ?>
                                    
                              </td>
                              <td><center><form action="mostWantedReport.php" methode="POST">
                                                 <input type="submit" name="btn" class="bltn" value="view">
                                          </form></center></td>                      
                         </tr>
                        <tr>
                              <td>Total Prisoner Report</td>
                              <td>
                                    <?php
                                    $query=mysql_query("SELECT * FROM `prisoner`");
                                    $row=mysql_num_rows($query);
                                    echo $row;
                                    ?>
                              </td>
                              <td><center><form action="prisonerReport.php" methode="POST">
                                                <input type="submit" name="btn" class="bltn" value="view">
                                          </form></center></td>
                                 
                              
                        </tr>
                  </table>
            	


            </div>
        </div>

		<div class="footer">
		<center>Nepal Police Academy</center>
		</div>



	</div>
</body>
</html>