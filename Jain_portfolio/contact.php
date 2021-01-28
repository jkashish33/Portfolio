<?php
	$connection = mysqli_connect('localhost', 'kashishj_Admin', 'Kashu33@','kashishj_portfolio') or die("Connect failure: %s\n".$connection->error);
	
	$user = $_POST['name'];
	$mail = $_POST['email'];
	$phone = $_POST['phone'];
	$msg = $_POST['message'];
	
	$query = "INSERT INTO contact_me (C_Name, C_email, C_mobile, C_message) VALUES ('$user', '$mail', '$phone', '$msg')";
	if($connection){
		if (mysqli_query($connection, $query)) {
			echo '<script>alert("Message sent successfully!!");
			window.location.href='contact.html';</script>'; 
			//echo "New record created successfully";
		} else {
			header('Location: contact.html');
			exit;
			//echo "Error: " . $sql . "<br>" . mysqli_error($connection);
		}
	} else{
		echo"Not inserted. Failure";
	}
?>