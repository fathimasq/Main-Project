<?php
session_start();
if(isset($_SESSION['uname']))
{
	$temp=$_SESSION['uname'];
	?>
<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="refresh" content="0;url=dist/index.php">
    <title>SB Admin</title>
    <script language="javascript">
        window.location.href = "dist/index.php"
    </script>
</head>

<body>
    Go to <a href="dist/index.php">/dist/index.php</a>
</body>

</html>
<?php
}
else
{
header("location:login.html");
}
?>
