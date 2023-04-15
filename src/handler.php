<?php
$case = $_POST['function'];
$sentence = $_POST['sentence'];
switch ($case) {
    case 'upperCase':
        upperCase();
        break;

    case 'lowerCase':
        lowerCase();
        break;
    case 'removeSpecial':
        removeSpecial();
        break;
}

function upperCase()
{
    echo strtoupper($GLOBALS['sentence']);
}

function lowerCase()
{
    echo strtolower($GLOBALS['sentence']);
}
function removeSpecial()
{
    $newWord = "";
    $word = $_POST['word'];
    for ($i=0; $i < strlen($word);$i++) { 
        if(ord($word[$i]) <= 127){
            $newWord .= $word[$i];
        }
    }
    echo $newWord;
}
?>
