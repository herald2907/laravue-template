<?php

namespace App\Validations;

class UserValidation
{

    public function store(array $data = [])
    {
        return [
            'username'  => ['required', 'string'],
            'email'     => ['required'],
            'password'  => ['required', 'string', 'max:255'],
        ];
    }


    public function update(array $data = [])
    {
        return [
            'username'  => ['required', 'string'],
            'email'     => ['required'],
            'password'  => ['required', 'string', 'max:255'],
        ];
    }
}
