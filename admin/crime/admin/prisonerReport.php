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
            <center><u>Prisoner Report</u></center><br>
          
                  
                  <center><table width="40%" class='search'>
                   <tr style='background-color: #999999'>
                        <th>No</th><th>Name</th><th>Nickname</th><th>Age</th><th>Address</th><th>View</th>
                   </tr>

                  <?php
                   include '../connect.php';
                   $query=mysql_query("SELECT * FROM `prisoner`");
                   $count=0;
                   while ($query_run=mysql_fetch_array($query)) {
					     $id=$query_run['id'];
                         $name=$query_run['name'];
						 $nickname=$query_run['nickname'];
                         $age=$query_run['age'];
                         $address=$query_run['address'];
                         $count++;

                        echo"<tr style='background-color:#CFCFCF'>
                             
                                                      <td><center>$count</center></td>
                                                      <td><center>$name</center></td>
                                                      <td><center>$nickname<center></td>
                                                      <td><center>$age</center></td>
                                                      <td><center>$address</center></td>
                                                      <td><center><form action='viewprisoner.php?id=$name' method='POST'>
                                                      <button class='input' value='$id'>View</button></form></center></td>
                        </tr>";
                        }
                  ?>
                   </table></center>


            </div>
        </div>

            <div class="footer">
            </div>



      </div>
</body>
</html>