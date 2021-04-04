<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Pasha',
            'email' => 'xd@xd.xd',
            'password' => Hash::make('1q2w3e')
        ]);
//         \App\Models\User::factory(10)->create();
    }
}
