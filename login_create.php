<?php include "db.php"; ?>
<?php include "function.php"; ?>
<?php insertData(); ?>
<?php include "header.php"; ?>
<div class="container">
    <div class="col-xs-6">
        <h1 class="text-center">Create</h1>
            <form action="login_create.php" method="post">
                <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username" class="form-control">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control">
                </div>
                <input class="btn btn-primary" type="submit" value="SUBMIT" name="submit">
            </form>
    </div>
</div>
<?php include "footer.php"; ?>