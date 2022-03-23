<?php
include("connect.php");
if(isset($_REQUEST["title"]))
{
    $title = $_REQUEST["title"];
    $sql = "SELECT * FROM books WHERE title = '" . $title . "'";
    $recordset = mysql_query($sql, $link);
    mysql_close($link);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div id="main">

        <h1>SQL Injection - Blind - Time-Based</h1>

        <form action="<?php echo ($_SERVER["SCRIPT_NAME"]); ?>" method="GET">

            <p>
                <label for="title">Search for a book:</label>
                <input type="text" id="title" name="title" size="25">
                <button type="submit" name="action" value="search">Search</button>
            </p>

        </form>

        <p>Gửi mail nhé...</p>

    </div>
</body>

</html>