<?php
error_reporting(E_ALL);
session_start();


// initializing variables
$errors = array(); 
// connect to the database
	$db = mysqli_connect('localhost', 'root', '', 'brookeeshcoldb');
	if(!$db){
		array_push($errors, "Connection Error");
	}

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $firstname = mysqli_real_escape_string($db, $_POST['firstname']);
  $lastname = mysqli_real_escape_string($db, $_POST['lastname']);
  $education = mysqli_real_escape_string($db, $_POST['education']);
  $pwd = mysqli_real_escape_string($db, $_POST['pwd']);
  $phoneno = mysqli_real_escape_string($db, $_POST['phoneno']);
  $gender = mysqli_real_escape_string($db, $_POST['gender']);
  $address = mysqli_real_escape_string($db, $_POST['address']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $date = mysqli_real_escape_string($db, $_POST['date']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($lastname)) { array_push($errors, "Last Name is required"); }
  if (empty($firstname)) { array_push($errors, "First Name is required"); }
  if (empty($education)) { array_push($errors, "Education is required"); }
  if (empty($pwd)) { array_push($errors, "Password is required"); }
  if (empty($phoneno)) { array_push($errors, "Phone No is required"); }
  if (empty($gender)) { array_push($errors, "Gender is required"); }
  if (empty($address)) { array_push($errors, "Address is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($date)) { array_push($errors, "Date is required"); }


  
  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM studenttable WHERE email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['email'] === $email) {
      array_push($errors, "Email already exists");
	  //echo "Email exists";
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($pwd);//encrypt the password before saving in the database
	$status = 0;

  	$query = "INSERT INTO studenttable (fname, lname, email, datejoin, phoneno, address, spwd, status) 
  			  VALUES('$firstname', '$lastname', '$email', '$date', '$phoneno', '$address' , '$password', '$status')";
	
	if(mysqli_query($db, $query)){
  	$_SESSION['fullname'] = $firstname . $lastname;
	$_SESSION['email'] = $email;
  	$_SESSION['success'] = "You are now logged in.";
  	header('location: profile.php');
	}else {
		echo "ERROR: Could not able to execute $query. " . mysqli_error($db);
	}
  }
}
// LOGIN USER
if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['email']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($email)) {
  	array_push($errors, "Username is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	$password = md5($password);
  	$query = "SELECT * FROM studenttable WHERE email='$spwd' AND spwd='$password'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['email'] = $email;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: index.php');
  	}else {
  		array_push($errors, "Wrong username/password combination");
  	}
  }
}

?>
?>
