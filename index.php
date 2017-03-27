<?php
/**
 * This example shows how to handle a simple contact form.
 */
$msg = '';
require 'vendor/autoload.php';

// show errors
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//Don't run this unless we're handling a form submission
if (array_key_exists('email', $_POST)) {
    date_default_timezone_set('Etc/UTC');
    require './PHPMailerAutoload.php';
    //Create a new PHPMailer instance
    $mail = new PHPMailer;
    //Tell PHPMailer to use SMTP - requires a local mail server
    //Faster and safer than using mail()
    $mail->isSMTP();
    $mail->Host = 'smtp.sendgrid.net';
    $mail->Port = 25;
    //Use a fixed address in your own domain as the from address
    //**DO NOT** use the submitter's address here as it will be forgery
    //and will cause your messages to fail SPF checks
    // $mail->setFrom('from@example.com', 'First Last');
    //Send the message to yourself, or whoever should receive contact for submissions
    // $mail->addAddress('kylegraydev@gmail.com', 'John Doe');
    //Put the submitter's address in a reply-to header
    //This will fail if the address provided is invalid,
    //in which case we should ignore the whole request
    $from = new SendGrid\Email(null, "test@example.com");
    $subject = "Hello World from the SendGrid PHP Library!";
    $to = new SendGrid\Email(null, "kylegraydev@gmail.com");
    $content = new SendGrid\Content("text/plain", "Hello, Email!");
    $mail = new SendGrid\Mail($from, $subject, $to, $content);


$sg = new \SendGrid($apiKey);

$response = $sg->client->mail()->send()->post($mail);
echo $response->statusCode();
echo $response->headers();
echo $response->body();


    if ($mail->addReplyTo($_POST['email'], $_POST['name'])) {
        $mail->Subject = 'PHPMailer contact form';
        //Keep it simple - don't use HTML
        $mail->isHTML(false);
        //Build a simple message body
        $mail->Body = <<<EOT
Email: {$_POST['email']}
Name: {$_POST['name']}
Message: {$_POST['message']}
EOT;
        //Send the message, check for errors
        if (!$mail->send()) {
            //The reason for failing to send will be in $mail->ErrorInfo
            //but you shouldn't display errors to users - process the error, log it on your server.
            $msg = 'Sorry, something went wrong. Please try again later.';
        } else {
            $msg = 'Message sent! Thanks for contacting us.';
        }
    } else {
        $msg = 'Invalid email address, message ignored.';
    }
}
?>
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
            <form method="POST">
                <label for="name">Name: <input type="text" name="name" id="name"></label><br>
                <label for="email">Email address: <input type="email" name="email" id="email"></label><br>
                <label for="message">Message: <textarea name="message" id="message" rows="8" cols="20"></textarea></label><br>
                <input type="submit" value="Send">
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
