<?php include 'header.html';?>
<div id="content">
<table>
<tr>
<td>
<img src="images/principal.jpg" height="200" width="200"/>
</td>
<td rowspan="2"><b><i>
Nagalapuram bounded by nature’s beauty on all sides, is a village situated at the heart of Vilathikulam Taluk in Thoothukudi district.
 This village boasts of strong historical connections. 
 Brave men of this soil, numerous faceless freedom fighters laid down their lives for the cause for Indian Independence. 
 Umarupulavar – the popular writer of Seerapuranam is the son of this soil and Robert Caldwell, the stayed here in the 18th 
 century to research about Dravidian Language. Father of Tamil drama Baskaradas was born in this black soil. 
 Kingmaker and former Tamil Nadu Chief Minister Kamaraj introduced mid-day meals among children in order to wipe out poverty and 
 improve education of the villagers. After continued efforts of the villagers to accomplish their dream for higher education, the 
 Government of Tamil Nadu sanctioned orders for a Government College to be set up in the village.
</b></i>
</td>
</tr>
<tr>
<td><b><center>Principal<br>Dr.Santha Kumari</center></b>
</td>
</tr>
</div>
 </div>
  </div>
  </body>
  </html>
<?php



$conn=mysqli_connect("localhost","root","","college") or die("cannot connect");


?>
<?php include 'header.html';?>
<div id="section">
The Principal<br>
Manonmaniam Sundaranar University Constituent Model College<br>
Nagalapuram<br>
Tuticorin - 628904 <br>
Vilathikulam Tk <br>
Office No : 9087654321  <br>
Email id : msunivnagalapuram@gmail.com  <br>
</div>
 </div>
  </div>
  </body>
  </html>
<?php

$d=$_POST['id'];
$conn=mysqli_connect("localhost","root","","college") or die("cannot connect");
if(mysqli_connect_errno())
{
echo"connection error";
}
else
{
$sql="delete from department where did=$d";
if($conn->query($sql))
{
$msg="Deleted Successfully";
header("Location:depart.php?message=$msg");
}
else
{
echo "error";
}
}
$conn->close();
?>
<html>
<head>
<title>College Website</title>
<meta charset="UTF-8" />
<link rel="stylesheet" type="text/css" href="styles/style.css" />
<!--[if IE 6]><link rel="stylesheet" type="text/css" href="styles/ie6.css" /><![endif]-->
</head>
<body>
<div id="page">
  <div id="header">
    <div id="section">
            <div><a href="index.html"><img src="images/logo.jpg" height="200" width="1000"  /></a></div>
      <span> <br />
      <br />
     </span> </div>
<div align="right">
      
    <ul>  
      <li ><a href="depart.php">INSERT</a></li>	
      <li ><a href="update.php">UPDATE</a></li>
	  <li class="current"><a href="delete.php">DELETE</a></li>
	  <li ><a href="view.php">VIEW</a></li>
	  <li><a href="logout.php">LOGOUT</a></li>
     
    </ul>
  </div>
  <div id="body">
  <form action="delet.php" method="post" >
  <table border="0" cellpadding="10" cellspacing="1" width="500" align="center">
<tr class="tableheader">
<td align="center" colspan="2"><b><font size="5" color="#0033FF">Administrator Login - DELETE</td>
</tr>
<tr class="tablerow">
<td align="right"><b><font size="5"color="#3399FF">Department</td>
<td> 
<select name='id' >
<?php
 $conn=mysqli_connect("localhost","root","","college") or die("cannot connect");
 $r=mysqli_query($conn,"select * from department");
while($row=mysqli_fetch_array($r))
{
	echo "<option value=".$row['did'].">".$row['did']."-".$row['dname']."</option>";
}
?>
 </select> </td>
</tr>
<tr class="tableheader">
<td align="center" colspan="2"><input type="submit" name="delete" value="DELETE"></td>
</tr>

</tr>

</table>
  
  </div>
  </div>
  </div>
  </form>
  </body>
  </html>
<html>
<head>
<title>College Website</title>
<meta charset="UTF-8" />
<link rel="stylesheet" type="text/css" href="styles/style.css" />
<!--[if IE 6]><link rel="stylesheet" type="text/css" href="styles/ie6.css" /><![endif]-->
</head>
<body>
<div id="page">
  <div id="header">
    <div id="section">
            <div><a href="index.html"><img src="images/logo.jpg" height="200" width="1000"  /></a></div>
      <span> <br />
      <br />
     </span> </div>
<div align="right">
      
    <ul>  
      <li class="current"><a href="depart.php">INSERT</a></li>	
      <li ><a href="update.php">UPDATE</a></li>
	  <li ><a href="delete.php">DELETE</a></li>
	  <li ><a href="view.php">VIEW</a></li>
	  <li><a href="logout.php">LOGOUT</a></li>
     
    </ul>
  </div>
  <div id="body">
  <form action="insert.php" method="post" >
  <table border="0" cellpadding="10" cellspacing="1" width="500" align="center">
<tr class="tableheader">
<td align="center" colspan="2"><b><font size="5" color="#0033FF">Administrator Login</td>
</tr>
 
<tr class="tablerow">
<td align="right"><b><font size="5"color="#3399FF">Department Name</td>
<td><input type="text" name="dname" required autocomplete="off"></td>
</tr>
<tr class="tablerow">
<td align="right"><b><font size="5"color="#3399FF">Head of the Department</td>
<td><input type="text" name="hod" required autocomplete="off"></td>
</tr>
<tr class="tablerow">
<td align="right"><b><font size="5"color="#3399FF">No of Staffs</td>
<td><input type="text" name="no_staff" required autocomplete="off"></td>
</tr>
<tr class="tablerow">
<td align="right"><b><font size="5"color="#3399FF">No of Students</td>
<td><input type="text" name="no_stud" required autocomplete="off"></td>
</tr>
<tr class="tableheader">
<td align="center" colspan="2"><input type="submit" name="insert" value="INSERT"></td>
</tr>
</table>
  
  </div>
  </div>
  </div>
  </form>
  </body>
  </html>
<?php include 'header.html';?>
  <div id="content">
    <div>
      <h3>DEPARTMENT DETAILS</h3>
      
        
<?php

$conn=mysqli_connect("localhost","root","","college");
if(!$conn)
{
die("connection not established,mysql__error()");
}
else{
	
	$query="select* from department";
	$result = mysqli_query($conn, $query);

	if (mysqli_num_rows($result) > 0) {
	    // output data of each row
	    echo "<table border='1' cellpadding='10'>";
		echo "<tr>  <th>DID</th> <th> DEPARTMENT NAME</th> <th>HEAD OF THE DEPARTMENT</th><th> NO OF STAFF</th> <th> NO OF STUDENT</th> </tr>";
	    while($row = mysqli_fetch_assoc($result)) {
	        //echo "id: " . $row["id"]. " - Name: " . $row["did"]. " " . $row["dname"]. "<br>";
	        echo "<tr>";
		
			echo '<td>' . $row['did'] . '</td>';
			echo '<td>' . $row['dname'] . '</td>';
			echo '<td>' . $row['dhod'] . '</td>';
			echo '<td>' . $row['no_staff'] . '</td>';
			echo '<td>' . $row['no_stud'] . '</td>';
			
			echo "</tr>";
	    }
	} else {
	    echo "0 results";
	}

}
//mysql_selectdb("department",$conn);

//$results=mysql_num_rows($result);



mysqli_close($conn);
?>








      </div>
      <div>
       
      
  
        
    </div>
  </div>
</div>
</body>
</html>

<?php

$dn=$_POST['dname'];
$hname=$_POST['hod'];
$nstaff=$_POST['no_staff'];
$nstud=$_POST['no_stud'];

$conn=mysqli_connect("localhost","root","","college") or die("cannot connect");
if(mysqli_connect_errno())
{
echo"connection error";
}
else
{
$sql="insert into department(dname,dhod,no_staff,no_stud)values ('$dn','$hname','$nstaff','$nstud')";
if($conn->query($sql))
{
echo "Record inserted";
header("Location:depart.php");
}
else
{
echo "error";
}
}
$conn->close();
?>
  <html>
<head>
	<title>Administrator Login</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<?php
include 'header.html';
?>
		<div id="content">
			<br><br>
			<div class="kati">
				<?php
				require("connect.php");
				?>
				<form action="login.php" method="post">
				<table align="center">
		// <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
				<table border="0" cellpadding="10" cellspacing="1" width="500" align="center">
<tr class="tableheader">
<td align="center" colspan="2"><b><font size="5" color="#0033FF">Administrator Login</td>
</tr>
			<tr>
					
						<td>
							<?php
							
				if (isset($_POST['login'])) {
					if (!$_POST['name']) {
						echo "<h4 style='color:#FF4300;' class='alert'>Please enter your name</h4>";
					}
					elseif (!$_POST['password']) {
						echo "<h4 style='color:#FF4300;' class='alert'>Please enter password</h4>";
					}
					else
					{
						session_start();
						$_SESSION['name']=$_POST['name'];
						$name=$_POST['name'];
						$password=$_POST['password'];
						$result=mysqli_query($conn,"SELECT * FROM user WHERE username='$name' AND password='$password'");
						if ($row=mysqli_fetch_array($result)) {
							header('Location:depart.php');
						}
						else
						{
							echo "<h4 style='color:#FF4300;' class='alert' >Wrong name or password</h4>";
							
						}
					}
				}
				?>
						</td>
						</tr>
<tr class="tablerow">
<td align="right"><b><font size="5" color="#3399FF">Username</td>
<td><input type="text" name="name" required autocomplete="off"></td>
</tr>
<tr class="tablerow">
<td align="right"><b><font size="5"color="#3399FF">Password</td>
<td><input type="password" name="password" required autocomplete="off"></td>
</tr>
<tr class="tableheader">
<td align="center" colspan="2"><input type="submit" name="login" value="Login"></td>
</tr>
</table>
				</form>
				
			</div>
		</div>
	</div>

</body>
</html>
<?php
session_start();

unset($_SESSION["name"]);
header("Location:index.html");
?>
<?php
$d=$_POST['id'];
 $h=$_POST['hod'];
 $np=$_POST['no_staff'];
  $ns=$_POST['no_stud'];

$con=mysqli_connect('localhost','root','',"college");

if (mysqli_connect_errno())  //check connection is establish or not
	{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	else{
		if(isset($_POST['edithod']))
		{
			$query="Update department set dhod='$h' where did=$d";
		
		$result=mysqli_query($con,$query);
		
			if($result)
			{
									
				 header("Location: depart.php");
			}
			else
			{
				
				$msg="Failure to update .Please try again ";
				 header("Location: depart.php?message=$msg");
			}	
		}
      if(isset($_POST['editstaff']))
		{
			$query="Update department set no_staff=$np where did=$d";
		
		$result=mysqli_query($con,$query);
		
			if($result)
			{
									
				 header("Location: depart.php");
			}
			else
			{
				
				$msg="Failure to update ..Please try again ";
				 header("Location: depart.php?message=$msg");
			}	
		}	
       if(isset($_POST['editstud']))
		{
			$query="Update department set no_stud=$ns where did=$d";
		
		$result=mysqli_query($con,$query);
		
			if($result)
			{
									
				 header("Location: depart.php");
			}
			else
			{
				
				$msg="Failure to update ..Please try again ";
				 header("Location: depart.php?message=$msg");
			}	
		}			
	}

mysql_close($conn);
?>

<html>
<head>
<title>College Website</title>
<meta charset="UTF-8" />
<link rel="stylesheet" type="text/css" href="styles/style.css" />
<!--[if IE 6]><link rel="stylesheet" type="text/css" href="styles/ie6.css" /><![endif]-->
</head>
<body>
<div id="page">
  <div id="header">
    <div id="section">
            <div><a href="index.html"><img src="images/logo.jpg" height="200" width="1000"  /></a></div>
      <span> <br />
      <br />
     </span> </div>
<div align="right">
      
    <ul>  
      <li ><a href="depart.php">INSERT</a></li>	
      <li class="current"><a href="update.php">UPDATE</a></li>
	  <li ><a href="delete.php">DELETE</a></li>
	  <li ><a href="view.php">VIEW</a></li>
	  <li><a href="logout.php">LOGOUT</a></li>
     
    </ul>
  </div>
  <div id="body">
  <form action="updat.php" method="post" >
  <table border="0" cellpadding="10" cellspacing="1" width="500" align="center">
<tr class="tableheader">
<td align="center" colspan="2"><b><font size="5" color="#0033FF">Administrator Login - UPDATE</td>
</tr>
<tr class="tablerow">
<td align="right"><b><font size="5"color="#3399FF">Department</td>
<td> 
<select name='id' >
<?php
 $conn=mysqli_connect("localhost","root","","college") or die("cannot connect");
 $r=mysqli_query($conn,"select * from department");
while($row=mysqli_fetch_array($r))
{
	echo "<option value=".$row['did'].">".$row['did']."-".$row['dname']."</option>";
}
?>
 </select> </td>

<tr class="tablerow">
<td align="right"><b><font size="5"color="#3399FF">Head of the Department</td>
<td><input type="text" name="hod" autocomplete="off"></td>
<td><input type="submit" name="edithod" value="Edit"></td>
</tr>
<tr class="tablerow">
<td align="right"><b><font size="5"color="#3399FF">No of Staffs</td>
<td><input type="text" name="no_staff"  autocomplete="off"></td>
<td><input type="submit" name="editstaff" value="Edit"></td>
</tr>
<tr class="tablerow">
<td align="right"><b><font size="5"color="#3399FF">No of Students</td>
<td><input type="text" name="no_stud"  autocomplete="off"></td>
<td><input type="submit" name="editstud" value="Edit"></td>
</tr>

</table>
  
  </div>
  </div>
  </div>
  </form>
  </body>
  </html>
<html>
<head>
<title>College Website</title>
<meta charset="UTF-8" />
<link rel="stylesheet" type="text/css" href="styles/style.css" />
<!--[if IE 6]><link rel="stylesheet" type="text/css" href="styles/ie6.css" /><![endif]-->
</head>
<body>
<div id="page">
  <div id="header">
    <div id="section">
            <div><a href="index.html"><img src="images/logo.jpg" height="200" width="1000"  /></a></div>
      <span> <br />
      <br />
     </span> </div>
<div align="right">
      
    <ul>  
      <li ><a href="depart.php">INSERT</a></li>	
      <li ><a href="update.php">UPDATE</a></li>
	  <li ><a href="delete.php">DELETE</a></li>
	  <li class="current"><a href="view.php">VIEW</a></li>
	  <li><a href="logout.php">LOGOUT</a></li>
     
    </ul>
  </div>
  <div id="body">
  <div id="content">
    <div>
      <h3>DEPARTMENT DETAILS</h3>
      
        
<?php

$conn=mysqli_connect("localhost","root","","college");
if(!$conn)
{
die("connection not established,mysql__error()");
}
else{
	
	$query="select* from department";
	$result = mysqli_query($conn, $query);

	if (mysqli_num_rows($result) > 0) {
	    // output data of each row
	    echo "<table border='1' cellpadding='10'>";
		echo "<tr>  <th>DID</th> <th> DEPARTMENT NAME</th> <th>HEAD OF THE DEPARTMENT</th><th> NO OF STAFF</th> <th> NO OF STUDENT</th> </tr>";
	    while($row = mysqli_fetch_assoc($result)) {
	        //echo "id: " . $row["id"]. " - Name: " . $row["did"]. " " . $row["dname"]. "<br>";
	        echo "<tr>";
		
			echo '<td>' . $row['did'] . '</td>';
			echo '<td>' . $row['dname'] . '</td>';
			echo '<td>' . $row['dhod'] . '</td>';
			echo '<td>' . $row['no_staff'] . '</td>';
			echo '<td>' . $row['no_stud'] . '</td>';
			
			echo "</tr>";
	    }
	} else {
	    echo "0 results";
	}

}
//mysql_selectdb("department",$conn);

//$results=mysql_num_rows($result);



mysqli_close($conn);
?>








      </div>
      <div>
       
      
  
        
    </div>
  </div>
</div>
</body>
</html>
