<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        Tag::create([
            'name' => 'HTML',
            'slug' => Str::slug('HTML'),
            'descripcion' => 'Lenguaje de marcado para la elaboración de páginas web.',
            'color' => 'orange',
            'img_url' => 'tags/html5.jpg'
        ]);

        Tag::create([
            'name' => 'LARAVEL',
            'slug' => Str::slug('LARAVEL'),
            'descripcion' => 'Framework de código abierto para desarrollar aplicaciones y servicios web con PHP 5, PHP 7 y PHP 8.',
            'color' => 'red',
            'img_url' => 'tags/laravel.png'
        ]);

        Tag::create([
            'name' => 'C#',
            'slug' => Str::slug('C#'),
            'descripcion' => '"C#" es un lenguaje de programación multiparadigma desarrollado y estandarizado por la empresa Microsoft como parte de su plataforma .NET',
            'color' => 'purple',
            'img_url' => 'tags/csharp.webp'
        ]);

        Tag::create([
            'name' => 'C++',
            'slug' => Str::slug('C++'),
            'descripcion' => '"C#" es un lenguaje de programación multiparadigma desarrollado y estandarizado por la empresa Microsoft como parte de su plataforma .NET',
            'color' => 'blue',
            'img_url' => 'tags/C++.png'
        ]);

        
        
    }
}

