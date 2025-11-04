<?php
session_start();
if(!isset($_SESSION['user'])){ header("Location: login.php"); exit(); }
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Home - Alibaba Marketplace</title>
<style>
body{font-family:Poppins,sans-serif;margin:0;background:#f9f9f9;}
header{background:#ff6b00;color:white;padding:15px;text-align:center;}
.container{width:90%;margin:auto;padding:20px;}
.products{display:flex;flex-wrap:wrap;justify-content:space-around;}
.card{
  background:white;border-radius:10px;padding:15px;margin:10px;
  width:250px;text-align:center;box-shadow:0 4px 8px rgba(0,0,0,0.1);
}
button{
  background:#ff6b00;color:white;border:none;padding:10px;border-radius:5px;cursor:pointer;
}
button:hover{background:#ff944d;}
textarea{width:100%;border:1px solid #ddd;border-radius:5px;padding:8px;}
</style>
</head>
<body>
<header>
  <h2>Welcome, <?php echo $_SESSION['user']; ?> | <a href="cart.php" style="color:white;">🛒 Cart</a> | <a href="dashboard.php" style="color:white;">Dashboard</a></h2>
</header>
<div class="container">
  <h2>Featured Products</h2>
  <div class="products">
    <?php
    $products = [
      ["Laptop","High-performance business laptops","$500","ElectroHub"],
      ["T-Shirts","Cotton t-shirts in bulk","$3","TextileWorld"],
      ["Welding Machine","Heavy-duty industrial equipment","$250","MachinoPro"],
      ["Smartphones","Bulk Android phones","$120","TechWholesale"],
      ["Office Chairs","Ergonomic chairs for offices","$45","FurniCraft"]
    ];
    foreach($products as $p){
      echo "<div class='card'>
        <h3>$p[0]</h3>
        <p>$p[1]</p>
        <p><b>Price:</b> $p[2]</p>
        <p><b>Supplier:</b> $p[3]</p>
        <form method='POST' action='cart.php'>
          <input type='hidden' name='product' value='$p[0]'>
          <button type='submit'>Add to Cart</button>
        </form>
        <br>
        <form method='POST' action=''>
          <textarea placeholder='Request a quotation...'></textarea><br>
          <button type='button'>Send Request</button>
        </form>
      </div>";
    }
    ?>
  </div>
</div>
</body>
</html>
