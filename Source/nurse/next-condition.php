<?
	$row = $_GET['row'];
	$row += 10;
	$url = "http://localhost/Web/Source/nurse/reply-condition-page.php" . "?row=" . $row;
	header('location: ' . $url);
?>