<?php

namespace Database\Seeders;

use App\Models\Blog;
use App\Models\User;
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
        // Seeder Class
        $this->call(UserSeeder::class);
        $this->call(RolesSeeder::class);
        $this->call(CategorySeeder::class);

        // Factory Class
        // \App\Models\User::factory(10)->create();
        Blog::factory(10)->create();
    }
}
