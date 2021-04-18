<!DOCTYPE html>
<html lang="en">
<body>
    <form method="post">
        <p>Username: <input type="text" name="username" /></p>
        <p>Password: <input type="text" name="password" /></p>
        <p><input type="submit" value="Submit"/></p>
    </form>
    <div>
        <?php
        session_start();
        if (!empty($_POST["username"])) {
            if(isset($_SESSION["confirmation"])) {
                if ($_POST["username"] == "host" && $_POST["password"] == "pass"
                    && $_SESSION["confirmation"] == $_POST["confirmation"]) {
                    echo "Success";
                } else {
                    echo "Failed";
                }
            } else {
                echo "Failed";
            }
        }
        ?>
    </div>
</body>
</html>
