<?php
// sends the category and amount 
session_start();
include_once("config.php");

$id=$_POST['id'];

$_SESSION['Update'] = $id;
foreach ($_SESSION['expenses'] as $expensekey => $expensevalue) {
   foreach ($expensevalue as $key => $value) {
    if ($expensekey == $id) {
        $array = array('key'=> $key, 'value' => $value);
        print_r(json_encode($array)) ;
        break;
    }
   }
}
?>