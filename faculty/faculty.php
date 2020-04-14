<?php
include('session.php');
?>
<html>
<title>Faculty Page</title>
<head>
<style>
body{
	background:blue;
}
</style>
</head>
<body>
<div id="profile">
<b id="welcome">Welcome:<i><?php echo $login_session;?></i></b>
<b id="logout"><a href="logout.php">Logout</a></b>
</div>
</body>
</html>
