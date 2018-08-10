<?php

session_start();
ob_start();

$_PWDS = [
    'molodec',
    '1984',
    '1307100',
    '097d6e4115718a',
    'enigma',
];

// $_SESSION['step'] = 0;

$error = false;
$step = $_SESSION['step'];
if (empty($step)) {
    $step = $_SESSION['step'] = 0;
}

if (isset($_POST['pwd'])) {

    if ($_POST['pwd'] == $_PWDS[$step]) {
        $step++;
        $_SESSION['step'] = $step;
        $error = '';
    } else {
        $error = '<span style="color: red">Неверно :(</span>';
    }

}

include "./forms/step{$step}.php";