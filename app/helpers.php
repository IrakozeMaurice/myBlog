<?php

use App\Category;

function getCategories()
{
    $categories = Category::all();
    // $category_names = [];
    // foreach ($categories as $category) {
    //     $category_names[] = $category->name;
    // }
    return $categories;
}
