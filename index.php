<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script type="text/javascript" src="script/register.js"></script>
    <script type="text/javascript" src="script/validation.min.js"></script>

    <title>Покровский колледж</title>
</head>
<body>

    <div class="login">
        <div class="login-body">
            <img src="img/close.svg" class="close" height="36px" width="36px" id="close-login">
            <div class="login-title">Вход</div>

            <form action="auth.php" method="post">
                <input type="text" name="login" placeholder="Логин">
                <input type="password" name="pass" placeholder="Пароль">
                <button type="submit" name="submit">Войти</button>
            </form>

        </div>
    </div>

    <div class="registration">
        <div class="registration-body">
            <img src="img/close.svg" class="close" height="36px" width="36px" id="close-regis">
            <div class="registration-title">Регистрация</div>

            <form method="post" id="register-form" action="register.php" class="form-signin">
                <div id="error"></div>
                <input type="login" name="user_name" id="user_name" placeholder="Логин">
                <input type="email" name="user_email" id="user_email" placeholder="E-mail">
                <input type="password" name="password" id="password" placeholder="Пароль">
                <input type="password" name="cpassword" id="cpassword" placeholder="Подтвердите пароль">
                <button type="submit" name="btn-save" id="btn-submit">Зарегистрироваться</button>
            </form>

        </div>
    </div>

    <div class="header">
        <div class="container">
            <div class="header-body">
                <img src="img/logo.svg">
                <div class="box">
                    <?php
                    if($_COOKIE['users'] == ''):
                    ?>
                    <div class="btn" id="regis">Регистрация</div>
                    <div class="btn" id="log">Вход </div>
                    <?php else: ?>
                    <a class="btn" href="exit.php"><?=$_COOKIE['users']?></a>
                    <? endif; ?> 
                    <img src="img/avatar.svg">
                </div>
            </div>
        </div>
    </div>

    <div class="main">
        <div class="container">
            <div class="main-body">
                <h1 class="title">Покровский колледж</h1>
                <img src="img/college.jpg">
            </div>
        </div>
    </div>

    <script src="script/script.js"></script>

</body>
</html>