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
       $emailSubject = 'Project Lead - Lake Shore';
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
	<title>Premium plots for sale at Lakeshore in Chikkaballapur, Bengaluru.</title>
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
				<img src="images/lakeshore-new-banner-1.jpg" width="100%">
			</div>
			<div class="col-md-4 pl-0 formE1" style="background-color: #0A0a0a;">
					<h2 class="pt-3">Lakeshore</h2>
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
					<h2>Premium plots for sale at Lakeshore in Chikkaballapur, Bengaluru.</h2>
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
									<a href="assets/Broucher/lakeshore_brochure.pdf"
										target="_blank"><i style="color: red;" class="fa fa-download" aria-hidden="true"></i> Download</a>
								</span>
							</li>
							<li>
								<span class="data-name ">
									Layout
								</span>
								<span class="data-text">
									<a href="assets/Layout/Lakeshore.pdf"
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
				<p>Discover the Perfect Location: Connectivity, Major Projects, Economic Value, and Future Expectations. Welcome to Lake Shore, where premium plots await you in Chikkaballapur, Bengaluru, nestled in a picturesque valley, close to the majestic Nandi Hills. Embrace the enchanting beauty of this serene landscape, with lush mountains, abundant water sources, and a captivating lake just across the road, creating a truly breathtaking setting.</p>

					<p>Lake Shore proudly offers premium plots in Chikkaballapur, Bengaluru, an idyllic location that neighbors the famous Nandi Hills, a renowned hill station. Enjoy the convenience of being only a 30-minute drive away from Kempegowda International Airport and easy access to the six-lane National Highway. Notably, the proposed Disneyland adds to the promising prospects of this vibrant area.</p>

						<p>Immerse yourself in the splendor of Lake Shore, where you can build your dream home surrounded by natural beauty and the allure of Nandi Hills. Experience the perfect blend of tranquil surroundings and convenient accessibility in this sought-after location near Bengaluru.</p>

				

					
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
								<img src="assets/tricolours_icons/Avenue Plantation with fencing.png" class="icons"/>

								<div class="serv-cont">
									<h4>Avenue Plantation with fencing</h4>

								</div>
							</a>
							<a class="services-post7" href="#">
								<img src="assets/tricolours_icons/Children's Tot-Lot.png" class="icons"/>

								<div class="serv-cont">
									<h4>Children’s park. Neatly developed plots</h4>

								</div>
							</a>
						</div>
						<div class="col-lg-4">
							<a class="services-post7" href="#">
								<img src="assets/tricolours_icons/Curving Stones.png" class="icons"/>

								<div class="serv-cont">
									<h4>Curving stones on the roadside</h4>

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
								<img src="assets/tricolours_icons/planty water.png" class="icons"/>

								<div class="serv-cont">
									<h4>Plenty of groundwater</h4>

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
		<div class="container">
		<div class="row">
			<div class="col-md-4">
				<div class="project-content">
					<h2 style="color: red;">Location Highlights</h2>
					<ol style="color : white ; list-style: none; line-height: 31px;">
						<li style="font-weight: 400"><span
								style="margin-right: 10px;font-weight: 400"><i
									class="fa-solid fa-circle-arrow-right"
									style="color: #fe1706;"></i></span> Next to Nandi Hills  </li>
						<li style="font-weight: 400"><span
								style="margin-right: 10px;font-weight: 400"><i
									class="fa-solid fa-circle-arrow-right"
									style="color: #fe1706;"></i></span> Towards Gowribidnur NH 206  </li>
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
											style="color: #fe1706;"></i></span> Near to the proposed Disney Land</li>
						<li style="font-weight: 400"><span
										style="margin-right: 10px;font-weight: 400"><i
											class="fa-solid fa-circle-arrow-right"
											style="color: #fe1706;"></i></span> Proposed ITIR Project</li>
						<li style="font-weight: 400"><span
										style="margin-right: 10px;font-weight: 400"><i
											class="fa-solid fa-circle-arrow-right"
											style="color: #fe1706;"></i></span> Proposed Disney Land</li>
						<li style="font-weight: 400"><span
								style="margin-right: 10px;font-weight: 400"><i
									class="fa-solid fa-circle-arrow-right"
									style="color: #fe1706;"></i></span> Near Sathya Sai Centre for Human Excellence</li>
						
						</ol>

				</div>
			</div>
			 <div class="col-md-8">
				<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7760.576034918215!2d77.632674!3d13.456335!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bb1e97546cb411f%3A0xfd347d2ecc4f4430!2sLake%20Shore!5e0!3m2!1sen!2sin!4v1695643727534!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			</div>

			<div class="col-md-12" style="margin-top: 50px;">
				<h2>Gallery</h2>
				<ul class="gallery-list">
					
					<li>
						<a href="images/Lakeshore-Gallery-2.jpeg" class="zoom">
							<img src="images/Lakeshore-Gallery-2.jpeg" alt="gallery2">
						</a>
					</li>
					<li>
						<a href="images/Lakeshore-Gallery-3.jpeg" class="zoom">
							<img src="images/Lakeshore-Gallery-3.jpeg" alt="gallery3">
						</a>
					</li>
					<li>
						<a href="images/Lakeshore-Gallery-4.jpeg" class="zoom">
							<img src="images/Lakeshore-Gallery-4.jpeg" alt="gallery3">
						</a>
					</li>
					<li>
						<a href="images/Lakeshore-Gallery-4.jpeg" class="zoom">
							<img src="images/Lakeshore-Gallery-4.jpeg" alt="gallery3">
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
