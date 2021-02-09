<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Resources\RoleResource;
use Illuminate\Support\Facades\Validator;
use App\Repositories\RoleRepository;
use App\Validations\RoleValidation;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function __construct(RoleRepository $repository, RoleValidation $validation)
    {
        $this->repository = $repository;
        $this->validation = $validation;
    }

    public function index()
    {
        $role = $this->repository->getAllData([], []);

        return RoleResource::collection($role);
    }

    public function show($id)
    {
        $user = $this->repository->findByColumn($id, 'id');

        return new RoleResource($user);
    }

    public function store(Request $request)
    {
        $data = $request->all();

        Validator::make($data, $this->validation->store())->validate();

        $role = $this->repository->createRole($data);

        return new RoleResource($role);
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();

        Validator::make($data, $this->validation->update())->validate();

        $role = $this->repository->updateRole($data, $id);

        return new RoleResource($role);
    }

    public function destroy($id)
    {
        $role = $this->repository->findByColumn($id, 'id');

        $role->delete();

        return response()->json([], 204);
    }

    public function restore($id)
    {
        $role = $this->repository->restore($id);

        return response()->json([], 204);
    }
}
