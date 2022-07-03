<?php

namespace App\Http\Controllers\Dog;

use App\Http\Controllers\Controller;
use App\Models\Dog;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $dogs = Dog::all();
        return $dogs;
    }
}
