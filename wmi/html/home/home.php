<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page </title>
    <link rel="stylesheet" href="../../dist/styles.css">
</head>
<body>
    <div class="home_page_container">
    <header class="home_page__header">
        <nav class="home_page__nav">
          <span class="home_page__logo"><a href="home.php" class="seller_page__logo">WMI</a> </span>
          <ul class="home_page__ul">
            <li class="home_page__list"><a href="home.php"         class="home_page__anchor">Home</a></li>
            <li class="home_page__list"><a href="../account/login_option.php"       class="home_page__anchor">Sign In</a></li>
            <li class="home_page__list"><a href="#about"       class="home_page__anchor">About</a></li>
            <li class="home_page__list"><a href="#contact"       class="home_page__anchor">Contact</a></li>
          </ul>
        </nav>
       </header>

       

       <main class="home_page_main">
       <div class="home_page_left">
        <!-- <h3 >Wanna play Music</h3> -->
       <h1>Welcome..😁 ! </h1></div>
       <div class="home_page_right">“ Music comes out of silence and at the end it goes back to it. It's a journey. You see ? ”
          <br>  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp― Rachel Joyce</div>
         
       </main>



       <span class="home_div_video" id="about">
       <h1 class="section-header" id="about">About</h1>

      <p class="home_div_content"> &nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp' WMI ' stands for Web Store for Music Instruments. WMI is an e-commerce music website, where you can discover and purchase your favourite music equipment from a wide range of genres. Our platform is designed to provide a seamless and convenient shopping experience for music lovers around the world. With a user-friendly interface and a vast collection of music equipment, you can easily find what you are looking for, whether it's the latest releases or timeless classical instruments. Our commitment to quality and customer satisfaction means you can purchase music instruments confidently, knowing that you will receive high-quality music equipment from our side. <br> <br> 
      &nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbspWith a user-friendly interface and a vast collection of music equipment, you can easily find what you are looking for, whether it's the latest releases or timeless classical instruments. Our commitment to quality and customer satisfaction means you can purchase music instruments confidently, knowing that you will receive high-quality music equipment from our side. <br> <br> 
      &nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbspThis type of store operates over the internet, allowing customers to access a vast selection of music from anywhere in the world. Onlinemusic stores offer a convenient and accessible alternative to traditional physical music stores, providing customers with a user-friendlyinterface and personalized recommendations. Some online music stores also offer streaming services, allowing customers to listen to the audioof music instruments before making a purchase. The online music store has revolutionized the music industry by providing a platform forsellers who make instruments and try to sell their music instruments directly to the customers, expand their customer base, and reach aglobal audience.

</p> 
  
      </span>

       <!-- Contact Section  -->
    
       <footer class="home_page_footer">
  
        
  
  <h1 class="section-header" id="contact">Contact</h1>
  
  <div class="contact-wrapper">
  
  <!-- Left contact page --> 
    
    <form id="contact-form" class="form-horizontal" role="form" action="../php/contact-form.php" method="POST" >
       
      <div class="form-group">
        <div class="col-sm-12">
          <input type="text" class="form-control" id="name" placeholder="NAME" name="name" value="" required>
        </div>
      </div>

      <div class="form-group">
        <div class="col-sm-12">
          <input type="email" class="form-control" id="email" placeholder="EMAIL" name="email" value="" required>
        </div>
      </div>

      <textarea class="form-control" rows="10" placeholder="MESSAGE" name="message" required></textarea>
      
      <button class="btn btn-primary send-button" id="submit" type="submit" value="SEND">
        <div class="alt-send-button">
          <i class="fa fa-paper-plane"></i><span class="send-text">SEND</span>
        </div>
      
      </button>
      
    </form>
    
  <!-- Left contact page --> 
    
      <div class="direct-contact-container">

        <ul class="contact-list">
          <li>
        <img class="cl_image" src="../../images/map.png" alt="Bag"><span class="contact-text place">Tirunelveli, Tamil Nadu</span></li>
          <li>
        <img class="cl_image" src="../../images/phone-call.png" alt="Phone No"><span class="contact-text phone"><a href="tel:1-212-555-5555" title="Give me a call">+91 6382826910</a></span></li>
        <li>
        <img class="cl_image" src="../../images/email.png" alt="Bag"><span class="contact-text gmail"><a href="mailto:#" title="Send me an email">solomonraja910@gmail.com</a></span></li>
          
        </ul>

        <hr>

        <div class="copyright" style="margin-top:1.5rem;">&copy; ALL OF THE RIGHTS RESERVED</div>
      </div>
    
  </div>
  <span class="home_page_footer_content"> &copy; 2023 - Online Music Retailer </span>
  
 
  
 
    </footer>

    </div>
</body>
</html>