<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Post;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i<50; $i++){
            $newPost = new Post();
            $newPost->title = $faker->sentence();
            $newPost->author = $faker->name();
            $newPost->image_url = $faker->imageUrl(360, 360);
            $newPost->date = $faker->date() ;
            $newPost->content = $faker->paragraph(2);
            $newPost->save();

        }
    }
}
