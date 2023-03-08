<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seller's Order</title>
    <link rel="stylesheet" href="../dist/styles.css">
</head>
<body>
    
    

<div class="order_page_container">
       <header class="order_page__header">
        <nav class="order_page__nav">
          <span class="order_page__logo"><a href="home/home.php" class="order_page__logo">WMI</a> </span>
          <ul class="order_page__ul">
            <li class="order_page__list"><a href="home/home.php"         class="order_page__anchor">Home</a></li>
            <li class="order_page__list"><a href="account/buyer_login.php"         class="order_page__anchor">Log out</a></li>
            <li class="order_page__list"><a href="purchase.php"         class="order_page__anchor">Purchase</a></li>
            <li class="order_page__list"><a href="home/home.php#contact"     class="order_page__anchor">Contact</a></li>
            <li class="order_page__list"><a href="home/home.php#about"       class="order_page__anchor">About</a></li>
          </ul>
        </nav>
       </header>

        
      <div class="order_page_product_list" id="order_page_product_list">
  
         <div class="orders_card">
         <?php
        session_start();
         // Connectivity to DB 
         include 'php/conn.php';

        // Displaying Orders 
         include 'php/orders_disp.php';

           

        ?>

         </div>

      </div>

      <footer class="order_page_footer">
      <div class="order_page_copyright">
          &copy; 2023 - WMI 
      </div>
    </footer>
    
</div>

</body>
</html>