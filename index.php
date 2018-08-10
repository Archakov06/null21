<?php

session_start();
ob_start();

$_PWDS = [
    -1 => '',
    0 => 'molodec',
    1 => '1984',
    2 => '1307100',
    3 => '097d6e4115718a',
    4 => 'enigma',
];

// $_SESSION['step'] = -1;

$error = false;
$step = $_SESSION['step'];
if (empty($step)) {
    $step = $_SESSION['step'] = -1;
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