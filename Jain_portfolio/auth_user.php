<?php  
$connection = mysqli_connect('localhost', 'kashishj_Admin', 'Kashu33@','kashishj_portfolio') or die("Connect failure: %s\n".$connection->error);
if (isset($_POST['user']) and isset($_POST['password'])){
	
// Assigning POST values to variables.
$username = $_POST['user'];
$password = $_POST['password'];

// CHECK FOR THE RECORD FROM TABLE
$query = "SELECT * FROM `check_in` WHERE User_name='$username' and Password='$password'";
 
$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
$count = mysqli_num_rows($result);

if ($count == 1){

//echo "Login Credentials verified";
header('Location: about.html');
exit;
echo "<script type='text/javascript'>alert('Login Credentials verified')</script>";

}else{
	header('Location: login.html');
	exit;
echo "<script type='text/javascript'>alert('Invalid Login Credentials')</script>";
//echo "Invalid Login Credentials";
}
}
?>