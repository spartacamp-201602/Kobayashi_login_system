<?php

session_start();

unset($_SESSION['id']);

session_destroy();// $_SESSION の中身が消去される

header('Location: login.php');