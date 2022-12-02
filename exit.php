<?php 
			setcookie('users', $login, time() - 3600, "/");
			header('Location: /')
?>