<?php
   // Display Instruments
   $disp_query = "SELECT * FROM $byr_name WHERE Quantity>=1; ";

   $result = $conn->query($disp_query);
   $sno = 1;
         
   if($result->num_rows>0){
    while($row = $result->fetch_assoc()){

   
      echo "<div class='account_page_card'>".$sno." ."." <img class='account_card_image' src='uploads/".$row['Pic']."'>"."<div class='account_card_content'>"."<div class='account_card_name'>".$row['Name']."</div>"."<div class='account_card_type'>"."Instrument Type : ".$row['Type']."</div>"."<div class='account_card_q'>Quantity -".$row['Quantity']."</div><div class='account_card_price'>"."₹ ".$row['Price']."</div> <form method='POST' action='".$_SERVER['PHP_SELF']."'> <input type='hidden' value='".$row['Id']."' name='id'><button class='account_page_remove_btn' id='".$row['Id']."' name ='remove_submit' >Remove</button> </form>"."</div>"."</div></br>";
   
   $sno+=1;
}
}

if(isset($_POST['remove_submit'])){
   $id = $_POST['id'];
   $rmv = "DELETE FROM $byr_name WHERE Id =$id ";
   $delete = $conn->query($rmv);
   header("Location: account.php");
   
}


?>


