<?php

namespace App\Repositories;

use App\Models\User;
use Exception;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserRepository extends Repository
{
    public function __construct(User $model)
    {
        $this->model = $model;
    }

    public function createUser(array $data = [])
    {
        //data_set($data, 'email_verified_at', now());

        data_set($data, 'password', Hash::make($data['password']));

        //data_set($data, 'remember_token', Str::random(10));

        $user = $this->model::create($data);

        event(new Registered($user));

        return $user;
    }

    public function updateUser(array $data = [],string $id)
    {
        $user = $this->findByColumn($id, 'id');

        $user->update($data);

        return $user;
    }
}
