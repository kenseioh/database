<!DOCTYPE html
<html>

<head>
<title>My Title</title>
</head>

<body>

<form action="http://ec2-52-38-15-101.us-west-2.compute.amazonaws.com/database.php" method="post">
  Search:<br>
  <input type="text" name="search">
  <input type="submit" value="Submit">
</form>
<?php
$db = new PDO("mysql:dbname=CSV_DB;host=kenseiohh.cbzgpsh5v5rp.us-west-2.rds.amazonaws.com:3306","info344user", "Ravemaster93");

$search = $_POST["search"];
$rows = $db->query("SELECT * FROM `table` WHERE Name LIKE '%$search%'");
$rows2 = $rows->fetchAll();
	foreach ($rows2 as $row) {
			echo " [Name]:";
			echo $row["Name"];
			echo " [Team]: ";
			echo $row["Team"];
			echo " [GP] ";
			echo $row["GP"];
			echo " [3ptm] ";
			echo $row["3PT_M"];
			echo " [Reb] ";
			echo $row["Rebounds_Tot"];
			echo " [Stl] ";
			echo $row["Stl"];
			echo " [Blk] ";
			echo $row["Blk"];
			echo " [TO] ";
			echo $row["TO"];
			echo " [Ast] ";
			echo $row["Ast"];?> <br/>
			<?php
	}

?>




</body>
</html>
