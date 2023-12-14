<?php

$errors = [];
$errorMessage = '';

if (!empty($_POST)) {
   $name = $_POST['name'];
   $email = $_POST['email'];
   $phonenumber = $_POST['phonenumber'];
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
       $emailSubject = 'Project Leads - Valentine Key';
       $headers = ['From' => $email, 'Reply-To' => $email, 'Content-type' => 'text/html; charset=utf-8'];
       $bodyParagraphs = ["Name: {$name}","<br/>", "Email: {$email}","<br/>", "phonenumber: {$phonenumber}","<br/>", "Location: {$message}" ];
       $body = join(PHP_EOL, $bodyParagraphs);

       if (mail($toEmail, $emailSubject, $body, $headers)) {

         //   header('Location: thank-you.html');
         echo "<script type='text/javascript'>alert('Thank you for contacting us. We will get back to you soon.');</script>";
       } else {
         //   $errorMessage = 'Oops, something went wrong. Please try again later';
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
	<title>Discover Open Plots in Darbhanga. Your Path to Prime Real Estate - Tricolour Properties</title>
	<meta name="description" content="Explore a range of open plots in Darbhanga with Tricolour Real Estate. Build your dream home on these prime properties in a thriving location. Secure your future today!"/>
	<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
</head>
<body>
<?php include'mainheader.php'; ?>

<!-- single-project-section 
================================================== -->
<section class="single-project-section">

	<div class="container-full">
		<div class="row">
			<div class="row" style="margin-bottom: 50px; margin-top: 60px;">
				<div class="col-md-8 " style="padding-right: 0px;">
					<img src="images/valentine-key-banner.jpg" width="100%"
						height="500px" />
				</div>
				<div class="col-md-4 pl-0 formE1" style="background-color: #0A0a0a;">
					<h2>
						Valentine Key</h2>
					<div class="form-heading">
						<p>Plots</p>
						<p><span><i class="fa-solid fa-location-dot"
									style="color: #f21a02;"></i></span> Darbhanga</p>
					</div>
					<h3>ENQUIRE NOW</h3>

					<form class="form" method="post">

						<input type="text" name="name"  placeholder="  Name" required />

						<input type="email" name="email"  placeholder="  Email" required />

						<input type="text" name="phonenumber"  placeholder="  Phone Number" required />

						<input type="text" name="message"  placeholder="  Location" required />
						<br><br>

						<button type="submit" name="submit" id="submit" class="btn1">Submit</button>

					</form>


				</div>

			</div>

		</div>

	</div>




	<div class="container">
		<div class="single-project-content">
			<div class="row">
				
				<div class="col-md-12">
					<div class="project-content">
						<h2>Tricolour Properties – Open Plots in Valentine Key, Darbhanga
						</h2>
						<ul class="project-data-list">
							<li>
								<span class="data-name ">
									Location
								</span>
								<span class="data-text ">
									Darbhanga
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
									<a href="assets/Broucher/Valentine-Key-Brochure.pdf"
										target="_blank"><i style="color: red;" class="fa fa-download" aria-hidden="true"></i> Download</a>
								</span>
							</li>
							<li>
								<span class="data-name">
									Layout
								</span>
								<span class="data-text">
									<!-- <a href="">--</a> --><span> -- </span>
								</span>
							</li>
						</ul>

					</div>
				</div>
				<!-- <div class="col-md-6">
					<div class="section-image">
						<div class="feature-image">
							<img src="images/s-b-1.jpeg" alt="project-img">
						</div>
					</div>
				</div> -->
				<div class="col-md-12">
					<p>Allow us to introduce Valentine Key, our most suitable residential plotting project! Nestled in the heart of Sonki, Darbhanga, Valentine Key offers a ready-to-construct gated residential community that awaits your dream home. Situated on SH-56, which connects Darbhanga to Saharsha in Bihar, this prime location provides seamless transportation access and a plethora of essential facilities for a convenient lifestyle.</p>

					<p>At Valentine Key, each plot is thoughtfully designed to embrace ample natural light and generous space, ensuring a delightful living experience. Residents enjoy a wide array of amenities, enhancing their comfort and convenience.</p>

						<p>The project boasts proximity to resorts and markets, adding to the charm of the neighborhood. For those who rely on public transport, Valentine Key’s strategic location offers easy access to the bus bay, railway station, and airport, making commuting hassle-free and efficient. With a high-frequency public transport system within walking distance, getting around the city becomes a breeze. Moreover, a dedicated 24/7 concierge service is available to cater to your needs and further elevate your living experience.</p>

					<p>Don’t let this opportunity slip away to reside in one of the most sought-after locations in the city. Embrace the charm and convenience of Valentine Key, where your dream home can become a reality. Make the move and unlock the possibilities of a blissful and fulfilling life in this captivating residential community.</p>

				</div>
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
								<img src="assets/tricolours_icons/road.png" class="icons"/>
								<div class="serv-cont">
									<h4>“40” feet and 30″ feet Road with Footpath</h4>

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
								<img src="assets/tricolours_icons/Avenue Plantation with fencing.png" class="icons"/>

								<div class="serv-cont">
									<h4>Avenue Plantation with fencing</h4>

								</div>
							</a>
							<a class="services-post7" href="#">
								<img src="assets/tricolours_icons/road.png" class="icons"/>

								<div class="serv-cont">
									<h4>Curving stones on the roadside</h4>

								</div>
							</a>
						</div>
						<div class="col-lg-4">
							<a class="services-post7" href="#">
								<img src="assets/tricolours_icons/Electricity system.png" class="icons"/>

								<div class="serv-cont">
									<h4>Electricity with poles</h4>

								</div>
							</a>
							<a class="services-post7" href="#">
								<img src="assets/tricolours_icons/Grand entrance arch.png" class="icons"/>

								<div class="serv-cont">
									<h4>Grand Entrance</h4>

								</div>
							</a>

						</div>
						<div class="col-lg-4 " >
							<a class="services-post7" href="#">
								<img src="assets/tricolours_icons/Jogging track.png" class="icons"/>

								<div class="serv-cont">
									<h4>Jogging track</h4>

								</div>
							</a>
							
						</div>
						<div class="col-lg-4 " >
							<a class="services-post7" href="#">
								<img src="assets/tricolours_icons/Security Posts.png" class="icons"/>

								<div class="serv-cont">
									<h4>Round-the-clock security</h4>

								</div>
							</a>
							
						</div>
						<div class="col-lg-4 " >
							<a class="services-post7" href="#">
								<img src="assets/tricolours_icons/Wire fencing for the entire project.png" class="icons"/>

								<div class="serv-cont">
									<h4>Wire fencing for the entire project</h4>

								</div>
							</a>
							
						</div>

					</div>
				</div>
			</div>

		</section>

	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<div class="project-content">
					<h2 style="color: red;">Location Highlights</h2>
					<ol style="color : white ; list-style: none; line-height: 31px;">
						<li style="font-weight: 400"><span
								style="margin-right: 10px;font-weight: 400"><i
									class="fa-solid fa-circle-arrow-right"
									style="color: #fe1706;"></i></span> Near to Sonki Market  </li>
						<li style="font-weight: 400"><span
								style="margin-right: 10px;font-weight: 400"><i
									class="fa-solid fa-circle-arrow-right"
									style="color: #fe1706;"></i></span> Near to Dalaan Resort
						</li>
						<li style="font-weight: 400"><span
								style="margin-right: 10px;font-weight: 400"><i
									class="fa-solid fa-circle-arrow-right"
									style="color: #fe1706;"></i></span> Fast growing area</li>
						<li style="font-weight: 400"><span
										style="margin-right: 10px;font-weight: 400"><i
											class="fa-solid fa-circle-arrow-right"
											style="color: #fe1706;"></i></span> Nearby Hotel, Restaurant and Markets</li>
						
						<li style="font-weight: 400"><span
								style="margin-right: 10px;font-weight: 400"><i
									class="fa-solid fa-circle-arrow-right"
									style="color: #fe1706;"></i></span> 1.5 km away from upcoming Darbhanga </li>
						<li style="font-weight: 400"><span
								style="margin-right: 10px;font-weight: 400"><i
									class="fa-solid fa-circle-arrow-right"
									style="color: #fe1706;"></i></span> Amas Green Fields Expressway</li>
						<li style="font-weight: 400;"><span
								style="font-weight: 400; margin-right: 10px; "><i
									class="fa-solid fa-circle-arrow-right"
									style="color: #fe1706;"></i></span> Close to growing colonies</li>
						<li style="font-weight: 400;"><span
										style="font-weight: 400; margin-right: 10px; "><i
											class="fa-solid fa-circle-arrow-right"
											style="color: #fe1706;"></i></span> 24x7 public transport connectivity</li>
						<li style="font-weight: 400"><span
								style="margin-right: 10px;font-weight: 400"><i
									class="fa-solid fa-circle-arrow-right"
									style="color: #fe1706;"></i></span> Located under Darbhanga planning area</li>
						<li style="font-weight: 400"><span
								style="margin-right: 10px;font-weight: 400"><i
									class="fa-solid fa-circle-arrow-right"
									style="color: #fe1706;"></i></span> Easy access to Rail, Air and Road transport </li>
						<li style="font-weight: 400"><span
								style="margin-right: 10px;font-weight: 400"><i
									class="fa-solid fa-circle-arrow-right"
									style="color: #fe1706;"></i></span> Rapidly growing area </li>
						</ol>
				</div>
			</div>
			 <!-- <div class="col-md-8">
				<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7160.631134529786!2d85.98257!3d26.186411!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39edc9af68c57c27%3A0xe184821a4e92d3b0!2sSummer%20Brook%20(A%20project%20by%20Tricolour%20Properties)!5e0!3m2!1sen!2sin!4v1695616872251!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			</div> -->

			<!-- <div class="col-md-12" style="margin-top: 50px;">
				<h2>Gallery</h2>
				<ul class="gallery-list">
					<li>
						<a href="images/s-b-1.jpeg" class="zoom">
							<img src="images/s-b-1.jpeg" alt="gallery1">
						</a>
					</li>
					<li>
						<a href="images/s-b-2.jpeg" class="zoom">
							<img src="images/s-b-2.jpeg" alt="gallery2">
						</a>
					</li>
					<li>
						<a href="images/s-b-3.jpeg" class="zoom">
							<img src="images/s-b-3.jpeg" alt="gallery3">
						</a>
					</li>
					<li>
						<a href="images/s-b-1.jpeg" class="zoom">
							<img src="images/s-b-1.jpeg" alt="gallery4">
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
