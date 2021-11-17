<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;
use Faker\Generator as Faker;


use App\Models\InfoUser;
use App\User;

class InfoUsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $users = User::all();
        

        foreach ($users as $user){
            $newInfoUser = new InfoUser();
            
            $newInfoUser->user_id = $user->id;
            $newInfoUser->name = $faker->name();
            $newInfoUser->city = $faker->city();
            $newInfoUser->country = $faker->country();
            $newInfoUser->address = $faker->address();
            $newInfoUser->phone = $faker->phoneNumber();

            $newInfoUser->save();
        }
        
    }
}
