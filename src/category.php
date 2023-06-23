<?php
session_start();
// total category amount
$grocery = 0;
$travelling = 0;
$veggies = 0;
$miscellaneous = 0;
foreach ($_SESSION['expenses'] as $expensekey => $expensevalue) {
    foreach ($expensevalue as $key => $value) {
        if ($key == 'Grocery') {
            $grocery += ($value * 1);
        } else if ($key == 'Travelling') {
            $travelling += ($value * 1);
        } else if ($key == 'Veggies') {
            $veggies += ($value * 1);
        } else if ($key == 'Miscellaneous') {
            $miscellaneous += ($value * 1);
        }
    }
}
echo "<tr><td style='border: 2px solid black;'>$".$grocery."</td>
<td style='border: 2px solid black;'>$".$veggies."</td>
<td style='border: 2px solid black;'>$".$travelling."</td>
<td style='border: 2px solid black;'>$".$miscellaneous."</td></tr>";
?>
