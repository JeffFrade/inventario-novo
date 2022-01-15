<?php

namespace Database\Factories;

use App\Repositories\Models\Room;
use Illuminate\Database\Eloquent\Factories\Factory;

class RoomFactory extends Factory
{
    /**
     * @var string
     */
    protected $model = Room::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'room' => $this->faker->firstName,
            'id_sector' => rand(1, 10)
        ];
    }
}
