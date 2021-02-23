<?php

use App\Tag;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = config('tags');
        foreach ($tags as $tag) {
            $newTag = new Tag();
            $newTag->name = $tag['name'];
            $newTag->color = $tag['color'];
            $newTag->save();
        }
    }
}
