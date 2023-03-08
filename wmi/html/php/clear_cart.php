<?php

if(isset($_POST['pp_remove_button'])){
    $byr_nme = $_SESSION['buyer_name']."_table";
    $delete_query="TRUNCATE TABLE $byr_nme;";
    $conn->query($delete_query);

    $check="SELECT COUNT(*) FROM $byr_nme;";
    $c = $conn->query($check);
    if($c ->num_rows > 0){
          while( $r = $c->fetch_assoc()){
             $total_cart_items =$r['COUNT(*)'];
          }
    }
 
    echo "<script> document.getElementById('bag_number').innerHTML = '$total_cart_items';
    </script>";
}

?>