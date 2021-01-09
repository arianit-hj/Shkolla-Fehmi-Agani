<?php require_once "controllerUserData.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Forma Kyqjes</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 form login-form">
                <form action="login-user.php" method="POST" autocomplete="">
                    <h2 class="text-center">Forma Kyqjes</h2>
                    <p class="text-center">Kyqu me emailin dhe fjalëkalimin tënd</p>
                    <?php
                    if(count($errors) > 0){
                        ?>
                        <div class="alert alert-danger text-center">
                            <?php
                            foreach($errors as $showerror){
                                echo $showerror;
                            }
                            ?>
                        </div>
                        <?php
                    }
                    ?>
                    <div class="form-group">
                        <input class="form-control" type="email" name="email" placeholder="Shëno Emailin" required value="<?php echo $email ?>">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="password" name="password" placeholder="Shëno Fjalëkalimin" required>
                    </div>
                    <div class="link forget-pass text-left"><a href="forgot-password.php">Keni harruar fjalëkalimin?</a></div>
                    <div class="form-group">
                        <input class="form-control button" type="submit" name="login" value="Vazhdo">
                    </div>
                    <div class="link login-link text-center">Nuk jeni akoma antarë? <a href="signup-user.php">Regjistrohu</a></div>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>