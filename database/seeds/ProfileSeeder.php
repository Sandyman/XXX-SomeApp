<?php

use App\Profile;
use Illuminate\Database\Seeder;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $profiles = [
            [
                'user_id' => 2,
                'given_name' => 'YOUR FIRST NAME',
                'family_name' => 'YOUR LAST NAME',
                'photograph'=>'user-generic-1.png',
            ],            [
                'user_id' => 1,
                'given_name' => 'Administrator',
                'family_name' => null,
                'photograph'=>'user-admin-1.png',
            ],
            [
                'user_id' => 4,
                'given_name' => 'Sander',
                'family_name' => 'Huijsen',
                'photograph'=>'user-male-developer-1.png',
            ],
            [
                'user_id' => 3,
                'given_name' => 'Adrian',
                'family_name' => 'Gould',
                'photograph'=>'user-male-developer-1.png',
            ],
            [
                'user_id' => 5,
                'given_name' => 'Eileen',
                'family_name'=>'Dover',
                'photograph'=>'user-female-developer-1.png',
            ],
            [
                'user_id' => 6,
                'given_name' => 'Robyn',
                 'family_name'=>'Banks',
            ],
            [
                'user_id' => 7,
                'given_name' => 'Marsha',
                'family_name'=>'Mellow',
            ],
            [
                'user_id' => 8,
                'given_name' => 'Sandy',
                 'family_name'=>'Banks',
            ],
            [
                'user_id' => 9,
                'given_name' => 'Chrystal',
                'family_name'=>'Ball',
                'photograph'=>'user-female-1.png',

            ],
            [
                'user_id' => 10,
                'given_name' => 'Chip',
                 'family_name'=>'Munk',
                'photograph'=>'user-male-1.png',
            ],
        ];

        foreach ($profiles as $profile){
            Profile::create($profile);
        }

    }
}
