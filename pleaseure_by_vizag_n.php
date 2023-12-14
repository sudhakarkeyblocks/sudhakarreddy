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
       $emailSubject = 'Project Leads - Pleasure Bay';
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
	<title> Lands / Apartments / Individual villas for sale in Visakhapatnam at Pleasure Bay</title>
	<meta name="description" content="Open plots / Fully furnished Apartments / individual villas for sale at Pleasure Bay located at Denkada, Bhogapuram in Vishakhapatnam. Contact us now."/>
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
					<img src="images/Pleasure-Bay-New-Banner.jpg" width="100%"
						height="500px" />

				</div>
				<div class="col-md-4 pl-0 formE1" style="background-color: #0A0a0a;">
					<h2>
						Pleasure Bay</h2>
					<div class="form-heading">
						<p>Apartments</p>
						<p><span><i class="fa-solid fa-location-dot"
									style="color: #f21a02;"></i></span> Visakhapatnam</p>
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
						<h2>Lands / Apartments / Individual villas for sale at Pleasure Bay Visakhapatnam
						</h2>
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
									Apartments
								</span>
							</li>
							<li>
								<span class="data-name">
									Brouchure
								</span>
								<span class="data-text">
									<a href="assets/Broucher/Pleasure-Bay.pdf"
										target="_blank">Download</a>
								</span>
							</li>
							<li>
								<span class="data-name ">
									Layout
								</span>
								<span class="data-text">
									<a href="assets/Layout/Pleasure-Bay-Layout.pdf"
										target="_blank">Download</a>
								</span>
							</li>
						</ul>

					</div>
				</div>
				<!-- <div class="col-md-6">
					<div class="section-image">
						<div class="feature-image">
							<img src="images/pleaseur-bay-1.jpg" alt="project-img">
						</div>
					</div>
				</div> -->
				<div class="col-md-12">
					<p>The group is deeply committed to providing well-organized open plots, furnished apartments, and individual villas, along with essential facilities like hospitals, schools, and media, fostering strong connections with the community. Welcome to “Pleasure Bay” located in Denkada, Bhogapuram, Vishakhapatnam. Tricolour Properties presents an incredible opportunity to invest in a stunning property by the bay in the most renowned city of Andhra Pradesh.</p>

					<p>Led by our visionary CMD, Mr. Chandhan Kumar Jha, the Tricolour Group thrives on pursuing the seemingly impossible to turn it into reality, setting ambitious targets, and achieving them with determination. As the project director of Vizag Ventures, I uphold the values of rigorous legal verification, self-driven development, timely project completion, and unwavering commitment to customer satisfaction.</p>

						<p>Currently focused on open plots, we have plans to expand into individual villas and flats in Vizag, with upcoming ventures in major cities of Andhra Pradesh shortly. I am grateful to the Tricolour Group for granting me the opportunity to work with this fantastic team, and I pledge to always give my best efforts to deliver excellence to the company and our valued customers.</p>

					<p>Pleasure Bay is strategically located in Denkada, Bhogapuram, Visakhapatnam, a city renowned for its coastline. The project is conveniently situated just 7 km from the proposed International Airport, 7 km from Vizianagaram, and 13 km from the Industrial Park (home to Aurobindo Pharma, Dr. Reddy Labs, etc.), surrounded by various multinational corporations and offering breathtaking hill views.</p>

					<p>The property is developed with a range of amenities, including 40 ft BT roads, underground sewerage lines, beautifully landscaped public spaces and children’s parks, well-lit streets, lush avenue plantations, and a secure compound wall encompassing the entire layout.</p>

					<p>Join us at Pleasure Bay and seize this unique opportunity to be part of an exceptional development in the thriving city of Visakhapatnam, Andhra Pradesh.</p>

				   

					
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
									<h4>40 30ft BT roads</h4>

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
									<h4>Electricity with poles</h4>

								</div>
							</a>
							<a class="services-post7" href="#">
								<img src="assets/tricolours_icons/Immediate Bank loan facility.png" class="icons"/>

								<div class="serv-cont">
									<h4>Immediate Bank loan facility</h4>

								</div>
							</a>
						</div>
						<div class="col-lg-4">
							<a class="services-post7" href="#">
								<img src="assets/tricolours_icons/Security Posts.png" class="icons"/>

								<div class="serv-cont">
									<h4>Security Posts & Surveillance</h4>

								</div>
							</a>
							<a class="services-post7" href="#">
								<img src="assets/tricolours_icons/Surrounded by a Boundary wall.png" class="icons"/>

								<div class="serv-cont">
									<h4>Surrounded by a Boundary wall</h4>

								</div>
							</a>

						</div>
						<div class="col-lg-4 " >
							<a class="services-post7" href="#">
								<img src="assets/tricolours_icons/Underground drainage.png" class="icons"/>

								<div class="serv-cont">
									<h4>Underground sewerage lines</h4>

								</div>
							</a>
							
						</div>
						<div class="col-lg-4 " >
							<a class="services-post7" href="#">
								<img src="assets/tricolours_icons/VUDA Approved Layout.png" class="icons"/>

								<div class="serv-cont">
									<h4>VUDA Approved Layout</h4>

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
									style="color: #fe1706;"></i></span> 7 Km from Vizianagaram </li>
						<li style="font-weight: 400"><span
								style="margin-right: 10px;font-weight: 400"><i
									class="fa-solid fa-circle-arrow-right"
									style="color: #fe1706;"></i></span> Well-designed layout as per Vaastu.
						</li>
						<li style="font-weight: 400"><span
								style="margin-right: 10px;font-weight: 400"><i
									class="fa-solid fa-circle-arrow-right"
									style="color: #fe1706;"></i></span> Local train station nearby</li>
						<li style="font-weight: 400"><span
										style="margin-right: 10px;font-weight: 400"><i
											class="fa-solid fa-circle-arrow-right"
											style="color: #fe1706;"></i></span> Well connected by road and train</li>
						
						<li style="font-weight: 400"><span
								style="margin-right: 10px;font-weight: 400"><i
									class="fa-solid fa-circle-arrow-right"
									style="color: #fe1706;"></i></span> 7 km from the  international airport</li>
						<li style="font-weight: 400"><span
								style="margin-right: 10px;font-weight: 400"><i
									class="fa-solid fa-circle-arrow-right"
									style="color: #fe1706;"></i></span> Close to Many MNCs</li>
						<li style="font-weight: 400;"><span
								style="font-weight: 400; margin-right: 10px; "><i
									class="fa-solid fa-circle-arrow-right"
									style="color: #fe1706;"></i></span> Excellent hill view </li>
						<li style="font-weight: 400;"><span
										style="font-weight: 400; margin-right: 10px; "><i
											class="fa-solid fa-circle-arrow-right"
											style="color: #fe1706;"></i></span> Close to the beach.</li>
						<li style="font-weight: 400"><span
								style="margin-right: 10px;font-weight: 400"><i
									class="fa-solid fa-circle-arrow-right"
									style="color: #fe1706;"></i></span> Surrounded by Ventures</li>
						
						</ol>

				</div>
			</div>
			 <div class="col-md-8">
				<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d30341.142663663217!2d83.477371!3d18.088082!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a3bfb62df0310b9%3A0x63c4017b660c3e2e!2sPleasure%20bay!5e0!3m2!1sen!2sin!4v1695617915874!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			</div>

			<div class="col-md-12" style="margin-top: 50px;">
				<h2>Gallery</h2>
				<ul class="gallery-list">
					<li>
						<a href="images/pleaseur-bay-2.jpg" class="zoom">
							<img src="images/pleaseur-bay-2.jpg" alt="gallery1">
						</a>
					</li>
					<li>
						<a href="images/pleaseur-bay-3.jpg" class="zoom">
							<img src="images/pleaseur-bay-3.jpg" alt="gallery2">
						</a>
					</li>
					<li>
						<a href="images/pleaseur-bay-4.jpg" class="zoom">
							<img src="images/pleaseur-bay-4.jpg" alt="gallery3">
						</a>
					</li>
					<li>
						<a href="images/pleaseur-bay-5.jpg" class="zoom">
							<img src="images/pleaseur-bay-5.jpg" alt="gallery4">
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
