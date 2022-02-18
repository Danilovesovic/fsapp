<?php require "view/partials/head.php"?>
<?php require "view/partials/navbar.php"?>

<div class="container">
    <div class="row">
        <div class="col-6 offset-3">
            <form action="index.php" method="post" class="mt-5">
                <input type="text" name="email" placeholder="email" class="form-control"><br>
                <?php if(isset($email_error)): ?>
                <p class="alert-danger"><?php echo $email_error ?></p>
                <?php endif; ?>
                <input type="password" name="password" placeholder="password" class="form-control"><br>
                  <?php if(isset($password_error)): ?>
                <p class="alert-danger"><?php echo $password_error ?></p>
                <?php endif; ?>
                <button class="btn btn-secondary form-control">Login</button>
            </form>
        </div>
    </div>
</div>

<?php require "view/partials/bottom.php"?>

