<?php
$Pay_id = $_POST['Pay_id'];
$Pol_id = $_POST['Pol_id'];
$Pay_time = $_POST['Pay_time'];
if(isset($_POST['Pay_amount'])){
$Pay_amount = $_POST['Pay_amount'];
}
$Pay_type = $_POST['Pay_type'];

if (!empty($Pay_id) || !empty($Pol_id) || !empty($Pay_type) || !empty($Pay_time) || !empty($Pay_amount) ) {
 $host = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "policy";
    //create connection
    $conn = new mysqli($host, $dbusername, $dbpassword, $dbname);
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
     $SELECT = "SELECT Pay_id From payment Where Pay_id = ? Limit 1";
     $INSERT = "INSERT Into payment(Pay_id, Pol_id, Pay_time, Pay_amount, Pay_type) values(?, ?, ?, ?, ?)";
     //Prepare statement
     $stmt = $conn->prepare($SELECT);
     $stmt->bind_param("s",$Pay_id);
     $stmt->execute();
     $stmt->bind_result($Pay_id);
     $stmt->store_result();
     $rnum = $stmt->num_rows;
     if ($rnum==0) {
      $stmt->close();
      $stmt = $conn->prepare($INSERT);
      $stmt->bind_param('sssis', $Pay_id,$Pol_id,$Pay_time,$Pay_amount,$Pay_type);
      $stmt->execute();
	  echo file_get_contents("payment1.html");
    
     } else {
      echo file_get_contents("payment2.html");
     }
     $stmt->close();
     $conn->close();
    }
} else {
 echo "All field are required";
 die();
}
?>