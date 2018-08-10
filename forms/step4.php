<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>null21 — 4</title>
    <style>
        body { background-color: #000; color: green; font-family: sans-serif, system-ui; font-size: 18px; text-align: center; } button, input { background: #3e3e3e; border: 0; outline: none; color: #fff; padding: 10px 15px; font-size: 14px; } button { cursor: pointer; } form { margin-top: 20px; margin-bottom: 10px; }
    </style>
</head>
<body>
    <b style="display: block;color:white;">Шаг №<? print($step) ?></b>
    <br>
    <img src="/assets/alanturing.png" alt="Алан Тьюринг">
    <form method="POST" action="">
        <input name="pwd" type="text">
        <button type="submit">Проверить</button>
    </form>
    <p>А́лан Мэ́тисон Тью́ринг, OBE (англ. Alan Mathison Turing [ˈtjʊərɪŋ]; 23 июня 1912 — 7 июня 1954) — английский математик, логик, криптограф, оказавший существенное влияние на развитие информатики. Кавалер Ордена Британской империи (1945), член Лондонского королевского общества (1951). Предложенная им в 1936 году абстрактная вычислительная «Машина Тьюринга», которую можно считать моделью компьютера общего назначения, позволила формализовать понятие алгоритма и до сих пор используется во множестве теоретических и практических исследований. Научные труды А. Тьюринга — общепризнанный вклад в основания информатики (и, в частности, — теории искусственного интеллекта).</p>
    <? $error ? print($error) : ''; ?>
</body>
</html>