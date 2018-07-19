<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Diogo Souza',
            'email' => 'diogo.souza@msn.com',
            'password' => bcrypt('123')
        ]);
    }
}
