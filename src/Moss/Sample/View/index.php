<!DOCTYPE html>
<html>
<head>
    <title>Moss / <?= $method ?></title>
    <style>
        body, code { font: medium/1.4em monospace; }
        code { display: block; background: #eee; }
        .error { color: red; }
    </style>
</head>
<body>
<h1><?= $method ?> <small>&lt;-- this is namespaced controller class and its currently executed action</small></h1>

<p>Moss sample controller and <a href="<?= $url('Moss:Sample:Sample:source') ?>">it looks like this</a></p>

</body>
</html>