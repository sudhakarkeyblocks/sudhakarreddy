<?php
$errors = [];
$errorMessage = '';

if (!empty($_POST)) {
   $name = $_POST['p_name'];
   $email = $_POST['p_email'];
   $phonenumber = $_POST['p_phonenumber'];
   $contacttype = $_POST['p_contacttype'];
   $message = $_POST['p_message'];

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
       $toEmail = 'ektajhatricolour@gmail.com';
       $emailSubject = 'Project Lead - Salt Box';
       $headers = ['From' => $email, 'Reply-To' => $email, 'Content-type' => 'text/html; charset=utf-8'];
       $bodyParagraphs = ["Name: {$name}","<br/>", "Email: {$email}","<br/>", "phonenumber: {$phonenumber}","<br/>", "Location: {$message}" ];
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
	<title>Buy Now Luxury Villas situated at Salt Box Visakhapatnam.</title>
	<meta name="description" content="Buy a beautiful residential open plots for sale at Autumn Exotica Hyderabad. Tricolour properties offers affordable prices on open plots for future investments." />
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
</head>
<style>
	.single-project-section{
		padding-top: 100px !important;
	}
	.main{
		padding-right: 0px !important;
		padding-left: 0px !important;
	}
	.single-project{
		padding-top: 50px;
		padding-left: 30px;
		padding-right: 30px;
	}
	@media(max-width: 480px){
		.single-project-section{
			padding-top: 0px !important;
		}
		.banner{
			overflow-x: hidden !important;
		}
	}
</style>
<body>
<?php include'mainheader.php'; ?>

<!-- single-project-section 
================================================== -->
<section class="single-project-section">
	<div class="banner">
		<div class="row">
			<div class="main col-lg-8">
				<img src="images/Salt-Box.jpeg" width="100%">
			</div>
			<div class="col-md-4 pl-0 formE1" style="background-color: #0A0a0a;">
					<h2 class="pt-3">Salt Box</h2>
					<div class="form-heading">
						<p>Villas</p>
						<p><span><i class="fa-solid fa-location-dot"
									style="color: #f21a02;"></i></span> Visakhapatnam</p>
					</div>
					<h3>ENQUIRE NOW</h3>
					<form class="form" method="post">

						<input type="text" name="p_name"  placeholder="  Name" required />

						<input type="email" name="p_email"  placeholder="  Email" required />

						<input type="text" name="p_phonenumber"  placeholder="  Phone Number" required />

						<input type="text" name="p_message"  placeholder="  Location" required />
						<br><br>

						<button type="submit" name="submit" id="submit" class="btn1">Submit</button>
						
					</form>
				</div>
		</div>
	</div>
	<div class="single-project">
			<div class="row">
				
				<div class="col-md-12">
					<div class="project-content">
					<h2>Triplex villas for sale at Salt Box Visakhapatnam</h2>
						<ul class="project-data-list">
							<li>
								<span class="data-name ">
									Location
								</span>
								<span class="data-text ">
									Visakhapatnam
								</span>
							</li>
							<li>
								<span class="data-name ">
									Category
								</span>
								<span class="data-text">
									Plots
								</span>
							</li>
							<li>
								<span class="data-name">
									Brouchure
								</span>
								<span class="data-text">
									<!-- <a href="assets/Broucher/Saffron-Rise.pdf"
										target="_blank">Download</a> --> --
								</span>
							</li>
							<li>
								<span class="data-name ">
									Layout
								</span>
								<span class="data-text">
									<!-- <a href="assets/Layout/open-plots-shadnagar-kamasanpally-layout.pdf"
										target="_blank">Download</a> --> --
								</span>
							</li>
						</ul>

					</div>
				</div>
				<!-- <div class="col-md-6">
					<div class="section-image">
						<div class="feature-image">
							<img src="images/autumn-gallery-six.jpg" alt="project-img">
						</div>
					</div>
				</div> -->
				<div class="col-md-12">
				<p>Welcome to “Salt Box,” nestled in the vibrant city of Vishakhapatnam. Our dedicated team is wholeheartedly committed to providing meticulously planned Triplex Villas, furnished complete with essential facilities such as hospitals, schools, and media centers. This commitment strengthens the bonds within the community, fostering a sense of belonging.</p>

					<p>Tricolour Properties proudly presents an extraordinary investment opportunity in this renowned Andhra Pradesh city, overlooking the bay. With resolute determination, we set and achieve ambitious goals, as exemplified by our project director at Vizag Ventures. Upholding values like rigorous legal scrutiny, self-driven progress, timely project delivery, and unwavering dedication to customer contentment.</p>

						<p>Our vision is to have individual villas in Vizag, providing comfort and convenience to the citizens of Visakhapatnam, with upcoming ventures planned in key cities of Andhra Pradesh. The property boasts an array of amenities, including a versatile function hall, state-of-the-art gym, inviting swimming pool, tennis court, cricket net practice pitch, a serene walking track, verdant avenue plantations, and a secure encompassing compound wall that defines the layout.</p>

						<p>Come be a part of the Salt Box experience, and seize this unparalleled chance to contribute to exceptional development in the thriving city of Visakhapatnam, Andhra Pradesh.</p>

				</div>
			</div>
			<section class="services-section7">

			<div class="container">
				<div class="title-box">

					<h2 style="color: red;">Project Highlights</h2>
				</div>
				<div class="services-box7">
					<div class="row">
						<div class="col-lg-4">
							<a class="services-post7" href="#">
								<img src="assets/tricolours_icons/24hr-security.png" class="icons"/>
								<div class="serv-cont">
									<h4>24×7 security</h4>

								</div>
							</a>
							<a class="services-post7" href="#">
								<img src="assets/tricolours_icons/GYM.png" class="icons"/>
								<div class="serv-cont">
									<h4>GYM</h4>

								</div>
							</a>
						</div>
						<div class="col-lg-4">
							<a class="services-post7" href="#">
								<img src="assets/tricolours_icons/Avenue Plantation.png" class="icons"/>

								<div class="serv-cont">
									<h4>Lush Avenue Plantations</h4>

								</div>
							</a>
							<a class="services-post7" href="#">
								<img src="assets/tricolours_icons/Surrounded by a Boundary wall.png" class="icons"/>

								<div class="serv-cont">
									<h4>Secure compound wall</h4>

								</div>
							</a>
						</div>
						<div class="col-lg-4">
							<a class="services-post7" href="#">
								<img src="assets/tricolours_icons/Swimming Pool.png" class="icons"/>

								<div class="serv-cont">
									<h4>Swimming Pool</h4>

								</div>
							</a>
							<a class="services-post7" href="#">
								<img src="assets/tricolours_icons/Jogging track.png" class="icons"/>

								<div class="serv-cont">
									<h4>Walking track</h4>

								</div>
							</a>

						</div>
						<div class="col-lg-4 " >
							<a class="services-post7" href="#">
								<img src="assets/tricolours_icons/Water Pipeline.png" class="icons"/>

								<div class="serv-cont">
									<h4>Water facilities</h4>

								</div>
							</a>
							
						</div>
						<div class="col-lg-4 " >
							<a class="services-post7" href="#">
								<img src="assets/tricolours_icons/Swimming Pool.png" class="icons"/>

								<div class="serv-cont">
									<h4>Swimming Pool</h4>

								</div>
							</a>
							
						</div>
						<div class="col-lg-4 " >
							<a class="services-post7" href="#">
								<img src="assets/tricolours_icons/Water Pipeline.png" class="icons"/>

								<div class="serv-cont">
									<h4>Water Pipeline</h4>

								</div>
							</a>
							
						</div>

					</div>
				</div>
			</div>

		</section>
		<div class="container">
		<div class="row">
			<div class="col-md-4">
				<div class="project-content">
					<h2 style="color: red;">Location Highlights</h2>
					<ol style="color : white ; list-style: none; line-height: 31px;">
						<li style="font-weight: 400"><span
								style="margin-right: 10px;font-weight: 400"><i
									class="fa-solid fa-circle-arrow-right"
									style="color: #fe1706;"></i></span> Fastest Growing area </li>
						<li style="font-weight: 400"><span
								style="margin-right: 10px;font-weight: 400"><i
									class="fa-solid fa-circle-arrow-right"
									style="color: #fe1706;"></i></span> ½ km from the airport approach road
						</li>
						<li style="font-weight: 400"><span
								style="margin-right: 10px;font-weight: 400"><i
									class="fa-solid fa-circle-arrow-right"
									style="color: #fe1706;"></i></span> Beside river “Champavathi”</li>
						<li style="font-weight: 400"><span
										style="margin-right: 10px;font-weight: 400"><i
											class="fa-solid fa-circle-arrow-right"
											style="color: #fe1706;"></i></span> Located in a prime place </li>
						
						<li style="font-weight: 400"><span
								style="margin-right: 10px;font-weight: 400"><i
									class="fa-solid fa-circle-arrow-right"
									style="color: #fe1706;"></i></span> 5 km from the  international airport</li>
						<li style="font-weight: 400"><span
								style="margin-right: 10px;font-weight: 400"><i
									class="fa-solid fa-circle-arrow-right"
									style="color: #fe1706;"></i></span> Very nearer to medical colleges</li>
						<li style="font-weight: 400;"><span
								style="font-weight: 400; margin-right: 10px; "><i
									class="fa-solid fa-circle-arrow-right"
									style="color: #fe1706;"></i></span> 15kms from industrial parks </li>
						<li style="font-weight: 400;"><span
										style="font-weight: 400; margin-right: 10px; "><i
											class="fa-solid fa-circle-arrow-right"
											style="color: #fe1706;"></i></span> 5km from the coastal beach</li>
						<li style="font-weight: 400"><span
								style="margin-right: 10px;font-weight: 400"><i
									class="fa-solid fa-circle-arrow-right"
									style="color: #fe1706;"></i></span> 8km from Vizianagaram Ring road</li> 
									<li style="font-weight: 400"><span
										style="margin-right: 10px;font-weight: 400"><i
											class="fa-solid fa-circle-arrow-right"
											style="color: #fe1706;"></i></span> 100mts from Nathavalasa tollgate</li>
						
						</ol>

				</div>
			</div>
			 <!-- <div class="col-md-8">
				<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d30341.142663663217!2d83.477371!3d18.088082!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a3bfb62df0310b9%3A0x63c4017b660c3e2e!2sPleasure%20bay!5e0!3m2!1sen!2sin!4v1695617915874!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			</div> -->

			<!-- <div class="col-md-12" style="margin-top: 50px;">
				<h2>Gallery</h2>
				<ul class="gallery-list">
					<li>
						<a href="images/coral-bay-2.jpg" class="zoom">
							<img src="images/coral-bay-2.jpg" alt="gallery1">
						</a>
					</li>
					<li>
						<a href="images/coral-bay-3.jpg" class="zoom">
							<img src="images/coral-bay-3.jpg" alt="gallery2">
						</a>
					</li>
					<li>
						<a href="images/coral-bay-4.jpg" class="zoom">
							<img src="images/coral-bay-4.jpg" alt="gallery3">
						</a>
					</li>
					<li>
						<a href="images/coral-bay-5.jpg" class="zoom">
							<img src="images/coral-bay-5.jpg" alt="gallery4">
						</a>
					</li>

				</ul>

			</div> -->

		</div>
	</div>
</section>
<!-- End single-project-section -->


<?php include'mainfooter.php'; ?>
</body>
</html>
