<?php

namespace App\Http\Controllers;

use App\Http\Resources\CarsResource;
use App\Repositories\CarRepository;
use App\Validations\CarValidation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CarsController extends Controller
{
    public function __construct(CarValidation $validation, CarRepository $repository)
    {
        $this->validation = $validation;
        $this->repository = $repository;
    }

    public function index(Request $request)
    {
        $cars = $this->repository->getAllData(['name','make'], []);

        return CarsResource::collection($cars);
    }

    public function show(int $id)
    {
       
        $cars = $this->repository->findByColumn($id, 'id');

        return new CarsResource($cars);
    }

    public function store(Request $request)
    {
        
        $data = $request->all();
       
        Validator::make($data, $this->validation->store())->validate();

        $car = $this->repository->createCar($data);

        return new CarsResource($car);
    }

    public function update(Request $request, int $id)
    { 
        
        $data = $request->all();
        
        Validator::make($data, $this->validation->update())->validate();

        $car = $this->repository->updateCar($data, $id);

        return new CarsResource($car);
    }

    public function destroy(int $id)
    {
        $car = $this->repository->findByColumn($id, 'id');

        $car->delete();

        return response()->json([], 204);
     }

    public function restore(int $id)
    { 
        $car = $this->repository->restore($id);

        return response()->json([], 204);
    }
}
