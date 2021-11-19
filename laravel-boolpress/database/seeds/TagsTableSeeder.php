<?php

use Illuminate\Database\Seeder;
use App\Models\Tag;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tagsName = ['HTML','CSS','JS','Laravel','Bootstrap','VUEJS'];

        foreach ($tagsName as $tagName){
            $newTag = new Tag();

            $newTag->name = $tagName;

            $newTag->save();

        };
    }
}
