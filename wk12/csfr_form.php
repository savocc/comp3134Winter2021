<?php
session_start();
$_SESSION["confirmation"] = "random";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf8">
    <title>Title</title>
</head>
<body>
<form id="form" method="post" action="csfr.php">
    <input type="hidden" name="username" value="host" />
    <input type="hidden" name="password" value="pass" />
    <input type="hidden" name="confirmation" value=<?php echo $_SESSION["confirmation"]; ?> />
</form>
<script>
    document.getElementById('form').submit();
</script>
</body>
</html>
