<?php
session_start();

if (!isset($_SESSION['expenses'])) {
    $_SESSION['expenses'] = array();
}
if (!isset($_SESSION['remaining'])) {
    $_SESSION['remaining'] = $_SESSION['income'];
}
if (!isset($_SESSION['totalexpense'])) {
    $_SESSION['totalexpense'] = 0;
}
?>