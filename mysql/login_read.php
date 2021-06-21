<?php

//connect to data base
$connection = mysqli_connect('localhost', 'root', '', 'loginapp');
if ($connection) {
    echo "WE are connected<br>";
} else {
    die("Database connection failed");
}

$query = "SELECT * FROM users";

$result = mysqli_query($connection, $query);
if (!$result) {
    die("query faild" . mysqli_error());
}

?>

<?php
while ($row = mysqli_fetch_assoc($result)) {
    ?>
    <pre>
<?php
print_r($row);
print_r("<Br>");
?>
</pre>
    <?php
}
?>
