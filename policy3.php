<!doctype html>
<html
<head>
<title>Insurance Company</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<style>
body {
 background-image: url('one.jfif');
  background-size:100%;
}
header{

font-size:70px;
padding:20px;
color:rgb(255, 255, 255,0.8);
text-align: center;


}
table{
	width:100%;
	font-family:monospace;
	font-size:25px;text-align:left;
	color:white;
  
}
th{
background-color:rgb(255, 255, 255,0.3);
padding:10px;
}
tr{
	background-color:rgb(255, 255, 255,0.1);
	width:100%;
	line-height:2;
}
.button{
    margin-top:50px;
	background-color:rgb(255, 255, 255,0.0);
	margin-left:800px;
text-align:center;
margin-right:10px;

	font-family:Garamond;
}
.button a
{
    position: relative;
    display: inline-block;
    padding: 15px 30px;
    color: white;
    text-transform: uppercase;
    letter-spacing: 2px;
    text-decoration: none;
    font-size: 24px;
	font-weight:bold;
    overflow: hidden;
    transition: 0.1s;
}
.button a:hover
{
    color: black;
    background:rgb(7, 115, 136,0.5);
    box-shadow: 0 0 10px white, 0 0 40px white, 0 0 80px white;
    transition-delay: 0.5s;
	border-radius:10px;
}
.button a span
{
    position: absolute;
    display: block;
}
.button a span:nth-child(1)
{
    top: 0;
    left: -100%;
    width: 100%;
    height: 2px;
    background: linear-gradient(90deg,transparent,#2196f3);
}
.button a:hover span:nth-child(1)
{
    left: 100%;
    transition: 1s;
} 
.button a span:nth-child(2)
{
    bottom: 0;
    right: -100%;
    width: 100%;
    height: 2px;
    background: linear-gradient(270deg,transparent,#2196f3);
}
.button a:hover span:nth-child(2)
{
    right: 100%;
    transition: 1s;
    transition-delay: 0.5s;
}
.button a span:nth-child(3)
{
    top: -100℅;
    right: 0%;
    width: 2px%;
    height: 100%;
    background: linear-gradient(180deg,transparent,#2196f3);
}
.button a:hover span:nth-child(3)
{
    top: 100%;
    transition: 1s;
    transition-delay: 0.25s;
}
.button a span:nth-child(4)
{
    bottom: -100℅;
    left: 0%;
    width: 2px%;
    height: 100%;
    background: linear-gradient(360deg,transparent,#2196f3);
}
.button a:hover span:nth-child(4)
{
    bottom: 100%;
    transition: 1s;
    transition-delay: 0.75s;
}

.policy{

font-size:50px;


background-color:rgb(255, 255, 255,0.5);

}
.policy a{
text-decoration:none;
color:white;
}
nav{
margin-top:10px;
padding:10px;

background-color:rgb(255, 255, 255,0.5);
}
.navi{
background-color:rgb(255, 255, 255,0.0);
border:none;
text-align:center;
text-decoration:none;
overflow:hidden;
}
.navi a{
float:left;
display:block;
color:white;
text-align-center;
font-weight:bold;
font-size:25px;
padding: 10px 5px;
text-decoration:none;
}
.navi a.right{
float:right;
padding: 10px 10px;
}
.navi a:hover{
background-color:rgb(255, 255, 255,0.3);
color:black;
cursor:pointer;
border-radius:10px;
}
select{
margin-bottom:15px;
margin-left:20%;
margin-right:20%;

width: 60%;
  
 font-size:30px;
 background-color:rgb(255, 255, 255,0.2);
 border:none;
 text-align:center;
 
}
input[type=text] {
width:60%;
background-color:rgb(255, 255, 255,0.2);
border:none;
height:30px;

margin-bottom:15px;
margin-left:20%;

margin-right:20%;
font-size:20px;

}
input[type=number] {
width:60%;
background-color:rgb(255, 255, 255,0.2);
border:none;
height:30px;
margin-bottom:15px;
margin-left:20%;
font-color:white;
margin-right:20%;
font-size:20px;
}
input[type=submit]{
width:60%;
background-color:rgb(0, 255, 255,0.2);
border:none;
height:30px;
margin-bottom:15px;
margin-left:20%;
margin-right:20%;

}
form{
color:white;
font-size:30px;
text-align:center;
background-color:rgb(255, 255, 255,0.1);
width:60%;
margin-left:20%;
}
footer{
color:rgb(255, 255, 255,0.8);;
text-align:center;



font-size:30px;
}
</style>
<body >
<header>Insurance Company</header>
<section>
<nav>
<button class="navi"><a  href="homepage.html" >Homepage</a></button> 
 <button class="navi"> <a href="buy.html">Buy Policy</a></button>   
<button class="navi"><a href="about.html">About Us</a></button>  
 <button class="navi" Style="float:right"> <a href="signup.html">Register</a></button>  

 <button class="navi" Style="float:right"> <a href="payment.html" >Payment</a></button> 

</nav>

<table>
  <tr>
     <th>id</th>
	 <th>Name</th>
	 <th>Company</th>
    <th>Type</th>
    <th>Amount</th>
    <th>Time</th>
  </tr>
<?php
include("connect.php");
	$sql="SELECT*FROM policy;";
	$result=mysqli_query($conn,$sql);
	$total=mysqli_num_rows($result);
	if($total!=0){
		while($res=mysqli_fetch_array($result)){
		echo '<tr>';
		echo '<td>'.$res['Pol_id'].'</td>','<td>'.$res['Pol_name'].'</td>','<td>'.$res['policy_type'].'</td>','<td>'.$res['policy_comp'].'</td>','<td>'.$res['Pol_amount'].'</td>','<td>'.$res['Pol_time'].'</td>';
		echo '<tr>';
	}}
	else{
	echo "no recoeds";}
?>







</table>

<footer>
<h1>Buy Policy At Minimum Cost</h1>
</footer>
</body>
</html>