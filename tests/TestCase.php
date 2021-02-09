<?php

namespace Tests;

use App\Models\User;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

    public function adminSignIn(User $user = null)
    {
        $role = Role::factory()->create();
        
        $user = User::factory()->create();
        
        $user->assignRole($role->name);
        
        $this->admin = $user;   
        
        $this->actingAs($this->admin);

        return $this->admin;
    }
}
