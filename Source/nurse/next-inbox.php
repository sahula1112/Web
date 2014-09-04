<?
	$row = $_GET['row'];
	$row += 10;
	$url = "http://localhost/Web/Source/nurse/inbox.php" . "?row=" . $row;
	header('location: ' . $url);
?>