<?php

declare(strict_types=1);

namespace App\Model;

use App\Database\MySQLDatabase;

class Products {
    private MySQLDatabase $database;

    public function __construct() {
        $this->database = MySQLDatabase::getInstance();
    }

    public function all() {
        return $this->database->query('SELECT * FROM products');
    }

    public function latest() {
        return $this->database->query('SELECT * FROM products ORDER BY id DESC LIMIT 3');
    }

    public function find(int $id) {
        return $this->database->query("SELECT * FROM products WHERE id = {$id}");
    }

    public function create(array $data): void {
        $name = $data['name'];
        $age = $data['age'];
        $breed = $data['breed'];
        $description = $data['description'];
        $photo = $data['photo'];

        $this->database->query("INSERT INTO products (name, age, breed, description, photo) VALUES ('{$name}', '{$age}', '{$breed}', '{$description}', '{$photo}')");
    }

    public function update(int $id, array $data): void {
        $name = $data['name'];
        $age = $data['age'];
        $breed = $data['breed'];
        $description = $data['description'];
        $photo = $data['photo'];

        $this->database->query("UPDATE products SET name = '{$name}', age = '{$age}', breed = '{$breed}', description = '{$description}', photo = '{$photo}' WHERE id = {$id}");
    }

    public function delete(int $id): void {
        $this->database->query("DELETE FROM products WHERE id = {$id}");
    }
}
