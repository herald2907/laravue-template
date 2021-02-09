<?php

namespace App\Repositories;
use App\Models\Role;

Class RoleRepository extends Repository
{
	public function __construct(Role $model)
    {
        $this->model = $model;
    }

    public function createRole(array $data = [])
    {
        $role = $this->model::create($data);

        return $role;
    }

    public function updateRole(array $data = [], $id)
    {
        $role = $this->findByColumn($id, 'id');

        $role->update($data);

        return $role;
    }
}