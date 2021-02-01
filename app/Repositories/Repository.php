<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Collection;

class Repository
{

    public function getAllData(array $data = [], array $relations = [])
    {
        $query = $this->model
            ->withTrashed()
            ->with($relations)->get();

        return $query;
    }

    public function findById(int $id)
    {
        $query = $this->model::where('id', '=', $id)->first();

        return $query;
    }

    public function findByColumn(string $value, string $key)
    {

        $query = $this->model::where($key, '=', $value)->first();

        return $query;
    }

    public function create(array $data = [])
    {
        $query = $this->model::create($data);

        return $query;
    }

    public function update(array $data = [], string $id)
    {
        $query = $this->findByColumn($id, 'id');

        $query->update($data);
        
        return $query;
    }

    public function restore(int $id)
    {
        $query = $this->model->onlyTrashed()
                ->where('id',$id)
                ->restore();

        return $query;
    }

    // public function filter(Collection $collection, array $data = [])
    // {
    //     $filtered = $collection->map(function ($collection) use($data){
    //         return collect($collection->toArray())
    //                 ->only($data)
    //                 ->all();
    //     });

    //     dd($filtered);

    //     // $subset = $users->map(function ($user) {
    //     //     return collect($user->toArray())
    //     //         ->only(['id', 'name', 'email'])
    //     //         ->all();
    //     // });

    // }
}
