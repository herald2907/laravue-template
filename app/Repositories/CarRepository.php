<?php
namespace App\Repositories;

use App\Models\Cars;

class CarRepository extends Repository {

    public function __construct(Cars $model)
    {
        $this->model = $model;
    }

    public function getAllCars(array $data = [], array $relations = [])
    {
        //Logic Here 
        $cars = Cars::withTrashed()->get();

        return $cars;
    }

    public function createCar(array $data = [])
    {
        $car = Cars::create($data);

        return $car;
    }

    public function updateCar(array $data = [], string $id)
    {
        $car = $this->findByColumn($id, 'id');

        $car->update($data);
        
        return $car;
    }
}