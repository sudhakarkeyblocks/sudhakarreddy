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
					<h2 class="pt-3">Salt Boxz</h2>
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
					<h2>Triplex villas for sale at Salt Boxz Visakhapatnam</h2>
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
									<a href="assets/Broucher/salt_boxz-brochure.pdf"
									target="_blank"><i style="color: red;" class="fa fa-download" aria-hidden="true"></i> Download</a>
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
				<p>
					Welcome to "Salt Boxz," nestled in the vibrant city of Vishakhapatnam. Our Triplex Villas offer a unique living experience in a gated community near Rishikonda. 
					Tricolour Properties, renowned for its commitment to excellence,presents this extraordinary opportunity with 85 villas,
					 featuring a range of amenities and a focus on community well-being.
				</p>

				<p>
					Our Triplex Villas are part of an earthquake-resistant structure, ensuring a secure living environment. 
					Each villa is equipped with provisions for life, complemented by CCTV surveillance and 24/7 security, 
					emphasizing your safety and peace of mind. The 30-foot road network provides easy access, contributing to the overall convenience of the community.
				</p>

				<p>
					The Club House at Salt Boxz is a hub of recreational activities, featuring a versatile function hall for events, 
					modern gyms, guestrooms, and a refreshing swimming pool. Sports enthusiasts can enjoy facilities such as a tennis court and cricket practice nets.
					 The community also offers an open auditorium and a Ganesh temple, fostering a holistic living experience.
                </p>

				<p>
					Embracing sustainable practices, Salt Boxz incorporates solar power for street lighting, contributing to a greener and eco-friendly environment.
					 The project highlights include a robust water supply system, ensuring a seamless living experience for all residents.

				</p>

				<p>
					Come, be a part of the Salt Boxz experience, and contribute to the exceptional development of Visakhapatnam, Andhra Pradesh.
					 With upcoming ventures planned in key cities of Andhra Pradesh, Tricolour Properties aims to redefine modern living with meticulously planned and well-equipped villas.
                </p>
                <p>
					Seize this unparalleled chance to live in comfort and style at Salt Boxz, where community, security, 
					and convenience come together for an exceptional living experience.
				</p>

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
								<img src="assets/tricolours_icons/24├Ч7 security.png" class="icons"/>
								<div class="serv-cont">
									<h4>24/7 security</h4>

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
								<img src="assets/tricolours_icons/Surveillance.png" class="icons"/>

								<div class="serv-cont">
									<h4>CCTV</h4>

								</div>
							</a>
							<a class="services-post7" href="#">
								<img src="assets/tricolours_icons/exercise.png" class="icons"/>

								<div class="serv-cont">
									<h4>GYM</h4>

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
								<img src="assets/tricolours_icons/sports.png" class="icons"/>

								<div class="serv-cont">
									<h4>Tennis courts and cricket practice nets</h4>

								</div>
							</a>

						</div>
						<div class="col-lg-4 " >
							<a class="services-post7" href="#">
								<img src="assets/tricolours_icons/temple.png" class="icons"/>

								<div class="serv-cont">
									<h4>Ganesh temple</h4>

								</div>
							</a>
							
						</div>
						<div class="col-lg-4 " >
							<a class="services-post7" href="#">
								<img src="assets/tricolours_icons/gated community.png" class="icons"/>

								<div class="serv-cont">
									<h4>85 Triplex Villas in a gated community</h4>

								</div>
							</a>
							
						</div>
						<div class="col-lg-4 " >
							<a class="services-post7" href="#">
								<img src="assets/tricolours_icons/auditorium.png" class="icons"/>

								<div class="serv-cont">
									<h4>Open auditorium</h4>

								</div>
							</a>
							
						</div>
						<div class="col-lg-4 " >
							<a class="services-post7" href="#">
								<img src="assets/tricolours_icons/earthquake.png" class="icons"/>

								<div class="serv-cont">
									<h4>Earthquake-resistant structure with provisions for life</h4>

								</div>
							</a>
							
						</div>
						<div class="col-lg-4 " >
							<a class="services-post7" href="#">
								<img src="assets/tricolours_icons/banquet halls.png" class="icons"/>

								<div class="serv-cont">
									<h4>function hall and guestrooms</h4>

								</div>
							</a>
							
						</div>
						
						<div class="col-lg-4 " >
							<a class="services-post7" href="#">
								<img src="assets/tricolours_icons/streetlights.png" class="icons"/>

								<div class="serv-cont">
									<h4>Solar power for street lighting</h4>

								</div>
							</a>
							
						</div>
						<div class="col-lg-4 " >
							<a class="services-post7" href="#">
								<img src="assets/tricolours_icons/road.png" class="icons"/>

								<div class="serv-cont">
									<h4>30-foot road network for easy accessibility</h4>

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
									style="color: #fe1706;"></i></span> 5 Minutes Drive to Bus Service 
						</li>

						<li style="font-weight: 400"><span
								style="margin-right: 10px;font-weight: 400"><i
									class="fa-solid fa-circle-arrow-right"
									style="color: #fe1706;"></i></span> Residential Layout Nearby
						</li>

						<li style="font-weight: 400"><span
								style="margin-right: 10px;font-weight: 400"><i
									class="fa-solid fa-circle-arrow-right"
									style="color: #fe1706;"></i></span> Near Chennai Kolkata highway
						</li>

						<li style="font-weight: 400"><span
										style="margin-right: 10px;font-weight: 400"><i
											class="fa-solid fa-circle-arrow-right"
											style="color: #fe1706;"></i></span> Near Vizag srikakulam highway 
						</li>
						
						<li style="font-weight: 400"><span
								style="margin-right: 10px;font-weight: 400"><i
									class="fa-solid fa-circle-arrow-right"
									style="color: #fe1706;"></i></span> Located in a prime place
						</li>

						<li style="font-weight: 400"><span
								style="margin-right: 10px;font-weight: 400"><i
									class="fa-solid fa-circle-arrow-right"
									style="color: #fe1706;"></i></span> Near multi-speciality hospitals
						</li>

						<li style="font-weight: 400;"><span
								style="font-weight: 400; margin-right: 10px; "><i
									class="fa-solid fa-circle-arrow-right"
									style="color: #fe1706;"></i></span> Very near medical colleges 
						</li>

						<li style="font-weight: 400;"><span
										style="font-weight: 400; margin-right: 10px; "><i
											class="fa-solid fa-circle-arrow-right"
											style="color: #fe1706;"></i></span> Near Silver Oaks International School
						</li>

						<li style="font-weight: 400"><span
								style="margin-right: 10px;font-weight: 400"><i
									class="fa-solid fa-circle-arrow-right"
									style="color: #fe1706;"></i></span> Near IIM Vishakapat
						</li> 

						<li style="font-weight: 400"><span
								style="margin-right: 10px;font-weight: 400"><i
									class="fa-solid fa-circle-arrow-right"
									style="color: #fe1706;"></i></span> 20 km from the international airport
						</li>
						<li style="font-weight: 400"><span
								style="margin-right: 10px;font-weight: 400"><i
									class="fa-solid fa-circle-arrow-right"
									style="color: #fe1706;"></i></span> 9km from the coastal beach
						</li>
						<li style="font-weight: 400"><span
								style="margin-right: 10px;font-weight: 400"><i
									class="fa-solid fa-circle-arrow-right"
									style="color: #fe1706;"></i></span> Very near to the Vizianagaram Ring Road

						</li>			
						
					</ol>

				</div>
			</div>
			<div class="col-md-12" style="margin-top: 50px;">
				<h2>Gallery</h2>
				<ul class="gallery-list">
					<li>
						<a href="images/salt-box-1.jpg" class="zoom">
							<img src="images/salt-box-1.jpg" alt="gallery1">
						</a>
					</li>
					<li>
						<a href="images/salt-box-2.jpg" class="zoom">
							<img src="images/salt-box-2.jpg" alt="gallery2">
						</a>
					</li>
					<li>
						<a href="images/salt-box-3.jpg" class="zoom">
							<img src="images/salt-box-3.jpg" alt="gallery3">
						</a>
					</li>
					<li>
						<a href="images/salt-box-4.jpg" class="zoom">
							<img src="images/salt-box-4.jpg" alt="gallery4">
						</a>
					</li>

				</ul>

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
