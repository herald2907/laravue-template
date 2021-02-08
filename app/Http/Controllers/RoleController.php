<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Repositories\RoleRepository;
use App\Validations\RoleValidation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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
        
        dd($role);
    }

    public function show()
    {

    }

    public function store()
    {

    }

    public function update()
    {

    }
}
