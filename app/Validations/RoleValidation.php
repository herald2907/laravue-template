<?php

namespace App\Validations;

class RoleValidation {


    public function store(array $data = [])
    {
        return [
            'name'  => ['required', 'string'],
        ];
    }


    public function update(array $data = [])
    {
        return [
            'name'  => ['required', 'string'],
        ];
    }
}