<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::create([
            'name' => 'CISS',
            'email' => 'cissdevops@gmail.com',
            'password' => Hash::make('qwsazxpokl,m@2019'),
        ]);
        \App\User::create([
            'name' => 'Maria',
            'email' => 'mariadimitri@venturelifestyle.me',
            'password' => Hash::make('P@$$6543'),
        ]);
        \App\User::create([
            'name' => 'Mina',
            'email' => 'mtadros12121@gmail.com',
            'password' => Hash::make('qwsazxpokl,m@2019'),
        ]);

    }
}
