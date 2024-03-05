<?php

use Phroute\Phroute\RouteCollector;
use Phroute\Phroute\Dispatcher;
use App\Controllers\CustomerController;

$url = !isset($_GET['url']) ? "/" : $_GET['url'];

$router = new RouteCollector();

// filter check đăng nhập
$router->filter('auth', function(){
    if(!isset($_SESSION['auth']) || empty($_SESSION['auth'])){
        header('location: ' . BASE_URL . 'login');die;
    }
});

// khu vực cần quan tâm -----------

// Khu vực định nghĩa ra các đường dẫn
$router->get('/', [CustomerController::class,'list_customer']);

$router->group(['prefix'=>'customer'],function($router){
    // định nghĩa các route trong group
    $router->get('list-customer',[CustomerController::class,'list_customer']);
    // add customer
    $router->get('add-customer',[CustomerController::class,'add_customer']);
    $router->post('add-customer',[CustomerController::class,'add_customer']);
    // edit
    $router->post('edit-customer/{id}',[CustomerController::class,'edit_customer']);
    // detail
    $router->get('detail-customer/{id}',[CustomerController::class,'edit_customer']);
    //delete
    $router->get('delete-customer/{id}',[CustomerController::class,'delete_customer']);
});

// khu vực cần quan tâm -----------

# NB. You can cache the return value from $router->getData() so you don't have to create the routes each request - massive speed gains
$dispatcher = new Dispatcher($router->getData());

$response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], $url);

// Print out the value returned from the dispatched function
echo $response;

?>