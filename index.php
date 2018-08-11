<?php

session_start();
ob_start();

$_PWDS = [
    0 => '',
    1 => 'molodec',
    2 => '1984',
    3 => '1307100',
    4 => '097d6e4115718a',
    5 => 'enigma',
    6 => '097d6e4115718a073d9e1421451cae9e'
];

// $_SESSION['step'] = null;

$step = 0;
$started = !empty($_SESSION['step']);

if (!empty($_SESSION['step'])) {
    $step = $_SESSION['step'];
}

if (isset($_POST['password']) && $_POST['password'] === '') {
    $step = $_SESSION['step'] = 1;
    $started = true;
}

if ($started && isset($_POST['pwd'])) {
    if ($_POST['pwd'] == $_PWDS[$step]) {
        $step++;
        $_SESSION['step'] = $step;
        $error = '';
    } else {
        $error = '<span style="color: red">Неверно :(</span>';
    }
}

// var_dump($step, $started, $_SESSION['step']);

// include "./forms/step_{$step}.php";

if ($started) {
    include "./forms/step_{$step}.php";
} else {
    include "./forms/welcome.php";
}