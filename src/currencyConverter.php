<?php
$_SESSION['currency'] = array("RUPEE" => "1", "USD" => "0.012", "EURO" => "0.011", "SOL" => "0.046");
    $first = $_POST['fromCurrency'];
    $second = $_POST['toCurrency'];
    $amount = $_POST['amount'];
    $val = $amount / $_SESSION['currency'][$first];
    $val = $val * $_SESSION['currency'][$second];
    echo $val;
?>

