<?php
namespace App\Repositories;

use App\Models\Cars;

class CarRepository {

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

    public function findById(int $id)
    {
        $car = Cars::where('id','=',$id)->first();

        return $car;
    }

    public function findByColumn(string $value, string $key)
    {
        $cars = Cars::where($key, '=', $value)->first();

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

    public function restore(int $id)
    {
        return $this->model->onlyTrashed()->where('id', $id)->restore();
    }
}