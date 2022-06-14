<?php
if(isset($_POST['cusid'])){
$cusid = $_POST['cusid'];
}
if(isset($_POST['cusname'])){
$cusname = $_POST['cusname'];
}
if(isset($_POST['cusdob'])){
$cusdob = $_POST['cusdob'];
}
if(isset($_POST['cusaddress'])){
$cusaddress = $_POST['cusaddress'];
}
if(isset($_POST['cusmob'])){
$cusmob = $_POST['cusmob'];
}
if(isset($_POST['cusemail'])){
$cusemail = $_POST['cusemail'];
}
if (!empty($cusid) || !empty($cusname) || !empty($cusdob) || !empty($cusaddress) || !empty($cusmob) || !empty($cusemail)) {
 $host = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "policy";
    //create connection
    $conn = new mysqli($host, $dbusername, $dbpassword, $dbname);
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
     $SELECT = "SELECT cusid From customer Where cusid = ? Limit 1";
     $INSERT = "INSERT Into customer(cusid, cusname, cusdob, cusaddress, cusmob, cusemail) values(?, ?, ?, ?, ?, ?)";
     //Prepare statement
     $stmt = $conn->prepare($SELECT);
     $stmt->bind_param("s",$cusid);
     $stmt->execute();
     $stmt->bind_result($cusid);
     $stmt->store_result();
     $rnum = $stmt->num_rows;
     if ($rnum==0) {
      $stmt->close();
      $stmt = $conn->prepare($INSERT);
      $stmt->bind_param('ssssis', $cusid ,$cusname ,$cusdob ,$cusaddress ,$cusmob ,$cusemail);
      $stmt->execute();
	  echo file_get_contents("singup1.html");
    
     } else {
      echo file_get_contents("signup2.html");
     }
     $stmt->close();
     $conn->close();
    }
} else {
 echo "All field are required";
 die();
}
?>