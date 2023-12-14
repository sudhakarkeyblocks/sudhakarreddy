<?php
$postData = $uploadedFile = $statusMsg = '';
$msgClass = 'errordiv';

if(isset($_POST['submit'])){
	// Get the submitted form data
	$postData = $_POST;
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phonenumber = $_POST['phonenumber'];
	$designation = $_POST['designation'];
	$skills = $_POST['skills'];
	$message = $_POST['message'];

	// Check whether submitted data is not empty
	if(!empty($email) && !empty($name) && !empty($phonenumber) && !empty($designation) && !empty($skills) && !empty($message)){
	// Validate email
	if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
	$statusMsg = 'Please enter your valid email.';
	}else{
	$uploadStatus = 1;
	// Upload attachment file
	if(!empty($_FILES["resume"]["name"])){
	// File path config
	$targetDir = "uploads/";
	$fileName = basename($_FILES["resume"]["name"]);
	$targetFilePath = $targetDir . $fileName;
	$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
	// Allow certain file formats
	$allowTypes = array('pdf', 'doc', 'docx');
	if(in_array($fileType, $allowTypes)){
	// Upload file to the server
	if(move_uploaded_file($_FILES["resume"]["tmp_name"], $targetFilePath)){
	$uploadedFile = $targetFilePath;
	}else{
	$uploadStatus = 0;
	$statusMsg = "Sorry, there was an error uploading your file.";
	}
	}else{
	$uploadStatus = 0;
	$statusMsg = 'Sorry, only PDF, DOC files are allowed to upload.';
	}
	}
	if($uploadStatus == 1){
	// Recipient
	$toEmail = 'prahithgv.keyblocksstrategy@gmail.com';
	// Sender
	$from = 'venkataprahith@gmail.com';
	$fromName = 'Career Form';
	// Subject
	$emailSubject = 'Career Form Submitted by '.$name;
	// Message
	$htmlContent = '
	
	//Contact Request Submitted
	Name: '.$name.'
	Email: '.$email.'
	Designation: '.$designation.'
	Skills: '.skills.'
	Message: '.$message.'
	';
	// Header for sender info
	$headers = "From: $fromName"." <".$from.">";
	if(!empty($uploadedFile) && file_exists($uploadedFile)){
	// Boundary
	$semi_rand = md5(time());
	$mime_boundary = "==Multipart_Boundary_x{$semi_rand}x";
	// Headers for attachment
	$headers .= "\nMIME-Version: 1.0\n" . "Content-Type: multipart/mixed;\n" . " boundary=\"{$mime_boundary}\"";
	// Multipart boundary
	$message = "--{$mime_boundary}\n" . "Content-Type: text/html; charset=\"UTF-8\"\n" .
	"Content-Transfer-Encoding: 7bit\n\n" . $htmlContent . "\n\n";
	// Preparing attachment
	if(is_file($uploadedFile)){
	$message .= "--{$mime_boundary}\n";
	$fp = @fopen($uploadedFile,"rb");
	$data = @fread($fp,filesize($uploadedFile));
	@fclose($fp);
	$data = chunk_split(base64_encode($data));
	$message .= "Content-Type: application/octet-stream; name=\"".basename($uploadedFile)."\"\n" .
	"Content-Description: ".basename($uploadedFile)."\n" .
	"Content-Disposition: attachment;\n" . " filename=\"".basename($uploadedFile)."\"; size=".filesize($uploadedFile).";\n" .
	"Content-Transfer-Encoding: base64\n\n" . $data . "\n\n";
	}
	$message .= "--{$mime_boundary}--";
	$returnpath = "-f" . $email;
	// Send email
	$mail = mail($toEmail, $emailSubject, $message, $headers, $returnpath);
	// Delete attachment file from the server
	@unlink($uploadedFile);
	}else{
	// Set content-type header for sending HTML email
	$headers .= "\r\n". "MIME-Version: 1.0";
	$headers .= "\r\n". "Content-type:text/html;charset=UTF-8";
	// Send email
	$mail = mail($toEmail, $emailSubject, $htmlContent, $headers);
	}
	// If mail sent
	if($mail){
	$statusMsg = 'Your contact request has been submitted successfully !';
	$msgClass = 'succdiv';
	$postData = '';
	}else{
	$statusMsg = 'Your contact request submission failed, please try again.';
	}
	}
	}
	}else{
	$statusMsg = 'Please fill all the fields.';
	}
	}
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
			
		
					<form method="post" id="contact-form" enctype="multipart/form-data">
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
									 <input name="resume"  type="file" accept=".doc,.pdf,.docx" placeholder="Resume" style="background-color: #000;" required >
								 </p>
						
								 <p>
									   <button type="submit" name="submit" id="submit" > Submit </button>
								 </p>

															
					</form>
				
				
		
		</div>
				
			
					
				
			</div>
			

		</div>

	</div>
</section>
<!-- End single-project-section -->


<?php include'mainfooter.php'; ?>
</body>
</html>
