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
                                   
                                    <td><a href="search.php">Search</a></td>
                                    <td><a href="report.php">Report</a></td>
                                    <td><a href="logout.php">Logout</a></td>
                                   

                              </tr>
                        </table>
            </div><hr>
            <div class="area1">
            <center><u>Most Wanted Report</u>
            <table  >
                  <?php
                   include '../connect.php';
                   $idd=$_GET['id'];
                    $query=mysql_query("SELECT * FROM `prisoner` WHERE  `name`='$idd'");
                   $query_run=mysql_fetch_array($query);
                    $photo1=$query_run['image'];
                    
                    echo"<tr><td><img src='../upload/".$photo1."' id='tb'></td></tr>";


                  ?>
                 

             </table>
             <table class="t">
                  <?php
                        include '../connect.php';
                   $idd=$_GET['id'];
                   $query=mysql_query("SELECT * FROM `prisoner` WHERE  `name`='$idd'");
                   $query_run=mysql_fetch_array($query);
                   $id=$query_run['id'];
				   $prisonerIDno=$query_run['prisonerIDno'];
                   $name=$query_run['name'];
				   $nickname=$query_run['nickname'];
				   $crimetype=$query_run['crimetype'];
				   $address=$query_run['address'];
                   $age=$query_run['age'];
                   $height=$query_run['height'];
                   $weight=$query_run['weight'];
                   $color=$query_run['color'];
                   $time=$query_run['time'];
				   $date=$query_run['date'];
                   $identimark=$query_run['identimark'];
                            
                              echo "<tr style='background-color:#CFCFCF'>
                                         <td>Id</td>
                                         <td>$id</td>
                                    </tr>
									  <tr style='background-color:#E7E7E7'>
                                         <td>PrisonerID No</td>
                                         <td>$prisonerIDno</td>
										 </tr>
										 
                                    <tr style='background-color:#CFCFCF'>
                                         <td>Full Name</td>
                                         <td>$name</td>
										 </tr>
										 
								    <tr style='background-color:#CFCFCF'>
                                         <td>Nick Name</td>
                                         <td>$nickname</td>
										 </tr>
										 
									  <tr style='background-color:#E7E7E7'>
                                         <td>Crime Type</td>
                                         <td>$crimetype</td>
										 </tr>
									
									  <tr style='background-color:#CFCFCF'>
                                         <td>Address</td>
                                         <td>$address</td>
										 </tr>
										   
                                    <tr style='background-color:#CFCFCF'>
                                          <td>Age</td>
                                          <td>$age</td>
                                   </tr>
                                   
                                   <tr style='background-color:#E7E7E7'>
                                          <td>Height</td>
                                          <td>$height</td>
                                   </tr>
                                   <tr style='background-color:#E7E7E7'>
                                           <td>Weight</td>
                                          <td>$weight</td>
                                  </tr>
								  
								    <tr style='background-color:#E7E7E7'>
                                         <td>Time</td>
                                         <td>$time</td>
										 </tr>
										 
								  <tr style='background-color:#E7E7E7'>
                                         <td>Date</td>
                                         <td>$date</td>
										 </tr>
								  
                                  <tr style='background-color:#E7E7E7'>
                                          <td>Identimark</td>
                                          <td>$identimark</td>
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