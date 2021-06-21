<?php include "functions.php"; ?>

<?php
DeleteTable();
?>

<?php include "./includes/header.php"; ?>
<body>
<div class="container">
    <div class="col-xs-6">
        <form action="login_delete.php" method="post">
            <h1>Delete</h1>
            <div class="form-group">
                <select name="id" id="">
                    <?php
                    showAllData();
                    ?>
                </select>
            </div>

            <input class = "btn btn-primary" type="submit" name="submit" value="Delete">
        </form>
    </div>
    <?php include "./includes/footer.php"; ?>



