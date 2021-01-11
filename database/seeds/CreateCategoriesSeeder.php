<?php

use App\Category;
use Illuminate\Database\Seeder;

class CreateCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = [
            [
                'name' => 'Sports',
            ],
            [
                'name' => 'Education',
            ]
        ];

        foreach ($category as $key => $value) {
            Category::create($value);
        }
    }
}
