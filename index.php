<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Alibaba B2B Marketplace</title>
<style>
body {
  margin: 0;
  font-family: 'Poppins', sans-serif;
  background-color: #f9f9f9;
}
header {
  background-color: #ff6b00;
  color: white;
  padding: 20px;
  text-align: center;
}
.container {
  width: 90%;
  margin: auto;
  padding: 20px;
}
.banner {
  background: linear-gradient(to right, #ff6b00, #ff944d);
  color: white;
  padding: 40px;
  text-align: center;
  border-radius: 10px;
  margin-bottom: 30px;
}
button {
  background-color: white;
  color: #ff6b00;
  border: none;
  padding: 10px 20px;
  border-radius: 5px;
  cursor: pointer;
  font-weight: bold;
}
button:hover { background-color: #ffe5cc; }
.benefits {
  display: flex;
  justify-content: space-around;
  flex-wrap: wrap;
}
.card {
  background: white;
  border-radius: 10px;
  padding: 20px;
  width: 250px;
  text-align: center;
  box-shadow: 0 4px 8px rgba(0,0,0,0.1);
  margin: 10px;
}
</style>
</head>
<body>
<header>
  <h1>Alibaba B2B Marketplace</h1>
</header>

<div class="container">
  <div class="banner">
    <h2>Grow Your Business with Global Wholesale Deals</h2>
    <p>Join millions of buyers and suppliers worldwide on Alibaba’s trusted B2B platform.</p>
    <a href="signup.php"><button>Sign Up</button></a>
    <a href="login.php"><button>Login</button></a>
  </div>

  <h2 style="text-align:center;">Why Choose Us?</h2>
  <div class="benefits">
    <div class="card"><h3>Verified Suppliers</h3><p>Source from trusted suppliers across the world.</p></div>
    <div class="card"><h3>Global Shipping</h3><p>Access products shipped worldwide securely.</p></div>
    <div class="card"><h3>Bulk Discounts</h3><p>Enjoy big savings on wholesale orders.</p></div>
  </div>
</div>
</body>
</html>
