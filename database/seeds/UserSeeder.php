<?php

use App\User;
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
        $users = [
            [
                'id' => 1, 'name' => 'Admin User', 'email' => 'admin.user@hotelrad.test',
                'email_verified_at' => '2018-12-30 01:02:02', 'password' => 'Password1',
            ],
            [
                'id' => 2, 'name' => 'Sander Huijsen',
                'email' => 'sander.huijsen@hotelrad.test',
                'email_verified_at' => '2018-12-30 01:02:03', 'password' => 'Password1',
            ],
            [
                'id' => 3, 'name' => 'Adrian Gould', 'email' => 'adrian.gould@hotelrad.test',
                'email_verified_at' => '2018-12-30 01:02:04', 'password' => 'Password1',
            ],
            [
                'id' => 4, 'name' => 'YOUR NAME', 'email' => 'your.name@hotelrad.test',
                'email_verified_at' => '2018-12-30 01:02:05', 'password' => 'Secret1',
            ],
            [
                'id' => 5, 'name' => 'Eileen Dover', 'email' => 'eileen.dover@example.com',
                'email_verified_at' => '2018-12-30 01:02:06', 'password' => 'Secret1',
            ],
            [
                'id' => 6, 'name' => 'Robyn Banks', 'email' => 'robyn.banks@example.com',
                'email_verified_at' => '2018-12-30 01:02:07', 'password' => 'Secret1',
            ],
            [
                'id' => 7, 'name' => 'Marsha Mellow', 'email' => 'marsha.mellow@example.com',
                'email_verified_at' => '2018-12-30 01:02:08', 'password' => 'Secret1',
            ],
            [
                'id' => 8, 'name' => 'Sandy Banks', 'email' => 'sandy.banks@example.com',
                'email_verified_at' => '2018-12-30 01:02:09', 'password' => 'Secret1',
            ],
            [
                'id' => 9, 'name' => 'Chrystal Ball', 'email' => 'chrystal.ball@example.com',
                'email_verified_at' => new DateTime(), 'password' => 'Secret1',
            ],
            [
                'id' => 10, 'name' => 'Chip Munk', 'email' => 'chip.munk@example.com',
                'email_verified_at' => new DateTime(), 'password' => 'Secret1',
            ],
        ];

        foreach ($users as $newUser) {
            User::create($newUser);
        }
    }
}
