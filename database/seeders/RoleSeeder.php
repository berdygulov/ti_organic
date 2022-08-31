<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Orchid\Platform\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run ()
    {
        $roles = [
            [
                'slug'        => 'admin',
                'name'        => 'Администратор',
                'permissions' => [
                    'platform.index'              => true,
                    'platform.systems.roles'      => true,
                    'platform.systems.users'      => true,
                    'platform.systems.attachment' => true,

                    'products.index'  => true,
                    'products.create' => true,
                    'products.edit'   => true,
                    'products.delete' => true,
                    'products.import' => true,
                    'products.export' => true,

                    'products.categories.index'  => true,
                    'products.categories.create' => true,
                    'products.categories.edit'   => true,
                    'products.categories.delete' => true,
                    'products.categories.import' => true,
                    'products.categories.export' => true,
                ],
            ],
            [
                'slug'        => 'employee',
                'name'        => 'Сотрудник',
                'permissions' => [
                    'platform.index'              => true,
                    'platform.systems.attachment' => true,

                    'products.index'  => true,
                    'products.create' => true,
                    'products.edit'   => true,
                    'products.delete' => true,

                    'products.categories.index'  => true,
                    'products.categories.create' => true,
                    'products.categories.edit'   => true,
                    'products.categories.delete' => true,
                ],
            ],
        ];

        foreach ($roles as $role) {
            Role::create($role);
        }
    }
}
