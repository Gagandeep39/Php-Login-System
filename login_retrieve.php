<?php include "header.php"; ?>
<?php include "function.php"; ?>
    <div class="container">
        <div class="col-xs-6">
        <div class="form-group">
        <h1 class="text-center">Retrieve</h1>
            <form action="login_retrieve.php" method="post">
            <input class="btn btn-primary" type="submit" value="Retrieve" name="retrieve">
            <pre>
            <?php retrieveData(); ?>
            </pre>
            </form>
        </div>
        </div>
    </div>
<?php include "footer.php"; ?>
