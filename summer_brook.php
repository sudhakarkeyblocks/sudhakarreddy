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
       $emailSubject = 'Project Leads - Summer Brook';
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
	<title>Own a property Near NH-57 Darbhanga, Bihar - Summer Brook</title>
	<meta name="description" content="Own a properrty at Summer brook offered by Tricolour properties located in the heart of Darbhanga Bihar Located close to NH-57 and just 10 minutes drive from the city. Book Now"/>
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
					<img src="images/summer-brook-new-banner.jpg" width="100%"
						height="500px" />

				</div>
				<div class="col-md-4 pl-0 formE1" style="background-color: #0A0a0a;">
					<h2>Summer Brook</h2>
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
						<h2>Open Plots at Summer Brook, Darbhanga – Tricolour Properties
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
									<a href="assets/Broucher/Summer_Brook-brochure.pdf"
										target="_blank"><i style="color: red;" class="fa fa-download" aria-hidden="true"></i> Download</a>
								</span>
							</li>
							<li>
								<span class="data-name ">
									Layout
								</span>
								<span class="data-text">
									<a href="assets/Layout/Summer-Brook-Layout.pdf"
										target="_blank"><i style="color: red;" class="fa fa-download" aria-hidden="true"></i> Download</a>
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
					<p>Introducing Darbhangā – a thriving municipal corporation, home to the historical Darbhanga Raj and the current administrative center of Darbhanga district and Darbhanga Division in Bihar, India. Nestled in the heart of Bihar, Dhrabanga is the fifth largest city in India, and we are excited to present to you a delightful township located just a stone’s throw away from NH-57 and a mere 10-minute drive from the city center. Surrounded by vibrant commercial activity and flourishing residential townships, Dhrabanga is blessed with the beauty of nature and the brilliance of human ingenuity.</p>

					<p>Prepare yourself for an extraordinary opportunity to own property in a location that is yet to be fully appreciated by the world, making it a true gem of an investment. Embrace a future where you can seize life’s simple pleasures, revel in joy, and create a prosperous fortune for yourself. Imagine gifting your family boundless happiness in a place known as Summer of Brook, a sprawling 6 Acre project situated near Darbhanga, close to NH27. </p>

						<p>The project boasts a strategic location near key landmarks such as Shyama Mandir, DBG Rly. Junction, Govt. Ayurvedic College, D.A.V Public School, Kakhaghati Rly. Station, Rameshwar ITI college, B.Ed college, Tata Motors, and the Airport. Summer of Brook has been thoughtfully developed with a range of amenities, including well-constructed all-black-top roads of 40 and 30 feet, an efficient underground drainage system, well-lit street lights, scenic avenue plantations, and a secure wired fence surrounding the layout.</p>

					<p>Don’t miss this golden opportunity to be a part of the promising future of Dhrabanga. Invest in Summer Brook today and let your dreams flourish in this thriving and dynamic city.</p>

					<p>Secure your slice of paradise before the world realizes its true value.</p>

				   

					
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
								<img src="assets/tricolours_icons/24hr-security.png" class="icons"/>
								<div class="serv-cont">
									<h4>24×7 security</h4>

								</div>
							</a>
							<a class="services-post7" href="#">
								<img src="assets/tricolours_icons/road.png" class="icons"/>
								<div class="serv-cont">
									<h4>40” feet and 30″ feet Road with Footpath</h4>

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
								<img src="assets/tricolours_icons/Fully developed play areas.png" class="icons"/>

								<div class="serv-cont">
									<h4>Fully developed play areas</h4>

								</div>
							</a>
							<a class="services-post7" href="#">
								<img src="assets/tricolours_icons/Jogging track.png" class="icons"/>

								<div class="serv-cont">
									<h4>Jogging track</h4>

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
									<h4>Well Designed Layout as per Vaastu</h4>

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
									style="color: #fe1706;"></i></span> N.H. 57  </li>
						<li style="font-weight: 400"><span
								style="margin-right: 10px;font-weight: 400"><i
									class="fa-solid fa-circle-arrow-right"
									style="color: #fe1706;"></i></span> Shyama Mandir
						</li>
						<li style="font-weight: 400"><span
								style="margin-right: 10px;font-weight: 400"><i
									class="fa-solid fa-circle-arrow-right"
									style="color: #fe1706;"></i></span> DBG Rly. Junction</li>
						<li style="font-weight: 400"><span
										style="margin-right: 10px;font-weight: 400"><i
											class="fa-solid fa-circle-arrow-right"
											style="color: #fe1706;"></i></span> Govt. Ayurvedic college</li>
						
						<li style="font-weight: 400"><span
								style="margin-right: 10px;font-weight: 400"><i
									class="fa-solid fa-circle-arrow-right"
									style="color: #fe1706;"></i></span> D.A.V Public School</li>
						<li style="font-weight: 400"><span
								style="margin-right: 10px;font-weight: 400"><i
									class="fa-solid fa-circle-arrow-right"
									style="color: #fe1706;"></i></span> B.Ed. College</li>
						<li style="font-weight: 400;"><span
								style="font-weight: 400; margin-right: 10px; "><i
									class="fa-solid fa-circle-arrow-right"
									style="color: #fe1706;"></i></span> Kokarghati Rly. Station </li>
						<li style="font-weight: 400;"><span
										style="font-weight: 400; margin-right: 10px; "><i
											class="fa-solid fa-circle-arrow-right"
											style="color: #fe1706;"></i></span> National Makahana</li>
						<li style="font-weight: 400"><span
								style="margin-right: 10px;font-weight: 400"><i
									class="fa-solid fa-circle-arrow-right"
									style="color: #fe1706;"></i></span> Air force station</li>
						
						</ol>

				</div>
			</div>
			 <div class="col-md-8">
				<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7160.631134529786!2d85.98257!3d26.186411!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39edc9af68c57c27%3A0xe184821a4e92d3b0!2sSummer%20Brook%20(A%20project%20by%20Tricolour%20Properties)!5e0!3m2!1sen!2sin!4v1695616872251!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			</div>

			<div class="col-md-12" style="margin-top: 50px;">
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

			</div>

		</div>
	</div>


</section>
<!-- End single-project-section -->

<?php include'mainfooter.php'; ?>
</body>
</html>
