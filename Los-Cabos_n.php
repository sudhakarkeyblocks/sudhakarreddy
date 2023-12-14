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
       $toEmail = 'ektajhatricolour@gmail.com';
       $emailSubject = 'Project Leads - Los Cabos';
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
	<title>Buy new residential plots at RGIA Hyderabad - Los Cabos</title>
	<meta name="description" content="Buy new luxurious gated community residential plots at affordable prices at Los Cabos and experience the comfortable urban living. Book now."/>
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
					<img src="images/Los-Cabos-New-Banner.jpg" width="100%"
						height="500px" />

				</div>
				<div class="col-md-4 pl-0 formE1" style="background-color: #0A0a0a;">
					<h2>Los Cabos</h2>
					<div class="form-heading">
						<p>Plots</p>
						<p><span><i class="fa-solid fa-location-dot"
									style="color: #f21a02;"></i></span> Hyderabad</p>
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
						<h2>Buy New Residential Plots at Los Cabos, RGIA Hyderabad
						</h2>
						<ul class="project-data-list">
							<li>
								<span class="data-name ">
									Location
								</span>
								<span class="data-text ">
									Hyderabad
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
									<a href="assets/Broucher/loscabos_brochure_.pdf"
										target="_blank">Download</a>
								</span>
							</li>
							<li>
								<span class="data-name ">
									Layout
								</span>
								<span class="data-text">
									<a href="assets/Layout/Los_cabos-layout.pdf"
										target="_blank">Download</a>
								</span>
							</li>
						</ul>

					</div>
				</div>
				<!-- <div class="col-md-6">
					<div class="section-image">
						<div class="feature-image">
							<img src="images/los-cobas-1.jpeg" alt="project-img">
						</div>
					</div>
				</div> -->
				<div class="col-md-12">
					<p>Los Cabos, a towering property, is poised to revolutionize comfortable urban living, setting a new standard in the realm of modern living.</p>

					<p>This exceptional development offers an ideal living environment with a host of convenient amenities, catering to all your needs. Whether it’s fulfilling your retail desires at nearby malls or accessing daily necessities from the surrounding convenience stores, Los Cabos ensures a hassle-free lifestyle.</p>

						<p>With a meticulously planned master layout that harmoniously blends nature with urbanity, Los Cabos boasts well-appointed living spaces equipped with state-of-the-art conveniences and fully equipped interiors.</p>

					<p>Notably, Los Cabos stands as the first and most valuable open plot project by Tricolour, encompassing an impressive 10 acres. It is ideally situated near Kadthal, a suburb of Hyderabad, with its inception dating back to 2010. The project’s strategic location places it close to several prime landmarks, including RGIA airport, Rajiv Gandhi Nanotech Park, Tata Aerospace Center, and Rajiv Gandhi Gems & Jewelry Park.</p>

					<p>Los Cabos promises an extraordinary living experience, where comfort, convenience, and modernity come together seamlessly. Embrace the essence of urban living at its finest in this esteemed project by Tricolour.</p>

				   

					
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
								<img src="assets/tricolours_icons/Neatly Developed Plots.png" class="icons"/>
								<div class="serv-cont">
									<h4>Neatly Developed Plots</h4>

								</div>
							</a>
							<a class="services-post7" href="#">
								<img src="assets/tricolours_icons/park.png" class="icons"/>
								<div class="serv-cont">
									<h4>Children’s Park</h4>

								</div>
							</a>
						</div>
						<div class="col-lg-4">
							<a class="services-post7" href="#">
								<img src="assets/tricolours_icons/Electricity system.png" class="icons"/>

								<div class="serv-cont">
									<h4>Electricity Line and Street Lighting</h4>

								</div>
							</a>
							<a class="services-post7" href="#">
								<img src="assets/tricolours_icons/Well Designed Layout as per Vaastu.png" class="icons"/>

								<div class="serv-cont">
									<h4>Planned according to 100% Vaastu</h4>

								</div>
							</a>
						</div>
						<div class="col-lg-4">
							<a class="services-post7" href="#">
								<img src="assets/tricolours_icons/Footpath with tiles.png" class="icons"/>

								<div class="serv-cont">
									<h4>Footpath with tiles</h4>

								</div>
							</a>
							<a class="services-post7" href="#">
								<img src="assets/tricolours_icons/Grand entrance arch.png" class="icons"/>

								<div class="serv-cont">
									<h4>Grand Entrance Gate</h4>

								</div>
							</a>

						</div>
						<div class="col-lg-4 " >
							<a class="services-post7" href="#">
								<img src="assets/tricolours_icons/polution free.png" class="icons"/>

								<div class="serv-cont">
									<h4>Pollution-free & peaceful location</h4>

								</div>
							</a>
							
						</div>
						<div class="col-lg-4 " >
							<a class="services-post7" href="#">
								<img src="assets/tricolours_icons/road.png" class="icons"/>

								<div class="serv-cont">
									<h4>Venture located on Hyderabad – Srisailam Highway</h4>

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
									style="color: #fe1706;"></i></span>RGIA – Commercial entry </li>
						<li style="font-weight: 400"><span
								style="margin-right: 10px;font-weight: 400"><i
									class="fa-solid fa-circle-arrow-right"
									style="color: #fe1706;"></i></span> Rajiv Gandhi Nano Tech Park
						</li>
						<li style="font-weight: 400"><span
								style="margin-right: 10px;font-weight: 400"><i
									class="fa-solid fa-circle-arrow-right"
									style="color: #fe1706;"></i></span> FAB City</li>
						<li style="font-weight: 400"><span
										style="margin-right: 10px;font-weight: 400"><i
											class="fa-solid fa-circle-arrow-right"
											style="color: #fe1706;"></i></span> Adibhatla TATA Aerospace Center</li>
						
						<li style="font-weight: 400"><span
								style="margin-right: 10px;font-weight: 400"><i
									class="fa-solid fa-circle-arrow-right"
									style="color: #fe1706;"></i></span> Pharma at Mutcherla</li>
						<li style="font-weight: 400"><span
								style="margin-right: 10px;font-weight: 400"><i
									class="fa-solid fa-circle-arrow-right"
									style="color: #fe1706;"></i></span> Rajiv Gandhi Gems & Jewellery Park</li>
						<li style="font-weight: 400;"><span
								style="font-weight: 400; margin-right: 10px; "><i
									class="fa-solid fa-circle-arrow-right"
									style="color: #fe1706;"></i></span> Transport Zone </li>
					   
						<li style="font-weight: 400"><span
								style="margin-right: 10px;font-weight: 400"><i
									class="fa-solid fa-circle-arrow-right"
									style="color: #fe1706;"></i></span> Easy access to the Outer Ring Road</li>
						<li style="font-weight: 400"><span
										style="margin-right: 10px;font-weight: 400"><i
											class="fa-solid fa-circle-arrow-right"
											style="color: #fe1706;"></i></span>Over 12 Star Hotels coming up </li>
						<li style="font-weight: 400"><span
										style="margin-right: 10px;font-weight: 400"><i
											class="fa-solid fa-circle-arrow-right"
											style="color: #fe1706;"></i></span>Agha Khan Educational Academy </li>
						<li style="font-weight: 400"><span
										style="margin-right: 10px;font-weight: 400"><i
											class="fa-solid fa-circle-arrow-right"
											style="color: #fe1706;"></i></span>Proposed airlines township </li>
						<li style="font-weight: 400"><span
										style="margin-right: 10px;font-weight: 400"><i
											class="fa-solid fa-circle-arrow-right"
											style="color: #fe1706;"></i></span>Transport Zone </li>
						</ol>

				</div>
			</div>
			<!-- <div class="col-md-8">
				<iframe src="https://www.google.com/maps/embed?pb=!1m13!1m8!1m3!1d7606.285962803849!2d78.978!3d17.595944!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMTfCsDM1JzQ1LjQiTiA3OMKwNTgnNDAuOCJF!5e0!3m2!1sen!2sin!4v1695488358947!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			</div> -->

			<div class="col-md-12" style="margin-top: 50px;">
				<h2>Gallery</h2>
				<ul class="gallery-list">
					<li>
						<a href="images/los-cobas-1.jpeg" class="zoom">
							<img src="images/los-cobas-1.jpeg" alt="gallery1">
						</a>
					</li>
					<li>
						<a href="images/los-cobas-2.jpeg" class="zoom">
							<img src="images/los-cobas-2.jpeg" alt="gallery2">
						</a>
					</li>
					<li>
						<a href="images/los-cobas-3.jpeg" class="zoom">
							<img src="images/los-cobas-3.jpeg" alt="gallery3">
						</a>
					</li>
					<li>
						<a href="images/los-cobas-4.jpeg" class="zoom">
							<img src="images/los-cobas-4.jpeg" alt="gallery4">
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
