<?php

$slr_usrname = $_SESSION['seller_name_'];
trim($slr_usrname);
// Display Instruments
$disp_query = "SELECT Name FROM buyer_details; ";

$result = $conn->query($disp_query);
$sno = 1;

// Loop for Buyers Name 
if($result->num_rows>0){
 while($row = $result->fetch_assoc()){

    $byr_nme_trim = $row['Name'];
    $buyer_name = $byr_nme_trim."_table";
    
    $order_disp_query = "SELECT Name,Price,Type,Pic,Quantity FROM $buyer_name WHERE Seller_name='$slr_usrname' ";
    $result1 = $conn->query($order_disp_query);
    $o_sno = 1;

    if($result1->num_rows>0){
        echo " <div class='order_page_byrnme'>Customer ".$byr_nme_trim."</div>";
    }

// Loop for Buyers Details 
    if($result1->num_rows>0){
        while($row1 = $result1->fetch_assoc()){
            echo "<div class='order_page_content'>".$o_sno.". <div class='o_pic'> <img class='o_pic_img'src='uploads/".$row1['Pic']." '></div> <div class='o_name'>".$row1['Name']." </div> <div class='price'> ₹ ".$row1['Price']." </div> <div class='o_type'>".$row1['Type']." </div> <div class='o_quantity'>".$row1['Quantity']."</div> </div> <br/> ";    
            $o_sno+=1;
       }
       }


$sno+=1;
}
}

?> 