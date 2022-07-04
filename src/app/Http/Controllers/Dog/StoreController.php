<?php

namespace App\Http\Controllers\Dog;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dog\DogRequest;
use App\Models\Dog;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function __invoke(DogRequest $request)
    {
        $data = $request->validated();
        $dog = Dog::create($data);
        return response([]);
    }
}
