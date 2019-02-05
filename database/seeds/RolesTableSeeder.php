<?php

use App\User;
use Illuminate\Database\Seeder;
use jeremykenedy\LaravelRoles\Models\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*
         * Add Roles
         *
         */
        if (Role::where('slug', '=', 'developer')->first() === null) {
            $adminRole = Role::create([
                'name'        => 'Разработчик',
                'slug'        => 'developer',
                'description' => 'Base Role',
                'level'       => 99,
            ]);
        }

        if (Role::where('slug', '=', 'employee')->first() === null) {
            $userRole = Role::create([
                'name'        => 'Сотрудник',
                'slug'        => 'employee',
                'description' => 'Employee Role',
                'level'       => 3,
            ]);
        }

        if (Role::where('slug', '=', 'client')->first() === null) {
            $userRole = Role::create([
                'name'        => 'Клиент',
                'slug'        => 'client',
                'description' => 'Client Role',
                'level'       => 2,
            ]);
        }

        if (Role::where('name', '=', 'Unverified')->first() === null) {
            $userRole = Role::create([
                'name'        => 'Unverified',
                'slug'        => 'unverified',
                'description' => 'Unverified Role',
                'level'       => 0,
            ]);
        }
    }
}
