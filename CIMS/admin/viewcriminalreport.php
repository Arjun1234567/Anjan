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

            <div class="content21">
                  <div class="menu">
                        <table class="table">
                              <tr> 
                                    <td><a href="add.php">Add User</a></td>
                                    <td><a href="delete.php">Delete User</a></td>
                                    <td><a href="index.php">Manage User</a></td>
                                    <td><a href="search.php">Search</a></td>
                                    <td><a href="report.php">Report</a></td>
                                    <td><a href="logout.php">Logout</a></td>
                                   

                              </tr>
                        </table>
            </div><hr>
            <div class="area1">
            <center><u>Criminal Registered Report</u><table  class="t">
                  <table>
                        <?php 
                        
                             include '../connect.php';
                   $idd=$_GET['id'];
                   $query=mysql_query("SELECT * FROM `criminal` WHERE `id`='$idd'");
                   $query_run=mysql_fetch_array($query);
                   $photo1=$query_run['image1'];
                   $photo2=$query_run['image2'];
                   
                    
                  echo "<tr ><td><img src='../upload/".$photo1."' id='tb'></td><td><img src='../upload/".$photo2." ' id='tb'></td><td>";

                        ?>

                  </table>
                  <table  class="t">
                  <?php
                        include '../connect.php';
                   $idd=$_GET['id'];
                   $query=mysql_query("SELECT * FROM `criminal` WHERE `id`='$idd'");
                   $query_run=mysql_fetch_array($query);
				   $criminalIDno=$query_run['criminalIDno'];
				   $name=$query_run['name'];
                   $nickname=$query_run['nickname'];
				   $sex=$query_run['sex'];
                   $age=$query_run['age'];
                   $occupation=$query_run['occupation'];
                   $crimetype=$query_run['crimetype'];
                   $address=$query_run['address'];
				   $mostwanted=$query_run['mostwanted'];
				   
                  
                   

             
                              
                              
                              echo "<tr style='background-color:#CFCFCF'>

                              <td>Id</td>
                                    <td>$idd</td>
                              </tr>
							  
							    <tr style='background-color:#E7E7E7'>
                              <td>CriminalIDno</td>
                                    <td>$criminalIDno</td>
                              </tr>
							  
							  
							  
							  
                              <tr style='background-color:#CFCFCF'>
                              <td>Name</td>
                                    <td>$name</td>
                              </tr>
							  
                              <tr style='background-color:#E7E7E7'>
                              <td>Nickname</td>
                                    <td>$nickname</td>
                              </tr>
                              <tr style='background-color:#CFCFCF'>
                              <td>Sex</td>
                                    <td>$sex</td>
                              </tr>
                              <tr style='background-color:#CFCFCF'>
                              <td>Age</td>
                                    <td>$age</td>
                              </tr>
                              <tr style='background-color:#E7E7E7'>
                              <td>Occupation</td>
                                    <td>$occupation</td>
                              </tr>
                              <tr style='background-color:#E7E7E7'>
                              <td>Crimetype</td>
                                    <td>$crimetype</td>
                              </tr>
                              <tr style='background-color:#E7E7E7'>
                              <td>Address</td>
                                <td>$address</td>
                              </tr>
							  
							  <tr style='background-color:#E7E7E7'>
                              <td>Mostwanted</td>
                                    <td>$mostwanted</td>
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