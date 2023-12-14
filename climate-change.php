
<?php

$errors = [];
$errorMessage = '';

if (!empty($_POST)) {
   $name = $_POST['name'];
   $email = $_POST['email'];
   $phonenumber = $_POST['phonenumber'];


   if (empty($name)) {
       $errors[] = 'Name is empty';
   }

   if (empty($email)) {
       $errors[] = 'Email is empty';
   } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
       $errors[] = 'Email is invalid';
   }

//    if (empty($message)) {
//        $errors[] = 'Message is empty';
//    }

   if (empty($errors)) {
       $toEmail = 'ektajhatricolour@gmail.com';
       $emailSubject = 'New Email - Climate Change';
       $headers = ['From' => $email, 'Reply-To' => $email, 'Content-type' => 'text/html; charset=utf-8'];
       $bodyParagraphs = ["Name: {$name}","<br/>", "Email: {$email}","<br/>", "phonenumber: {$phonenumber}","<br/>"];
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
	<title>Tricolour Properties: Reforestation, Rainwater Harvesting, Global Warming Solutions</title>
	<meta name="description" content="Explore our eco-conscious properties designed for a sustainable future. Discover our initiatives for reforestation, rainwater harvesting, and fighting global warming. Get involved in building a greener world. Act now!" />
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
</head>
<style>
	.top-bar{
		margin-top: 100px;
	}
	@media(max-width: 480px){
		.top-bar{
		margin-top: 0px;
	}
	.social-icons{
		text-align: left;
	}
	}
</style>
<body>
<?php include'mainheader.php'; ?>
	<!-- single-project-section 
				================================================== -->
<section class="main-banner">
	<div class="">
		<div class="top-bar">
			<div class="col-md-12 bg-container">
				<div>
					<h2 class="text-center">Climate Change</h2>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="single-project-section">
					<div class="container">
						<div>
							<div class="row">
								--------
								<section style="margin-top: 20px;">
									<div class="container">
										<div class="features-box">
											<div class="row">
												<div class="col-lg-6">
													<div class="feature-content">
														<h3>Unite for Change: Tricolour Colours' Climate Crusade</h3>
														<p>Climate change, the defining challenge of our era, calls for resolute action. The world is at a crossroads, and we believe it's time to make a change. The signs of our planet's distress are undeniable. Rising temperatures, extreme weather events, and dwindling resources are stark reminders that we must act now.</p>
														<p>We are introducing an initiative at Tricolour Properties with a beacon of hope in the face of drastic environmental changes. At Tricolour Colours, we've heard the call, and we're responding with unwavering determination.</p>
														<p>Our Climate Change Initiative is a testament to our commitment to addressing this global crisis.</p>
														<!-- <a href="https://fabric-lab.co/royarch/about/" class="theme-button"><span>Learn More</span></a> -->
													</div>
												</div>
												<div class="col-lg-6 features-section2" >
													<div class="images-box">
														<div class="row">
															<div class="col-md-6" style="width: 100%;">
																<div class="image-holder">
																	<img src="images/climate-change-1.jpg" alt="" class="image" width="100%">
																	<!-- <a href="">Building &amp; Construction</a> -->
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="col-md-12" style="margin-top: 10px;">
													<p> But it's not just about confronting the problem; it's about being part of the solution. Our intent is crystal clear: to fuse luxurious living with eco-consciousness. Imagine homes that don't just shelter you, but also nurture the planet.</p>
													<p>Tricolour properties, from apartments to villas to open plots, are designed not only for your comfort but also for the planet's well-being. Each development integrates sustainable practices, from energy-efficient designs to green spaces, ensuring that your dream home also contributes to a sustainable future.</p>
													<p>Join us as we unveil the exciting initiatives we're eager to roll out through this campaign, all geared toward transforming our world into a more sustainable and livable place.</p>
													<p>Let's harvest the rain, protect our environment, and ensure a sustainable water future. <span style="color: #E31E24;font-weight: 600;">Take the first step towards change now!</span> </p>
												</div>
											</div>
										</div>
									</div>
								</section>
								<section class="features-section2 pt-4">
									<div class="container">
										<div class="features-box2">
											<div class="row">
											<div class="col-lg-6 features-section2" >
													<div class="images-box">
														<div class="row">
															<div class="col-md-6" style="width: 100%;">
																<div class="image-holder">
																	<img src="images/plantation.jpg" alt="" class="image" width="100%">
																	<!-- <a href="">Building &amp; Construction</a> -->
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="col-lg-6">
													<div class="feature-content">
														<!-- <span>amazing features</span> -->
														<h3 style="text-align: left !important;">Plantation</h3>
														<p style="text-align: start;">Reforestation and afforestation are crucial efforts for the health of our planet. Deforestation, driven by human activities, has led to catastrophic consequences such as habitat loss, increased carbon dioxide levels, and disrupted ecosystems. According to alarming statistics, we've lost millions of hectares of forest, contributing to climate change, biodiversity loss, and soil erosion.</p>
														<p style="text-align: start;">Recognizing the urgency, we're launching bold plantation initiatives. Our goal is to plant as many trees as we can in the next year, restoring vital habitats and sequestering carbon. Through these initiatives, we aim to combat deforestation's detrimental effects and restore the balance that nature desperately needs.</p>
													</div>
												</div>
											</div>
											<div class="col-md-12" style="margin-top: 10px;">
											<p>But we can't do it alone. We invite you to take action by supporting or participating in our tree-planting efforts. Whether you volunteer your time, donate to the cause, or spread awareness, your involvement can make a tangible impact. Let's come together to heal our planet, by planting trees. <span style="color: #E31E24;font-weight: 600;">Join us in safeguarding the future for generations to come!</span> </p>
										</div>
										</div>
									</div>
									
								</section>
								......
								<section style="margin-top: 20px;">
									<div class="container">
										<div class="features-box">
											<div class="row">
												<div class="col-lg-6">
													<div class="feature-content">
														<h3>Rainwater harvesting</h3>
														<p>Rainwater harvesting is a sustainable practice that involves collecting and storing rainwater for later use. It's a simple yet effective way to conserve water resources and reduce the strain on traditional water supplies. By capturing rainwater from rooftops and other surfaces, it can be used for various non-potable purposes such as watering plants, flushing toilets, and even some household cleaning tasks.</p>
														<p>The benefits of rainwater harvesting are numerous. It helps mitigate water scarcity issues, reduces demand for municipal water supplies, and lowers water bills. Moreover, it lessens the risk of erosion and flooding by controlling stormwater runoff. Environmentally, rainwater harvesting reduces the need for energy-intensive water treatment processes and lowers greenhouse gas emissions associated with water distribution.</p>
														<!-- <a href="https://fabric-lab.co/royarch/about/" class="theme-button"><span>Learn More</span></a> -->
													</div>
												</div>
												<div class="col-lg-6 features-section2" >
													<div class="images-box">
														<div class="row">
															<div class="col-md-6" style="width: 100%;">
																<div class="image-holder">
																	<img src="images/rainwater.jpg" alt="" class="image" width="100%">
																	<!-- <a href="">Building &amp; Construction</a> -->
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="col-md-12" style="margin-top: 10px;">
													<p>Statistics show the success of rainwater harvesting worldwide. Many regions have implemented large-scale systems, with significant water savings and reduced strain on local water sources. For instance, cities like Singapore have embraced rainwater harvesting, contributing to water resilience.</p>
													<p>To make a difference, we are considering adopting rainwater harvesting at home and in the communities we build. Simple steps like installing rain barrels or more elaborate systems can contribute to sustainable water management, alleviate pressure on water resources, and foster a greener future.</p>
													<p>Let's harvest the rain, protect our environment, and ensure a sustainable water future. <span style="color: #E31E24;font-weight: 600;">Take the first step towards change now!</span> </p>
												</div>
											</div>
										</div>
									</div>
								</section>
								......
								-----------
								<section class="features-section2 pt-4">
									<div class="container">
										<div class="features-box2">
											<div class="row">
											<div class="col-lg-6 features-section2" >
													<div class="images-box">
														<div class="row">
															<div class="col-md-6" style="width: 100%;">
																<div class="image-holder">
																	<img src="images/globalwarm.jpg" alt="" class="image" width="100%">
																	<!-- <a href="">Building &amp; Construction</a> -->
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="col-lg-6">
													<div class="feature-content">
														<!-- <span>amazing features</span> -->
														<h3 style="text-align: left !important;">Global warming</h3>
														<p style="text-align: start;">Global warming refers to the long-term increase in Earth's average surface temperature due to the build-up of greenhouse gases in the atmosphere. The primary causes are human activities such as burning fossil fuels (coal, oil, and gas), deforestation, and industrial processes. These activities release carbon dioxide and other greenhouse gases, which trap heat and lead to the planet's temperature rise.</p>
														<p style="text-align: start;">The effects of global warming are far-reaching and include rising sea levels, more frequent and severe heatwaves, melting glaciers, disrupted ecosystems, and increased intensity of natural disasters like hurricanes and wildfires.</p>
													</div>
												</div>
											</div>
											<div class="col-md-12" style="margin-top: 10px;">
											<p>To combat global warming, individuals and communities can adopt sustainable practices like reducing energy consumption, using renewable energy sources, minimizing waste, supporting public transportation, and promoting reforestation.</p>
											<p>Noteworthy success stories include countries like Sweden transitioning to renewable energy, Costa Rica championing reforestation, and various cities worldwide promoting cycling and walking to reduce carbon emissions. These efforts demonstrate that collective action, policy changes, and technological innovations play a vital role in mitigating global warming and securing a sustainable future.</p>
											<p>Take action against global warming with us! Join our initiative to make sustainable choices in our communities and your volunteer is much appreciated. Let's build a greener future together.  <span style="color: #E31E24;font-weight: 600;">Act now!</span> </p>
										</div>
										</div>
									</div>
									
								</section>

								<section style="margin-top: 20px;">
									<div class="container">
										<div class="features-box">
											<div class="row">
												<div class="col-lg-6">
													<div class="feature-content">
														<h3>Get involved</h3>
														<p>Getting involved in our campaign is easy and impactful. We believe that change is driven by collective efforts, and we invite readers like you to be a part of our mission. Here's how you can get involved:</p>
														<p><span style="color: #E31E24;font-weight: 600;">Volunteering: </span>Your time and skills are invaluable to us. We offer various volunteer opportunities where you can actively contribute to the campaign's success. Whether it's spreading awareness, organizing events, or assisting with administrative tasks, your help makes a significant difference.</p>
														<p>For more information, contact us at <span><a style="color: #E31E24;font-weight: 600;" href="mailto: contact@tricolour.co.in">contact@tricolour.co.in</a></span> <span><a style="color: #E31E24;font-weight: 600;" href="tel: 1800-120-5153">1800-120-5153</a></span> or visit our website at <span><a style="color: #E31E24;font-weight: 600;" href="https://tricolour.co.in/">tricolour.co.in</a></span> to sign up, and become a volunteer. Together, we can make a lasting difference and create a better future for all. Join us today! </p>
														<!-- <a href="https://fabric-lab.co/royarch/about/" class="theme-button"><span>Learn More</span></a> -->
													</div>
												</div>
												<div class="col-lg-6 features-section2" >
													<div class="images-box">
														<div class="row">
															<div class="col-md-6" style="width: 100%;">
																<div class="image-holder">
																	<img src="images/getinvolved.jpg" alt="" class="image" width="100%">
																	<!-- <a href="">Building &amp; Construction</a> -->
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="col-md-12" style="margin-top: 10px;">
													
												</div>
											</div>
										</div>
									</div>
								</section>

								<section class="features-section2 pt-4">
									<div class="container">
										<div class="features-box2">
											<div class="row">
											<div class="col-md-6 ">
												<div class="contact-form-box" style="padding-top: 0px;">
													<form method="post" id="contact-form">
														<h4>Quick Contact</h4>
														<p>Join us in our climate change cruise.</p>
														<div class="input-line">
															<label for="name"><i class="fas fa-user"></i></label>
															<input name="name" type="text" placeholder="Name"/>
														</div>
														<!-- <div class="input-line">
															<label>Contact</label>
															<label for="phone"><i class="fas fa-phone"></i></label>
														<input name="Conatct" id="website" type="text" placeholder="Phone Number">
															<select name="c_contactreson" class="select-options" required>
															<option value="contact us ">Contact us</option>
															<option value="corporate">Corporate</option>
															<option value="partner">Parner With Us</option>
															<option value="nri">NRI</option>
															<option value="enquiry">General Enquiry</option>
															<option value="overseas">Overseas</option>
															</select>
														</div> -->
														<div class="input-line">
															<label for="phone"><i class="fas fa-envelope"></i></label>
															<input placeholder="Email Id" name="email" type="email" required/>
														</div>
														<div class="input-line">
															<label for="phone"><i class="fas fa-phone"></i></label>
															<input placeholder="PhoneNumber" name="phonenumber" pattern="[6789][0-9]{9}" type="tel"  required/>
														</div>
														<!-- <div class="input-line">
															<input name="c_subject" id="subject" type="text" placeholder="Subject" required>
														</div> -->
														<button type="submit" name="submit" id="submit" > Submit </button>
													</form>
												</div>
												</div>
												<div class="col-lg-6">
													<div class="feature-content">
														<!-- <span>amazing features</span> -->
														<h3 style="text-align: left !important;">Contact us</h3>
														<p style="text-align: start;">We value open communication and collaboration, and we're eager to hear from you. Here's how you can connect with us:</p>
														<ul style="text-align: start;line-height: 30px;">
															<li><i class="fa fa-envelope"></i> <a style="color: #fff;font-weight: 600;" href="mailto: contact@tricolour.co.in"> contact@tricolour.co.in</a></li>
															<li><i class="fa fa-phone"></i> <a style="color: #fff;font-weight: 600;" href="tel: 1800-120-5153">1800-120-5153</a></li>
														</ul>
														<p style="text-align: start;">Stay updated and engage with us on social media. Follow our official accounts on Facebook, Twitter, Instagram, and LinkedIn. Share our campaign with your network to amplify our message and impact.</p>
														<div class="social-icons">
															<span style="color: white; font-size: 28px;margin-right: 10px; "> <a href="https://www.facebook.com/TricolourGroup" target="_blank"><i class="fab fa-facebook-square" ></i></a></span>
															<span style="color: white; font-size: 28px;margin-left: 10px;"><a href="https://www.instagram.com/tricolourgroup/" target="_blank"><i class="fab fa-instagram" ></i></a></span>
															<span style="color: white; font-size: 28px;margin-left: 10px;"><a href="https://www.linkedin.com/company/tricolourgroup/" target="_blank"><i class="fab fa-linkedin" ></i></a></span>
															<span style="color: white; font-size: 28px;margin-left: 10px;"><a href="https://www.whatsapp.com/channel/0029Va9fie89sBIAzSwDAd01" target="_blank"><i class="fab fa-whatsapp" ></i></a></span>
															<span style="color: white; font-size: 28px;margin-left: 10px;"><a href="https://www.youtube.com/channel/UCc4NY-q_WUBOZoR2B3Q_U9g" target="_blank"><i class="fab fa-youtube" ></i></a></span>
                     									</div>
														<p style="text-align: start;">Your feedback, inquiries, and support are invaluable to us. We look forward to connecting with you and working together to achieve our shared goals. Let's make a difference together!</p>
													</div>
												</div>
											</div>
											
										</div>
									</div>
									
								</section>
								<!-- <div class="row" style="margin-bottom: 20px; margin-top: 60px;">

                                    <div class="row" style="margin-bottom: 20px; margin-top: 60px;">

                                        <div class="col-md-6">

                                            <h2 style="color: red;">The Leading Real Estate Company in India.</h2>

                                        <p>The relationship between these spaces and the lives ensconced in or around these spaces is Tricolour's constant quest and abiding commitment. Whether it’s Mumbai, Bengaluru, Hyderabad or any other prominent city, these ever-evolving and reverberating cities are in a constant quest for spaces that can not only accommodate but also build efficiencies for its everyday flight of ambition and purpose-led growth.

                                        </p>

    

                                        <p>It is in this backdrop that Tricolour took its roots, over one decade ago with a view to redefine living – delivering the cutting-edge with best global parameters to match or surpass. Over the years, we have built growth and high-stature through consistent high-design and quality parameters that have truly made a significant difference to ease, comfort and efficiency to lives that interact with or inhabit these spaces.</p>

    

                                        </div>

                                        <div class="col-md-6">

                                            <div class="image-holder ">

                                                <img src="images/tricolor-vision-1.png" class="vision-img" width="100%" />

                                                <div class="overlay">

                                                    

                                                </div>

                                              

                                                

                                            </div>

    

                                        </div>

                                    </div>

                                    

                                   

                                    <div class="col-md-6">

                                        <div class="image-holder ">

                                            <img src="images/mission_1.png" class="vision-img" width="100%" />

                                            <div class="overlay">

                                                

                                            </div>

                                          

                                            

                                        </div>



                                    </div>

                               

                                    <div class="col-md-6  d-flex flex-column justify-content-center">

                                        <h2 style="color: red;">Our Mission</h2>

                                        <p>At Tricolour Properties, our mission is to lead the Indian real estate industry with a resolute commitment to addressing climate change and fostering sustainability. We aspire to integrate eco-conscious practices into every aspect of our operations, creating a portfolio of sustainable properties that not only meet our clients' needs but also contribute positively to the environment. Our goal is to set new industry standards and inspire a culture of environmental responsibility, demonstrating that economic prosperity and environmental stewardship can go hand in hand.

										</p>



                                    </div>

                                </div>

                                <div class="row " style="margin-bottom: 20px; margin-top: 20px;">

                                    <div class="col-md-6  d-flex flex-column justify-content-center">

                                        <h2 style="color: red;">Our Vision</h2>

                                        <p>Our vision at Tricolour Properties is to envision a future where we play a pivotal role in elevating the quality of people's lives on a grand scale. We firmly uphold the values of integrity, trustworthiness, sustained effort, and unwavering commitment. These values form the bedrock of our organization and serve as guiding principles for our dedicated workforce.





                                        </p>



                                    </div>

                                    <div class="col-md-6 ">

                                        <div class="image-holder ">

                                            <img src="images/mission-2.png" class="vision-img" width="100%" height="300px"/>

                                            <div class="overlay">

                                                

                                            </div>

                                          

                                            

                                        </div>



                                    </div>

                                </div> -->

							</div>

						</div>

					</div>

				</section>

				<!-- End single-project-section -->
				<?php include'mainfooter.php'; ?>
</body>
</html>
			
				