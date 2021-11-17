<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i=0; $i<9; $i++){
            $newUser = new User();
            $newUser->name = $faker->name();
            $newUser->email = $faker->email();
            $newUser->password = bcrypt($faker->password(9,15));

            $newUser->save();
        }
    }
}
