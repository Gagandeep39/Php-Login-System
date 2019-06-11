<?php include "db.php"; ?>
<?php include "function.php"; ?>
<?php updateData();?>
<?php include "header.php"; ?>
<body>
    <div class="container">
        <div class="col-sm-6">
        <h1 class="text-center">Update</h1>
            <form action="login_update.php" method="post">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" placeholder="Enter Username" class="form-control">
        
                    <label for="password">Password</label>
                    <input type="password" name="password" placeholder="Enter Password" class="form-control">
                </div>
                <div class="form-group">
                    <select name="id" id="">
                        <?php showAllData(); ?>
                    </select>
                </div>
                <input class="btn btn-primary" type="submit" name="submit" value="UPDATE">
        
            </form>
        </div>
    </div>
<?php include "header.php"; ?>
