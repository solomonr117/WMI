<?php

$seller_details = "SELECT * FROM contact_details; ";
$res = $conn->query($seller_details);

$sno = 1;


if($res->num_rows>0){
    while($row = $res->fetch_assoc()){
        echo "
        <tr>
        <td>".$sno." .</td>
          <td>".$row['Name']."</td>
          <td>".$row['Email']."</td>
          <td>".$row['Message']."</td>
        </tr>
      ";
   
   $sno+=1;

}
}

?> 