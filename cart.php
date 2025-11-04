<?php
session_start();
if(!isset($_SESSION['cart'])) $_SESSION['cart'] = [];
if(isset($_POST['product'])){ $_SESSION['cart'][] = $_POST['product']; }
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Your Cart</title>
<style>
body{font-family:Poppins,sans-serif;background:#f9f9f9;margin:0;}
header{background:#ff6b00;color:white;padding:15px;text-align:center;}
.container{width:80%;margin:auto;padding:20px;}
.card{
  background:white;padding:15px;margin:10px 0;
  border-radius:8px;box-shadow:0 3px 6px rgba(0,0,0,0.1);
}
button{background:#ff6b00;color:white;padding:10px;border:none;border-radius:5px;cursor:pointer;}
button:hover{background:#ff944d;}
</style>
</head>
<body>
<header><h2>Your Cart</h2></header>
<div class="container">
  <?php
  if(empty($_SESSION['cart'])) echo "<p>Your cart is empty.</p>";
  else{
    foreach($_SESSION['cart'] as $item){
      echo "<div class='card'><h3>$item</h3></div>";
    }
    echo "<form action='checkout.php' method='POST'><button type='submit'>Proceed to Checkout</button></form>";
  }
  ?>
</div>
</body>
</html>
