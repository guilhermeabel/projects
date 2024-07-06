<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Model\Product;

class ProductsApiController extends ApiController {
    public function get(int $id): void {
        $product = (new Product())->find($id);

        $this->status = !empty($product) ? 200 : 404;

        echo $this->data([
            'product' => $product,
        ]);
    }

    public function all(): void {
        $products = (new Product())->all();

        $this->status = !empty($products) ? 200 : 404;

        echo $this->data([
            'products' => $products,
        ]);
    }

    public function latest(): void {
        $products = (new Product())->latest();

        $this->status = !empty($products) ? 200 : 404;

        echo $this->data([
            'products' => $products,
        ]);
    }
}
