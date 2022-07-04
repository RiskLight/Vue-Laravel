<?php

namespace App\Http\Controllers\Dog;

use App\Http\Controllers\Controller;
use App\Http\Resources\dog\DogResource;
use App\Models\Dog;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $dogs = Dog::all();
        return DogResource::collection($dogs);
    }
}
