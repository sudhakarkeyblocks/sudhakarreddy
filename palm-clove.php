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
       $emailSubject = 'Project Lead - Palm Clove';
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
	<title>Luxury Gated Community Apartments in Uppal Hyderabad at Palmcove Project</title>
	<meta name="description" content="Buy luxury gated community residential apartments in Palmcove near uppal with near by companies Infosys, Nims, K. Raheja IT Park, Singapore Town Ship. Book Now." />
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
				<img src="images/Palm-Cove-New-Banner.jpg" width="100%">
			</div>
			<div class="col-md-4 pl-0 formE1" style="background-color: #0A0a0a;">
					<h2 class="pt-3">Palm Cove</h2>
					<div class="form-heading">
						<p>Appartments</p>
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
					<h2>Gated Community Apartments in Uppal Hyderabad at the Palmcove Project</h2>
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
									Apartments
								</span>
							</li>
							<li>
								<span class="data-name">
									Brouchure
								</span>
								<span class="data-text">
									<a href="assets/Broucher/Palm-Cove-brocher.pdf"
										target="_blank"><i style="color: red;" class="fa fa-download" aria-hidden="true"></i> Download</a>
								</span>
							</li>
							<li>
								<span class="data-name ">
									Layout
								</span>
								<span class="data-text">
									<a href="assets/Layout/palm-cover-layout.pdf"
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
					<p>Palm Cove, a serene location, is in Hyderabad within the Uppal neighborhood. Uppal Kalan, a part of Hyderabad’s Medchal district in Telangana State, serves as the administrative headquarters for the Uppal Mandal. It falls under the Keesara revenue division. Once an independent municipality, it later became part of the Greater Hyderabad Municipal Corporation.</p>

					<p>Situated amidst the bustling surroundings of Uppal Stadium, Kendriya Vidyalaya School, Aditya Hospitals, IT SEZ Arena, Asian Zone Square Multiplex, and Uppal Bus stand, and conveniently located just 3 km from the Uppal Metro Station, Palm Cove is ideally positioned to offer a harmonious blend of modern amenities and natural tranquility.</p>

					<p>National Highway 202 (NH 202) in India serves as a crucial link connecting Hyderabad in Telangana with Bhopalpatnam in Chattisgarh. The highway traverses through various significant locations, starting from Hyderabad City and passing through Golnaka, Amberpet, Ramanthapur, and Uppal Kalan. It then extends through Bhongir, Jangaon, Ghanpur, Warangal, Atmakur, Mallampalli, Mulug, Nagaram, Chandrupatla, and Bhadrakali.</p>

					<p>The government is making substantial investments to enhance the infrastructure along the Hyderabad and Warangal highways, signaling a promising future for this stretch of road. As these investments continue to grow, the potential for further development and prosperity on the Warangal Highway is bound to reach new heights.</p>

					<p>To be a part of this thriving prospect, consider investing in Palmcove, a premier development by Tricolour Properties Pvt. Ltd. Securing your future through this venture could prove to be a wise decision, as it aligns with the promising growth and opportunities presented by the evolving highway and its surroundings.</p>
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
								<img src="assets/tricolours_icons/banquet halls.png" class="icons"/>
								<div class="serv-cont">
									<h4>Banquet halls</h4>

								</div>
							</a>
							<a class="services-post7" href="#">
								<img src="assets/tricolours_icons/Surveillance.png" class="icons"/>
								<div class="serv-cont">
									<h4>CCTV Surveillance</h4>

								</div>
							</a>
						</div>
						<div class="col-lg-4">
							<a class="services-post7" href="#">
								<img src="assets/tricolours_icons/Children's Tot-Lot.png" class="icons"/>

								<div class="serv-cont">
									<h4>Children's Tot-Lot</h4>

								</div>
							</a>
							<a class="services-post7" href="#">
								<img src="assets/tricolours_icons/Close to Metro Station.png" class="icons"/>

								<div class="serv-cont">
									<h4>Close to Metro Station</h4>

								</div>
							</a>
						</div>
						<div class="col-lg-4">
							<a class="services-post7" href="#">
								<img src="assets/tricolours_icons/Club House.png" class="icons"/>

								<div class="serv-cont">
									<h4>Club House</h4>

								</div>
							</a>
							<a class="services-post7" href="#">
								<img src="assets/tricolours_icons/Drinking water at our premises.png" class="icons"/>

								<div class="serv-cont">
									<h4>Drinking water at our premises</h4>

								</div>
							</a>

						</div>
						<div class="col-lg-4 " >
							<a class="services-post7" href="#">
								<img src="assets/tricolours_icons/Fire safety.png" class="icons"/>

								<div class="serv-cont">
									<h4>Fire safety</h4>

								</div>
							</a>
							
						</div>
						<div class="col-lg-4 " >
							<a class="services-post7" href="#">
								<img src="assets/tricolours_icons/GYM.png" class="icons"/>

								<div class="serv-cont">
									<h4>GYM</h4>

								</div>
							</a>
							
						</div>
						<div class="col-lg-4 " >
							<a class="services-post7" href="#">
								<img src="assets/tricolours_icons/Solar fencing.png" class="icons"/>

								<div class="serv-cont">
									<h4>Solar fencing</h4>

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
									style="color: #fe1706;"></i></span> On the Way to Yadagiri Gutta </li>
						<li style="font-weight: 400"><span
								style="margin-right: 10px;font-weight: 400"><i
									class="fa-solid fa-circle-arrow-right"
									style="color: #fe1706;"></i></span> Warangal Highway NH-202
						</li>
						<li style="font-weight: 400"><span
								style="margin-right: 10px;font-weight: 400"><i
									class="fa-solid fa-circle-arrow-right"
									style="color: #fe1706;"></i></span> Residential Layout Nearby</li>
						<li style="font-weight: 400"><span
								style="margin-right: 10px;font-weight: 400"><i
									class="fa-solid fa-circle-arrow-right"
									style="color: #fe1706;"></i></span> Metro Railway Station</li>
						<li style="font-weight: 400"><span
								style="margin-right: 10px;font-weight: 400"><i
									class="fa-solid fa-circle-arrow-right"
									style="color: #fe1706;"></i></span> 5 Minutes Drive to  Bus Service</li>
						<li style="font-weight: 400"><span
								style="margin-right: 10px;font-weight: 400"><i
									class="fa-solid fa-circle-arrow-right"
									style="color: #fe1706;"></i></span> 5 Minutes Drive to  Metro Rail Station</li>
						<li style="font-weight: 400;"><span
								style="font-weight: 400; margin-right: 10px; "><i
									class="fa-solid fa-circle-arrow-right"
									style="color: #fe1706;"></i></span> Near Singapore Township</li>
						<li style="font-weight: 400"><span
								style="margin-right: 10px;font-weight: 400"><i
									class="fa-solid fa-circle-arrow-right"
									style="color: #fe1706;"></i></span> Raheja Mind Space I.T. Parknearby </li>
						<li style="font-weight: 400"><span
								style="margin-right: 10px;font-weight: 400"><i
									class="fa-solid fa-circle-arrow-right"
									style="color: #fe1706;"></i></span> Infosys</li>
						<li style="font-weight: 400;"><span
								style="font-weight: 400; margin-right: 10px; "><i
									class="fa-solid fa-circle-arrow-right"
									style="color: #fe1706;"></i></span> IICT and MNJ Cancer Hospital</li>
						<li style="font-weight: 400;"><span
								style="font-weight: 400; margin-right: 10px; "><i
									class="fa-solid fa-circle-arrow-right"
									style="color: #fe1706;"></i></span> Close to the Outer Ring Road.</li>

					</ol>

				</div>
			</div>
			<div class="col-md-8">
				<iframe src="https://www.google.com/maps/embed?pb=!1m13!1m8!1m3!1d3807.2570184870474!2d78.574634!3d17.399449!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMTfCsDI0JzAxLjAiTiA3OMKwMzQnMzEuNiJF!5e0!3m2!1sen!2sin!4v1695486053556!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			</div>

			<div class="col-md-12" style="margin-top: 50px;">
				<h2>Gallery</h2>
				<ul class="gallery-list">
					<li>
						<a href="images/palm---1.jpeg" class="zoom">
							<img src="images/palm---1.jpeg" alt="gallery1">
						</a>
					</li>
					<li>
						<a href="images/palm--2.jpeg" class="zoom">
							<img src="images/palm--2.jpeg" alt="gallery2">
						</a>
					</li>
					<li>
						<a href="images/palm--3.jpeg" class="zoom">
							<img src="images/palm--3.jpeg" alt="gallery2">
						</a>
					</li>
					<li>
						<a href="images/palm--4.jpeg" class="zoom">
							<img src="images/palm--4.jpeg" alt="gallery2">
						</a>
					</li>
					<li>
						<a href="images/palm--5.jpeg" class="zoom">
							<img src="images/palm--5.jpeg" alt="gallery2">
						</a>
					</li>
					<li>
						<a href="images/palm--6.jpeg" class="zoom">
							<img src="images/palm--6.jpeg" alt="gallery2">
						</a>
					</li>
					<li>
						<a href="images/palm--7.jpeg" class="zoom">
							<img src="images/palm--7.jpeg" alt="gallery2">
						</a>
					</li>
					<li>
						<a href="images/palm--8.jpeg" class="zoom">
							<img src="images/palm--8.jpeg" alt="gallery2">
						</a>
					</li>
					<li>
						<a href="images/palm--9.jpeg" class="zoom">
							<img src="images/palm--9.jpeg" alt="gallery2">
						</a>
					</li>
					<li>
						<a href="images/palm--10.jpeg" class="zoom">
							<img src="images/palm--10.jpeg" alt="gallery2">
						</a>
					</li>
					<li>
						<a href="images/palm--11.jpeg" class="zoom">
							<img src="images/palm--11.jpeg" alt="gallery2">
						</a>
					</li>
					<li>
						<a href="images/palm--12.jpeg" class="zoom">
							<img src="images/palm--12.jpeg" alt="gallery2">
						</a>
					</li>
					<li>
						<a href="images/palm--13.jpeg" class="zoom">
							<img src="images/palm--13.jpeg" alt="gallery2">
						</a>
					</li>
					<li>
						<a href="images/palm--14.jpeg" class="zoom">
							<img src="images/palm--14.jpeg" alt="gallery2">
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
