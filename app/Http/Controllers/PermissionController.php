<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Resources\PermissionResource;
use App\Repositories\PermissionRepository;
use App\Validations\PermissionValidation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PermissionController extends Controller
{

    public function __construct(PermissionValidation $validation, PermissionRepository $repository)
    {
        $this->validation = $validation;
        $this->repository = $repository;
    }

    public function index(Request $request)
    {
        // $this->repository->hasPermission();

        $permission = $this->repository->getAllData([], []);

        return PermissionResource::collection($permission);
    }

    public function show($id)
    {
        $permission = $this->repository->findByColumn($id, 'id');

        return new PermissionResource($permission);
    }

    public function store(Request $request)
    {
        $data = $request->all();

        Validator::make($data, $this->validation->store())->validate();

        $permission = $this->repository->createPermission($data);

        return new PermissionResource($permission);
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();

        Validator::make($data, $this->validation->update())->validate();

        $permission = $this->repository->updatePermission($data, $id);

        return new PermissionResource($permission);
    }

    public function destroy($id)
    {
        $permission = $this->repository->findByColumn($id, 'id');

        $permission->delete();

        return response()->json([], 204);
    }

    public function restore($id)
    { 
        $permission = $this->repository->restore($id);

        return response()->json([], 204);
    }
}
