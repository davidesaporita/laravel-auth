<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Faker\Generator as Faker;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $users = 10;

        for($i = 0; $i < $users; $i++) {
            $newUser = new User();
            
            if($i != 0) {
                $newUser->name = $faker->name;
                $newUser->email = $faker->email;
            } else {
                $newUser->name = 'First User';
                $newUser->email = 'foo@bar.com';
            }

            $newUser->password = Hash::make('123456789');

            $newUser->save();
        }
    }
}
