<?php
	if (isset($_POST["submit"])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
    $phone = $_POST['phone'];
		$message = $_POST['message'];
		$human = intval($_POST['human']);
		$from = 'Demo Contact Form';
		$to = 'kylegraydev@gmail.com';
		$subject = 'Message from Contact Demo ';

		$body = "From: $name\n Phone: $phone\n E-Mail: $email\n Message:\n $message";

		// Check if name has been entered
		if (!$_POST['name']) {
			$errName = 'Please enter your name';

		}

		// Check if email has been entered and is valid
		if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
			$errEmail = 'Please enter a valid email address';

		}

		//Check if message has been entered
		if (!$_POST['message']) {
			$errMessage = 'Please enter your message';

		}
		//Check if simple anti-bot test is correct
		// if ($human !== 5) {
		// 	$errHuman = 'Your anti-spam is incorrect';
		// }


// If there are no errors, send the email
if (!$errName && !$errEmail && !$errMessage) {
	if (mail ($to, $subject, $body, $from)) {
		$result='<div id="alert" class="alert alert-success">Thank You! I will be in touch</div>';
	} else {
		$result='<div id="alert" class="alert alert-danger">Sorry there was an error sending your message. Please try again later</div>';
	}
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
          <form class="form-horizontal" role="form" method="post" action="#alert">
            <a name="bottomOfPage"></a>
          	<div class="form-group">
          		<label for="name" class="col-sm-2 control-label">Name</label>
          		<div class="col-sm-10">
          			<input type="text" class="form-control" id="name" name="name" placeholder="First & Last Name" value="<?php echo htmlspecialchars($_POST['name']); ?>">
          			<?php echo "<p class='text-danger'id='alert'>$errName</p>";?>
          		</div>
          	</div>
          	<div class="form-group">
          		<label for="email" class="col-sm-2 control-label">Email</label>
          		<div class="col-sm-10">
          			<input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" value="<?php echo htmlspecialchars($_POST['email']); ?>">
          			<?php echo "<p class='text-danger'id='alert'>$errEmail</p>";?>
          		</div>
          	</div>
            <div class="form-group">
          		<label for="phone" class="col-sm-2 control-label">Email</label>
          		<div class="col-sm-10">
          			<input type="phone" class="form-control" id="phone" name="phone" placeholder="phone (optional)" value="<?php echo htmlspecialchars($_POST['phone']); ?>">
          			<?php echo "<p class='text-danger' >$errPhone</p>";?>
          		</div>
          	</div>
          	<div class="form-group">
          		<label for="message" class="col-sm-2 control-label">Message</label>
          		<div class="col-sm-10">
          			<textarea class="form-control" rows="4" name="message"><?php echo htmlspecialchars($_POST['message']);?></textarea>
          			<?php echo "<p class='text-danger'id='alert'>$errMessage</p>";?>
          		</div>
          	</div>
          	<!-- <div class="form-group">
          		<label for="human" class="col-sm-2 control-label">2 + 3 = ?</label>
          		<div class="col-sm-10">
          			<input type="text" class="form-control" id="human" name="human" placeholder="Your Answer">
          			<php echo "<p class='text-danger'>$errHuman</p>";?>
          		</div>
          	</div> -->
          	<div class="form-group">
          		<div class="col-sm-10 col-sm-offset-2">
          			<input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary">
          		</div>
          	</div>
          	<div class="form-group">
          		<div class="col-sm-10 col-sm-offset-2">
          			<?php echo $result; ?>
          		</div>
          	</div>
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
