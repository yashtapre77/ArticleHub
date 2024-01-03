<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' => 'Fiction'
        ]);
        Category::create([
            'name' => 'Non-Fiction'
        ]);
        Category::create([
            'name' => 'Genre Fiction'
        ]);
        Category::create([
            'name' => "Children's and Young Adult (YA)"
        ]);
        Category::create([
            'name' => 'Graphic Novels/Comics'
        ]);
        Category::create([
            'name' => 'Classics'
        ]);
    }
}
