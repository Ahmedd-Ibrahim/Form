<?php
// ==============================================================

if ($_SERVER['REQUEST_METHOD'] == 'POST') {


	$user  =   filter_var($_POST['username'],FILTER_SANITIZE_STRING);
	$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
	$phone =  filter_var($_POST['phone'], FILTER_SANITIZE_NUMBER_INT);
	$msg   =  filter_var($_POST['message'], FILTER_SANITIZE_STRING);
	$errors = array();



if (strlen($user) < 3) {

 $errors[] = 'Your Username Must Be lrger Than 3 character';
	# code...
}

$headers = 'from: '. $email . '\r\n'; 

$myEmail = '0ahmedibrahem@gmail.com';

$subject = 'contact Form';

if (strlen($msg) < 3) {

 $errors[] = 'Your message Must Be lrger Than 3 character';
	# code...
}

if (empty($errors)){

	mail($myEmail, $subject, $msg, $headers);
}

}
?>


<!DOCTYPE html>
<html lang="en">
	<head>
			<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Login Form</title>
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link rel="stylesheet" href="css/styles.css">
		<link href="https://fonts.googleapis.com/css?family=Raleway:400,700,900,900i" rel="stylesheet">


	</head>
<body>

<!-- simple form -->
<div class="container">
	<h2 class="text-center">Contact Me</h2>
	<div class="erorrs">
		<?php
		if(! empty($errors)){
	foreach ($errors as $error) { ?>

		<div class="alert alert-warning alert-dismissible" role="alert">

	<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	<strong>Warning!</strong>
		<?php
		# code...
		echo $error . "<br />";
	}

}


 ?>
</div>
	</div>


	<form class="my-form" action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
		<input class="form-control username"
		 type="text" name="username"
		 value="<?php if(isset($errors)){if(isset($user)){echo $user;}} ?>"
		  placeholder="Type Your username">
		<i class="fa fa-user fa-fw" aria-hidden="true"></i>
		<div class="alert alert-warning custom-alert">
			username Must Be longer then 3 chracter
		</div>
		<input class="email form-control"
		type="email" name="email"
		placeholder="please type your vaild email">
		<i class="fa fa-envelope-open fa-fw" aria-hidden="true"></i>
		<div class="alert alert-warning custom-alert-email">
			This is wrong email
		</div>
		<input class="phone  form-control"
		type="text" name="phone"
		placeholder="type your number phone">
		<i class="fa fa-phone fa-fw" aria-hidden="true"></i>
		<div class="alert alert-warning custom-alert-phone">
			This is wrong phone
		</div>
		<textarea class="form-control" placeholder="Write Your Message" name="message"></textarea>
		<input class="btn btn-primary btn-block" type="submit" name="buttun" value="Send Your message">
		<i class="fa fa-paper-plane plane" aria-hidden="true"></i>

	</form>
</div>


<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/script.js"></script>
</body>
</html>