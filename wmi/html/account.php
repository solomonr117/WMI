<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../dist/styles.css">
</head>
<body>
    

<div class="account_page_container">
       <header class="account_page__header">
        <nav class="account_page__nav">
          <span class="account_page__logo"><a href="home/home.php" class="account_page__logo">WMI</a> </span>
          <ul class="account_page__ul">
            <li class="account_page__list"><a href="home/home.php"         class="account_page__anchor">Home</a></li>
            <li class="account_page__list"><a href="account/buyer_login.php"         class="account_page__anchor">Log out</a></li>
            <li class="account_page__list"><a href="purchase.php"         class="account_page__anchor">Purchase</a></li>
            <li class="account_page__list"><a href="home/home.php#contact"     class="account_page__anchor">Contact</a></li>
            <li class="account_page__list"><a href="home/home.php#about"       class="account_page__anchor">About</a></li>
          </ul>
        </nav>
       </header>

        
      <div class="account_page_product_list" id="account_page_product_list">
  
      <?php
        session_start();
         // Connectivity to DB 
         include 'php/conn.php';

         $byr_name = $_SESSION['buyer_name']."_table";
         strtolower($byr_name);


         // Display Insturment Details 
         include 'php/account_disp.php';

         
      
        ?>


      </div>

      <div class="account_page_total_val">
        Total Cart Value : ₹ <?php include'php/cart_total.php'; ?> 
      </div>

      <footer class="account_page_footer">
      <div class="account_page_copyright">
          &copy; 2023 - WMI 
      </div>
    </footer>
    
</div>


</body>
</html>