<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        /*
         * Make sure the seed emails, are changed to real addresses for Adrian, Sander and
         * yourself.
         *
         * Make the Adminuser
         */
        $users = [
            [
                'id' => 2,
                'name' => 'YOUR NICK NAME',
                'email' => 'your.nick.name@l7api.test',
                'email_verified_at' => '2020-01-01 00:00:01',
                'password' => Hash::make('Secret1'),
            ],
            [
                'id' => 1,
                'name' => 'Admin',
                'email' => 'admin@l7api.test',
                'email_verified_at' => '2018-12-30 01:02:02',
                'password' => Hash::make('Password1'),
            ],
            [
                'id' => 4,
                'name' => 'Sander',
                'email' => 'sander@l7api.test',
                'email_verified_at' => '2018-12-30 01:02:03',
                'password' => Hash::make('Password1'),
            ],
            [
                'id' => 3,
                'name' => 'Adrian Gould',
                'email' => 'adrian@l7api.test',
                'email_verified_at' => '2018-12-30 01:02:04',
                'password' => Hash::make('Password1'),
            ],
            [
                'id' => 5,
                'name' => 'Eileen',
                'email' => 'eileen@l7api.test',
                'email_verified_at' => null,
                'password' => Hash::make('Secret1'),
            ],
            [
                'id' => 6,
                'name' => 'Robyn',
                'email' => 'robyn.banks@l7api.test',
                'email_verified_at' => null,
                'password' => Hash::make('Secret1'),
            ],
            [
                'id' => 7,
                'name' => 'Marsha',
                'email' => 'marsha@l7api.test',
                'email_verified_at' => null,
                'password' => Hash::make('Secret1'),
            ],
            [
                'id' => 8,
                'name' => 'Sandy',
                'email' => 'sandy@l7api.test',
                'email_verified_at' => null,
                'password' => Hash::make('Secret1'),
            ],
            [
                'id' => 9,
                'name' => 'Chrystal',
                'email' => 'chrystal@l7api.test',
                'email_verified_at' => null,
                'password' => Hash::make('Secret1'),
            ],
            [
                'id' => 10,
                'name' => 'Chip',
                'email' => 'chip@l7api.test',
                'email_verified_at' => new DateTime(),
                'password' => Hash::make('Secret1'),
            ],
        ];

        foreach ($users as $newUser) {
            User::create($newUser);
        }
    }
}
