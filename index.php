<?php

$mail->IsSMTP();
$mail->CharSet = 'UTF-8';
$mail->Server = 'smtp.sendgrid.net'
$mail->Port = '487'
$username='apiapi'
$password='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'

// using SendGrid's PHP Library
// https://github.com/sendgrid/sendgrid-php
require 'vendor/autoload.php';
$sendgrid = new SendGrid("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");
$email    = new SendGrid\Email();

$email->addTo("kylegraydev@gmail.com")
      ->setFrom("wildcard4pets@me.com")
      ->setSubject("Sending with SendGrid is Fun")
      ->setHtml("and easy to do anywhere, even with PHP");



// $EmailFrom = "test@gmail.com";
// $EmailTo = "kylegraydev@gmail.com";
// $Subject = "Nice & Simple Contact Form by CSS-Tricks";
$Name = Trim(stripslashes($_POST['Name']));
$Tel = Trim(stripslashes($_POST['Tel']));
$Email = Trim(stripslashes($_POST['Email']));
$Message = Trim(stripslashes($_POST['Message']));

// validation
$validationOK=true;
if (!$validationOK) {
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
  exit;
}

// prepare email body text
$Body = "";
$Body .= "Name: ";
$Body .= $Name;
$Body .= "\n";
$Body .= "Tel: ";
$Body .= $Tel;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $Email;
$Body .= "\n";
$Body .= "Message: ";
$Body .= $Message;
$Body .= "\n";

$sendgrid->send($email);

// send email
// $success = mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>");

// redirect to success page
if ($success){
  print "<meta http-equiv=\"refresh\" content=\"0;URL=contactthanks.php\">";
}
else{
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
}

phpinfo();
?>

<?php echo '1'; ?>


<html><p>Thank you for your email!</p></html>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pups for Sale</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <div class="bg-main wrapper">

      <!--  MAIN PAGE TOP-->

        <div class="container">
          <div class="row">
            <div class="col-md-5 offset-md-7 text-light phone">
              <!-- wyldcard4pets@gmail.com -->
            </div>
          </div>

          <div class="row">
            <div class="col-md-6">
              <ul class="nav">
                <li class="nav-item">
                  <a href="#pups">Puppies for sale</a>
                </li>
                <li class="nav-item">
                  <a href="#contact-form">Contact</a>
                </li>
              </ul>
              <div class="title-box text-right">
                <div class="creative-title ct-left">
                  doberman
                </div>
                <div class="creative-title ct-right text-light">
                   pinscher
                </div>
              </div>
              <div class="text-right about-pups text-light">
                <p>Our beautiful Doberman-Pinscher just had a litter of 11 puppies!<br>
                We love dogs and want to find good homes for these little cuties.<br>
                Pups will become available for sale April 17.<br>
                Contact us now for price and availability!</p>
              </div>
            </div>

            <div class="col-md-6 main-photo">

              <img src="img/full/mom-profile-photo-1.png" alt="">
            </div>
          </div>

          <div class="row">

            <div class="jumbo-word col-lg-7 offset-lg-3">


            </div>
          </div>

        </div>
        <div class="line-break"></div>
        <!-- END MAIN PAGE TOP -->

        <!--  CAROUSEL -->
        <div class="container">
          <div class="row" id="pups">
            <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:600px;height:550px;overflow:hidden;visibility:hidden;background-color:#24262e;">
                <!-- Loading Screen -->
                <div data-u="loading" style="position:absolute;top:0px;left:0px;background-color:rgba(0,0,0,0.7);">
                    <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
                    <div style="position:absolute;display:block;background:url('img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
                </div>
                <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:600px;height:450px;overflow:hidden;">
                    <div>
                        <img data-u="image" src="img/full/mom-1.jpg" />
                        <img data-u="thumb" src="img/thumbs/mom-1-thumb.jpg" />
                    </div>
                    <div>
                        <img data-u="image" src="img/full/mom-2.jpg" />
                        <img data-u="thumb" src="img/thumbs/mom-2-thumb.jpg" />
                    </div>
                    <div>
                        <img data-u="image" src="img/full/mom-3.jpg" />
                        <img data-u="thumb" src="img/thumbs/mom-3-thumb.jpg" />
                    </div>
                    <div>
                        <img data-u="image" src="img/full/pups-4.jpg" />
                        <img data-u="thumb" src="img/thumbs/pups-4-thumb.jpg" />
                    </div>
                    <div>
                        <img data-u="image" src="img/full/pups-5.jpg" />
                        <img data-u="thumb" src="img/thumbs/pups-5-thumb.jpg" />
                    </div>
                    <div>
                        <img data-u="image" src="img/full/pups-6.jpg" />
                        <img data-u="thumb" src="img/thumbs/pups-6-thumb.jpg" />
                    </div>
                    <div>
                        <img data-u="image" src="img/full/pups-7.jpg" />
                        <img data-u="thumb" src="img/thumbs/pups-7-thumb.jpg" />
                    </div>
                </div>
                <!-- Thumbnail Navigator -->
                <div data-u="thumbnavigator" class="jssort01" style="position:absolute;left:0px;bottom:0px;width:600px;height:100px;" data-autocenter="1">
                    <!-- Thumbnail Item Skin Begin -->
                    <div data-u="slides" style="cursor: default;">
                        <div data-u="prototype" class="p">
                            <div class="w">
                                <div data-u="thumbnailtemplate" class="t"></div>
                            </div>
                            <div class="c"></div>
                        </div>
                    </div>
                    <!-- Thumbnail Item Skin End -->
                </div>
                <!-- Arrow Navigator -->
                <span data-u="arrowleft" class="jssora05l" style="top:158px;left:8px;width:40px;height:40px;"></span>
                <span data-u="arrowright" class="jssora05r" style="top:158px;right:8px;width:40px;height:40px;"></span>
            </div>
            <!--  END CAROUSEL -->

          </div>
          <br>
          <h1>Videos</h1>
          <div class="row" style="margin-top: 80px;height: 80%vh;">
            <div class="col-md-6 vidbox" style="background-color:white;padding: 10px;height: 330px;">
              <object style="width: 100%;height: 100%;margin: 2px auto;" data="https://www.youtube.com/embed/z9WbT5QVQzc"></object>
            </div>
            <div class="col-md-6 vidbox" style="background-color:white;padding: 10px;height: 330px;">
              <object style="width: 100%;height: 100%;margin: 2px auto;" data="https://www.youtube.com/embed/7mSrwrGPKO4"></object>
            </div>
          </div>
          <br>
          <h1>Contact Us</h1>
          <h5 class="text-light">wyldcard4pets@gmail.com</h5>
          <?php if (!empty($msg)) {
              echo "<h2>$msg</h2>";
          } ?>
            <form method="post" action="index.php">
              <label for="Name">Name:</label>
              <input type="text" name="Name" id="Name" />

              <label for="City">City:</label>
              <input type="text" name="City" id="City" />

              <label for="Email">Email:</label>
              <input type="text" name="Email" id="Email" />

              <label for="Message">Message:</label><br />
              <textarea name="Message" rows="20" cols="20" id="Message"></textarea>

              <input type="submit" name="submit" value="Submit" class="submit-button" />
            </form>
          <div class="">
            .
          </div>


        </div>
    </div>


    <!-- JS Dependencies -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    <script src="js/jssor.slider-22.2.11.mini.js" type="text/javascript"></script>
    <script src="js/main.js"></script>
  </body>
</html>
