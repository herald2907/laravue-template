<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use App\Repositories\UserRepository;
use App\Validations\UserValidation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{

    public function __construct(UserValidation $validation, UserRepository $repository)
    {
        $this->validation = $validation;
        $this->repository = $repository;
    }

    public function index()
    {
        $users = $this->repository->getAllData([], []);

        return UserResource::collection($users);
    }

    public function store(Request $request)
    {
        $data = $request->all();
       
        Validator::make($data, $this->validation->store())->validate();

        $user = $this->repository->createUser($data);

        return new UserResource($user);
    }

    public function show($id)
    {
        $user = $this->repository->findByColumn($id, 'id');

        return new UserResource($user);
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        
        Validator::make($data, $this->validation->update())->validate();

        $user = $this->repository->updateUser($data, $id);

        return new UserResource($user);
    }


    public function destroy($id)
    {
        $user = $this->repository->findByColumn($id, 'id');

        $user->delete();

        return response()->json([], 204);
    }

    public function restore($id)
    { 
        $user = $this->repository->restore($id);

        return response()->json([], 204);
    }
}
