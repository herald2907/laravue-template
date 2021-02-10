<?php

namespace App\Repositories;
use App\Models\Permission;

Class PermissionRepository extends Repository
{
	public function __construct(Permission $model)
    {
        $this->model = $model;
    }

    public function createPermission(array $data = [])
    {
        $permission = $this->model::create($data);

        return $permission;
    }

    public function updatePermission(array $data = [], $id)
    {
        $permission = $this->findByColumn($id, 'id');

        $permission->update($data);

        return $permission;
    }
}