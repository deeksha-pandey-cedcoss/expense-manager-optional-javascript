<?php
//  displays the expenses
session_start();
include_once("config.php");

foreach ($_SESSION['expenses'] as $expensekey => $expensevalue) {
    foreach ($expensevalue as $key => $value) {
        echo "<tr><td>" . $key . "</td><td>$" . $value . "</td>
        <td><button id='$expensekey' onclick='edit(this.id)' color: green;'>Edit</button></td>
        <td><button id='$expensekey' onclick='deleteexp(this.id)' color: red;'>Delete</button></td></tr>";
    }
}
