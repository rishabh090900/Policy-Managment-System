<?php
if(isset($_POST['Agent_id'])){
$Agent_id = $_POST['Agent_id'];
}
if(isset($_POST['Agent_name'])){
$Agent_name = $_POST['Agent_name'];
}
if(isset($_POST['Agent_Address'])){
$Agent_Address = $_POST['Agent_Address'];
}
if(isset($_POST['Agent_pincode'])){
$Agent_pincode = $_POST['Agent_pincode'];
}
if(isset($_POST['Agent_Mob'])){
$Agent_Mob = $_POST['Agent_Mob'];
}
if(isset($_POST['Agent_Email'])){
$Agent_Email = $_POST['Agent_Email'];
}
if (!empty($Agent_id) || !empty($Agent_name) || !empty($Agent_Address) || !empty($Agent_pincode) || !empty($Agent_Mob) || !empty($Agent_Email)) {
 $host = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "policy";
    //create connection
    $conn = new mysqli($host, $dbusername, $dbpassword, $dbname);
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
     $SELECT = "SELECT Agent_id From agent Where Agent_id = ? Limit 1";
     $INSERT = "INSERT Into agent(Agent_id, Agent_name, Agent_Address, Agent_pincode, Agent_Mob, Agent_Email) values(?, ?, ?, ?, ?, ?)";
     //Prepare statement
     $stmt = $conn->prepare($SELECT);
     $stmt->bind_param("s",$Agent_id);
     $stmt->execute();
     $stmt->bind_result($Agent_id);
     $stmt->store_result();
     $rnum = $stmt->num_rows;
     if ($rnum==0) {
      $stmt->close();
      $stmt = $conn->prepare($INSERT);
      $stmt->bind_param('sssiss', $Agent_id ,$Agent_name ,$Agent_Address ,$Agent_pincode ,$Agent_Mob ,$Agent_Email);
      $stmt->execute();
	  echo file_get_contents("agent1.html");
    
     } else {
      echo file_get_contents("agent2.html");
     }
     $stmt->close();
     $conn->close();
    }
} else {
 echo "All field are required";
 die();
}
?>