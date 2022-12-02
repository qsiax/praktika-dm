<?php 
    $login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
    $pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);

		$mysql = new mysqli('localhost', 'host1844592_main', 'qazplmxcvbn122', 'host1844592_db12');
		$result = $mysql->query("SELECT * FROM `users` WHERE `user` = '$login' AND `pass` = '$pass'");
		$users = $result->fetch_assoc();
		if(count($users) == 0) {
			echo "Такой пользователь не найден";
			exit();
		};

		setcookie('users', $login, time() + 3600, "/");

    $mysql->close();

    header('Location: /')
?>