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
       $emailSubject = 'Project Lead - Hill Waves';
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
	<title>Invest in Hill Waves residential open plots situated near yadagirigutta.</title>
	<meta name="description" content="Hill waves residential open plots for sale near Yadagirigutta, Sri Lakshmi Narasimha Swamy Temple. It is being developed as one of the best ventures suronded by big companies like Infosys, Nims, K. Raheja IT Park, Singapore Town Ship, etc. Book now." />
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
				<img src="images/hill-waves-new-banner.jpeg" width="100%">
			</div>
			<div class="col-md-4 pl-0 formE1" style="background-color: #0A0a0a;">
					<h2 class="pt-3">Hill Waves</h2>
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
					<h2>Invest in Hill Waves residential open plots situated near Yadagirigutta.</h2>
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
									<a href="assets/Broucher/hill_waves_brochure.pdf"
										target="_blank"><i style="color: red;" class="fa fa-download" aria-hidden="true"></i> Download</a>
								</span>
							</li>
							<li>
								<span class="data-name ">
									Layout
								</span>
								<span class="data-text">
									<a href="assets/Layout/hill_waves_layout_plan.pdf"
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
				<p>
						Hill Waves finds itself surrounded by prominent companies like Infosys, Nims, K. Raheja IT Park, and Singapore Town Ship, creating a thriving and dynamic environment.</p>
						<p>Situated near Yadagirigutta, Hill Waves enjoys proximity to the revered Sri Lakshmi Narasimha Swamy Temple, a popular Hindu temple dedicated to Lord Vishnu’s incarnation, Narasimha Swamy. Located on a picturesque hillock in the Yadadri Bhuvanagiri district of Telangana State, the temple attracts a large number of devotees year-round.</p>
							<p>Notably, Hill Waves is conveniently positioned near Warangal Highway NH-202, offering easy access to rail and road transport. It is a 5-minute drive from MMTS and within close reach of Raheja MindSpace I.T. Park, Infosys, IICT, and MNJ Cancer Hospital.</p>

								<p>National Highway 202 (NH 202), linking Hyderabad in Telangana State and Bhopalpatnam in Chattisgarh, passes through various key locations, including Golnaka, Amberpet, Ramanthapur, and Uppal Kalan in Hyderabad City. Further on, it extends through Bhongir, Jangaon, Ghanpur, Warangal, Atmakur, Mallampalli, Mulug, Nagaram, Chandrupatla, and Bhadrakali.</p>
									<p>With the government investing significantly in improving the infrastructure along the Hyderabad and Warangal Highway, investments on Warangal Highway are set to soar to new heights. For a promising future, consider investing in Loreal Park, a development by Tricolour Properties Pvt. Ltd. Together, we can grow and prosper, making Hill Waves the perfect place to call home.
					</p>

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
								<img src="assets/tricolours_icons/road.png" class="icons"/>
								<div class="serv-cont">
									<h4>40ft. & 30ft. roads with footpaths</h4>

								</div>
							</a>
							<a class="services-post7" href="#">
								<img src="assets/tricolours_icons/road.png" class="icons"/>
								<div class="serv-cont">
									<h4>All Black top roads with curving stones on the roadside</h4>

								</div>
							</a>
						</div>
						<div class="col-lg-4">
							<a class="services-post7" href="#">
								<img src="assets/tricolours_icons/Avenue plantation with tree guards.png" class="icons"/>

								<div class="serv-cont">
									<h4>Avenue plantation with tree guards</h4>

								</div>
							</a>
							<a class="services-post7" href="#">
								<img src="assets/tricolours_icons/Electricity system.png" class="icons"/>

								<div class="serv-cont">
									<h4>Electricity with poles</h4>

								</div>
							</a>
						</div>
						<div class="col-lg-4">
							<a class="services-post7" href="#">
								<img src="assets/tricolours_icons/Wire fencing for the entire project.png" class="icons"/>

								<div class="serv-cont">
									<h4>Fencing for the entire layout</h4>

								</div>
							</a>
							<a class="services-post7" href="#">
								<img src="assets/tricolours_icons/24×7 security.png" class="icons"/>

								<div class="serv-cont">
									<h4>Round the clock Security Guards</h4>

								</div>
							</a>

						</div>
						<div class="col-lg-4 " >
							<a class="services-post7" href="#">
								<img src="assets/tricolours_icons/streetlights.png" class="icons"/>

								<div class="serv-cont">
									<h4>Street lights</h4>

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
		<div class="container">
		<div class="row">
			<div class="col-md-4">
				<div class="project-content">
					<h2 style="color: red;">Location Highlights</h2>
					<ol style="color : white ; list-style: none; line-height: 31px;">
						<li style="font-weight: 400"><span
								style="margin-right: 10px;font-weight: 400"><i
									class="fa-solid fa-circle-arrow-right"
									style="color: #fe1706;"></i></span> Easy Access to Rail & Road Transport </li>
						<li style="font-weight: 400"><span
								style="margin-right: 10px;font-weight: 400"><i
									class="fa-solid fa-circle-arrow-right"
									style="color: #fe1706;"></i></span> Fastest growing area
						</li>
						<li style="font-weight: 400"><span
								style="margin-right: 10px;font-weight: 400"><i
									class="fa-solid fa-circle-arrow-right"
									style="color: #fe1706;"></i></span> 5 Minutes Drive from MMTS</li>
						<li style="font-weight: 400"><span
										style="margin-right: 10px;font-weight: 400"><i
											class="fa-solid fa-circle-arrow-right"
											style="color: #fe1706;"></i></span> On the Way to Yadagiri Gutta</li>
						
						<li style="font-weight: 400"><span
								style="margin-right: 10px;font-weight: 400"><i
									class="fa-solid fa-circle-arrow-right"
									style="color: #fe1706;"></i></span> Warangal Highway NH-202</li>
						<li style="font-weight: 400"><span
								style="margin-right: 10px;font-weight: 400"><i
									class="fa-solid fa-circle-arrow-right"
									style="color: #fe1706;"></i></span> Metro Railway Station</li>
						<li style="font-weight: 400;"><span
								style="font-weight: 400; margin-right: 10px; "><i
									class="fa-solid fa-circle-arrow-right"
									style="color: #fe1706;"></i></span> Residential Layout Nearby </li>
						<li style="font-weight: 400;"><span
										style="font-weight: 400; margin-right: 10px; "><i
											class="fa-solid fa-circle-arrow-right"
											style="color: #fe1706;"></i></span> Near Singapore Township </li>
						<li style="font-weight: 400"><span
								style="margin-right: 10px;font-weight: 400"><i
									class="fa-solid fa-circle-arrow-right"
									style="color: #fe1706;"></i></span> Infosys</li>
						<li style="font-weight: 400"><span
										style="margin-right: 10px;font-weight: 400"><i
											class="fa-solid fa-circle-arrow-right"
											style="color: #fe1706;"></i></span> NIMS Hospital</li>
						<li style="font-weight: 400"><span
												style="margin-right: 10px;font-weight: 400"><i
													class="fa-solid fa-circle-arrow-right"
													style="color: #fe1706;"></i></span> Close to the outer ring road</li>
						</ol>

				</div>
			</div>
			<div class="col-md-8">
				<iframe src="https://www.google.com/maps/embed?pb=!1m13!1m8!1m3!1d7606.285962803849!2d78.978!3d17.595944!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMTfCsDM1JzQ1LjQiTiA3OMKwNTgnNDAuOCJF!5e0!3m2!1sen!2sin!4v1695488358947!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			</div>

			<div class="col-md-12" style="margin-top: 50px;">
				<h2>Gallery</h2>
				<ul class="gallery-list">
					<li>
						<a href="images/hill-waves--1.jpg" class="zoom">
							<img src="images/hill-waves--1.jpg" alt="gallery1">
						</a>
					</li>
					<li>
						<a href="images/hill-waves--2.jpg" class="zoom">
							<img src="images/hill-waves--2.jpg" alt="gallery1">
						</a>
					</li>
					<li>
						<a href="images/hill-waves--3.jpg" class="zoom">
							<img src="images/hill-waves--3.jpg" alt="gallery1">
						</a>
					</li>
					<li>
						<a href="images/hill-waves--4.jpg" class="zoom">
							<img src="images/hill-waves--4.jpg" alt="gallery1">
						</a>
					</li>
					<li>
						<a href="images/hill-waves--5.jpg" class="zoom">
							<img src="images/hill-waves--5.jpg" alt="gallery1">
						</a>
					</li>
					<li>
						<a href="images/hill-waves--6.jpg" class="zoom">
							<img src="images/hill-waves--6.jpg" alt="gallery1">
						</a>
					</li>
					<li>
						<a href="images/hill-waves--7.jpg" class="zoom">
							<img src="images/hill-waves--7.jpg" alt="gallery1">
						</a>
					</li>
					<li>
						<a href="images/hill-waves--8.jpg" class="zoom">
							<img src="images/hill-waves--8.jpg" alt="gallery1">
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
