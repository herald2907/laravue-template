<?php

namespace App\Repositories;

use App\Models\Model;

Class UserRepository extends Repository
{
	public function __construct(Model $model)
    {
        $this->model = $model;
    }
}