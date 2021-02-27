<?php

use App\Article;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 50; $i++) {
            $newArticle = new Article();
            $newArticle->cat_id = $faker->numberBetween(11, 20);
            $newArticle->title = $faker->sentence(3);
            $newArticle->body = $faker->text();
            $newArticle->author = $faker->name();
            $newArticle->published_at = $faker->date();
            $newArticle->save();
        }
    }
}
