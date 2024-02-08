<?php
$page_title = "Zebrafish Web Design - Contact Us";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title ?></title>
    <link rel="icon" type="image/x-icon" href="images/favicon/zebrafish-favicon.png">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- RECAPTCHA -->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
  <!-- CUSTOM CSS -->
  <link rel="stylesheet" type="text/css" href="css/custom.css">
  <link rel="stylesheet" type="text/css" href="css/animations.css">
    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <!-- AGENDA FONT  -->
  <link rel="stylesheet" href="https://use.typekit.net/giu3qkv.css">
  <!-- 210 SUPERSIZE FONT -->
  <script>
    (function(d) {
      var config = {
        kitId: 'afy8jac',
        scriptTimeout: 3000,
        async: true
      },
      h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
    })(document);
  </script>

<script>
  (function(d) {
    var config = {
      kitId: 'afy8jac',
      scriptTimeout: 3000,
      async: true
    },
    h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
  })(document);
</script>

</head>
<body>

<?php 
include "session/session.php";
?>
              <!-- NAVBAR -->

              <nav class="navbar navbar-two  navbar-expand-md pe-5" id="custom-nav">
                <div class="container-fluid" id="custom-navbar">
                  <a class="navbar-brand" href="#">
        
                    <img src="adobe-files/1light-logo.svg" width="150" height="50" id="navbar-logo">
                  
                  </a>
                  <button class="navbar-toggler pt-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon fa-sliders-light"><i class="fa-solid fa-sliders"></i></span>
                  </button>
                  <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                    <ul class="navbar-nav justify-content-center pe-5 me-5">
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index">Home</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="index#about-us">About</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="themes">Themes</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="faq">FAQ</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link bf-link" href="contact">Contact</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </nav>

<!-- TITLE -->
<div id="title-section-contact">

    <div class="texture"></div>
    <div class="mobile-title-image" class="d-block d-md-none"></div>

    <video loop muted autoplay playsinline preload="auto" class="d-none d-md-block">
        <source src="video/title-one.mp4" type="video/mp4">
        Your browser does not support this video
    </video>

     <div class="hero-text">

<h1 class="page-title">Contact Us</h1>


</div>
</div>

<!-- CONTACT -->
<!-- <div class="help-io"> -->
<section id="contact">
  <div class="container" id="test">
    <div class="help-io">
    <div class="row pt-5 pb-3">

<div class="col-12 col-lg-4 pb-4 pb-lg-0">
<div class="row">
  <div class="col-12">
  <div class="d-flex justify-content-center pb-2">
<button class="contact-icon"><i class="fa-solid fa-phone fa-3x"></i></button>
  </div>
</div>
</div>
<div class="row">
  <div class="col-12">
  <h2 class="contact-header text-center pb-1">Call Us</h2>
  </div>
</div>
<div class="row">
  <div class="col-12">
  <h3 class="custom-card-text text-center">01132 505070</h3>
  </div>
</div>
</div>
      
      <div class="col-12 col-lg-4 pb-5 pb-lg-0">

      <div class="row">
        <div class="col-12">
        <div class="d-flex justify-content-center pb-2">
             <button class="contact-icon"><i class="fa-solid fa-envelope fa-3x"></i></button>
</div>

        </div>
      </div>



        <h2 class="contact-header text-center pb-1">Email Us</h2>


          <h3 class="custom-card-text text-center">info@zebrafishwebdesigns.co.uk</h3>
      </div>

      <div class="col-12 col-lg-4">

        <div class="d-flex justify-content-center pb-2">

          <button class="contact-icon"><i class="fa-solid fa-earth-europe fa-3x"></i></button>

          </div>
        <h2 class="contact-header text-center">Find Us</h2>

          <h3 class="custom-card-text text-center">Unit 4-7 Gateway Drive, LS19 7XY</h3>
      </div>


    </div>
</div>
        </div>




</section>

<div class="col-12 gx-0">


  <svg  data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none" ><path  d="M1200 120L0 16.48 0 0 1200 0 1200 120z" class="shape-fill" fill="#000000" fill-opacity="1"></path></svg>

</div>


<!-- Contact Form -->
 <section>
  <div class="container pb-5 pt-5">
    <div class="row">
      <div class="col-12 pb-4">
        <div class="help-io">
<h2 class="thinking-title text-center">Get In Touch</h2>
</div>
</div>


<div class="form-appear">
<div class="col-12 col-lg-6 offset-lg-3">
<form class="needs-validation" action="contact-form-submit.php" method="POST" novalidate>

              <div class="mb-3">

                <label for="full_name" class="form-label d-flex justify-content-center">FULL NAME</label>
                <?php if(isset($_SESSION['full_name'])){
                  ?>
                <input type="text" name="full_name" class="form-control" id="full_name" value="<?php echo $_SESSION['full_name']?>" required>
                <div class="invalid-feedback">
                       Please enter your full name.
                    </div>
                    <div class="valid-feedback">
                       Looks Good!
                    </div>

                    <?php
              unset($_SESSION['full_name']);
                } else {
                  ?>               
                <input type="text" name="full_name" class="form-control" id="full_name" required>
                <div class="invalid-feedback">
                       Please enter your full name.
                    </div>
                    <div class="valid-feedback">
                       Looks Good!
                    </div>
                  <?php } ?>


              </div>



            
              <div class="mb-3">
                <label for="email" class="form-label d-flex justify-content-center">EMAIL ADDRESS</label>
                <?php if(isset($_SESSION['customer_email'])){
                  ?>
               <input type="email" name="email" class="form-control" id="email" value="<?php echo $_SESSION['customer_email'] ?>" required>
                <div class="invalid-feedback">
                       Please enter a valid email address.
                    </div>
                    <div class="valid-feedback">
                       Looks Good!
                    </div>
                    <?php
                    unset($_SESSION['customer_email']);
                } else {
                  ?>
                                  <input type="email" name="email" class="form-control" id="email" required>
                <div class="invalid-feedback">
                       Please enter a valid email address.
                    </div>
                    <div class="valid-feedback">
                       Looks Good!
                    </div>
               <?php } ?>

              </div>

              <div class="mb-3">
                <label for="number" class="form-label d-flex justify-content-center">CONTACT NUMBER</label>
                <?php
                if(isset($_SESSION['customer_number'])){
                  ?>
                <input type="number" name="number" class="form-control" id="number" value="<?php echo $_SESSION['customer_number']?>" required>
                <div class="invalid-feedback">
                       Please enter a valid number.
                    </div>
                    <div class="valid-feedback">
                       Looks Good!
                    </div>
                    <?php
                    unset($_SESSION['customer_number']);
                } else{
                  ?>
              <input type="number" name="number" class="form-control" id="number" required>
                <div class="invalid-feedback">
                       Please enter a valid number.
                    </div>
                    <div class="valid-feedback">
                       Looks Good!
                    </div>
                <?php } ?>
              </div>
            
              <div class="mb-3">
                <label for="surgery_name" class="form-label d-flex justify-content-center">SURGERY NAME</label>
                <?php
                if(isset($_SESSION['surgery_name'])){
                  ?>
               <input type="text" name="surgery_name" class="form-control" id="surgery_name" value="<?php echo $_SESSION['surgery_name']?>" required>
                <div class="invalid-feedback">
                       Please enter your surgery name.
                    </div>
                    <div class="valid-feedback">
                       Looks Good!
                    </div>
                    <?php
                    unset($_SESSION['surgery_name']);
                } else {
                  ?>
               <input type="text" name="surgery_name" class="form-control" id="surgery_name" required>
                <div class="invalid-feedback">
                       Please enter your surgery name.
                    </div>
                    <div class="valid-feedback">
                       Looks Good!
                    </div>
                <?php } ?>
              </div>

              <div class="mb-3">
                <label for="surgery_postcode" class="form-label d-flex justify-content-center">SURGERY POSTCODE</label>
                <?php if(isset($_SESSION['surgery_postcode'])){
                  ?>
                <input type="text" name="surgery_postcode" class="form-control" id="surgery_postcode" value="<?php echo $_SESSION['surgery_postcode']?>" required>
                <div class="invalid-feedback">
                       Please enter your surgery postcode.
                    </div>
                    <div class="valid-feedback">
                       Looks Good!
                    </div>
                    <?php
                    unset($_SESSION['surgery_postcode']);
                    } else {
                      ?>
                <input type="text" name="surgery_postcode" class="form-control" id="surgery_postcode" required>
                <div class="invalid-feedback">
                       Please enter your surgery postcode.
                    </div>
                    <div class="valid-feedback">
                       Looks Good!
                    </div>
                    <?php
                    }
                    ?>
              </div>
            
              <div class="mb-3">
                <label for="message" class="form-label d-flex justify-content-center">YOUR MESSAGE</label>
                <?php
                if(isset($_SESSION['customer_message'])){
                  ?>
                <textarea class="form-control" name="message" id="message" rows="5" required><?php echo $_SESSION['customer_message'] ?></textarea>
                <div class="invalid-feedback">
                       Please enter your message.
                    </div>
                    <div class="valid-feedback">
                       Looks Good!
                    </div>
                    <?php
                    unset($_SESSION['customer_message']);
                } else {
                  ?>
                <textarea class="form-control" name="message" id="message" rows="5" required></textarea>
                <div class="invalid-feedback">
                       Please enter your message.
                    </div>
                    <div class="valid-feedback">
                       Looks Good!
                    </div>
                    <?php
                }
                ?>
              </div>

               <div class="mb-3 d-flex justify-content-center">
              <div class="g-recaptcha" data-sitekey="6LdpOx4iAAAAAOGybRDh3xzo8yqkDoJd4gu4iF5f" id="recapt"></div>
              </div>
              <?php
              if(isset($_SESSION['recaptcha_fail'])){
                ?>
                <div class="mb-3 custom-invalid-feedback d-flex justify-content-center">
                       Please confirm you are not a robot!
                    </div>
                    <?php
                unset($_SESSION['recaptcha_fail']);
                }
               ?>


              <div class="mb-3 d-flex justify-content-center">
              <button class="custom-button-two" name="submit"><b>Submit</b></button>
              </div>
            
            
            </form>


</div>
</div>


      </div>
    </div>
  </div>
</section>



<!-- FOOTER -->
<div class="container-fluid " id="footer">
  <div class="row">
    <div class="col-12 d-flex justify-content-center pt-3 pb-3">
      &copy;  <i>Zebrafish Web Design | <a href="terms-and-conditions" class="custom-nav-links">Terms & Conditions</a></i> 
    </div>
  </div>
</div>






<!-- FONT AWESOME -->
<script src="https://kit.fontawesome.com/b66f59ea26.js" crossorigin="anonymous"></script>
<!-- JS -->   
<script src="js/detect-ie.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
<script src="js/custom.js"></script>
<script src="js/form-validation.js"></script>
</body>
</html>