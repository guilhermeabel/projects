<?php

declare(strict_types=1);

namespace App\Model;

use App\Database\MySQLDatabase;

class Product {
    private MySQLDatabase $database;

    public function __construct() {
        $this->database = MySQLDatabase::getInstance();
    }

    public function all() {
        return $this->database->query('SELECT * FROM products ORDER BY id DESC');
    }

    public function latest() {
        return $this->database->query('SELECT * FROM products ORDER BY id DESC LIMIT 10');
    }

    public function find(int $id) {
        return $this->database->query("SELECT * FROM products WHERE id = {$id}");
    }

    public function create(array $data): void {
        // TODO
    }

    public function update(int $id, array $data): void {
        // TODO
    }

    public function delete(int $id): void {
        $this->database->query("DELETE FROM products WHERE id = {$id}");
    }
}
