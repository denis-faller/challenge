<?php

function insertUsers($users){
	try {
		$dbh = new PDO('mysql:host=localhost;dbname=test', "root", "");
		$sql = "INSERT INTO users (id, name) VALUES ";
		$i = 0;
		$amount = count($users);
		while($i < $amount){
			$sql .= "('', ?) ";
			if($i != ($amount-1)){
				$sql .= ",";
			}
			$i++;
		}
		
		$stmt = $dbh->prepare($sql);
		
		$j = 1;
		foreach($users as $user){
			$stmt->bindValue($j, $user);
			$j++;
		}
		
		$stmt->execute();
		
	} catch (PDOException $e) {
		print "Error!: " . $e->getMessage() . "<br/>";
		die();
	}
}

$users = explode("\r\n", $_POST["text"]);

insertUsers($users);
?>