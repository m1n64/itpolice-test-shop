<?php

namespace Database\Seeders;

use App\Enums\PermissionsEnum;
use App\Enums\RolesEnum;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleAndPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::create(['name' => PermissionsEnum::ADD_PRODUCT->value]);
        Permission::create(['name' => PermissionsEnum::REMOVE_PRODUCT->value]);
        Permission::create(['name' => PermissionsEnum::UPDATE_PRODUCT->value]);

        $adminRole = Role::create(['name' => RolesEnum::ADMIN->value]);

        $adminRole->givePermissionTo([
            PermissionsEnum::ADD_PRODUCT->value,
            PermissionsEnum::REMOVE_PRODUCT->value,
            PermissionsEnum::UPDATE_PRODUCT->value,
        ]);
    }
}
