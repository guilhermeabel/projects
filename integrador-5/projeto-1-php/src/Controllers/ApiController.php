<?php

declare(strict_types=1);

namespace App\Controllers;

abstract class ApiController {
    protected int $status = 200;

    protected function data(array $data = []) {
        header('Content-Type: application/json');
        $data['status'] = $this->status;

        return json_encode($data);
    }
}
