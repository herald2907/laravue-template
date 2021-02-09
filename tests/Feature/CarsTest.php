<?php

namespace Tests\Feature;

use App\Models\Cars;
use Exception;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CarsTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();

        $this->adminSignIn();
    }

    public function test_cars_index()
    {
        $cars = Cars::factory()->count(10)->create();

        $this->getJson(route('car.index'))
            ->assertJsonCount(10, 'data');
    }

    public function test_cars_show()
    {

        $car1 = Cars::factory()->create();
        $car2 = Cars::factory()->create();

        $this->getJson(route('car.show', ['id' => $car1->id]))
            ->assertJsonFragment(['id' => $car1->id])
            ->assertJsonMissing(['id' => $car2->id]);
    }

    public function test_cars_store()
    {

        $this->postJson(route('car.store'), [
            'name'              => $name = 'Supra',
            'model'             => $model = 'Toyota',
            'make'              => $make = '1999',
        ])->assertJsonFragment(['name' => $name, 'model' => $model]);

        $this->assertDatabaseHas('cars', [
            'name'          => $name,
            'model'         => $model,
            'make'          => $make,
        ]);
    }

    public function test_cars_update()
    {

        $car = Cars::factory()->create();

        $this->patchJson(route('car.update', ['id' => $car->id]), [
            'name'              => $name = 'AE86',
            'model'             => $model = 'Toyota',
            'make'              => $make = '1986',
        ])->assertJsonFragment(['name' => $name, 'model' => $model]);

        $this->assertDatabaseHas('cars', [
            'name'          => $name,
            'model'         => $model,
            'make'          => $make,
        ]);
    }

    public function test_cars_delete()
    {
        $car = Cars::factory()->create();

        $this->deleteJson(route('car.destroy', ['id' => $car->id]));

        $this->assertNotNull($car->fresh()->deleted_at);
    }

    public function test_cars_restore()
    {
        $car = Cars::factory()->create();

        $car->delete();

        $this->assertNotNull($car->fresh()->deleted_at);

        $this->patchJson(route('car.restore', ['id' => $car->id]));

        $this->assertNull($car->fresh()->deleted_at);
    }
}
