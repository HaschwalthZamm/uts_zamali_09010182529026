<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create(['name' => 'Pemrograman', 'description' => 'Buku seputar pemrograman dan pengembangan perangkat lunak']);
Category::create(['name' => 'Basis Data', 'description' => 'Buku seputar perancangan dan pengelolaan database']);
Category::create(['name' => 'Jaringan', 'description' => 'Buku seputar jaringan komputer dan keamanan']);
    }
}
