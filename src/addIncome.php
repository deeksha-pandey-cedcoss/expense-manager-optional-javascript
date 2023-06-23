<?php
//  adds income to the existing income
session_start();
include_once("config.php");

$income=$_POST['income'];

if (!isset($_SESSION['income'])) {
    $_SESSION['income'] = $income;
}else {
    $_SESSION['income'] += ($income * 1);
    $_SESSION['remaining'] += ($income * 1);
}
$array = array(
    'totalexpense'=>$_SESSION['totalexpense'],
    'remaining' => $_SESSION['remaining'],
    'income' => $_SESSION['income']
);
print_r(json_encode($array));
?>