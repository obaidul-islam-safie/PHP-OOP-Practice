<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "exam_system";

$conn = new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error){
	die("Connection Failed : " .$conn->connect_error);
}

$sql = "SELECT * FROM online_exam_user";
$reasult = $conn->query($sql);

if ($reasult->num_rows > 0){
	while($row = $reasult->fetch_assoc()){
		echo "ID :  {$row["id"]} - Name : {$row["first_name"]}  {$row["last_name"]}- Email : {$row["email"]} - Role : {$row["role"]}<br>";
		
	}
}else{
		echo "No Reasult Found.";
	}
	
	$conn->close();
?>