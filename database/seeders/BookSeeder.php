<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Book::create(['category_id' => 1, 'title' => 'Belajar Laravel untuk Pemula', 'author' => 'Andi Pratama', 'publisher' => 'Informatika', 'year' => 2022, 'stock' => 10]);
Book::create(['category_id' => 1, 'title' => 'Dasar Pemrograman PHP', 'author' => 'Budi Santoso', 'publisher' => 'Andi Offset', 'year' => 2020, 'stock' => 7]);
Book::create(['category_id' => 2, 'title' => 'Dasar-Dasar Basis Data', 'author' => 'Siti Rahma', 'publisher' => 'Erlangga', 'year' => 2019, 'stock' => 5]);
Book::create(['category_id' => 2, 'title' => 'Mastering MySQL', 'author' => 'Rudi Hartono', 'publisher' => 'Elex Media', 'year' => 2021, 'stock' => 8]);
Book::create(['category_id' => 3, 'title' => 'Jaringan Komputer Praktis', 'author' => 'Dewi Lestari', 'publisher' => 'Gramedia', 'year' => 2023, 'stock' => 6]);
    }
}
