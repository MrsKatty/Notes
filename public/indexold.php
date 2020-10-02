<?php

use View\View;

include "../src/autoload.php";

include "../config/config.php";

$table = new Model\DbTable(
    new mysqli(
        $config['mysql']['host'],
        $config['mysql']['user'],
        $config['mysql']['password'],
        $config['mysql']['database']
    ),
    $config['mysql']['table']
);

$data = $table->get();

$view = new View();
$view
    ->setLayout('mainLayout')
    ->setTemplate('table')
    ->setData(['table' => $data])
    ->view();
