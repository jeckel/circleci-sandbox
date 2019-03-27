<?php
/**
 * Created by IntelliJ IDEA.
 * User: jeckel
 * Date: 27/03/19
 * Time: 08:58
 */
$app->get('/hello[/{name}]', \App\Controller\HelloController::class . ':hello');
