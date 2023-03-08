<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../dist/styles.css">
</head>
<body>
<div class="login_container">

<header class="login_header">
  <nav class="login_navbar">
     <span class="login_logo"><a href="../home/home.php" class="login_anchor">WMI</a></span>
  </nav>
</header>

<div class="login_main">
  <div class ="login_form">

    <form action="<?php $_SERVER['PHP_SELF'];?>" method="POST">
      <div class="login_formholder">    
       <span class="login_signin">Sign In ( Admin )</span>
      <div class="login_section">
        <input type="text" class="login_input" name="admin_username" placeholder="Enter Username here..">
      <input type="password" class="login_input" name="admin_password" placeholder="Enter Password here..">
      <div class="buyer_login_message" id='buyer_login_message' style="margin-left:auto;margin-right:auto;">  </div>
      <button type="submit" class="login_btn" name="admin_login_submit">Login</button>
      </div>
      </div>   
    </form>  
  </div>
</div>
<?php

    if(isset($_POST['admin_login_submit'])){
      //connect to db 
    include_once "../php/conn.php";

    $admin_username = trim($_POST['admin_username']);
    $admin_password = trim($_POST['admin_password']);

    $check_user_query= "SELECT Username,Password FROM admin_details;";
    $ac = $conn->query($check_user_query);

    if($ac->num_rows>0){
      while($a_array = $ac->fetch_assoc()){
           if($a_array['Username']==$admin_username && $a_array['Password']==$admin_password ){
                   header("Location: ../admin.php");
           }else{
               echo "<script> document.getElementById('buyer_login_message').innerHTML='Incorrect Username or Password..🥲'; </script>";
            
           }
            
      }

    }
    }
    
    ?>
   

<footer class="login_footer">
<div class="login_copyright">
  &copy; 2023 - Online Music Retailer 
</div>
</footer>

</div>
</body>
</html>