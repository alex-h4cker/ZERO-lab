<!DOCTYPE html>
<html>
<head>
    <title>Page Loader</title>
</head>
<body>
    <h1>Page Loader</h1>
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="?file=page1.php">Page 1</a></li>
        <li><a href="?file=page2.php">Page 2</a></li>
        <li><a href="?file=page3.php">Page 3</a></li>
    </ul>

    <?php
    $file = $_GET['file'];

    if (isset($file)) {
        include("pages/$file");
    } else {
        include("index.php");
    }
    ?>
</body>
</html>
