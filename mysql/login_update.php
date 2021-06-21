<?php include "functions.php"; ?>

<?php
    if(isset($_POST['submit'])){
        $user = $_POST['username'];
        $pass = $_POST['password'];
        $id = $_POST['id'];
        if($user&&$pass&&$id){

            $query = "UPDATE users SET ";
            $query .="username = '$user', ";
            $query .="password = '$pass' ";
            $query .="WHERE id = $id ";

            $result = mysqli_query($connection,$query);
            if(!$result){
                die("QUERY FAILED: " . mysqli_error($connection));
            }
        }
    }
?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</head>

<body>
<div class="container">
    <div class="col-xs-6">
        <form action="login_update.php" method="post">
            <div class="form-group">
                <label for="username">User-name</label>
                <input type="text" name ="username" class="form-control">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control">
            </div>
            <div class="form-group">
                <select name="id" id="">
                    <?php
                        showAllData();
                    ?>
                </select>
            </div>

            <input class = "btn btn-primary" type="submit" name="submit" value="Update">
        </form>
    </div>

</div>

</body>
</html>


