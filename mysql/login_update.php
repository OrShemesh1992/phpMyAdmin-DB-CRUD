<?php include "functions.php"; ?>

<?php
UpdateTable();
?>
<?php include "./includes/header.php"; ?>

<body>
<div class="container">
    <div class="col-xs-6">
        <form action="login_update.php" method="post">
            <h1>Update</h1>
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

    <?php include "./includes/footer.php"; ?>


