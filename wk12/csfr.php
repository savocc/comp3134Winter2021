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
            if (!empty($_POST["username"])) {
                if ($_POST["username"] == "host" && $_POST["password"] == "pass") {
                    echo "Success";
                } else {
                    echo "Failed";
                }
            }
        ?>
    </div>
</body>
</html>
