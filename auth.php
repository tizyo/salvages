<?php

			$OTP = rand(0000,9999);

 ?>

 <!DOCTYPE html>
 <html>
 <head>
   <title>OTP | Confirmation</title>
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

 </head>
 <body>
     <div class="row" style="padding: 10px;">
        <div class="col-md-16">
          <center><form name="" method="post">

            <h2 class="">Enter OTP</h2>
            <div class="illustration"><i class="icon ion-ios-locked-outline"></i></div>
            <?php $authFailErr = isset($noticeMSG) ? $noticeMSG : ''; echo $authFailErr ;?>
            <div class="form-group"><input class="form-control" type="text" name="user_name" required="" placeholder="Enter OTP"></div>
            <div class="form-group"><button name="login_btn" class="btn btn-primary btn-block" type="submit">Confirm</button></div><a href="#" class="btn btn-info-outline">Resend OTP</a><br>
            <img src="assets/img/bg.png">
            </center></form>
        </div>

    </div>
 </body>

  </html>
  <script type="text/javascript" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
