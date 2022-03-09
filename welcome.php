<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index1.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
	
	<link rel="stylesheet"  type="css/text"
	href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" >
 
</head>
<frameset rows ="18%,*"  frameborder="0"  >
<frame src="title2.html" name="title" scrolling="no">
<frameset cols="15%,*" frameborder="0" >
<frame src="frames10.html" name="link">
<frame src="main1.html" name="main">
</frameset>
</frameset>
<body>
</body>

<!--<body>
    <?php echo "<h1>Welcome " . $_SESSION['username'] . "</h1>"; ?>
    <a href="logout.php">Logout</a>
</body>-->
	
	
 

</html>