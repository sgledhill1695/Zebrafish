<?php
$page_title = "Zebrafish Web Design - Themes";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title ?></title>
    <link rel="icon" type="image/x-icon" href="images/favicon/zebrafish-favicon.png">
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



<?php include "session/session.php" ?>

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
                <a class="nav-link" href="contact">Contact</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

<!-- TITLE -->
<div id="title-section">

    <div class="texture"></div>
    <div class="mobile-title-image" class="d-block d-md-none"></div>

    <video loop muted autoplay playsinline preload="auto" class="d-none d-md-block">
        <source src="video/title-one.mp4" type="video/mp4">
        Your browser does not support this video
    </video>

     <div class="hero-text">

<h1 class="page-title">Our Themes</h1>


</div>
</div>


<!-- THEME ONE -->
<section class="pt-5 theme-one">
<div class="container">
    <div class="row align-items-center">

        <div class="col-12 col-lg-6">
        <div class="help-io">
          <div class="help-one-left">
            <img src="images/theme-one.png" class="img-fluid img-thumbnail" alt="screenshot of the our medical website">
          </div>
        </div>
        </div>

        <div class="col-12 col-lg-6 mb-4 mb-lg-0">
        <div class="help-io">
            <h2 class="theme-header text-center text-lg-start pb-3 pb-lg-0 pt-3 pt-lg-0">Our Medical</h2>
            <div class="theme-text text-center text-lg-start">
              The Our Medical theme comes with a very modern design, built into the theme are a variety of forms which the patient can complete through the website, upon completion they are automatically emailed to you. The theme is fully responsive on tablet and mobile, and also meets all accessibility standards. This theme comes with a Wordpress dashboard.
            </div>
            <div class="text-center text-lg-start">
            <a href="https://our-medical-demo.co.uk/" target="_blank"><button type="button" class="btn btn-primary mt-4 me-2 me-lg-0">Live Preview</button></a> <a href="order-now.php?theme=Our Medical"><button type="button" class="btn btn-primary mt-4" data-bs-toggle="modal" data-bs-target="#exampleModal">Order Now</button></a>            </div>
        </div>
            </div>

        </div>
</div>
    </section>
<div class="col-12 gx-0">


  <svg  data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none" ><path  d="M1200 0L0 0 892.25 114.72 1200 0z" class="shape-fill" fill="#EBEBEB" fill-opacity="1"></path></svg>

</div>


<!-- THEME TWO -->
<section class="pt-5 theme-two">
    <div class="container">
        <div class="row align-items-center">
    
            <div class="col-12 col-lg-6">
              <div class="help-one-left">
                <h2 class="theme-header text-center text-lg-start">Our Surgery</h2>
                <div class="theme-text text-center text-lg-start">
                  The Our Surgery theme focuses on simplicity and ease of use for your patients. The theme is fully responsive on tablet and mobile, and also meets all accessibility standards. Online forms can be built in for you, the theme also comes with a Wordpress dashboard.
                </div>
                <div class="text-center text-lg-start pb-3 pb-lg-0">
                 <a href="https://our-surgery-demo.co.uk/" target="_blank"><button type="button" class="btn btn-primary mt-4 me-2 me-lg-0">Live Preview</button></a> <a href="order-now.php?theme=Our Surgery"><button type="button" class="btn btn-primary mt-4" data-bs-toggle="modal" data-bs-target="#exampleModal">Order Now</button></a>
              </div>
              </div>
            </div>
    
            <div class="col-12 col-lg-6">
              <div class="help-one-right">
                <img src="images/theme-two.png" class="img-fluid img-thumbnail" alt="screenshot of the our surgery website">
              </div>
            </div>
        </section>
    <div class="col-12 gx-0 theme-two-divider">
    
    




    
    </div>
    </div>
    </div>

<!-- THEME THREE -->
<section class="pt-5 mt-5 theme-three">
    <div class="container">
        <div class="row align-items-center">
    
            <div class="col-12 col-lg-6">
              <div class="help-one-left">
                <img src="images/theme-three.png" class="img-fluid img-thumbnail" alt="screenshot of the our care website">
                </div>

            </div>
    
            <div class="col-12 col-lg-6">
              <div class="help-one-right">
                <h2 class="theme-three-header text-center text-lg-start pt-3 pb-3 pt-lg-0 pb-lg-0">Our Care</h2>
                <div class="theme-three-text text-center text-lg-start">
                  The Our Care theme aims to guide patients to to the exact help they need with sections for each department of your surgery. The theme is fully responsive on tablet and mobile, and also meets all accessibility standards. This theme comes with our custom built dashboard, we can also build in online forms.
                </div>
                <div class="text-center text-lg-start mb-3 mb-lg-0">
                <a href="https://our-care-demo.co.uk/" target="_blank"><button type="button" class="btn btn-primary mt-4 me-1 me-lg-0">Live Preview</button></a> <a href="order-now.php?theme=Our Care"><button type="button" class="btn btn-primary mt-4" data-bs-toggle="modal" data-bs-target="#exampleModal">Order Now</button></a></div>
                </div>
        </section>
    <div class="col-12 gx-0 theme-three-divider">
    
    


        <svg  data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none" ><path  d="M1200 0L0 0 892.25 114.72 1200 0z" class="shape-fill" fill="#2e3548" fill-opacity="1"></path></svg>

    
    </div>
    </div>
    </div>

<!-- THEME FOUR -->
<section class="pt-5 mt-5 theme-four">
    <div class="container">
        <div class="row align-items-center">
    
            <div class="col-12 col-lg-6">
              <div class="help-one-left">
                <h2 class="theme-header text-center text-lg-start pb-3 pb-lg-0 pt-3 pt-lg-0">Nightingale</h2>
                <div class="theme-text text-center text-lg-start">
                  Built by the NHS for use within the NHS. This theme gives your website the look and feel of the offical NHS website. We can implement online forms, the theme is fully responsive on tablet and mobile, and also meets all accessibility standards.
                </div>
                <div class="text-center text-lg-start pb-3 pb-lg-0">
                <a href="https://beaumontparkmedicalgroup.co.uk/" target="_black"><button type="button" class="btn btn-primary mt-4 me-1 me-lg-0">Live Preview</button></a> <a href="order-now.php?theme=Nightingale"><button type="button" class="btn btn-primary mt-4" data-bs-toggle="modal" data-bs-target="#exampleModal">Order Now</button></a></div>
                </div>
            </div>
            <div class="col-12 col-lg-6 ">
              <div class="help-one-right">
                <img src="images/theme-four.png" class="img-fluid img-thumbnail" alt="screenshot of the nightingale website">
                </div>
            </div>
        </section>
    <div class="col-12 gx-0 theme-three-divider">
    

    </div>
    </div>
    </div>

    <!-- THEME FIVE -->
<section class="pt-5 mt-5 theme-five">
    <div class="container">
        <div class="row align-items-center">
    
            <div class="col-12 col-lg-6">
              <div class="help-one-left">
                <img src="images/theme-five.png" class="img-fluid img-thumbnail" alt="screenshot of the our practice theme">
</div>
            </div>
    
            <div class="col-12 col-lg-6">
              <div class="help-one-right">
                <h2 class="theme-header text-center text-lg-start pt-3 pt-lg-0 pb-3 pb-lg-0">Our Practice</h2>
                <div class="theme-text text-center text-lg-start">
                  The Our Practice theme focuses on sending the patient to the correct department of your surgery, on page load the patient will see all departments of your surgery where they can navigate to find exactly what they need. Online forms suited to each department are implemented throughout the site, which on completion are automatically emailed to you. The theme is fully responsive on tablet and mobile and also meets all accessibility standards. This theme comes with a Wordpress dashboard.

                </div>
                <div class="text-center text-lg-start mb-3 mb-lg-0">
                <a href="https://our-nhs.com/" target="_blank"><button type="button" class="btn btn-primary mt-4 me-1 me-lg-0">Live Preview</button></a> <a href="order-now.php?theme=Our Practice"><button type="button" class="btn btn-primary mt-4" data-bs-toggle="modal" data-bs-target="#exampleModal">Order Now</button></a></div>
                </div>
        </section>
    <div class="col-12 gx-0 theme-three-divider">
    
<svg  data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none" ><path  d="M1200 0L0 0 598.97 114.72 1200 0z" class="shape-fill" fill="#EBEBEB" fill-opacity="1"></path></svg>

    </div>
    </div>
    </div>

<!-- CONTACT -->
<section>
    <div class="container">

        <div class="row">
            <div class="col-12 d-flex justify-content-center">
            <div class="help-io">
                <h2 class="questions-title">Questions?</h2>
            </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 d-flex justify-content-center">
            <div class="help-io">
                <h3 class="questions-title-sub-title"> get in touch</h3>
            </div>
            </div>
        </div>


        <div class="row">

          <div class="col-12 col-lg-6 offset-lg-3">

<div class="form-appear">
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
<script src="js/custom.js"></script>
<script src="js/form-validation.js"></script>
<!-- BOOTSTRAP JS -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
</body>
</html>

