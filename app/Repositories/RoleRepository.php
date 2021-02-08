<?php

namespace App\Repositories;
use App\Models\Model;
use Spatie\Permission\Models\Role;

Class RoleRepository extends Repository
{
	public function __construct(Role $model)
    {
        $this->model = $model;
    }
}