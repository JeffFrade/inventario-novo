<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Repositories\Models\Sector::factory(10)->create();
        \App\Repositories\Models\Room::factory(50)->create();
        \App\Repositories\Models\User::factory(1)->create();
        \App\Repositories\Models\Responsible::factory(30)->create();
        \App\Repositories\Models\EquipmentType::factory(10)->create();
        \App\Repositories\Models\Equipment::factory(100)->create();
        $this->call(PermissionsSeeder::class);
    }
}
