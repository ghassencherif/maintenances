<?php
session_start();

require_once('includes/function.php');
require_once('db.php');

$msg_err = '';
$last_email = '';
if(isset($_POST['login_btn'])){
    $last_email=$_POST['email'];
    $email=$_POST['email'];
    $clearTextPassword=$_POST['password'];
    try {
        $user = $auth->getUserByEmail("$email");
        try{
            $signInResult = $auth->signInWithEmailAndPassword($email, $clearTextPassword);
            $idTokenString=$signInResult->idToken();

            try {
                $verifiedIdToken = $auth->verifyIdToken($idTokenString);

                $uid = $verifiedIdToken->claims()->get('sub');

                $user = $auth->getUser($uid);

                $_SESSION['verified_user_id']=$uid;
                $_SESSION['idTokenString']=$idTokenString;

                $msg_err = 'Authentification avec sucess';
                header("Location:index.php");


            } catch (FailedToVerifyToken $e) {
                echo 'The token is invalid: '.$e->getMessage();
            }

        }catch (Exception $e){
            $msg_err = 'Mot de passe incorrect';
        }
    } catch (\Kreait\Firebase\Exception\Auth\UserNotFound $e) {
        $msg_err = 'Invalide adresse mail';
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>

    <title>Authentification</title>
    <?php require_once 'includes/header.php'; ?>

</head>
<body class="az-body">

<div class="az-signin-wrapper">
    <div class="az-card-signin">
        <img src="img/LogoMJ.jpg" class="logo" alt="CF GROUP Logo" />
        <div class="az-signin-header">
            <?php
            if ($msg_err != '') {
                ?>
                <div class="alert alert-danger"><?php echo $msg_err ?></div>
                <?php
            }
            ?>
            <h2>Content de te revoir!</h2>
            <h4>Veuillez vous connecter pour continuer</h4>

            <form action="login.php" method="post">
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" name="email" class="form-control" placeholder="Entrer votre email" value="<?php echo $last_email?>" required>
                </div><!-- form-group -->
                <div class="form-group">
                    <label>Mot de passe</label>
                    <input type="password" name="password" class="form-control" placeholder="Entrer votre mot de passe" value=""
                           required>
                </div><!-- form-group -->
                <button name="login_btn" class="btn btn-az-primary btn-block">Se connecter</button>
            </form>
        </div><!-- az-signin-header -->
        <div class="az-signin-footer">
            <p><a href="">Mot de passe oublié?</a></p>
        </div><!-- az-signin-footer -->
    </div><!-- az-card-signin -->
</div><!-- az-signin-wrapper -->

<?php require_once 'includes/footer.php'; ?>
<script>
    $(function () {
        'use strict'

    });
</script>
</body>
</html>
