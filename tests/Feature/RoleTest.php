<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Spatie\Permission\Models\Role;
use Tests\TestCase;

class RoleTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();

        $this->adminSignIn();

    }

    public function test_role_index()
    {
        $role = Role::factory()->count(10)->create();

        $this->getJson(route('role.index'))
            ->assertJsonCount(11, 'data');
    }

    public function test_role_show()
    {
        $role1 = Role::factory()->create();
        $role2 = Role::factory()->create();

        $this->getJson(route('role.show', ['id' => $role1->id]))
            ->assertJsonFragment(['id' => $role1->id])
            ->assertJsonMissing(['id' => $role2->id]);
    }

    public function test_role_store()
    {
        $this->postJson(route('role.store'), [
            'name'              => $name = 'super_admin',
           
        ])->assertJsonFragment(['name' => $name]);

        $this->assertDatabaseHas('roles', [
            'name'          => $name,
        ]);
    }

    public function test_role_update()
    {
        $role = Role::factory()->create();

        $this->patchJson(route('role.update', ['id' => $role->id]), [
            'name'              => $name = 'guest',
           
        ])->assertJsonFragment(['name' => $name]);

        $this->assertDatabaseHas('roles', [
            'id'    => $role->id,
            'name'  => $name,
        ]);
    }

    public function test_role_destroy()
    {
        $role = Role::factory()->create();

        $this->deleteJson(route('role.destroy', ['id' => $role->id]));

        $this->assertNotNull($role->fresh()->deleted_at);
    }

    public function test_role_restore()
    {
        $role = Role::factory()->create();

        $role->delete();

        $this->assertNotNull($role->fresh()->deleted_at);

        $this->patchJson(route('role.restore', ['id' => $role->id]));

        $this->assertNull($role->fresh()->deleted_at);
    }
}
