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

		<div class="header">


            <img src="image/in.png" height="120px" width="1350px">



		</div>

		<div class="content">
			<div class="menu">
				<table class="table">
					<tr>
                                    <td><a href="add.php">Add User</a></td>
                                    <td><a href="delete.php">Delete User</a></td>
					      
						<td><a href="search.php">Search</a></td>
						<td><a href="report.php">Report<a></td>
						<td><a href="logout.php">Logout</a></td>
                        
                        
						

					</tr>
				</table>
            </div><hr>
            <div class="area1">
            <center><u>Welcome Adminstrator</u></center><br>
            	
            	<divclass="registry">
            		




            	</div>
                
            	
            


            
        </div>

		<div class="footer">
<center>Nepal Police Academy</center>
		</div>



	</div>
</body>
</html>