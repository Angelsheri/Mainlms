<?php
require('dbconn.php');
?>
<?php



include 'private/validity1.php';



?>
<!DOCTYPE html>
<html>

<!-- Head -->
<head>

	<title>Library Management </title>

	<!-- Meta-Tags -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="keywords" content="Library Member Login Form Widget Responsive, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design" />
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!-- //Meta-Tags -->

	<!-- Style --> <link rel="stylesheet" href="addition/styles.css" type="text/css" media="all">

	<!-- Fonts -->
		<link href="//fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
	<!-- //Fonts -->

</head>
<!-- //Head -->

<!-- Body -->
<body>

	<h1>LIBRARY MANAGEMENT </h1>

	<div class="container">

	
		<form action="index.php" method="post">
		<div class="login">
			<h2>Sign In</h2>
				<input type="text" Name="RollNo" placeholder="ID number" required="">
				<input type="password" Name="Password" placeholder="Password" required="">
			
			
			<div class="send-button">
				<!--<form>-->
					<input type="submit" name="signin" value="Sign In">
			
			</div>

			<div class="do">
				<!-- do you want to create an Account <br> -->
				<!-- <a href="index1.php">Sign Up</a>Here -->
			</div>
			</form>
			<div class="clear"></div>
		</div>

		
	

	<div class="footer w3layouts agileits">
		<p> &copy; Batch 2k21 "Group B" Final Year Project LMS </a></p>
		
	</div>

<?php
if(isset($_POST['signin']))
{$u=$_POST['RollNo'];
 $p=$_POST['Password'];
 $c=$_POST['Category'];

 $sql="select * from LMS.user where RollNo='$u'";

 $result = $conn->query($sql);
$row = $result->fetch_assoc();
$x=$row['Password'];
$y=$row['Type'];
if(strcasecmp($x,$p)==0 && !empty($u) && !empty($p))
  {//echo "Login Successful";
   $_SESSION['RollNo']=$u;
   
if ($y == 'Admin') {
	echo header("Location:admin/index.php");

}elseif($y=='librarian'){
echo header("Location:librarian/index.php");

}elseif ($y=='Student') {
	echo header("Location:student/index.php");

}else{
	echo header('Location:staff/index.php');
}
//   if($y=='Admin')
//   echo header("Location:admin/index.php");
// elseif ($y == 'librarian') {
// echo header("Location:librarian/index.php");

// }if ($y =='student') {
// 	echo header("Location:student/index.php");
// }
//   elseif (condition) {
//   	 echo	header("Location:staff/index.php");
//   }
 
        
  }
else 
 { echo "<script type='text/javascript'>alert('Failed to Login! Incorrect IDNo or Password')</script>";
}
   

}


?>

</body>
<!-- //Body -->

</html>
<?php 
// }
// else {
//     echo "<script type='text/javascript'>alert('System Expired')</script>";
// } 


?>