<?php
/**
 * Date: 12/7/13
 * Time: 12:09 PM
 *
 * Phalcon Micro Framework
 */
$loader = new \Phalcon\Loader();
$loader->registerDirs(array(
    __DIR__ . '/app/model'
))->register();
$app = new Phalcon\Mvc\Micro();

// Setup the database service
// Comment out if you need

$app['db'] = function() {
    return new Phalcon\Db\Adapter\Pdo\Mysql(array(
        "host" => "localhost",
        "username" => "root",
        "password" => "123456",
        "dbname" => "acme"
    ));
};
$app->get('/', function () {
    echo "<h1>This is root</h1>";
});
include __DIR__ . "/app/routes/contact.php";
$app->handle();