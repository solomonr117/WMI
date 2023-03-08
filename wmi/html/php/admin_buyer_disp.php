<?php

$seller_details = "SELECT * FROM buyer_details; ";
$res = $conn->query($seller_details);

$sno = 1;


if($res->num_rows>0){
    while($row = $res->fetch_assoc()){
        echo "
        <tr>
        <td>".$sno." .</td>
          <td>".$row['Name']."</td>
          <td>".$row['Username']."</td>
          <td>".$row['Password']."</td>
          <td>".$row['Contact']."</td>
          <td><form method='POST' action='".$_SERVER['PHP_SELF']."'> <input type='hidden' value='".$row['Id']."' name='id'><button class='admin_page_seller_remove_btn' id='".$row['Id']."' name ='seller_remove_submit' >Remove</button> </form></td> 
        </tr>
      ";
   
   $sno+=1;

}
}

if(isset($_POST['seller_remove_submit'])){
    $id = $_POST['id'];
    $rmv = "DELETE FROM buyer_details WHERE Id =$id ";
    $delete = $conn->query($rmv);
    header("Location: admin.php");
    
 }

?> 