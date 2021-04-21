<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Admin Role
        $admin = new Role();
        $admin->name = "admin";
        $admin->save();

        // Author Role
        $author = new Role();
        $author->name = "author";
        $author->save();

        // Subscriber Role
        $subscriber = new Role();
        $subscriber->name = "subscriber";
        $subscriber->save();
    }
}
