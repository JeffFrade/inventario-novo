<?php

namespace Database\Factories;

use App\Repositories\Models\Equipment;
use Illuminate\Database\Eloquent\Factories\Factory;

class EquipmentFactory extends Factory
{
    /**
     * @var string
     */
    protected $model = Equipment::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'serial_number'  => rand(1, 10000000000000000),
            'barcode' => rand(1, 10000000000000000),
            'item' => $this->faker->name,
            'brand' => $this->faker->firstName,
            'model' => $this->faker->name,
            'cod_outsourcing' => null,
            'obs' => null,
            'id_room' => rand(1, 50),
            'id_responsible' => rand(1, 30),
            'id_type' => rand(1, 10),
            'image' => null,
            'attach' => null
        ];
    }
}
