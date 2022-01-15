<?php

namespace Database\Seeders;

use App\Repositories\UserRepository;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Artisan;

class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Artisan::call('permission:create-permission "users" web');
        Artisan::call('permission:create-permission "permissions" web');
        Artisan::call('permission:create-permission "reports" web');
        Artisan::call('permission:create-permission "equipment-create" web');
        Artisan::call('permission:create-permission "equipment-update" web');
        Artisan::call('permission:create-permission "equipment-delete" web');

        $user = (new UserRepository())->findFirst('id', 1);

        $user->givePermissionTo([
            'users',
            'permissions',
            'reports',
            'equipment-create',
            'equipment-update',
            'equipment-delete'
        ]);
    }
}
