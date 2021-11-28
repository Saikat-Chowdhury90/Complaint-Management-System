<!DOCTYPE html>
<html>

<head>
	<title>Insert Page page</title>
</head>

<body>
	<center>
        <?php include('include/config.php') ?>
		<?php

		// servername => localhost
		// username => root
		// password => empty
		// database name => staff
		    
		
		// Check connection
		if($bd === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
		$first_name = $_REQUEST['name'];
		$state = $_REQUEST['state'];
        $country=$_REQUEST['country'];
        $pin = $_REQUEST['pin'];
		$address = $_REQUEST['address'];
		$email = $_REQUEST['email'];
        $password=$_REQUEST['password'];
		$department=$_REQUEST['department'];
        $phone_number=$_REQUEST['number'];
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO `workers` (`fullName`, `userEmail`, `password`, `contactNo`, `address`, `State`, `country`, `pincode`, `regDate`, `status`, `categoryName`) VALUES ('$first_name', '$email', '$password', '$phone_number', '$address', '$state', '$country', '$pin', current_timestamp(), '1', '$department');";
		
		if(mysqli_query($bd, $sql)){
			echo "<h3>data stored in a database successfully."
				. " Please browse your localhost php my admin"
				. " to view the updated data</h3>";

			echo nl2br("\n$first_name\n "
				. " $address\n $email");
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($bd);
		}
		
		
		?>
	</center>
</body>

</html>
