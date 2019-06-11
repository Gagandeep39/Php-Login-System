<?php include "db.php"; ?>
<?php include "function.php"; ?>
<?php deleteData(); ?>
<?php include "header.php"; ?>
<div class="container">
    <div class="col-sm-6">
        <h1 class="text-center">Delete</h1>
        <form action="login_delete.php" method="post">
                <div class="form-group">
                    <select name="id" id="">
                        <?php
                        showAllData();
                        ?>
                    </select>
                </div>
            <input class="btn btn-primary" type="submit" name="submit" value="DELETE">
        </form>
    </div>
</div>
<?php include "footer.php"; ?>
