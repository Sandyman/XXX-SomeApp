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
                'name' => 'YOUR NAME',
                'email' => 'your.name@l7api.test',
                'email_verified_at' => '2020-01-01 00:00:01',
                'password' => Hash::make('Secret1'),
            ],
            [
                'id' => 1,
                'name' => 'Admin User',
                'email' => 'admin.user@l7api.test',
                'email_verified_at' => '2018-12-30 01:02:02',
                'password' => Hash::make('Password1'),
            ],
            [
                'id' => 4,
                'name' => 'Sander Huijsen',
                'email' => 'sander.huijsen@l7api.test',
                'email_verified_at' => '2018-12-30 01:02:03',
                'password' => Hash::make('Password1'),
            ],
            [
                'id' => 3,
                'name' => 'Adrian Gould',
                'email' => 'adrian.gould@l7api.test',
                'email_verified_at' => '2018-12-30 01:02:04',
                'password' => Hash::make('Password1'),
            ],
            [
                'id' => 5,
                'name' => 'Eileen Dover',
                'email' => 'eileen.dover@l7api.test',
                'email_verified_at' => '2018-12-30 01:02:06',
                'password' => Hash::make('Secret1'),
            ],
            [
                'id' => 6,
                'name' => 'Robyn Banks',
                'email' => 'robyn.banks@l7api.test',
                'email_verified_at' => '2018-12-30 01:02:07',
                'password' => Hash::make('Secret1'),
            ],
            [
                'id' => 7,
                'name' => 'Marsha Mellow',
                'email' => 'marsha.mellow@l7api.test',
                'email_verified_at' => '2018-12-30 01:02:08',
                'password' => Hash::make('Secret1'),
            ],
            [
                'id' => 8,
                'name' => 'Sandy Banks',
                'email' => 'sandy.banks@l7api.test',
                'email_verified_at' => '2018-12-30 01:02:09',
                'password' => Hash::make('Secret1'),
            ],
            [
                'id' => 9,
                'name' => 'Chrystal Ball',
                'email' => 'chrystal.ball@l7api.test',
                'email_verified_at' => new DateTime(),
                'password' => Hash::make('Secret1'),
            ],
            [
                'id' => 10,
                'name' => 'Chip Munk',
                'email' => 'chip.munk@l7api.test',
                'email_verified_at' => new DateTime(),
                'password' => Hash::make('Secret1'),
            ],
        ];

        foreach ($users as $newUser) {
            User::create($newUser);
        }
    }
}
