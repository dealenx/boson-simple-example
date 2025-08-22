<?php

require __DIR__ . '/vendor/autoload.php';

$app = new Boson\Application();

$app->webview->html = <<<'HTML'
    <button onclick="foo('HELLO');">Hello</button>
    HTML;

$app->webview->bind('foo', var_dump(...));
