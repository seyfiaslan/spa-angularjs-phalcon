<?php
/**
 * Created by PhpStorm.
 * User: seyfi
 * Date: 12/7/13
 * Time: 7:07 PM
 */
$app->post('/contact', function () use ($app) {
    $data = $app->request->getJsonRawBody();
    $item = new Contact();
    $item->name = $data->name;
    $item->email = $data->email;
    $item->message = $data->message;
    $date = new DateTime("now");
    $item->date = $date->format("Y-m-d h:m:s");
    $item->save();

    $response = new \Phalcon\Http\Response();
    if (count($item->getMessages()) > 0) {
        $response->setStatusCode("406","Something went wrong");
    } else {
        $response->setContent("Successfully sent.");
    }
    return $response;

});