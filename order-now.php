<?php
$page_title = "Zebrafish Web Design - Order Now";
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


<?php
if(isset($_SESSION['order_form_fail'])){

echo $_SESSION['order_form_fail'];
unset ($_SESSION['order_form_fail']);

}
?>



<!-- CHOSEN THEME -->
<?php
$chosen_theme = $_GET['theme'];
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

<h1 class="page-title">Order Now</h1>


</div>
</div>


<!-- FORM SECTION -->
<section class="form-section mt-5 mb-5">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6 offset-lg-3">

              <div class="text-center order-now-text mb-5">
                Complete the below form and we'll be in touch within 24 hours to get started on your new website!
              </div>

              <form class="needs-validation" action="order-now-form-submit.php" method="POST" novalidate>

                 <div class="mb-3">
                    <label for="chosen_theme" class="form-label">Chosen Theme</label>
                    <?php
                    if(isset($_SESSION['chosen_theme'])){
                      ?>
                      <input type="text" name="chosen_theme" class="form-control" id="chosen_theme" placeholder="<?php echo $_SESSION['chosen_theme'] ?>"  value="<?php echo $_SESSION['chosen_theme'] ?>" readonly>
                      <?php
                      unset($_SESSION['chosen_theme']);
                    } else {
                      ?>
                      <input type="text" name="chosen_theme" class="form-control" id="chosen_theme" placeholder="<?php echo $chosen_theme ?>"  value="<?php echo $chosen_theme?>" readonly>
                      <?php
                    }
                    ?>
                  </div>

                <div class="mb-3">
                    <label for="full_name" class="form-label">Full Name</label>
                    <?php
                    if(isset($_SESSION['full_name'])){
                      ?>
                    <input type="text" class="form-control" id="full_name" name="full_name" value="<?php echo $_SESSION['full_name'] ?>" required>
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
                    <input type="text" class="form-control" id="full_name" name="full_name" required>
                    <div class="invalid-feedback">
                       Please enter your full name.
                    </div>
                    <div class="valid-feedback">
                       Looks Good!
                    </div>
                    <?php
                    }
                    ?>
                    </div>


                  <div class="mb-3">
                    <label for="contact_email" class="form-label">Contact Email</label>
                    <?php
                    if(isset($_SESSION['contact_email'])){
                      ?>
                    <input type="email" name="contact_email" class="form-control" id="contact_email" value="<?php echo $_SESSION['contact_email'] ?>" required>
                    <div class="invalid-feedback">
                       Please enter a vaild email address.
                    </div>
                    <div class="valid-feedback">
                       Looks Good!
                    </div>
                    <?php
                    unset($_SESSION['contact_email']);
                    } else {
                      ?>
                    <input type="email" name="contact_email" class="form-control" id="contact_email" required>
                    <div class="invalid-feedback">
                       Please enter a vaild email address.
                    </div>
                    <div class="valid-feedback">
                       Looks Good!
                    </div>
                    <?php
                    }
                    ?>
                  </div>

                  <div class="mb-3">
                    <label for="contact_number" class="form-label">Contact Number</label>
                    <?php
                    if(isset($_SESSION['contact_number'])){
                      ?>
                     <input type="number" name="contact_number" class="form-control" id="contact_number" value="<?php echo $_SESSION['contact_number'] ?>" required>
                    <div class="invalid-feedback">
                       Please enter a vaild contact number.
                    </div>
                    <div class="valid-feedback">
                       Looks Good!
                    </div>
                    <?php
                    unset($_SESSION['contact_number']);
                    } else {
                      ?>
                    <input type="number" name="contact_number" class="form-control" id="contact_number" required>
                    <div class="invalid-feedback">
                       Please enter a vaild contact number.
                    </div>
                    <div class="valid-feedback">
                       Looks Good!
                    </div>
                     <?php
                    }
                    ?>
                  </div>

                  <div class="mb-3">
                    <label for="surgery_name" class="form-label">Surgery Name</label>
                    <?php
                    if(isset($_SESSION['surgery_name'])){
                      ?>
                    <input type="text" class="form-control" id="surgery_name" name="surgery_name" value="<?php echo $_SESSION['surgery_name'] ?>" required>
                    <div class="invalid-feedback">
                       Please enter your surgery name.
                    </div>
                    <div class="valid-feedback">
                       Looks Good!
                    </div>
                    <?php
                    unset($_SESSION['surgery_name']);
                    } else{
                      ?>
                    <input type="text" class="form-control" id="surgery_name" name="surgery_name" required>
                    <div class="invalid-feedback">
                       Please enter your surgery name.
                    </div>
                    <div class="valid-feedback">
                       Looks Good!
                    </div>
                    <?php
                    }
                    ?>
                  </div>

                  <div class="mb-3">
                    <label for="surgery_postcode" class="form-label">Surgery Postcode</label>
                    <?php
                    if(isset($_SESSION['surgery_postcode'])){
                      ?>
                    <input type="text" class="form-control" id="surgery_postcode" name="surgery_postcode" value="<?php echo $_SESSION['surgery_postcode']?>" required>
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
                    <input type="text" class="form-control" id="surgery_postcode" name="surgery_postcode" required>
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
                 <label for="surgery_contract" class="form-label cust-label">If you are currently tied into a contract, when does this contract end?</label>
                 <select class="form-select" name="surgery_contract" aria-label="">
                     <option selected value="No date given">Select</option>
                     <option value="Between January and March">Between January and March</option>
                     <option value="Between April and June">Between April and June</option>
                     <option value="Between July and September">Between July and September</option>
                     <option value="Between October and December">Between October and December</option>
                 </select>
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

                  <div class="d-flex justify-content-center">
                  <button class="custom-button-two" name="submit"><b>Submit</b></button>
                  </div>

                </form>

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

