<?php

declare(strict_types=1);

namespace App\Model;

use App\Database\MySQLDatabase;

class ProductImages {
    private MySQLDatabase $database;

    public function __construct() {
        $this->database = MySQLDatabase::getInstance();
    }

    public function findByProductId(int $productId) {
        return $this->database->query("SELECT * FROM product_images WHERE product_id = {$productId}");
    }

    public function findByNameAndProductId(int $productId, string $name) {
        return $this->database->query("SELECT * FROM product_images WHERE product_id = {$productId} AND name = '{$name}'");
    }

    public function create(array $data): void {
        // TODO
    }

    public function update(int $id, array $data): void {
        // TODO
    }

    public function deleteById(int $id): void {
        $this->database->query("DELETE FROM product_images WHERE id = {$id}");
    }

    public function deleteByProductId(int $productId): void {
        $this->database->query("DELETE FROM product_images WHERE product_id = {$productId}");
    }
}
