<?php

namespace App\Http\Controllers\Dog;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dog\DogRequest;
use App\Http\Requests\Dog\UpdateDogRequest;
use App\Models\Dog;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public function __invoke(UpdateDogRequest $request, Dog $dog)
    {
        $data = $request->validated();
        $dog->update($data);
        return response([]);
    }
}
