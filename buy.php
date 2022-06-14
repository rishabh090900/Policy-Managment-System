<?php
$Pol_id = $_POST['Pol_id'];
$cusid = $_POST['cusid'];
$Pay_id = $_POST['Pay_id'];
if(isset($_POST['Agent_id'])){
	$Agent_id = $_POST['Agent_id'];
}
$issue_date = $_POST['issue_date'];
if (!empty($Pol_id) || !empty($cusid) ||   !empty($Pay_id) || !empty($Agent_id) || !empty($issue_date)){
	$host = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "policy";
    //create connection
    $conn = new mysqli($host, $dbusername, $dbpassword, $dbname);
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
     $SELECT = "SELECT Pay_id From buy Where Pay_id = ? Limit 1";
     $INSERT = "INSERT Into buy(Pol_id, cusid, Pay_id, Agent_id, issue_date) values(?, ?, ?, ?, ?)";
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
      $stmt->bind_param('sssss', $Pol_id,$cusid,$Pay_id,$Agent_id,$issue_date);
      $stmt->execute();
	  echo file_get_contents("buy1.html");
    }
 	else {
      echo file_get_contents("buy2.html");
     }
     $stmt->close();
     $conn->close();
     }
	 } 
else {
	echo "All field are required";
	die();
}
?>