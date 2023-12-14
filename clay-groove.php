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
       $emailSubject = 'Project Lead - Clay Groove';
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
	<title>Residential open plots for sale at Clay groove Bengaluru.</title>
	<meta name="description" content="Buy a beautiful residential open plots for sale in Clay groove Bangalore. Tricolour properties offers affordable prices on open plots for future investments." />
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
				<img src="images/Cally-Groove-New-Banner.jpg" width="100%">
			</div>
			<div class="col-md-4 pl-0 formE1" style="background-color: #0A0a0a;">
					<h2 class="pt-3">Clay Groove</h2>
					<div class="form-heading">
						<p>Plots</p>
						<p><span><i class="fa-solid fa-location-dot"
									style="color: #f21a02;"></i></span> Bangalore</p>
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
					<h2>Residential Open Plots for Sale at Clay Groove Bengaluru.</h2>
						<ul class="project-data-list">
							<li>
								<span class="data-name ">
									Location
								</span>
								<span class="data-text ">
									Bangalore
								</span>
							</li>
							<li>
								<span class="data-name ">
									Category
								</span>
								<span class="data-text">
									Open Plots
								</span>
							</li>
							<li>
								<span class="data-name">
									Brouchure
								</span>
								<span class="data-text">
									<a href="assets/Broucher/clay_groove_brochure.pdf"
										target="_blank"><i style="color: red;" class="fa fa-download" aria-hidden="true"></i> Download</a>
								</span>
							</li>
							<li>
								<span class="data-name ">
									Layout
								</span>
								<span class="data-text">
									<a href="assets/Layout/Clay-Groove.pdf"
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
					<p>Welcome to Clay Groove, premium plots in Chikkaballapur, Bengaluru, nestled near Nandi Hills. Embrace the charming landscape with mountains, ample water sources, and a captivating lake nearby, offering a stunning setting.</p>
					<p>Clay Groove provides premium plots in Chikkaballapur, Bengaluru, adjacent to renowned Nandi Hills. Enjoy the convenience of only a 30-minute drive from Kempegowda International Airport and easy access to the six-lane National Highway. Notably, the proposed Disneyland adds to the promising prospects of this vibrant area.
					Experience the Clay Groove's splendor, where you can build your dream home amidst natural beauty and Nandi Hills' allure. Experience a perfect blend of serenity and accessibility in this sought-after Bengaluru location.</p>

					<!-- <p>Pleasure Bay is strategically located in Denkada, Bhogapuram, Visakhapatnam, a city renowned for its coastline. The project is conveniently situated just 7 km from the proposed International Airport, 7 km from Vizianagaram, and 13 km from the Industrial Park (home to Aurobindo Pharma, Dr. Reddy Labs, etc.), surrounded by various multinational corporations and offering breathtaking hill views.</p>

					<p>The property is developed with a range of amenities, including 40 ft BT roads, underground sewerage lines, beautifully landscaped public spaces and children’s parks, well-lit streets, lush avenue plantations, and a secure compound wall encompassing the entire layout.</p>

					<p>Join us at Pleasure Bay and seize this unique opportunity to be part of an exceptional development in the thriving city of Visakhapatnam, Andhra Pradesh.</p>

					-->

					
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
								<img src="assets/tricolours_icons/road.png" class="icons"/>
								<div class="serv-cont">
									<h4>40ft blacktop road</h4>

								</div>
							</a>
						</div>
						<div class="col-lg-4">
							<a class="services-post7" href="#">
								<img src="assets/tricolours_icons/road.png" class="icons"/>

								<div class="serv-cont">
									<h4>All Black top roads with curving stones on the roadside</h4>

								</div>
							</a>
							<a class="services-post7" href="#">
								<img src="assets/tricolours_icons/Avenue Plantation.png" class="icons"/>

								<div class="serv-cont">
									<h4>Avenue Plantation</h4>

								</div>
							</a>
						</div>
						<div class="col-lg-4">
							<a class="services-post7" href="#">
								<img src="assets/tricolours_icons/Children's Tot-Lot.png" class="icons"/>

								<div class="serv-cont">
									<h4>Children’s park. Neatly developed plots</h4>

								</div>
							</a>
							<a class="services-post7" href="#">
								<img src="assets/tricolours_icons/Electricity system.png" class="icons"/>

								<div class="serv-cont">
									<h4>Electricity with poles</h4>

								</div>
							</a>

						</div>
						<div class="col-lg-4 " >
							<a class="services-post7" href="#">
								<img src="assets/tricolours_icons/Underground drainage.png" class="icons"/>

								<div class="serv-cont">
									<h4>Underground drainage</h4>

								</div>
							</a>
							
						</div>
						<div class="col-lg-4 " >
							<a class="services-post7" href="#">
								<img src="assets/tricolours_icons/Well Designed Layout as per Vaastu.png" class="icons"/>

								<div class="serv-cont">
									<h4>Planned according to 100% Vaastu</h4>

								</div>
							</a>
							
						</div>
						<div class="col-lg-4 " >
							<a class="services-post7" href="#">
								<img src="assets/tricolours_icons/park.png" class="icons"/>

								<div class="serv-cont">
									<h4>Park & Play area</h4>

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
									style="color: #fe1706;"></i></span> Well-designed layout as per Vaastu.  </li>
						<li style="font-weight: 400"><span
								style="margin-right: 10px;font-weight: 400"><i
									class="fa-solid fa-circle-arrow-right"
									style="color: #fe1706;"></i></span> 30 Min drive from  Intl Airport
						</li>
						<li style="font-weight: 400"><span
								style="margin-right: 10px;font-weight: 400"><i
									class="fa-solid fa-circle-arrow-right"
									style="color: #fe1706;"></i></span> A 6way National Highway nearby</li>
						<li style="font-weight: 400"><span
										style="margin-right: 10px;font-weight: 400"><i
											class="fa-solid fa-circle-arrow-right"
											style="color: #fe1706;"></i></span> 35 min drive to the heart of the city</li>
						<li style="font-weight: 400"><span
										style="margin-right: 10px;font-weight: 400"><i
											class="fa-solid fa-circle-arrow-right"
											style="color: #fe1706;"></i></span> Upcoming heart of the city
						<li style="font-weight: 400"><span
								style="margin-right: 10px;font-weight: 400"><i
									class="fa-solid fa-circle-arrow-right"
									style="color: #fe1706;"></i></span> The most suitable place for Villas</li>
									<li style="font-weight: 400"><span
										style="margin-right: 10px;font-weight: 400"><i
											class="fa-solid fa-circle-arrow-right"
											style="color: #fe1706;"></i></span> Disney Land coming up nearby</li>
								<li style="font-weight: 400"><span
												style="margin-right: 10px;font-weight: 400"><i
													class="fa-solid fa-circle-arrow-right"
													style="color: #fe1706;"></i></span> Excellent growth potential in 3-5</li>
								
								<li style="font-weight: 400"><span
										style="margin-right: 10px;font-weight: 400"><i
											class="fa-solid fa-circle-arrow-right"
											style="color: #fe1706;"></i></span>  Nandi Hills is just 15 minutes drive</li>
						
					   
						
						</ol>

				</div>
			</div>
			 <div class="col-md-8">
				<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7764.961687841144!2d77.725604!3d13.320338!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bb1e3c9c3ba8abd%3A0xac5f9812232667af!2sClay%20Groove!5e0!3m2!1sen!2sin!4v1695645201038!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			</div>

			<div class="col-md-12" style="margin-top: 50px;">
				<h2>Gallery</h2>
				<ul class="gallery-list">
					
					<li>
						<a href="images/claygroove-gallery-2.jpg" class="zoom">
							<img src="images/claygroove-gallery-2.jpg" alt="gallery2">
						</a>
					</li>
					<li>
						<a href="images/claygroove-gallery-3.jpg" class="zoom">
							<img src="images/claygroove-gallery-3.jpg" alt="gallery3">
						</a>
					</li>
					<li>
						<a href="images/claygroove-gallery-4.jpg" class="zoom">
							<img src="images/claygroove-gallery-4.jpg" alt="gallery3">
						</a>
					</li>
					<li>
						<a href="images/claygroove-gallery-1.jpg" class="zoom">
							<img src="images/claygroove-gallery-1.jpg" alt="gallery3">
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
