<?php

	$server = 'localhost';
	$username = ' ';
	$password = ' '; 
	$database = ' '; 

	$conn = new mysqli($server, $username, $password, $database);

	if($conn->connect_error){
		die("connection failed: " . $conn->connect_error);
	}//connection check

	if ($_SERVER['REQUEST_METHOD'] == 'POST'){
		$name = '';
		if(isset($_POST['ol_fash'])){
			$name = "Old Fashioned";
		}elseif(isset($_POST['toronto'])){
			$name = "Toronto";
		}elseif(isset($_POST['marg'])){
			$name = "Margarita";
		}elseif(isset($_POST['ds'])){
			$name = "Dark and Stormy";
		}elseif(isset($_POST['ameri'])){
			$name = "Americano";
		}elseif(isset($_POST['negroni'])){
			$name = "Negroni";
		}else{
			$name = "Aviation";
		}
		$sql = "SELECT * FROM cocktails WHERE Name LIKE '%$name%'"; 
		$result = mysqli_query($conn, $sql);
		$queryResult = mysqli_num_rows($result);
		if($queryResult > 0){
			while($row = mysqli_fetch_assoc($result)){
				//echo "<table><tr><td>" .$row["Name"]."</td><td>".$row["Recipe"]."</td><td>" .$row["Type"]. "</td></tr>";
				echo "<br>".$row["Name"]."<br>".$row["Recipe"]."<br>" .$row["Type"]."<br>";

			}//while
		echo "</table>";

		}else{
			echo "0 results";
		}

	}//end 		
	$conn->close();
?>
