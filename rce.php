<!DOCTYPE html>
<html>
<head>
    <title>Ping Test</title>
</head>
<body>

    <form method="POST" action="">
        <label for="hostname">Enter hostname or IP address:</label><br>
        <input type="text" id="hostname" name="hostname"><br><br>
        <input type="submit" value="Ping">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $hostname = $_POST["hostname"];
        $output = shell_exec("ping -c 4 " . $hostname);
        echo "<pre>$output</pre>";
    }
    ?>

</body>
</html>
