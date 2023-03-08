<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="../dist/styles.css">
</head>
<body>

    
    

<div class="admin_page_container">
       <header class="admin_page__header">
        <nav class="admin_page__nav">
          <span class="admin_page__logo"><a href="home/home.php" class="admin_page__logo">WMI</a> </span>
          <ul class="admin_page__ul">
            <li class="admin_page__list"><a href="home/home.php"         class="admin_page__anchor">Home</a></li>
            <li class="admin_page__list"><a href="account/buyer_login.php"         class="admin_page__anchor">Log out</a></li>
          </ul>
        </nav>
       </header>

      <div class="admin_content">
         <div class="admin_content_seller_table">
            <div class="seller_table_heading">Seller's Details</div>
         <table class="seller_table">
        <tr>
          <th>S.No</th>
          <th>Name</th>
          <th>Username</th>
          <th>Password</th>
          <th>Contact</th>
        </tr>

       <?php 
            // Connectivity to DB 
            include 'php/conn.php';
            // Displaying Admin Page Content
            include 'php/admin_seller_disp.php';

       ?> 
       </table>
         </div>
         <div class="admin_content_buyer_table">
         <div class="buyers_table_heading">Buyer's Details</div>
         <table class="buyer_table">
        <tr>
          <th>S.No</th>
          <th>Name</th>
          <th>Username</th>
          <th>Password</th>
          <th>Contact</th>
        </tr>

       <?php 
            // Connectivity to DB 
            include 'php/conn.php';
            // Displaying Admin Page Content
            include 'php/admin_buyer_disp.php';

       ?> 
       </table>
         </div>
      </div>

      <!-- Contact Details -->

      <div class="admin_page_contact_details">
         <table class="contact_table">
      <div class="contact_table_heading">Contact Details</div>
        <tr>
          <th>S.No</th>
          <th>Name</th>
          <th>Email</th>
          <th>Message</th>
        </tr>

       <?php 
            // Connectivity to DB 
            include 'php/conn.php';
            // Displaying Admin Page Content
            include 'php/admin_contact_disp.php';

       ?> 
       </table>
         </div>
      </div>

  
</div>


</body>
</html>