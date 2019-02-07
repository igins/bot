<?php

use Illuminate\Database\Seeder;

class DepartmentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\Models\Department', 20)
            ->create()
            ->each(function($u) {
                $u->positions()->saveMany(factory('App\Models\Position', rand(1, 5))->make());
            });
    }
}
