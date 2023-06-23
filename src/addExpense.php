<?php
session_start();
include_once("config.php");

$category = $_POST['category'];
$expenses = $_POST['expense'] * 1;
$flag=$_POST['flag'];

// print_r($category);die;
if ($flag == 0) {
    array_push($_SESSION['expenses'], array($category => $expenses));
    $_SESSION['totalexpense'] = $_SESSION['totalexpense'] + ($expenses* 1);
    $_SESSION['remaining'] = $_SESSION['income'] - $_SESSION['totalexpense'];   
} else {
    $update_id = $_SESSION['Update'];
    foreach ($_SESSION['expenses'] as $expkey => $expvalue) {
        foreach ($expvalue as $key => $value) {
            if ($expkey == $update_id) {
                $_SESSION['totalexpense'] -= $value;
                $_SESSION['remaining'] += $value;
                $key = $category;
                $value = $expenses;
                $_SESSION['expenses'][$expkey] = array($key => $value);
                $_SESSION['totalExpense'] += $value;
                $_SESSION['remaining'] -= $value;
            }
        }
    }
    unset($_SESSION['Update']);
 
}
$array = array(
    'total' => $_SESSION['totalexpense'],
    'remaining' => $_SESSION['remaining'],
    'income' => $_SESSION['income']
);
// print_r(($array));die;
print_r(json_encode($array));

?>