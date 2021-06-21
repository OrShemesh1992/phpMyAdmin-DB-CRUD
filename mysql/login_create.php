
<?php
//phpinfo();
if(isset($_POST['submit'])){
    $pass = $_POST['password'];
    $user = $_POST['username'];
    //connect to data base
    $connection = mysqli_connect('localhost','root','','loginapp');
    if($connection){
        echo "WE are connected";
    }else{
       die("Database connection failed");
    }
    if($pass && $user){
        $query = "INSERT INTO users(username,password)";
        $query .="VALUES('$user','$pass')";
        $result = mysqli_query($connection,$query);
        if(!$result){
            die("query faild". mysqli_error());
        }
    }else{
        echo "nooooooooooooo";
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
        <form action="login_create.php" method="post">
            <div class="form-group">
            <label for="username">User-name</label>
                <input type="text" name ="username" class="form-control">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control">
            </div>
            <input class = "btn btn-primary" type="submit" name="submit" value="login">
        </form>
    </div>

</div>

</body>
</html>

