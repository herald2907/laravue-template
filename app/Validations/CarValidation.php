<?php
namespace App\Validations;

use Symfony\Component\HttpFoundation\Request;

class CarValidation {


    public function store(array $data = [])
    {
        return [
            'name' =>  ['required', 'string'],
            'make'  => ['required'],
            'model' => ['required', 'string', 'max:255'],
        ];
    }


    public function update(array $data = [])
    {
        return [
            'name' =>  ['required', 'string'],
            'make'  => ['required'],
            'model' => ['required', 'string', 'max:255'],
        ];
    }
}