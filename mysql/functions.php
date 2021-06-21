<?php include "db.php";?>
<?php

function showAllData()
{
    global $connection;
    $query = "SELECT * FROM users";

    $result = mysqli_query($connection, $query);
    if (!$result) {
        die("query faild" . mysqli_error());
    }


    while ($row = mysqli_fetch_assoc($result)) {
        $id = $row['id'];
        echo "<option value='$id'>$id</option>";
    }
}

function UpdateTable(){
    global $connection;
    if(isset($_POST['submit'])){
        $user = $_POST['username'];
        $pass = $_POST['password'];

        $user =mysqli_real_escape_string($connection, $user);
        $pass = mysqli_real_escape_string($connection, $pass);

        $hashFormat = "$2y$10$";
        $salt = "iusesomecrazystrings22";
        $hashF_and_salt = $hashFormat . $salt;

        $password  = crypt($pass,$hashF_and_salt);

        $id = $_POST['id'];
        if($user&&$pass&&$id){

            $query = "UPDATE users SET ";
            $query .="username = '$user', ";
            $query .="password = '$password' ";
            $query .="WHERE id = $id ";

            $result = mysqli_query($connection,$query);
            if(!$result){
                die("QUERY FAILED: " . mysqli_error($connection));
            }
        }
    }
}

function DeleteTable(){
    global $connection;
    if(isset($_POST['submit'])){
        $id = $_POST['id'];
        if($id){
            $query = "DELETE FROM users ";
            $query .="WHERE id = $id ";

            $result = mysqli_query($connection,$query);
            if(!$result){
                die("QUERY FAILED: " . mysqli_error($connection));
            }
        }
    }
}

function CreateTable()
{
    global $connection;
    if (isset($_POST['submit'])) {
        $pass = $_POST['password'];
        $user = $_POST['username'];

        $user =mysqli_real_escape_string($connection, $user);
        $pass = mysqli_real_escape_string($connection, $pass);

        $hashFormat = "$2y$10$";
        $salt = "iusesomecrazystrings22";
        $hashF_and_salt = $hashFormat . $salt;

        $password  = crypt($pass,$hashF_and_salt);
        if ($pass && $user) {
            $query = "INSERT INTO users(username,password)";
            $query .= "VALUES('$user','$password')";
            $result = mysqli_query($connection, $query);
            if (!$result) {
                die("query faild" . mysqli_error());
            }
        }
    }
}
function print_data(){
     global $connection;
     $query = "SELECT * FROM users";

     $result = mysqli_query($connection, $query);
     if (!$result) {
         die("query faild" . mysqli_error());
     }
        while ($row = mysqli_fetch_assoc($result)) {

            print_r($row);
            print_r("<Br>");
        }
     }

?>
