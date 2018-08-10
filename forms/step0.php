<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>null21 — 0</title>
    <style>
        body { background-color: #000; color: green; font-family: sans-serif, system-ui; font-size: 18px; text-align: center; } button, input { background: #3e3e3e; border: 0; outline: none; color: #fff; padding: 10px 15px; font-size: 14px; } button { cursor: pointer; } form { margin-top: 20px; margin-bottom: 10px; }
    </style>
</head>
<body>
    <b style="display: block;color:white;">Шаг №<? print($step) ?></b>
    <form method="POST" action="">
        <input name="pwd" type="text">
        <button type="submit">Проверить</button>
    </form>
    <? $error ? print($error) : ''; ?>
    <p>С этой задачей ты точно справишься.</p>
    <key style="display: none">translitom('молодец')</key>
</body>
</html>