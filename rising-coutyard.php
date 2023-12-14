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
       $emailSubject = 'Project Lead - Rising Courtyard';
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
	<title>Residential Plots / Open plots for sale near Srisailam Highway Hyderabad at Rising Courtyard </title>
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
				<img src="images/Rising-Courtyard-New-Banner.jpg" width="100%">
			</div>
			<div class="col-md-4 pl-0 formE1" style="background-color: #0A0a0a;">
					<h2 class="pt-3">Rising Courtyard</h2>
					<div class="form-heading">
						<p>Plots</p>
						<p><span><i class="fa-solid fa-location-dot"
									style="color: #f21a02;"></i></span> Hyderabad</p>
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
					<h2>Residential Plots / Open plots for sale at Rising Courtyard near Srisailam Highway Hyderabad</h2>
						<ul class="project-data-list">
							<li>
								<span class="data-name ">
									Location
								</span>
								<span class="data-text ">
									Hyderabads
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
									<a href="assets/Broucher/rising-Courtyard-brochure.pdf"
										target="_blank"><i style="color: red;" class="fa fa-download" aria-hidden="true"></i> Download</a>
								</span>
							</li>
							<li>
								<span class="data-name ">
									Layout
								</span>
								<span class="data-text">
									<a href="assets/Layout/RISING-COURTYARD-Layout.jpg"
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
				<p>Situated in the thriving southern part of Hyderabad, Srisailam Highway has emerged as a rapidly growing residential hub. The region’s appeal stems from its proximity to the Nehru Outer Ring Road, Rajiv Gandhi International Airport (HYD), TCS Special Economic Zone (SEZ), and seamless connectivity, making it a hotspot for real estate development. Vast stretches of available land further bolster the growth of this area.</p>

				<p>Notably, the Srisailam Highway boasts convenient access to prominent tech parks, including CVK Tech Park and TCS SEZ at Adibatla, as well as the Rajiv Gandhi Nano Tech Park, enhancing the area’s employment prospects. Furthermore, an upcoming aerospace park adds to the allure of this location</p>

				<p>For investors seeking lucrative opportunities, Tricolour Rising Courtyard at Kotra Gate, Srisailam Highway offers an exceptional deal. This venture presents highway-facing open plots in a prime location at affordable prices, promising significant appreciation shortly. Seize this opportunity to maximize your investment potential with Rising Courtyard, strategically situated in the burgeoning residential hub of Srisailam Highway. The presence of FAB City and Pharma City adds exceptional value to this property, making it a highly desirable choice for discerning investors.</p>

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
								<img src="assets/tricolours_icons/Children's Tot-Lot.png" class="icons"/>
								<div class="serv-cont">
									<h4>Children’s park. Neatly developed plots</h4>

								</div>
							</a>
							<a class="services-post7" href="#">
								<img src="assets/tricolours_icons/Electricity system.png" class="icons"/>
								<div class="serv-cont">
									<h4>Electricity lines and street lighting</h4>

								</div>
							</a>
						</div>
						
						<div class="col-lg-4">
							<a class="services-post7" href="#">
								<img src="assets/tricolours_icons/Underground drainage.png" class="icons"/>

								<div class="serv-cont">
									<h4>Underground drainage</h4>

								</div>
							</a>
							<a class="services-post7" href="#">
								<img src="assets/tricolours_icons/18.   Proposed DTPC Approved.png" class="icons"/>

								<div class="serv-cont">
									<h4>Proposed DTPC Approved</h4>

								</div>
							</a>

						</div>
						<div class="col-lg-4">
							<a class="services-post7" href="#">
								<img src="assets/tricolours_icons/road.png" class="icons"/>
								<div class="serv-cont">
									<h4>60-40-33 ft BT roads</h4>

								</div>
							</a>
							<a class="services-post7" href="#">
								<img src="assets/tricolours_icons/Avenue Plantation.png" class="icons"/>
								<div class="serv-cont">
									<h4>Avenue Plantation</h4>

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
		<div class="container">
		<div class="row">
			<div class="col-md-4">
				<div class="project-content">
					<h2 style="color: red;">Location Highlights</h2>
					<ol style="color : white ; list-style: none; line-height: 31px;">
						<li style="font-weight: 400"><span
								style="margin-right: 10px;font-weight: 400"><i
									class="fa-solid fa-circle-arrow-right"
									style="color: #fe1706;"></i></span> Rajiv Gandhi Nano Tech Park </li>
						<li style="font-weight: 400"><span
								style="margin-right: 10px;font-weight: 400"><i
									class="fa-solid fa-circle-arrow-right"
									style="color: #fe1706;"></i></span>  RGIA– Commercial entry
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
						<li style="font-weight: 400;"><span
										style="font-weight: 400; margin-right: 10px; "><i
											class="fa-solid fa-circle-arrow-right"
											style="color: #fe1706;"></i></span> World’s largest pyramid</li>
						<li style="font-weight: 400"><span
								style="margin-right: 10px;font-weight: 400"><i
									class="fa-solid fa-circle-arrow-right"
									style="color: #fe1706;"></i></span> Over 12 Star Hotels are coming up </li>
									<li style="font-weight: 400;"><span
										style="font-weight: 400; margin-right: 10px; "><i
											class="fa-solid fa-circle-arrow-right"
											style="color: #fe1706;"></i></span> Easy access to the Outer Ring Road</li>
						<li style="font-weight: 400"><span
								style="margin-right: 10px;font-weight: 400"><i
									class="fa-solid fa-circle-arrow-right"
									style="color: #fe1706;"></i></span> Proposed airline township </li>
						
						</ol>

				</div>
			</div>
			 <div class="col-md-8">
				<iframe src="https://www.google.com/maps/embed?pb=!1m13!1m8!1m3!1d7642.724081391097!2d78.517222!3d16.708778!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMTbCsDQyJzMxLjYiTiA3OMKwMzEnMDIuMCJF!5e0!3m2!1sen!2sin!4v1695621798090!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			</div>

			<div class="col-md-12" style="margin-top: 50px;">
				<h2>Gallery</h2>
				<ul class="gallery-list">
					<li>
						<a href="images/rising-courtyard-two.jpeg" class="zoom">
							<img src="images/rising-courtyard-two.jpeg" alt="gallery1">
						</a>
					</li>
					<li>
						<a href="images/rising-courtyard-four.jpeg" class="zoom">
							<img src="images/rising-courtyard-four.jpeg" alt="gallery2">
						</a>
					</li>
					<li>
						<a href="images/rising-courtyard-three.jpeg" class="zoom">
							<img src="images/rising-courtyard-three.jpeg" alt="gallery3">
						</a>
					</li>
					<li>
						<a href="images/rising-courtyard-one.jpeg" class="zoom">
							<img src="images/rising-courtyard-one.jpeg" alt="gallery4">
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
