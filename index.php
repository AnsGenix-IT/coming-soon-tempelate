<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>ComingSoon | Naani's Super Mart</title>
  <meta content="Naanis supermart" name="Naanis supermart">
  <meta content="Naanis supermart" name="Naanis supermart">
  

  <!-- Favicons -->
  <link href="assets/img/favicon.jpg" rel="icon">
  <link href="assets/img/apple-touch-icon.jpg" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600&display=swap" rel="stylesheet">
  <!--<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">-->
  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">


</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center" >
    <div class="container d-flex flex-column align-items-center">

      
     
	<h1 style="text-align:center">Coming Soon</h1>
      <h2 style="text-align:center">Naani’s supermart is an online store that DELIVERS household needs</h2>
      <h2 style="text-align:center">to the customer’s doorstep at LOWEST PRICE.</h2>
      <h2 style="text-align:center">Call / WhatsApp</h2>
	
	  <h2 style="text-align:center"><a href="https://wa.me/message/IAGQBSY7RBRIN1">8899-87-9988</a></h2>
      <div class="subscribe">
        <h4>Subscribe now to get the latest updates!</h4>
        
      </div>

      <div class="social-links text-center">
          <a href="https://m.facebook.com/naanissupermart.fb/" class="facebook"><i class="icofont-facebook"></i></a>
        <a href="https://twitter.com/naanissupermart" class="twitter"><i class="icofont-twitter"></i></a>
        
        <a href="https://www.instagram.com/naanissupermart/?hl=en" class="instagram"><i class="icofont-instagram"></i></a>
      </div>

    </div>
	
  </header><!-- End #header -->
   <main id="main">
    <section id="contact" class="contact">
	 <div class="col-lg-8 container d-flex flex-column align-items-center mt-4">
     
		<form action="forms/contact.php" method="post" role="form" class="php-email-form">
		   <h2 class="text-center">Register Here</h2>
		   <h5 class="text-center">Enter the following details</h5>
              <div class="form-row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <input type="number" class="form-control" name="number" id="number" placeholder="Contact Number" data-rule="minlen:10 maxlen:10 required" data-msg="Please enter at least 10 digit number" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
               <textarea type="text" class="form-control" name="address"  rows="5" data-rule="required" data-msg="Please provide your address details" placeholder="Your Address"></textarea>
        
              </div>
              <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Register</button></div>
            
  <!--some php logic for displaying differnt error messages to the user if it fills 
     the form incorrectly or if any internal server error occured -->
   <?php 
   $fullurl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

   if(strpos($fullurl, "message=Register_fields_empty") == true){ ?>
     <div class="alert alert-danger mt-3" role="alert">
      You have not fill all the fields of form.
     </div>
     

   <?php }elseif(strpos($fullurl, "message=invalid_characters") == true){ ?>
    <div class="alert alert-danger mt-3" role="alert">
    Please enter your name correctly
  </div>
     

  <?php }elseif(strpos($fullurl, "message=email_registered") == true){ ?>
    <div class="alert alert-success mt-3" role="alert">
    You have been registered
  </div>
      
 <?php }elseif(strpos($fullurl, "message=email_not_registered") == true) {?>
    
  <div class="alert alert-warning mt-3" role="alert">
    Some error occured please try again
  </div>
   
 <?php } ?>

 <!--php logic end-->

 </form>
		</div>
</section>
   </main>
  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span><a href="http://ansgenix.com/"> AnsGenix IT Solutions</a></span></strong>. All Rights Reserved
      </div>
      
    </div>
  </footer><!-- End #footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/jquery-countdown/jquery.countdown.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>