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
       $emailSubject = 'Project Leads - Sun Flower';
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
	<title>Residential Plots at Sunflower Bangalore - One Floor One Flat in Bangalore</title>
	<meta name="description" content="Residential land or open plots for sale at sunflower near Konanakunte metro station JP nagar  Bangalore by Tricolour properties. Here you will find luxurious individual flat in each floor(One Flat in One Floor)."/>
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
					<img src="images/Sunflower-New-Banner.jpg" width="100%"
						height="500px" />

				</div>
				<div class="col-md-4 pl-0 formE1" style="background-color: #0A0a0a;">
					<h2>Sunflower</h2>
					<div class="form-heading">
						<p>Apartments</p>
						<p><span><i class="fa-solid fa-location-dot"
									style="color: #f21a02;"></i></span> Bangalore</p>
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
						<h2>Residential Plots at Sunflower Bangalore – One Floor One Flat in Bangalore.
						</h2>
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
									Apartments
								</span>
							</li>
							<li>
								<span class="data-name">
									Brouchure
								</span>
								<span class="data-text">
									<a href="assets/Broucher/Sunflower-brochure.pdf"
										target="_blank"><i style="color: red;" class="fa fa-download" aria-hidden="true"></i> Download</a>
								</span>
							</li>
							<li>
								<span class="data-name ">
									Layout
								</span>
								<span class="data-text">
									<a href="assets/Layout/floor_map.pdf"
										target="_blank"><i style="color: red;" class="fa fa-download" aria-hidden="true"></i> Download</a>
								</span>
							</li>
						</ul>

					</div>
				</div>
				<!-- <div class="col-md-6">
					<div class="section-image">
						<div class="feature-image">
							<img src="images/sun-flower-1.jpg" alt="project-img">
						</div>
					</div>
				</div> -->
				<div class="col-md-12">
					<p>If you are seeking the perfect investment opportunity in the most promising location, look no further than the Sunflower Project. Now is your chance to explore the finest land deals available for sale in Bengaluru. With a track record of successful project completions, Sunflower, a part of Tricolour Properties, is launching a new endeavor that promises convenience and lucrative returns. As one of the largest and most reputable real estate companies in Bengaluru, Sunflower ensures top-notch offerings.</p>

					<p>The Sunflower project is strategically situated near the Konankunte metro station in JP Nagar, Bengaluru, ensuring hassle-free transportation. This project revolves around the independent floor concept, eliminating common walls and providing a sense of privacy. It boasts teak wood doors, window frames, and shutters, along with elegant Italian marble and tiles, adding a touch of sophistication.</p>

						<p>Surrounded by railways, metro stations, and bus bays, the project enjoys excellent connectivity. Nearby amenities include Kumaran School, catering to daily life needs, along with educational institutions and hospitals for added convenience. With well-developed roads facilitating smooth local transportation, the Sunflower project offers an attractive and comfortable living experience in Bengaluru. Embrace this opportunity to secure a prime investment in a flourishing and sought-after location.</p>

					
				   

					
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
								<img src="assets/tricolours_icons/floortoroom.png" class="icons"/>
								<div class="serv-cont">
									<h4>10.5’ height floor to roof</h4>

								</div>
							</a>
							<a class="services-post7" href="#">
								<img src="assets/tricolours_icons/24hr-security.png" class="icons"/>
								<div class="serv-cont">
									<h4>24×7 security</h4>

								</div>
							</a>
						</div>
						<div class="col-lg-4">
							<a class="services-post7" href="#">
								<img src="assets/tricolours_icons/All teak wood doors and windows frames and shutters.png" class="icons"/>

								<div class="serv-cont">
									<h4>All teak wood doors and windows frames and shutters</h4>

								</div>
							</a>
							<a class="services-post7" href="#">
								<img src="assets/tricolours_icons/Branded lift.png" class="icons"/>

								<div class="serv-cont">
									<h4>Branded lift</h4>
								</div>
							</a>
						</div>
						<div class="col-lg-4">
							<a class="services-post7" href="#">
								<img src="assets/tricolours_icons/water connection.png" class="icons"/>

								<div class="serv-cont">
									<h4>Cauvery water connection</h4>

								</div>
							</a>
							<a class="services-post7" href="#">
								<img src="assets/tricolours_icons/Flooring Italian marble and tiles.png" class="icons"/>

								<div class="serv-cont">
									<h4>Flooring: Italian marble and tiles</h4>

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
								<img src="assets/tricolours_icons/French windows provide brilliant sunlight and good cross.png" class="icons"/>

								<div class="serv-cont">
									<h4>Life-size/French windows provide brilliant sunlight and good cross</h4>

								</div>
							</a>
							
						</div>
						<div class="col-lg-4 " >
							<a class="services-post7" href="#">
								<img src="assets/tricolours_icons/One floor one flat concept.png" class="icons"/>

								<div class="serv-cont">
									<h4>One floor one flat concept</h4>

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
									style="color: #fe1706;"></i></span> Proposed 12000 Acres Nims  </li>
						<li style="font-weight: 400"><span
								style="margin-right: 10px;font-weight: 400"><i
									class="fa-solid fa-circle-arrow-right"
									style="color: #fe1706;"></i></span> Pepsi Company
						</li>
						<li style="font-weight: 400"><span
								style="margin-right: 10px;font-weight: 400"><i
									class="fa-solid fa-circle-arrow-right"
									style="color: #fe1706;"></i></span> As per Vaastu</li>
						<li style="font-weight: 400"><span
										style="margin-right: 10px;font-weight: 400"><i
											class="fa-solid fa-circle-arrow-right"
											style="color: #fe1706;"></i></span> Near Konanakunte metro station</li>
						
						<li style="font-weight: 400"><span
								style="margin-right: 10px;font-weight: 400"><i
									class="fa-solid fa-circle-arrow-right"
									style="color: #fe1706;"></i></span> Near to KUMARAN school</li>
						<li style="font-weight: 400"><span
								style="margin-right: 10px;font-weight: 400"><i
									class="fa-solid fa-circle-arrow-right"
									style="color: #fe1706;"></i></span>Bengaluru's number one Intl School</li>
						<li style="font-weight: 400;"><span
								style="font-weight: 400; margin-right: 10px; "><i
									class="fa-solid fa-circle-arrow-right"
									style="color: #fe1706;"></i></span> Transport Zone </li>
						<li style="font-weight: 400;"><span
								style="font-weight: 400; margin-right: 10px; "><i
									class="fa-solid fa-circle-arrow-right"
									style="color: #fe1706;"></i></span> 200m Road Park </li>
						<li style="font-weight: 400;"><span
								style="font-weight: 400; margin-right: 10px; "><i
									class="fa-solid fa-circle-arrow-right"
									style="color: #fe1706;"></i></span> Near to A 2 B restaurant. </li>
					   
						
						</ol>

				</div>
			</div>
			 <div class="col-md-8">
				<iframe src="https://www.google.com/maps/embed?pb=!1m13!1m8!1m3!1d7778.874054164962!2d77.54565!3d12.879596!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMTLCsDUyJzQ2LjUiTiA3N8KwMzInNTMuNiJF!5e0!3m2!1sen!2sin!4v1695642908194!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			</div>

			<div class="col-md-12" style="margin-top: 50px;">
				<h2>Gallery</h2>
				<ul class="gallery-list">
					<li>
						<a href="images/sun-flower-1.jpg" class="zoom">
							<img src="images/sun-flower-1.jpg" alt="gallery1">
						</a>
					</li>
					<li>
						<a href="images/sun-flower-2.jpg" class="zoom">
							<img src="images/sun-flower-2.jpg" alt="gallery2">
						</a>
					</li>
					<li>
						<a href="images/sun-flower-3.jpg" class="zoom">
							<img src="images/sun-flower-3.jpg" alt="gallery3">
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
