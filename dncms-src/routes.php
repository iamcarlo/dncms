<?php

$app->get('/', function () {
    require 'view-front.php';    
});

$app->post('/', function () use ($app) {
    //$allPostVars = $app->request->post();
    //var_dump($allPostVars);
    $sname1 = $app->request->post('sname1');
    $sname2 = $app->request->post('sname2');
    $scity  = $app->request->post('scity');
    $sstate = $app->request->post('sstate');
    if ($scity == '') {
        $app->response->redirect("/miner/start/$sname1/$sname2/$sstate");
    } else {
        $app->response->redirect("/miner/start/$sname1/$sname2/$scity/$sstate");
    }
});







?>
