
<?php
  // if (isset($_POST["submit"])) {
  //         $headers = 'MIME-Version: 1.0' . "\r\n";
  //         $headers.= 'Content-type: text/html; charset=iso-8859-1'. "\r\n";
  //         $headers.= "From: Tricolour Properties <Do-Not-Reply@tricolour.co.in/>";
                

  //         $name=$_POST['c_name'];
  //         $contactreson=$_POST['c_contactreson'];
  //         $conatct=$_POST['c_conatct'];
  //         $subject=$_POST['c_subject'];  

  //         $sub="Tricolour Properties - Contact Page Lead";

  //         $co= "Name :" .$name."<br>";
  //         $co.= "Contact Reason :" .$contactreson."<br>";
  //         $co.= "Phone Number :" .$conatct."<br>";
  //         $co.= "Subject :" .$subject."<br>";
  //        // $msg='Name: ' .$name '\n Email: ' .$email '\n message :' .$co;
                 
  //         // $sent= mail("ektajha@tricolour.co.in",$sub,$co,$headers) or die("error");
  //         // $sent= mail("contact@tricolour.co.in",$sub,$co,$headers) or die("error");
  //         $sent= mail("madhu.keyblocks@gmail.com",$sub,$co,$headers) or die("error");
  //         $sent= mail("prahithgv.keyblocksstrategy@gmail.com",$sub,$co,$headers) or die("error");

  //        if($sent==true){
  //         echo "<script type='text/javascript'>alert('Thank you for contacting us. We will get back to you soon.');</script>";
  //         }
  //         else{
  //         echo "<script type='text/javascript'>alert('Please try again');</script>";
  //         }
  // }
?>

<?php

$errors = [];
$errorMessage = '';

if (!empty($_POST)) {
   $name = $_POST['name'];
   $email = $_POST['email'];
   $phonenumber = $_POST['phonenumber'];
   $contacttype = $_POST['contacttype'];
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
       $emailSubject = 'New Email - Contact Us Page';
       $headers = ['From' => $email, 'Reply-To' => $email, 'Content-type' => 'text/html; charset=utf-8'];
       $bodyParagraphs = ["Name: {$name}","<br/>", "Email: {$email}","<br/>", "phonenumber: {$phonenumber}","<br/>", "Contact Type: {$contacttype}","<br/>", "Message: {$message}" ];
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
   <title>Contact Tricolour Properties today</title>
	<meta name="description" content="Tricolour properties brings you the residential projects with affordable prices for individual budgets and preferences and also aimed to redefine the standards of luxury living." />
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
	.contact-form-box{
		overflow-x: hidden !important;
	}
	.carrer-img{
		width: 100% !important;
	}
   .contact-details{
      margin-bottom: 15px !important;
   }
	}
</style>
<body>
<?php include'mainheader.php'; ?>
<section class="main-banner">
	<div class="">
		<div class="top-bar">
			<div class="col-md-12 bg-container">
				<div>
					<h2 class="text-center">Contact Us</h2>
				</div>
			</div>
		</div>
	</div>
</section>
   <section class="single-project-section" style="overflow-x: hidden;">
      <div class="container">
         <!-- <div class="row" style="margin-bottom: 50px; margin-top: 60px;">
            <div class="col-md-12 bg-container " style="padding-right: 0px;">
               <div>
                  <h2 class="text-center">Contact Us</h2>
               </div>
            </div>
         </div> -->
         <div class="single-project-content">
            <div class="row" style="margin-top: 20px; margin-bottom: 20px;">
               <div class="col-md-4">
                  <div class="contact-details ">
                     <i class="fa-solid fa-location-dot" style="color: #fc1c03; font-size: 30px;margin: 39px;"></i>
                     <div style="margin-left: 10px; margin-top: 20px;" class="address">
                        <a href="https://maps.app.goo.gl/GPzjqD99B2n5gSpP6">
                           <p>Hyderabad Corporate Office</p>
                        </a>
                        <!-- <p>Hyderabad Corporate Office</p> -->
                        <p>6-3-251/4, Road No.1, Banjarahills, Hyderabad – 500034,</p>
                        <p> Telangana, India.</p>
                     </div>
                  </div>
               </div>
               <div class=" col-md-4">
                  <div class="contact-details">
                     <i class="fa-solid fa-phone" style="color: #f92601; font-size: 30px;margin: 39px;"></i>									
                     <div style="margin-left: 10px; margin-top: 20px;">
                        <p>Corporate Support</p>
                        <a href="tel: +91 9809515253;"><p>+91 9809515253</p></a> <br>
                        <a href="tel: +91 9573400059;"><p> +91 9573400059</p></a>
                     </div>
                  </div>
               </div>
               <div class=" col-md-4">
                  <div class="contact-details">
                     <i class="fa-solid fa-square-share-nodes" style="color: #f71302;  font-size: 30px;margin: 39px;"></i>
                     <div style="margin-left: 10px;margin-top: 20px;">
                        <h4><strong>Follow Us</strong></h4>
                        <div class="social-icons">
                           <span style="color: white; font-size: 32px; margin-right: 10px; "> <a href="https://www.facebook.com/TricolourGroup" target="_blank"><i class="fab fa-facebook-square" ></i></a></span>
                           <span style="color: white; font-size: 32px;margin-left: 10px;"><a href="https://www.instagram.com/tricolourgroup/" target="_blank"><i class="fab fa-instagram" ></i></a></span>
                           <span style="color: white; font-size: 32px;margin-left: 10px;"><a href="https://www.linkedin.com/company/tricolourgroup/" target="_blank"><i class="fab fa-linkedin" ></i></a></span>
                           <span style="color: white; font-size: 32px;margin-left: 10px;"><a href="https://www.whatsapp.com/channel/0029Va9fie89sBIAzSwDAd01" target="_blank"><i class="fab fa-whatsapp" ></i></a></span>
                           <span style="color: white; font-size: 32px;margin-left: 10px;"><a href="https://www.youtube.com/channel/UCc4NY-q_WUBOZoR2B3Q_U9g" target="_blank"><i class="fab fa-youtube" ></i></a></span>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <p>Every Project at TRICOLOUR is a result of careful research and analysis, understanding of the current trends, and the customer’s desires has fueled our passion for innovation.</p>
            <div class="row">
               <div class="col-md-6 ">
                  <div class="contact-form-box" style="padding-top: 0px;">
                     <!-- <form id="contact-form_b" name="contactpageform" method="POST"> -->
                     <!-- <form  method="post" id="contact-form">
                        <h4>Quick Contact</h4>
                        <p>We give you multiple reasons on why one should own a property at Tricolour.</p>
                        <div class="input-line">
                           <label for="name"><i class="fas fa-user"></i></label>
                           <input name="name" id="name" type="text" placeholder="Name">
                        </div>
                        <div class="input-line">
                           <select name="email" id="email" class="select-options">
                              <option value="contact us ">Contact us</option>
                              <option value="corporate">Corporate</option>
                              <option value="partner">Partner With Us</option>
                              <option value="nri">NRI</option>
                              <option value="enquiry">General Enquiry</option>
                              <option value="overseas">Overseas</option>
                           </select>
                        </div>
                        <div class="input-line">
                           <label for="phone"><i class="fas fa-phone"></i></label>
                           <input name="c_conatct" id="c_conatct" type="text" placeholder="Phone Number">
                        </div>
                        <div class="input-line">
                           <input name="c_subject" id="c_subject" type="text" placeholder="Subject">
                        </div>
                        <input type="submit" name="submit" id="submit" value="Submit"/>
                     </form> -->
                  
                     <!-- <form method="post">
                        <h4>Contact Us</h4>
                        <div class="input-line">
                           <label for="name"><i class="fas fa-user"></i></label>
                           <input name="name" type="text" placeholder="Name"/>
                        </div>
                        <div class="input-line">
                           <label for="phone"><i class="fas fa-envelope"></i></label>
                           <input placeholder="Email Id" name="email" type="email" required/>
                        </div>
                        <div class="input-line">
                           <label for="phone"><i class="fas fa-phone"></i></label>
                           <input placeholder="PhoneNumber" name="phonenumber" pattern="[6789][0-9]{9}" type="tel"  required/>
                        </div>
                        <div class="input-line">
                           <select name="contacttype" class="select-options">
                                 <option>Select</option>
                                 <option value="contact us ">Contact us</option>
                                 <option value="corporate">Corporate</option>
                                 <option value="partner">Partner With Us</option>
                                 <option value="nri">NRI</option>
                                 <option value="enquiry">General Enquiry</option>
                                 <option value="overseas">Overseas</option>
                              </select>
                        </div>
                        <div class="input-line">
                        <input name="Message" type="text" placeholder="Message"/>
                        </div>
                        <div class="input-line">
                           <input name="c_subject" id="subject" type="text" placeholder="Subject" required>
                        </div> 
                        <button type="submit" name="submit" id="submit" > Submit </button>
                     </form> -->
                                       
                     <form  method="post" id="contact-form">
                        <h2>Contact us</h2>
                        <?php // echo((!empty($errorMessage)) ? $errorMessage : '') ?>
                        <p>
                        <input name="name" type="text" placeholder="Name" required/>
                        </p>
                        <p>
                        <input  placeholder="Email Id" name="email" type="email" required/>
                        </p>
                        <p>
                           <input  placeholder="Phone Numbmer" name="phonenumber" type="tel" pattern="[1-9]{1}[0-9]{9}" required/>
                        </p>
                        <p>
                           <select name="contacttype" class="select-options">
                              <option>Select</option>
                              <option value="contact us ">Contact us</option>
                              <option value="corporate">Corporate</option>
                              <option value="partner">Partner With Us</option>
                              <option value="nri">NRI</option>
                              <option value="enquiry">General Enquiry</option>
                              <option value="overseas">Overseas</option>
                           </select>
                        </p>
                        <p>
                        <textarea name="message" placeholder="Message"></textarea>
                        </p>
                        <p>
                        <button type="submit" name="submit" id="submit" > Submit </button>
                        </p>
                     </form>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="map">
                     <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3806.827685124087!2d78.4495041!3d17.420055199999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcb97bd9ba8b8e7%3A0x898f35b4ebc79ea4!2sTricolour%20Properties%20Pvt.%20Ltd!5e0!3m2!1sen!2sin!4v1696069677567!5m2!1sen!2sin" height="530" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                  </div>
               </div>
               <h4 class="text-center "style="padding-top: 50px;">Our Indian Office Location</h4>
               <div class="row">
                  <div class="col-lg-4 col-md-4 col-12">
                     <div class="text-center contact-card ">
                        <i class="fa-solid fa-location-dot" style="color: #fc1c03; font-size: 50px; padding: 10px;"></i>
                        <a target="_blank" href="https://maps.app.goo.gl/GPzjqD99B2n5gSpP6"><h4>Hyderabad Corporate Office</h4></a>
                        <!-- <h4>Hyderabad Corporate Office</h4> -->
                        <p>6-3-251/4, Road No.1, Banjarahills, Hyderabad – 500034, Telangana, India.</p><br>
                     </div>
                  </div>
                  <div class="col-lg-4 col-md-4 col-12">
                     <div class="text-center contact-card ">
                        <i class="fa-solid fa-location-dot" style="color: #fc1c03; font-size: 50px; padding: 10px;"></i><br>
                        <a href="https://maps.app.goo.gl/9WKnjH5pQqheRBoQ8" target="_blank"><h4>Visakhapatnam Branch</h4></a>
                        <p>9-5-52, 5th Floor, Above Mistubishi Showroom, Isukathota, Visakhapatnam – 530003, Andhra Pradesh, India.</p>
                     </div>
                  </div>
                  <div class="col-lg-4 col-md-4 col-12">
                     <div class="text-center contact-card ">
                        <i class="fa-solid fa-location-dot" style="color: #fc1c03; font-size: 50px; padding: 10px;"></i><br>
                        <a href="https://maps.app.goo.gl/TkWmY4myd1wEJvZNA" target="_blank"><h4>Darbhanga Branch</h4></a>
                        <p>Tricolour Trade Center East-West Corridor, NH-27, Dilli More Darbhanga – 846004, Bihar, India.</p>
                     </div>
                  </div>
               </div>
               <div class="row" style="padding-top: 10px;">
                  <div class="col-lg-4 col-md-4 col-12">
                     <div class="text-center contact-card ">
                        <i class="fa-solid fa-location-dot" style="color: #fc1c03; font-size: 50px; padding: 10px;"></i><br>
                     <a href="https://maps.app.goo.gl/79TGfiY1Qtf9Jo3s9" target="_blank"><h4>Patna Branch</h4></a> 
                        <p>4th Floor, SHANTI-SARITHA Complex, Saguna More, Khagaul Road, Patna – 801503, Bihar, India.</p><br>
                     </div>
                  </div>
                  <div class="col-lg-4 col-md-4 col-12">
                     <div class="text-center contact-card ">
                        <i class="fa-solid fa-location-dot" style="color: #fc1c03; font-size: 50px; padding: 10px;"></i><br>
                     <a href="https://maps.app.goo.gl/DodLZ7qmzt7iuGid9" target="_blank"><h4>Benguluru Branch</h4></a> 
                        <p>#25/3-2, Rathod Vatika, 4th Floor, D4,1st stage Industrial suburb, Yeshwanthpur, Bengaluru – 560022, Karnataka, India.</p><br>
                     </div>
                  </div>
                  <div class="col-lg-4 col-md-4 col-12">
                     <div class="text-center contact-card ">
                        <i class="fa-solid fa-location-dot" style="color: #fc1c03; font-size: 50px; padding: 10px;"></i><br>
                        <a href="https://maps.app.goo.gl/2yxLv1cPE8KyS5g79" target="_blank"><h4>Mumbai Branch</h4></a>
                        <p>Ramdev Plaza, Office No 201, 2nd floor, Kashi village, Western Express Highway, Mira Road East, Thane – 401107, Maharashtra, India.</p>
                     </div>
                  </div>
               </div>
               <h4 class="text-center "style="padding-top: 50px;">Our Overseas Location</h4>
               <div class="col-lg-4 col-md-4 col-12 " >
                  <div class="text-center contact-card ">
                     <i class="fa-solid fa-location-dot" style="color: #fc1c03; font-size: 50px; padding: 10px;"></i><br>
                     <a href="https://maps.app.goo.gl/UPs6CVyFzvYqDnNMA" target="_blank"><h4>Dubai (UAE) Office</h4></a>
                     <p>Tricolour Properties LLC Suite no 1508, 15th floor, Tameem House, Al Barsha Heights, Dubai, UAE.
                     </p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
</body>
</html>
<!-- single-project-section 
   ================================================== -->

<!-- End single-project-section -->
<?php include'mainfooter.php'; ?>