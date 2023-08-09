<!DOCTYPE html>
<html>
<head>
    <title>searchbox</title>
</head>
<body>

<form method="GET" action="">
    <input type="text" name="search_query" placeholder="search">
    <input type="submit" value="search">
</form>

<?php
if(isset($_GET['search_query'])){
    $search_query = $_GET['search_query'];
    echo "<h1>"$search_query"</h1>";
}
?>

</body>
</html>
