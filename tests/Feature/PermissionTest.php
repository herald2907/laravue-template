<?php

namespace Tests\Feature;

use App\Models\Permission;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PermissionTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();

        $this->adminSignIn();
    }

    public function test_permission_index()
    {
        $permission = Permission::factory()->count(10)->create();

        $this->getJson(route('permission.index'))
            ->assertJsonCount(10, 'data');
    }

    public function test_permission_show()
    {
        $permission1 = Permission::factory()->create();
        $permission2 = Permission::factory()->create();

        $this->getJson(route('permission.show', ['id' => $permission1->id]))
            ->assertJsonFragment(['id' => $permission1->id])
            ->assertJsonMissing(['id' => $permission2->id]);
    }

    public function test_permission_store()
    {
        $this->postJson(route('permission.store'), [
            'name'                  => $name = 'permission.test',
            'guard_name'            => $guard_name = 'web',

        ])->assertJsonFragment(['name' => $name]);

        $this->assertDatabaseHas('permissions', [
            'name'          => $name,
        ]);
    }

    public function test_permission_update()
    {

        $permission = Permission::factory()->create();

        $this->patchJson(route('permission.update', ['id' => $permission->id]), [
            'name'  => $name = 'permission.test2',

        ])->assertJsonFragment(['name' => $name]);

        $this->assertDatabaseHas('permissions', [
            'id'    => $permission->id,
            'name'  => $name,
        ]);
    }

    public function test_permission_destroy()
    {
        $permission = Permission::factory()->create();

        $this->deleteJson(route('permission.destroy', ['id' => $permission->id]));

        $this->assertNotNull($permission->fresh()->deleted_at);
    }

    public function test_permission_restore()
    { 
        $permission = Permission::factory()->create();

        $permission->delete();

        $this->assertNotNull($permission->fresh()->deleted_at);

        $this->patchJson(route('permission.restore', ['id' => $permission->id]));

        $this->assertNull($permission->fresh()->deleted_at);
    }
}
