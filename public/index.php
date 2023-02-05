<?php

use Viewi\Routing\Router;

require __DIR__ . '/../vendor/autoload.php';

// simulate the back-end
Router::register('get', '/api/data', function (int $page = 1, int $size = 10) {
    $data = [];
    for($i=0; $i< $size; $i++)
    {
        $id = ($page - 1) * $size + $i + 1;
        $data[] = [
            'id' => $id,
            'name' => "Data N$id"
        ];
    }
    return $data;
});

// for everything else, including 404 and home page
Router::register('*', '*', function () {
    // return html page from your renderer
    $html = require 'default.php';
    return $html;
});

// Viewi application here
include __DIR__ . '/../viewi-app/viewi.php';
Viewi\App::handle();
