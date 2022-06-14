<?php
$Com_id = $_POST['Com_id'];
$Com_name = $_POST['Com_name'];
$Com_Address = $_POST['Com_Address'];
if(isset($_POST['Com_regno'])){
$Com_regno = $_POST['Com_regno'];
}
$Com_type = $_POST['Com_type'];

if (!empty($Com_id) || !empty($Com_name) || !empty($Com_type) || !empty($Com_Address) || !empty($Com_regno) ) {
 $host = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "policy";
    //create connection
    $conn = new mysqli($host, $dbusername, $dbpassword, $dbname);
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
     $SELECT = "SELECT Com_id From company Where Com_id = ? Limit 1";
     $INSERT = "INSERT Into company(Com_id, Com_name, Com_Address, Com_regno, Com_type) values(?, ?, ?, ?, ?)";
     //Prepare statement
     $stmt = $conn->prepare($SELECT);
     $stmt->bind_param("s",$Com_id);
     $stmt->execute();
     $stmt->bind_result($Com_id);
     $stmt->store_result();
     $rnum = $stmt->num_rows;
     if ($rnum==0) {
      $stmt->close();
      $stmt = $conn->prepare($INSERT);
      $stmt->bind_param('sssss', $Com_id,$Com_name,$Com_Address,$Com_regno,$Com_type);
      $stmt->execute();
	  echo file_get_contents("company1.html");
    
     } else {
      echo file_get_contents("company2.html");
     }
     $stmt->close();
     $conn->close();
    }
} else {
 echo "All field are required";
 die();
}
?>