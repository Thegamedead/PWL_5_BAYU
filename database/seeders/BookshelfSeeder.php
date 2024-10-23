<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookshelfSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('bookshelfs')->insert([
            [
                'code' => 'BS001',
                'name' => 'Manga'
            ],
            [
                'code' => 'BS002',
                'name' => 'Novle'
            ]
        ]);
        Book::create([
       
            'title'         => 'Gajah terbang',
            'author'        => 'minsittar',   
            'year'          => '2024',
            'publisher'     => 'universitas gajah terbang',
            'city'          => 'Cianjur',
            'cover'         => 'gajahterbang.jpg',
            'bookshelf_id'  => 1
            
        ]);
    }
}
