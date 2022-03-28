<div id="main">
    <h1>SQL Injection (Login Form/Error-based/UNION)</h1>
    <p>Hãy nhập thông tin đăng nhập nhé</p>
    <form action="<?php echo ($_SERVER["SCRIPT_NAME"]); ?>" method="GET">
        <p><label for="login">Login:</label><br />
            <input type="text" id="login" name="login" size="20" autocomplete="off" />
        </p>
        <p><label for="password">Password:</label><br />
            <input type="password" id="password" name="password" size="20" autocomplete="off" />
        </p>
        <button type="submit" name="form" value="submit">Login</button>
    </form>
    <br />
    <?php
    include("connect.php");
    $message = '';
    if (isset($_GET["form"])) {
        $login = $_GET["login"];
        // $login = mysql_real_escape_string($login);
        $password = $_GET["password"];
        $password = hash('sha1', $password, false);
        // $password = mysql_real_escape_string($password);
        // $sql = "SELECT * FROM users WHERE id = $login";
        $sql = "SELECT * FROM users WHERE login = '$login' AND password = '$password' ";
        echo $sql;
        $recordset = mysql_query($sql, $link);
        if (!$recordset) {
            die("Error: " . mysql_error());
        } else {
            $row = mysql_fetch_array($recordset);
            if ($row["login"]) {
                $message =  "<p>Welcome <b>" . ucwords($row["login"]) . "</b>, how are you today?</p><p>Your secret: <b>" . ucwords($row["secret"]) . "</b></p>";
            } else {
                $message = "<font color=\"red\">Invalid credentials!</font>";
            }
        }
        mysql_close($link);
    }
    echo $message;
?>