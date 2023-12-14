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
       $toEmail = 'ektajhatricolour@gmail.com,contact@tricolour.co.in';
       $emailSubject = 'Project Leads - Sea Walk';
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
				<img src="images/sea-walk.jpg" width="100%">
			</div>
			<div class="col-md-4 pl-0 formE1" style="background-color: #0A0a0a;">
					<h2 class="pt-3">Sea Walk</h2>
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
					<h2>Buy Now Open Plots at Sea Walk Visakhapatnam – Tricolour Properties</h2>
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
									<a href="assets/Broucher/seawalk_brochure.pdf"
										target="_blank"><i style="color: red;" class="fa fa-download" aria-hidden="true"></i> Download</a> 
								</span>
							</li>
							<li>
								<span class="data-name ">
									Layout
								</span>
								<span class="data-text">
									<a href="assets/Layout/sea-walk-layout.pdf"
										target="_blank"><i style="color: red;" class="fa fa-download" aria-hidden="true"></i> Download</a> 
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
					<p>Presenting a brand new venture by Tricolour Group, located in Visakhapatnam, “Sea Walk” aims to provide splendid plots tailored for the common and middle classes. Situated in the serene East Bhogapuram, this project offers a picturesque plot of land adjacent to the International Airport at Puligeddapalem Beach, making it an ideal location for those seeking an independent house in Visakhapatnam. Spanning 25 acres of land and offering budget-friendly prices, this gated community venture ensures that people from all walks of life have an opportunity to invest in their dream property.</p>

					<p>Tricolour, in collaboration with Highways Ventures, proudly presents “Sea Walk” – a magnificent 25-acre community nestled near NH-16, a significant highway stretching along the eastern coast of India, connecting the Bay of Bengal, Odisha, Andhra Pradesh, and Tamil Nadu. Located in Vishakhapatnam, East Bhogapuram, and in proximity to the International Airport at Puligeddapalem Beach, this project presents an array of splendid plots, perfect for building independent houses, catering to the aspirations of both commoners and middle-class families. With the assurance of a gated community and offering affordability, “Sea Walk” is designed to welcome individuals from diverse backgrounds and lifestyles.</p>

					<p>Choose “Sea Walk” and seize the opportunity to own a piece of this 25-acre development in Vishakhapatnam, East Bhogapuram, near the scenic Puligeddapalem Beach, and secure your dream abode at an accessible price point.</p>

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
								<img src="assets/tricolours_icons/Close to Metro Station.png" class="icons"/>
								<div class="serv-cont">
									<h4>Close to the Metro Station</h4>

								</div>
							</a>
							<a class="services-post7" href="#">
								<img src="assets/tricolours_icons/Club House.png" class="icons"/>
								<div class="serv-cont">
									<h4>Club House</h4>

								</div>
							</a>
						</div>
						<div class="col-lg-4">
							<a class="services-post7" href="#">
								<img src="assets/tricolours_icons/Compound wall for the entire layout.png" class="icons"/>

								<div class="serv-cont">
									<h4>Compound wall for the entire layout</h4>

								</div>
							</a>
							<a class="services-post7" href="#">
								<img src="assets/tricolours_icons/Drinking water at our premises.png" class="icons"/>

								<div class="serv-cont">
									<h4>Drinking water at our premises</h4>

								</div>
							</a>
						</div>
						<div class="col-lg-4">
							<a class="services-post7" href="#">
								<img src="assets/tricolours_icons/Fire safety.png" class="icons"/>

								<div class="serv-cont">
									<h4>Fire safety</h4>

								</div>
							</a>
							<a class="services-post7" href="#">
								<img src="assets/tricolours_icons/gated community.png" class="icons"/>

								<div class="serv-cont">
									<h4>Gated community</h4>

								</div>
							</a>

						</div>
						<div class="col-lg-4 " >
							<a class="services-post7" href="#">
								<img src="assets/tricolours_icons/GYM.png" class="icons"/>

								<div class="serv-cont">
									<h4>GYM</h4>

								</div>
							</a>
							
						</div>
						<div class="col-lg-4 " >
							<a class="services-post7" href="#">
								<img src="assets/tricolours_icons/Indoor games.png" class="icons"/>

								<div class="serv-cont">
									<h4>Indoor games</h4>

								</div>
							</a>
							
						</div>
						<div class="col-lg-4 " >
							<a class="services-post7" href="#">
								<img src="assets/tricolours_icons/Solar fencing.png" class="icons"/>

								<div class="serv-cont">
									<h4>Solar fencing</h4>

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
									style="color: #fe1706;"></i></span> 50 Meters from Kolkata - Chennai Beach Corridor Road </li>
						<li style="font-weight: 400"><span
								style="margin-right: 10px;font-weight: 400"><i
									class="fa-solid fa-circle-arrow-right"
									style="color: #fe1706;"></i></span> 0.5 Km from Beach
						</li>
						<li style="font-weight: 400"><span
								style="margin-right: 10px;font-weight: 400"><i
									class="fa-solid fa-circle-arrow-right"
									style="color: #fe1706;"></i></span> 5 Km from NH-16 (Six - Lines) and 8 km from Proposed Bhogapuram INTL Airport</li>
						<li style="font-weight: 400"><span
										style="margin-right: 10px;font-weight: 400"><i
											class="fa-solid fa-circle-arrow-right"
											style="color: #fe1706;"></i></span> 8 Km from Nathavalasa Tollgate and 18 Km from Vizianagaram RTC Complex & Railway Station </li>
						
						<li style="font-weight: 400"><span
								style="margin-right: 10px;font-weight: 400"><i
									class="fa-solid fa-circle-arrow-right"
									style="color: #fe1706;"></i></span> 35 Km from Visakhapatnam RK Beach</li>
						<li style="font-weight: 400"><span
								style="margin-right: 10px;font-weight: 400"><i
									class="fa-solid fa-circle-arrow-right"
									style="color: #fe1706;"></i></span> 20 Km from Tagarapuvasala and 10 Km from Miracle Software Companies</li>
						<li style="font-weight: 400;"><span
								style="font-weight: 400; margin-right: 10px; "><i
									class="fa-solid fa-circle-arrow-right"
									style="color: #fe1706;"></i></span> 20 Km from ANITS Engg, Medical & Other </li>
						<li style="font-weight: 400;"><span
										style="font-weight: 400; margin-right: 10px; "><i
											class="fa-solid fa-circle-arrow-right"
											style="color: #fe1706;"></i></span> 20 Km from Pharma City (Pydibheemavaram) </li>
						<li style="font-weight: 400;"><span
										style="font-weight: 400; margin-right: 10px; "><i
											class="fa-solid fa-circle-arrow-right" Near to Software companies
											style="color: #fe1706;"></i></span> 25 Km from Rushikonda Beach, Gitam University is close to many private Townships </li>
						<li style="font-weight: 400;"><span
										style="font-weight: 400; margin-right: 10px; "><i
											class="fa-solid fa-circle-arrow-right"
											style="color: #fe1706;"></i></span> 20 Km from Pharma City (Pydibheemavaram) </li>
						</ol>

				</div>
			</div>
			 <div class="col-md-8">
				<iframe src="https://www.google.com/maps/embed?pb=!1m13!1m8!1m3!1d7595.473476850638!2d83.357639!3d17.850972!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMTfCsDUxJzAzLjUiTiA4M8KwMjEnMjcuNSJF!5e0!3m2!1sen!2sin!4v1695641929071!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			</div> 

			<div class="col-md-12" style="margin-top: 50px;">
				<h2>Gallery</h2>
				<ul class="gallery-list">
					<li>
						<a href="images/sea-walk-1.jpg" class="zoom">
							<img src="images/sea-walk-1.jpg" alt="gallery1">
						</a>
					</li>
					<li>
						<a href="images/sea-walk-2.jpg" class="zoom">
							<img src="images/sea-walk-2.jpg" alt="gallery2">
						</a>
					</li>
					<li>
						<a href="images/sea-walk-3.jpg" class="zoom">
							<img src="images/sea-walk-3.jpg" alt="gallery3">
						</a>
					</li>
					<li>
						<a href="images/sea-walk-4.jpg" class="zoom">
							<img src="images/sea-walk-4.jpg" alt="gallery4">
						</a>
					</li>

				</ul>

			</div>

		</div>
	</div>
</section>
<!-- End single-project-section -->


<?php include'mainfooter.php'; ?>
</body>
</html>
