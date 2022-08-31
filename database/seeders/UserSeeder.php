<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Orchid\Platform\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run ()
    {
        $admins = [
            [
                'name'     => 'admin',
                'email'    => 'admin@admin.com',
                'password' => Hash::make('5775558')
            ],
        ];

        foreach ($admins as $user) {
            $new_user = User::create($user);
            $new_user->addRole(Role::query()->where('slug', 'admin')->first());
        }
    }
}
