<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Admin Role
        $user = new User();
        $user->role_id = '1';
        $user->name = 'Khayrul Shanto';
        $user->email = 'khayrulshanto@gmail.com';
        $user->password = '$2y$10$sifQF6vybvuZs/dEXQm6QegxFVTLE0ZAcZV8JozWoBTOgxMXi0acS';
        $user->save();

    }
}
