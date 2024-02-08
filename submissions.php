<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Themes</title>
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




<div class="section" id="submission-section">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="d-flex flex-column min-vh-100 justify-content-center align-items-center"> 

                      <?php
                      if(isset($_SESSION['order_form_success'])){
                      ?>

                    <div class="submission-card">
                    <div class="text-center">
                    <i class="fa-solid fa-circle-check custom-tick-two fa-3x pb-1"></i>
                    <h3 class="submission-header">Submission Recieved</h3>
                    <div class="submisson-text">Thank you for your submission, you will be automatically redirected or <a href="themes.php"><b>click here.</b></a></div>
                    </div>
                    </div>

                    <?php
                      unset ($_SESSION['order_form_success']);
                    } else if(isset($_SESSION['order_form_fail'])){
                    ?>

                    <div class="submission-card">
                    <div class="text-center">
                    <i class="fa-solid fa-circle-xmark custom-cross fa-3x"></i>
                    <h3 class="submission-header">Error With Submission</h3>
                    <div class="submisson-text">Error with submission, instead please contact us on 01132 505070. You will be automatically redirected or <a href="themes.php"><b>click here.</b></a></div>
                    </div>
                    </div>

                    <?php
                      unset ($_SESSION['order_form_fail']);
                    } else {
                      ?>

                      <div class="submission-card">
                      <div class="text-center">
                      <i class="fa-solid fa-circle-xmark custom-cross fa-3x"></i>
                      <h3 class="submission-header">Error With Submission</h3>
                      <div class="submisson-text">Error with submission, instead please contact us on 01132 505070. You will be automatically redirected or <a href="themes.php"><b>click here.</b></a></div>
                      </div>
                      </div>
                      <?php
                    }
                    ?>

                    </div>
                </div>
            </div>
        </div>
    </div>



<script>
setTimeout(function () {
   window.location.href= 'themes.php'; // the redirect goes here

},8000); // 5 seconds
</script>

<!-- FONT AWESOME -->
<script src="https://kit.fontawesome.com/b66f59ea26.js" crossorigin="anonymous"></script>
<!-- JS -->   
<script src="js/custom.js"></script>
<!-- BOOTSTRAP JS -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
</body>
</html>

