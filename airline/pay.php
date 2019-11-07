<?php
session_cache_limiter('private_no_expire');
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Miniproject</title>
	<link rel="stylesheet" type="text/css" href="pay.css">
  
</head>
<body>
<div class="checkout_form">
    <div class="card_number" id="card-container">
        <input type="text" class="input" id="card" placeholder="0000 0000 0000 0000"required> 
        <div id="logo"></div>
    </div>
    <div class="card_grp">   
      <div class="expiry_date">
        <input type="text" class="expiry_input" data-mask="00"  placeholder="00"required>
        <input type="text" class="expiry_input" data-mask="00" placeholder="00"required>
      </div>
      <div class="cvc">
        <input type="text" class="cvc_input" data-mask="000" placeholder="000"required>
        <div class="cvc_img">
          ?
           <div class="img">
             <img src="https://i.imgur.com/2ameC0C.png" alt="">
          </div>
        </div>
      </div>
    </div>
    <div class="btn" onclick="popUp()">
      pay
    </div>
    <script>
      function popUp(){
      swal({ title: "Hurreeyyyy!",
 text: "Payment Successfull!",
 type: "success"}).then(okay => {
   if (okay) {
    window.location.href = "index.html";
  }
});
      }
    </script>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
<script src="card-validator.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</body>
</html>