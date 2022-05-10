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
//         \App\Models\User::factory(10)->create();
         \App\Models\Categories::factory(500)->create();
         \App\Models\Posts::factory(15000)->create();
         \App\Models\CategoryPost::factory(15000)->create();
    }
}
