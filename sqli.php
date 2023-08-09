<!DOCTYPE html>
<html>
<head>
    <title>Search Page</title>
</head>
<body>
    <form method="GET" action="">
        <input type="text" name="id" placeholder="Enter ID">
        <input type="submit" name="submit" value="Search">
    </form>

    <?php
    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        
        $mysqli = new mysqli('localhost', 'root', '', 'sqli');

        
        if ($mysqli->connect_errno) {
            printf("Connect failed: %s\n", $mysqli->connect_error);
            exit();
        }

        
        $sql = "SELECT * FROM search WHERE 1 LIKE '$id'";

        
        if ($result = $mysqli->query($sql)) {
            while ($obj = $result->fetch_object()) {
                print($obj->username);
            }
        }
        
        elseif ($mysqli->error) {
            print($mysqli->error);
        }
    }
    ?>
</body>
</html>
