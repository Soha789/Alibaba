<?php
session_start();
if(isset($_POST)){
  session_destroy();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Checkout</title>
<style>
body{font-family:Poppins,sans-serif;background:#f5f5f5;margin:0;text-align:center;}
.container{
  width:400px;margin:100px auto;background:white;padding:30px;
  border-radius:10px;box-shadow:0 4px 10px rgba(0,0,0,0.1);
}
button{background:#ff6b00;color:white;padding:10px 20px;border:none;border-radius:5px;cursor:pointer;}
button:hover{background:#ff944d;}
</style>
</head>
<body>
<div class="container">
  <h2>Thank You for Your Purchase!</h2>
  <p>Your order has been placed successfully. A confirmation email will be sent shortly.</p>
  <a href="home.php"><button>Back to Home</button></a>
</div>
</body>
</html>
