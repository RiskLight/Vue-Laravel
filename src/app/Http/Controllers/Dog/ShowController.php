<?php

namespace App\Http\Controllers\Dog;

use App\Http\Controllers\Controller;
use App\Http\Resources\dog\DogResource;
use App\Models\Dog;

class ShowController extends Controller
{
    public function __invoke(Dog $dog)
    {
        return new DogResource($dog);
    }
}

