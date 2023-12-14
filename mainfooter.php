<!-- footer 

                ================================================== -->               
<?php
$errors = [];
$errorMessage = '';

if (!empty($_POST)) {
   $name = $_POST['f_name'];
   $email = $_POST['f_email'];
   $phonenumber = $_POST['f_phonenumber'];
   $contacttype = $_POST['f_contacttype'];
   $message = $_POST['f_message'];

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
       $emailSubject = 'Subscription Lead - Footer Form';
       $headers = ['From' => $email, 'Reply-To' => $email, 'Content-type' => 'text/html; charset=utf-8'];
       $bodyParagraphs = ["Name: {$name}","<br/>", "Email: {$email}","<br/>", "phonenumber: {$phonenumber}","<br/>", "Message: {$message}" ];
       $body = join(PHP_EOL, $bodyParagraphs);

       if (mail($toEmail, $emailSubject, $body, $headers)) {
        //  header('Location: thank-you.html');
          echo "<script type='text/javascript'>alert('Thank you for contacting us. We will get back to you soon.');</script>";
       } else {
          //  $errorMessage = 'Oops, something went wrong. Please try again later';
          echo "<script type='text/javascript'>alert('Please try again');</script>";
       }

   } else {

       $allErrors = join('<br/>', $errors);
       $errorMessage = "<p style='color: red;'>{$allErrors}</p>";
   }
}

?>

<footer class="template-footer">
  <a class="go-top" href="#">
    <i class="far fa-arrow-alt-circle-up"></i>
  </a>
  <!--<div class="instagram-line"><div class="container"><ul class="insta-list"><li><a href="#"><img src="upload/instagram/1.jpg" alt=""></a></li><li><a href="#"><img src="upload/instagram/2.jpg" alt=""></a></li><li><a href="#"><img src="upload/instagram/3.jpg" alt=""></a></li><li><a href="#"><img src="upload/instagram/4.jpg" alt=""></a></li><li><a href="#"><img src="upload/instagram/5.jpg" alt=""></a></li><li><a href="#"><img src="upload/instagram/6.jpg" alt=""></a></li><li><a href="#"><img src="upload/instagram/7.jpg" alt=""></a></li><li><a href="#"><img src="upload/instagram/8.png" alt=""></a></li></ul></div></div> -->
  <div class="widget-part-area">
    <div class="footer-widget-line">
      <h5>Useful Links</h5>
      <ul class="custom-list">
        <li>
          <a href="compansory-vision.php">Company Story</a>
        </li>
        <!-- <li><a href="nri.php">NRI's</a></li> -->
        <li>
          <a href="https://tricolour.ae/">Overseas</a>
        </li>
        <li>
          <a href="blog.php">Blog</a>
        </li>
        <li>
          <a href="career.php">Careers</a>
        </li>
        <li>
          <a href="measurements.php">Measurements</a>
        </li>
      </ul>
      <h5>Head Office Address</h5>
      <ul class="custom-list">
        <li>
          <a href="#">6-3-251/4, Road No.1, Banjarahills, Hyderabad, Telangana – 500 034.</a>
        </li>
      </ul>
      <h5>Follow Us On</h5>
      <ul class="social-list d-flex">
        <li>
          <a href="https://www.facebook.com/TricolourGroup" target="_blank">
            <i class="fab fa-facebook-square"></i>
          </a>
        </li>
        <li>
          <a href="https://www.instagram.com/tricolourgroup/" target="_blank">
            <i class="fab fa-instagram"></i>
          </a>
        </li>
        <li>
          <a href="https://www.linkedin.com/company/tricolourgroup/" target="_blank">
            <i class="fab fa-linkedin"></i>
          </a>
        </li>
        <li>
          <a href="https://api.whatsapp.com/send?phone=+919611275001&text=Hi." target="_blank">
            <i class="fab fa-whatsapp"></i>
          </a>
        </li>
        <li>
          <a href="https://www.youtube.com/channel/UCc4NY-q_WUBOZoR2B3Q_U9g" target="_blank">
            <i class="fab fa-youtube"></i>
          </a>
        </li>
      </ul>
    </div>
    <div class="footer-widget-line">
      <h5>Quick Links</h5>
      <ul class="custom-list">
        <li>
          <a href="on-going-projects.php">Ongoing Projects</a>
        </li>
        <li>
          <a href="completed-projects.php">Completed Projects</a>
        </li>
        <li>
          <a href="climate-change.php">Climate Change</a>
        </li>
        <li>
          <a href="feedback.php">Feedback</a>
        </li>
        <li>
          <a href="e-brochure.php">Download e-brochure</a>
        </li>
      </ul>
      <h5>Corporate Support</h5>
      <ul class="custom-list">
        <li>
          <a href="#">+91 9809515253</a>
        </li>
        <li>
          <a href="mailto: sales@tricolour.co.in;">sales@tricolour.co.in</a>
        </li>
      </ul>
      <h5>Enquiry</h5>
      <ul class="custom-list">
        <li>
          <a href="mailto: contact@tricolour.co.in;">contact@tricolour.co.in</a>
        </li>
        <li>
          <a href="tel: 1800-120-5153;">1800-120-5153</a>
        </li>
      </ul>
    </div>
    <div class="footer-widget-line">
    <div class="contact-form-box">
    <form  method="post" id="contact-form">
                     <h2>Contact us</h2>
                     <?php // echo((!empty($errorMessage)) ? $errorMessage : '') ?>
                     <p>
                       <input name="f_name" type="text" placeholder="Name" require/>
                     </p>
                     <p>
                       <input  placeholder="Email Id" name="f_email" type="email" required/>
                     </p>
                     <p>
                        <input  placeholder="Phone Number" name="f_phonenumber" type="tel" pattern="[1-9]{1}[0-9]{9}" required/>
                     </p>
                     <p>
                       <input name="f_message" type="text" placeholder="Your Query" required />
                     </p>
                     <!-- <p>
                        <select name="contacttype" class="select-options">
                           <option>Select</option>
                           <option value="contact us ">Contact us</option>
                           <option value="corporate">Corporate</option>
                           <option value="partner">Partner With Us</option>
                           <option value="nri">NRI</option>
                           <option value="enquiry">General Enquiry</option>
                           <option value="overseas">Overseas</option>
                        </select>
                     </p> -->
                     <!-- <p>
                       <textarea name="message" placeholder="Message"></textarea>
                     </p> -->
                     <p>
                       <button type="submit" name="f_submit" id="submit" class="btn1"> Submit </button>
                     </p>
                   </form>
					</div>
    </div>
  </div>
  <img src="images/footer-img.png" alt="" width="100%" style="background-color: #1f1f1f;" />
</footer>
</div>
</div>
<!-- End Container -->
</div>
<!--build:js js/plugins.min.js -->
<script src="js/jquery.min.js"></script>
<script src="js/jquery.migrate.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/jquery.nouislider.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/jquery.imagesloaded.min.js"></script>
<script src="js/jquery.isotope.min.js"></script>
<script src="js/jquery.bxslider.min.js"></script>
<script src="js/jquery.flexslider.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/pathLoader.js"></script>
<script src="js/jquery.themepunch.tools.min.js"></script>
<script src="js/jquery.themepunch.revolution.min.js"></script>
<script src="js/jquery.appear.js"></script>
<!-- endbuild -->
<script src="js/jquery.countTo.js"></script>
<script src="js/gmap3.min.js"></script>
<script src="js/script.js"></script>
<script>
  var chatbot_id = 10967;
  ! function() {
    var t, e, a = document,
      s = "smatbot-chatbot";
    a.getElementById(s) || (t = a.createElement("script"), t.id = s, t.type = "text/javascript", t.src = "https://smatbot.s3.amazonaws.com/files/smatbot_plugin.js.gz", e = a.getElementsByTagName("script")[0], e.parentNode.insertBefore(t, e))
  }();
</script>

</body>
</html>