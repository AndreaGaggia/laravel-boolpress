<?php

use App\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cats = [
            [
                'name' => 'Frontend',
                'description' => 'Everything and more about Frontend!',
            ],
            [
                'name' => 'Backend',
                'description' => 'Everything and more about Backend!',
            ],
            [
                'name' => 'DevOps',
                'description' => 'Everything and more about DevOps!',
            ],
            [
                'name' => 'Machine Learning',
                'description' => 'Everything and more about Machine Learning!',
            ],
            [
                'name' => 'Clous Computing',
                'description' => 'Everything and more about Clous Computing!',
            ],
            [
                'name' => 'Design',
                'description' => 'Everything and more about Design!',
            ],
            [
                'name' => 'Entrepreneurship',
                'description' => 'Everything and more about Entrepreneurship!',
            ],
            [
                'name' => 'Databases',
                'description' => 'Everything and more about Databases!',
            ],
            [
                'name' => 'Cybersecurity',
                'description' => 'Everything and more about Cybersecurity!',
            ],
            [
                'name' => 'Hacking',
                'description' => 'Everything and more about Hacking!',
            ],
        ];

        foreach ($cats as $cat) {
            $newCat = new Category();
            $newCat->name = $cat['name'];
            $newCat->description = $cat['description'];
            $newCat->save();
        }
    }
}
