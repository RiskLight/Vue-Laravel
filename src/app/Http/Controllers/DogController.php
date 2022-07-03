<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DogController extends Controller
{
    public function __invoke(): array
    {
        $persons = [
            [
                'id' => 1,
                'name' => 'Vasya',
                'age' => 20,
                'job' => 'Courtesan'
            ],
            [
                'id' => 2,
                'name' => 'Peter',
                'age' => 35,
                'job' => 'Courtesan'
            ],
            [
                'id' => 3,
                'name' => 'Vitalik',
                'age' => 64,
                'job' => 'Courtesan'
            ],

        ];
        return $persons;
    }
}
