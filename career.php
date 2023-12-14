 

<?php

// $errors = [];
// $errorMessage = '';

// if (!empty($_POST)) {
//    $name = $_POST['name'];
//    $email = $_POST['email'];
//    $phonenumber = $_POST['phonenumber'];
//    $designation = $_POST['designation'];
//    $skills = $_POST['skills'];
//    $resume = $_POST['resume'];
//    $message = $_POST['message'];
   

//    if (empty($name)) {
//        $errors[] = 'Name is empty';
//    }

//    if (empty($email)) {
//        $errors[] = 'Email is empty';
//    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
//        $errors[] = 'Email is invalid';
//    }

//    if (empty($message)) {
//        $errors[] = 'Message is empty';
//    }

//    if (empty($designation)) {
// 	$errors[] = 'Designation is empty';
// 	}

// 	if (empty($skills)) {
// 		$errors[] = 'skills is empty';
// 	}

//    if (empty($errors)) {
//        $toEmail = 'ektajhatricolour@gmail.com';
//        $emailSubject = 'New Email - Career Page';
//        $headers = ['From' => $email, 'Reply-To' => $email, 'Content-type' => 'text/html; charset=utf-8'];
//        $bodyParagraphs = ["Name: {$name}","<br/>", "Email: {$email}","<br/>", "Phonenumber: {$phonenumber}","<br/>", "Designation: {$designation}","<br/>", "Skills: {$skills}","<br/>","Resume: {$resume}","<br/>", "Message: {$message}"];
//        $body = join(PHP_EOL, $bodyParagraphs);

//        if (mail($toEmail, $emailSubject, $body, $headers)) {
//         //    header('Location: thank-you.html');
// 		echo "<script type='text/javascript'>alert('Thank you for contacting us. We will get back to you soon.');</script>";
//        } else {
//         //    $errorMessage = 'Oops, something went wrong. Please try again later';
// 		echo "<script type='text/javascript'>alert('Please try again');</script>";
//        }

//    } else {

//        $allErrors = join('<br/>', $errors);
//        $errorMessage = "<p style='color: red;'>{$allErrors}</p>";
//    }
// }

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Tricolour Properties - Careers</title>
	<meta name="description" content="“Tricolour” always keeps stretching their hands in building a beautiful career for interested young ones. Join us to carve yourself" />
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
</head>
<style>
	.top-bar{
		margin-top: 100px;
	}
	@media(max-width: 480px){
		.top-bar{
		margin-top: 0px;
	}
	.contact-form-box{
		overflow-x: hidden !important;
	}
	.carrer-img{
		width: 100% !important;
	}
	}
</style>
<body>
<?php include'mainheader.php'; ?>

<!-- single-project-section 
================================================== -->

<section class="main-banner">
	<div class="">
		<div class="top-bar">
			<div class="col-md-12 bg-container">
				<div>
					<h2 class="text-center">Careers</h2>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="single-project-section" style="padding-top: 100px;">

	<div class="container">
		<div class="single-project-conten">
			<div class="row">
				<!-- <div class="col-md-12 bg-container " style="padding-right: 0px;">
					<div>
						<h1>
							Careers </h1>
					</div>

				</div> -->

				
			<div class="col-md-6" style="display: flex;flex-direction: column;justify-content: center;">
				<img src="images/6.jpg" class="carrer-img"/>
				
				
				<h2>Tricolour Properties - Careers</h2>
				
				<p>We constantly strive hard to improve perfection standards to enhance the return on the investment made by you. We follow Industry’s best policies and provide best amenities and facilities to the customer. We continuously upgrade ourselves by innovation to match the changes in the realty sector.
				</p>
				<p>Every project at Tricolour is a result of careful research and analysis, and our understanding of the current trends and our customer’s desires has fuelled our passion for innovation. There are many reasons for one to own a property at Tricolour.</p>
				
			</div>
			<div class="col-md-6 ">
				
				<div class="contact-form-box" style="padding-top: 0px; margin-top: 30px;">
			
		
					<form method="post" id="contact-form" action="mail.php" enctype="multipart/form-data">
						<h4>Quick Contact</h4>
						<p>We give you multiple reasons on why one should own a property at Tricolour.</p>

								<p>
									   <input name="name" type="text" placeholder="Name" required />
								 </p>
								
								 <p>
									   <input  placeholder="Email Id" name="email" type="email" required />
								 </p>
								 <p>
									<input  placeholder="Phone Number" name="phonenumber" type="tel" required />
								 </p>
								 <p>
									<input  placeholder="Designation" name="designation" type="text" required />
								 </p>
								 <p>
									<input  placeholder="Skills" name="skills" type="text" required />
								 </p>
								 <p>
									<input  placeholder="Message" name="message" type="text" required />
								 </p>
								 <p>
									 <input type="file" name="file"> <br>
									 <!-- <span>
										Note: <br>
										1. Upload your File to your Drive, click share <br>
										2. Copy pdf Link and paste above.
									 </span> -->
								 </p>
						
								 <p>
									   <button type="submit" name="submit" id="submit" > Submit </button>
								 </p>
								 
								 
					</form>
<!-- 					 <form action="mail.php" method="post" enctype="multipart/form-data">
    <input type="text" name="name" placeholder="Name"> <br>
    <input type="text" name="email" placeholder="email"> <br>
    <input type="text" name="message" placeholder="Message"> <br>
    <input type="file" name="file"> <br>
    <input type="submit" value="Submit">
</form> -->

		</div>
							
			</div>
			

		</div>

	</div>
</section>
<!-- End single-project-section -->


<?php include'mainfooter.php'; ?>
</body>
</html>
