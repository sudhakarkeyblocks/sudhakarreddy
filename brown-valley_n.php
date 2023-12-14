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
       $emailSubject = 'Project Leads - Brown Valley';
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
	<title>Buy HMDA approved residential open plots near mumbai highway, Hyderabad - Brown Valley</title>
	<meta name="description" content="Residential open plots for sale at Brown valley near Mumbai highway in prime locality. The lands of this project are near to big companies like Microsoft, ISB, Infosys, TCS, Aurobindo Pharma, KIRBY, Matrix, BPL. Book your plot now."/>
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
					<img src="images/Brown-Valley-New-Banner.jpg" width="100%"
						height="500px" />

				</div>
				<div class="col-md-4 pl-0 formE1" style="background-color: #0A0a0a;">
					<h2>Brown Valley</h2>
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
						<h2>Open Plots in Mallepally Near Mumbai Highway, Hyderabad at Brown Valley.
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
									<a href="assets/Broucher/Brown-Valley_brouchers.pdf"
										target="_blank">Download</a>
								</span>
							</li>
							<li>
								<span class="data-name ">
									Layout
								</span>
								<span class="data-text">
									<a href="assets/Layout/brown_valley_sangareddy_layout_-2.pdf"
										target="_blank">Download</a>
								</span>
							</li>
						</ul>

					</div>
				</div>
				<!-- <div class="col-md-6">
					<div class="section-image">
						<div class="feature-image">
							<img src="images/brown-valley-1.jpeg" alt="project-img">
						</div>
					</div>
				</div> -->
				<div class="col-md-12">
					<p>The Location: Connectivity, Major Projects, Economic Value, Future Expectations.</p>

					<p>At Tricolour Properties, every project revolves around a core philosophy. Brown Valley, in particular, is built on the belief that your choices reflect your true self. Your perception, prudence, and discretion define your essence, and Brown Valley draws inspiration from this collective being that is uniquely you. Positioned amidst an emerging development belt, Brown Valley shines brightly, and a single glance around reveals why its credibility soars. With the Export Zone, Textile Park, and a cluster of high-profile businesses (Aurobindo Pharma, KIRBY, Matrix, BPL) flanking Silver Coast, it’s value multiplies manifold.</p>

						<p>The proximity of IIT in Sangareddy adds to the undeniable value of Silver Coast. Calling it valuable would be an understatement; it is invaluable. A short drive connects you to the Outer Ring Road, opening the gateway to the world (TCS, ISB, SEZs, Microsoft, Infosys, etc.). With the world at your feet, conquering new heights becomes a natural progression. Embrace the windfall gains and let a project of this stature revolutionize your outlook forever.</p>

				 <p>Why Mumbai Highway: The destination for every business pursuing grand dreams and the capital for every investor seeking rewarding returns on investment. This location embodies the virtues of nature while offering tremendous economic advantages. A housing society harmoniously blending with nature, situated on a road leading to the glitz, glamour, and commercial excitement of the nation’s commercial capital, Mumbai. This location presents the best of natural beauty, along with excellent commercial access.</p>

					<p>To fulfill our patrons’ desires for harmony, we have crafted a marvelously designed gated community amidst a backdrop of residential and commercial houses. Flowing streams, landscaped gardens, walkways, and avenue plantations create a sensational atmosphere, complemented by the chirping of birds, the dawn of the sun, and the fragrance of flowers that rejuvenate your senses. Brown Valley is not just a place to live; it’s a place to immerse yourself in a holistic experience.</p>

				 

			   

					
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
									<h4>All blacktop roads with curving stones on the roadside</h4>

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
								<img src="assets/tricolours_icons/Electricity system.png" class="icons"/>

								<div class="serv-cont">
									<h4>Electricity lines and street lighting</h4>

								</div>
							</a>
							<a class="services-post7" href="#">
								<img src="assets/tricolours_icons/Footpath with tiles.png" class="icons"/>

								<div class="serv-cont">
									<h4>Footpath with tiles</h4>

								</div>
							</a>
						</div>
						<div class="col-lg-4">
							<a class="services-post7" href="#">
								<img src="assets/tricolours_icons/Landscaped public places.png" class="icons"/>

								<div class="serv-cont">
									<h4>Landscaped public places</h4>

								</div>
							</a>
							<a class="services-post7" href="#">
								<img src="assets/tricolours_icons/Water Pipeline.png" class="icons"/>

								<div class="serv-cont">
									<h4>Running water pipelines</h4>

								</div>
							</a>

						</div>
						<div class="col-lg-4 " >
							<a class="services-post7" href="#">
								<img src="assets/tricolours_icons/Security Posts.png" class="icons"/>

								<div class="serv-cont">
									<h4>Security Posts & Surveillance</h4>

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
									style="color: #fe1706;"></i></span>  Hyderabad to Mumbai National Highway
						</li>
						<li style="font-weight: 400"><span
								style="margin-right: 10px;font-weight: 400"><i
									class="fa-solid fa-circle-arrow-right"
									style="color: #fe1706;"></i></span> Proposed 100ft master plan road</li>
						<li style="font-weight: 400"><span
										style="margin-right: 10px;font-weight: 400"><i
											class="fa-solid fa-circle-arrow-right"
											style="color: #fe1706;"></i></span> Existing many ventures and upcoming </li>
						
						<li style="font-weight: 400"><span
								style="margin-right: 10px;font-weight: 400"><i
									class="fa-solid fa-circle-arrow-right"
									style="color: #fe1706;"></i></span> Many international beverage companies nearby</li>
						<li style="font-weight: 400"><span
								style="margin-right: 10px;font-weight: 400"><i
									class="fa-solid fa-circle-arrow-right"
									style="color: #fe1706;"></i></span> IIT Hyderabad & Ordinance Factory</li>
						<li style="font-weight: 400;"><span
								style="font-weight: 400; margin-right: 10px; "><i
									class="fa-solid fa-circle-arrow-right"
									style="color: #fe1706;"></i></span> Popular Companies like Pepsi Co. & Toshiba are around. </li>
						<li style="font-weight: 400;"><span
								style="font-weight: 400; margin-right: 10px; "><i
									class="fa-solid fa-circle-arrow-right"
									style="color: #fe1706;"></i></span> Microsoft, ISB, Infosys, TCS </li>
						<li style="font-weight: 400;"><span
								style="font-weight: 400; margin-right: 10px; "><i
									class="fa-solid fa-circle-arrow-right"
									style="color: #fe1706;"></i></span> 20min. drive from ORR </li>
						
						
						</ol>

				</div>
			</div>
			 <div class="col-md-8">
				<iframe src="https://www.google.com/maps/embed?pb=!1m13!1m8!1m3!1d7608.364818611586!2d78.053444!3d17.5465!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMTfCsDMyJzQ3LjQiTiA3OMKwMDMnMTIuNCJF!5e0!3m2!1sen!2sin!4v1695624438328!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			</div>

			<div class="col-md-12" style="margin-top: 50px;">
				<h2>Gallery</h2>
				<ul class="gallery-list">
					<li>
						<a href="images/brown-valley-2.jpeg" class="zoom">
							<img src="images/brown-valley-2.jpeg" alt="gallery1">
						</a>
					</li>
					<li>
						<a href="images/brown-valley-3.jpg" class="zoom">
							<img src="images/brown-valley-3.jpg" alt="gallery2">
						</a>
					</li>
					<li>
						<a href="images/brown-valley-4.jpg" class="zoom">
							<img src="images/brown-valley-4.jpg" alt="gallery3">
						</a>
					</li>
					<li>
						<a href="images/brown-valley-5.jpg" class="zoom">
							<img src="images/brown-valley-5.jpg" alt="gallery4">
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

