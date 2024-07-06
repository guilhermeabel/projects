<?php

declare(strict_types=1);

require_once __DIR__ . '/../src/config.php';

use App\Controllers\DonationController;
use App\Controllers\HomeController;
use App\Controllers\ProductsApiController;
use App\Controllers\ProductsController;
use App\Controllers\UserController;
use App\Web\Router;

$homeController = new HomeController();
$donationController = new DonationController();
$userController = new UserController();
$productsController = new ProductsController();

$productsApiController = new ProductsApiController();

$router = new Router();
$router->get('/', static fn () => $homeController->index());
$router->get('/signup', static fn () => $userController->create());
$router->post('/signup', static fn () => $userController->store());
$router->post('/donate', static fn () => $donationController->store());
$router->get('/donation', static fn () => $donationController->index());
$router->get('/products', static fn () => $productsController->index());

$router->get('/api/v1/products/all', static fn () => $productsApiController->all());
$router->get('/api/v1/products/latest', static fn () => $productsApiController->latest());
$router->get('/api/v1/product/{id}', static fn (int $id) => $productsApiController->get($id));

$router->handleRequest();
