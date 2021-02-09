<?php

namespace Tests\Feature;

use App\Models\Role;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class UserTest extends TestCase
{

    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();

        $this->adminSignIn();

    }


    public function test_user_index()
    {
        $user = User::factory()->count(10)->create();

        $this->getJson(route('user.index'))
            ->assertJsonCount(11, 'data');
    }

    public function test_user_show()
    {
        $user1 = User::factory()->create();
        $user2 = User::factory()->create();

        $this->getJson(route('user.show', ['id' => $user1->id]))
            ->assertJsonFragment(['id' => $user1->id])
            ->assertJsonMissing(['id' => $user2->id]);
    }

    public function test_user_store()
    { 
        $role = Role::factory()->create();

        $this->postJson(route('user.store'), [
            'username'              => $username = 'jbdelfin',
            'email'                 => $email = 'jbdelfin@curoteknika.com',
            'password'              => $password = 'Mercury123$',
            'role'                  => $role->name,
        ])->assertJsonFragment(['username' => $username, 'email' => $email]);

        $this->assertDatabaseHas('users', [
            'username'          => $username,
            'email'             => $email,
        ]);
    }

    public function test_user_update()
    {
        $user = User::factory()->create();

        $this->patchJson(route('user.update', ['id' => $user->id]), [
            'username'              => $username = 'jbdelfin',
            'email'                 => $email = 'jbdelfin@curoteknika.com',
            'password'              => $password = 'Mercury123$',
        ])->assertJsonFragment(['username' => $username, 'email' => $email]);

        $this->assertDatabaseHas('users', [
            'username'          => $username,
            'email'             => $email,
        ]);
    }

    public function test_user_destroy()
    { 
        $user = User::factory()->create();

        $this->deleteJson(route('user.destroy', ['id' => $user->id]));

        $this->assertNotNull($user->fresh()->deleted_at);
    }

    public function test_user_restore()
    { 
        $user = User::factory()->create();

        $user->delete();

        $this->assertNotNull($user->fresh()->deleted_at);

        $this->patchJson(route('user.restore', ['id' => $user->id]));

        $this->assertNull($user->fresh()->deleted_at);
    }
}
