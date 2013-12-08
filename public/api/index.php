<?php
/**
 * Date: 12/7/13
 * Time: 12:09 PM
 *
 * Phalcon Micro Framework
 */

$app = new Phalcon\Mvc\Micro();

$app->get('/', function () {
    echo "<h1>This is root</h1>";
});
$app->get('/hello', function () {
    echo "<h1>Hello!</h1>";
});
$app->handle();