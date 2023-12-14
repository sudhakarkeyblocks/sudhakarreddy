<?php

$errors = [];
$errorMessage = '';

if (!empty($_POST)) {
   $name = $_POST['name'];
   $email = $_POST['email'];
   $phonenumber = $_POST['phonenumber'];
   $jobtype = $_POST['jobtype'];
   $polltype = $_POST['polltype'];
   $message = $_POST['message'];

   if (empty($name)) {
       $errors[] = 'Name is empty';
   }

   if (empty($email)) {
       $errors[] = 'Email is empty';
   } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
       $errors[] = 'Email is invalid';
   }

   if (empty($message)) {
       $errors[] = 'Message is empty';
   }

   if (empty($errors)) {
       $toEmail = 'ektajhatricolour@gmail.com,contact@tricolour.co.in';
       $emailSubject = 'New email - feedback Page';
       $headers = ['From' => $email, 'Reply-To' => $email, 'Content-type' => 'text/html; charset=utf-8'];
       $bodyParagraphs = ["Name: {$name}","<br/>", "Email: {$email}","<br/>", "phonenumber: {$phonenumber}","<br/>", "I am a: {$jobtype}","<br/>",  "I am: {$polltype}","<br/>", "Feedback: {$message}" ];
       $body = join(PHP_EOL, $bodyParagraphs);

       if (mail($toEmail, $emailSubject, $body, $headers)) {
        //    header('Location: thank-you.html');
		echo "<script type='text/javascript'>alert('Thank you for contacting us. We will get back to you soon.');</script>";
       } else {
        //    $errorMessage = 'Oops, something went wrong. Please try again later';
		echo "<script type='text/javascript'>alert('Please try again');</script>";
       }

   } else {

       $allErrors = join('<br/>', $errors);
       $errorMessage = "<p style='color: red;'>{$allErrors}</p>";
   }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Feedback - Tricolour properties</title>
	<meta name="description" content="Feedback Form Your complaint/feedback is appreciated and will remain confidential with us. We ensure to make personalised solutions for a better experience" />
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
</head>
<style>
	.top-bar{
		margin-top: 100px;
	}
	.single-project-section{
		padding-top: 0px !important;
		padding-bottom: 0px !important;
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
					<h2 class="text-center">Feedback</h2>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="single-project-section">

	<div class="container">
		<div class="single-project-content">
			<div class="row">
				<!-- <div class="col-md-12 bg-container " style="padding-right: 0px;">
					<div>
						<h1>
							Feedback </h1>
						
					</div>

				</div> -->
				<div class="col-md-6" style="margin-bottom: 0px; margin-top: 80px;">
					<img src="images/7.jpg" class="feedback-image"/>

				</div>
				<div class="col-md-6 ">
				
					<div class="contact-form-box" style="margin-bottom: 0px; ">
				
			
						<form method="post" id="contact-form">
							<h4>Quick Contact</h4>
					<p>We give you multiple reasons on why one should own a property at Tricolour.</p>

								<p>
									   <input name="name" type="text" placeholder="Name" required />
								 </p>
								 <p>
									   <input  placeholder="Email Id" name="email" type="email" required />
								 </p>
								 <p>
									<input  placeholder="Phone Numbmer" name="phonenumber" type="tel" required />
								 </p>
								 <p style="padding-left: 12px;">I am *</p>
								<p>
									<select name="jobtype" class="select-options" required>
										
										<option value="customer ">Customer</option>
										<option value="marketing agent">Marketing agent</option>
										<option value="employee">Employee</option>
										<option value="other">Other</option>
									</select>
								</p>
								<p style="padding-left: 12px;">
									How satisfied are you with our operations? *
								</p>
								<p>
									<select name="polltype" class="select-options" required >
											
											<option>Not Satisfied</option>
											<option>Somewhat Satisfied</option>
											<option>Satisfied</option>
											<option>Very Satisfied</option>
									</select>
								</p>
								<p style="padding-left: 12px;">
									Your feedback help us to improve our services continuously
								</p>
								<p>
									<input placeholder="Give Feedback"  name="message" type="text" required />
								</p>
								<p>
									<button type="submit" name="submit" id="submit" > Submit </button>
								</p>
									
						</form>
					</div>
				</div>	
			</div>
		</div>
	</div>
</section>
<!-- End single-project-section -->


<?php include'mainfooter.php'; ?>
</body>
</html>
