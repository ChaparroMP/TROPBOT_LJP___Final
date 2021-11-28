<?php
 session_start();

 session_unset();

 session_destroy();

 header('Location:http://tropbot-ljp-tg.125mb.com/usersLogin/login.php');
?>