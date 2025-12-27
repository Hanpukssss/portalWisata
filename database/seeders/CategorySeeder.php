<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run()
    {
        $cats = ['Pantai','Pegunungan','Edukasi','Budaya','Keluarga','Kuliner'];
        foreach ($cats as $c) {
            $slug = \Illuminate\Support\Str::slug($c);
            Category::firstOrCreate(
                ['slug' => $slug],
                ['name' => $c]
            );
        }
    }
}
