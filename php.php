//form 0
<?php
	$server = "localhost";
	$username = "root";
	$password = "";

	$con = new mysqli($server , $username, $password);

	if(!con){
		die("connection to this database failed due to " . mtsqli_connect_error());
	}
	@$FullName = $_POST['FullName'];
	@$Phonenumber = $_POST['Phonenumber'];
	@$EmailId = $_POST['EmailId'];
	@$id = $_POST['id'];
	@$Jobdescription = $_POST['Jobdescription'];
	@$Minimumskillrequired = $_POST['Minimumskillrequired'];
	@$City = $_POST['City'];
	@$Area = $_POST['Area'];

	$sql = "INSERT INTO `nasa`.`provider` (`code`,`Full name` , `Phone number` , `Email id` ,`NID/Passport ID/Trade license` , `Job description` , `Minimum skill required`,`City`,`Area` ) VALUES ('0','$FullName','$Phonenumber' , '$EmailId' ,'$id' , '$Jobdescription' , '$Minimumskillrequired','$City','$Area' );";
	//echo $sql;

	if($con->query($sql) == true){
		echo "Successful";
	}
	else{
		echo "Error: $sql <br> $con->error";
	}

	$con->close();
?>



//form 1
<?php
	$server = "localhost";
	$username = "root";
	$password = "";

	$con = new mysqli($server , $username, $password);

	if(!con){
		die("connection to this database failed due to " . mtsqli_connect_error());
	}
	@$FullName = $_POST['FullName'];
	@$Phonenumber = $_POST['Phonenumber'];
	@$EmailId = $_POST['EmailId'];
	@$id = $_POST['id'];
	@$City = $_POST['City'];
	@$Area = $_POST['Area'];
	@$Jobcode= $_['Jobcode'];

	$sql = "INSERT INTO `nasa`.`apply` (`Full name` , `Phone number` , `Email id` ,`NID/Passport Id` , `City`,`Area`,`Job code` ) VALUES ($FullName','$Phonenumber' , '$EmailId','$id' ,'$City','$Area','$Jobcode' );";
	//echo $sql;

	if($con->query($sql) == true){
		echo "Successful";
	}
	else{
		echo "Error: $sql <br> $con->error";
	}

	$con->close();
?>
