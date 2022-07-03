<?php

namespace App\Http\Controllers\Dog;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dog\DogRequest;
use App\Http\Requests\Dog\UpdateDogRequest;
use App\Models\Dog;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function __invoke(Dog $dog)
    {
        $dog->delete();
        return response([]);
    }
}
