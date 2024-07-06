<?php

declare(strict_types=1);

namespace App\Controllers;

class ProductsController extends PagesController {
    public function index() {
        return $this->view('products');
    }
}
