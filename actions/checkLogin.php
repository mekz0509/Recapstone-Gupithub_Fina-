<?php
session_start();

$isLoggedIn = false;


if (isset($_SESSION["user_id"])) {
    $isLoggedIn = true;
    //$uname = $_SESSION["uname"];
}
?>