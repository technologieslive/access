<?php
session_start(); 
$_SESSION = array(); 
session_destroy(); 
include ("login.html")
?>