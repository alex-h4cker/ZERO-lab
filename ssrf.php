<!DOCTYPE html>
<html>
<head>
    <title>SSRF Vulnerability</title>
</head>
<body>
    <form method="POST" action="">
        <input type="text" name="url" placeholder="Enter URL">
        <input type="submit" value="Submit">
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $url = $_POST["url"];
            $content = file_get_contents($url);
            echo $content;
        }
    ?>
</body>
</html>
