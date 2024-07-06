<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Model\Pet;

class HomeController extends PagesController {
    public function index() {
        $pets = (new Pet())->latest();

        return $this->view('home', ['pets' => $pets]);
    }
}
