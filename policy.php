<?php
$Pol_id = $_POST['Pol_id'];
$Pol_name = $_POST['Pol_name'];
$policy_type = $_POST['policy_type'];
$policy_comp = $_POST['policy_comp'];
$Pol_amount = $_POST['Pol_amount'];
$Pol_time = $_POST['Pol_time'];
if (!empty($Pol_id) || !empty($Pol_name) || !empty($policy_type) || !empty($policy_comp) || !empty($Pol_amount) || !empty($Pol_time)) {
 $host = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "policy";
    //create connection
    $conn = new mysqli($host, $dbusername, $dbpassword, $dbname);
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
     $SELECT = "SELECT Pol_id From policy Where Pol_id = ? Limit 1";
     $INSERT = "INSERT Into policy(Pol_id, Pol_name, policy_type, policy_comp, Pol_amount, Pol_time) values(?, ?, ?, ?, ?, ?)";
     //Prepare statement
     $stmt = $conn->prepare($SELECT);
     $stmt->bind_param("s",$Pol_id);
     $stmt->execute();
     $stmt->bind_result($Pol_id);
     $stmt->store_result();
     $rnum = $stmt->num_rows;
     if ($rnum==0) {
      $stmt->close();
      $stmt = $conn->prepare($INSERT);
      $stmt->bind_param('ssssii', $Pol_id,$Pol_name,$policy_type,$policy_comp,$Pol_amount,$Pol_time);
      $stmt->execute();
	  echo file_get_contents("policy1.html");
    
     } else {
      echo file_get_contents("policy2.html");
     }
     $stmt->close();
     $conn->close();
    }
} else {
 echo "All field are required";
 die();
}
?>