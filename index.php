<?php

session_start();
ob_start();

$_PWDS = [
    0 => 'molodec',
    1 => '1984',
    2 => '1307100',
    3 => '097d6e4115718a',
    4 => 'enigma',
];

$step = 0;
$started = intval($started) >= 1;

if (isset($_POST['password']) && $_POST['password'] === '') {
    $step = $_SESSION['step'] = 0;
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

// var_dump($step, $_SESSION);

if ($started) {
    include "./forms/step_{$step}.php";
} else {
    include "./forms/welcome.php";
}