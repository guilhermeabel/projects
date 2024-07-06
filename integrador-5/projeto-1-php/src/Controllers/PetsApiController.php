<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Model\Pet;

class PetsApiController extends ApiController {
    public function getHighlights(): void {
        $pets = [];

        $pets[] = (new Pet())->find(5);
        $pets[] = (new Pet())->find(6);
        $pets[] = (new Pet())->find(7);

        $this->status = !empty($pets) ? 200 : 404;

        echo $this->data([
            'pets' => $pets,
        ]);
    }

    public function find(int $id): void {
        $pet = (new Pet())->find($id);

        $this->status = !empty($pet) ? 200 : 404;

        echo $this->data([
            'pet' => $pet,
        ]);
    }

    public function all(): void {
        $pets = (new Pet())->all();

        $this->status = !empty($pets) ? 200 : 404;

        echo $this->data([
            'pets' => $pets,
        ]);
    }

    public function latest(): void {
        $pets = (new Pet())->latest();

        $this->status = !empty($pets) ? 200 : 404;

        echo $this->data([
            'pets' => $pets,
        ]);
    }
}
