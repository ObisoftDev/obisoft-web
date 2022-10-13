<?php
session_start();

$LANG = "es";

if (isset($_POST["lang"])){
    $LANG = $_POST["lang"];
    $_SESSION["lang"] = $LANG;
}

if (isset($_SESSION["lang"])){
    $LANG = $_SESSION["lang"];
}

include_once "lang_".$LANG.".php";