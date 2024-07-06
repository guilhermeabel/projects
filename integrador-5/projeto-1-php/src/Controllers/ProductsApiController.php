<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Model\Products;

class ProductsApiController extends ApiController {
    public function get(int $id) {
        $product = (new Products())->find($id);

        $this->status = !empty($product) ? 200 : 404;

        return $this->data([
            'product' => $product,
        ]);
    }

    public function latest() {
        $products = (new Products())->latest();

        $this->status = !empty($products) ? 200 : 404;

        return $this->data([
            'products' => $products,
        ]);
    }
}
