<?php
$connection = mysqli_connect('localhost', 'kashishj_Admin', 'Kashu33@','kashishj_portfolio') or die("Connect failure: %s\n".$connection->error);
        $fname = $_POST['Fname'];
        $lname = $_POST['Lname'];
        $mail = $_POST['email'];
        $username = $_POST['user'];
        $password = $_POST['password'];
	    $sql = "INSERT INTO check_in (First_name, Last_name, Email, User_name, Password) VALUES ('$fname', '$lname', '$mail', '$username', '$password')"; 
	if($connection){
		//echo "Data inserted";
		/* echo $fname;
		echo $lname;
		echo $mail;
		echo $username;
		echo $password; */
		//echo $sql;
		/* if(mysqli_query($connection, $sql)){
			echo "Data inserted";
		} else{
			echo "Not inserted";
		} */
		if (mysqli_query($connection, $sql)) {
			header('Location: login.html');
			exit;
			//echo "New record created successfully";
		} else {
			header('Location: signup.html');
			exit;
			//echo "Error: " . $sql . "<br>" . mysqli_error($connection);
		}
	} else{
		echo"Not inserted. Failure";
	}
?>