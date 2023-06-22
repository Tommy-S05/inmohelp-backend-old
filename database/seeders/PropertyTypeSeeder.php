<?php

namespace Database\Seeders;

use App\Models\PropertyType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PropertyTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PropertyType::create([
            'name' => 'Departamento',
            //            'slug' => Str::slug('Lenovo L340 Gaming', '-'),
            'slug' => 'departamento',
            'description' => 'Departamento de 1 piso',
            'image' => '/assets/categories/category-departamento.png',
            'status' => 'ACTIVE'
        ]);

        PropertyType::create([
            'name' => 'Casa',
            //            'slug' => Str::slug('Lenovo L340 Gaming', '-'),
            'slug' => 'casa',
            'description' => 'Casa de 1 piso',
            'image' => '/assets/categories/category-casa.png',
            'status' => 'ACTIVE'
        ]);

        PropertyType::create([
            'name' => 'Comercios',
            //            'slug' => Str::slug('Lenovo L340 Gaming', '-'),
            'slug' => 'comercios',
            'description' => 'Comercios',
            'image' => '/assets/categories/category-comercios.png',
            'status' => 'ACTIVE'
        ]);

        PropertyType::create([
            'name' => 'Countries',
            //            'slug' => Str::slug('Lenovo L340 Gaming', '-'),
            'slug' => 'countries',
            'description' => 'countries',
            'image' => '/assets/categories/category-countries.png',
            'status' => 'ACTIVE'
        ]);

        PropertyType::create([
            'name' => 'Hoteles',
            //            'slug' => Str::slug('Lenovo L340 Gaming', '-'),
            'slug' => 'hoteles',
            'description' => 'hoteles',
            'image' => '/assets/categories/category-hotel.png',
            'status' => 'ACTIVE'
        ]);

        PropertyType::create([
            'name' => 'Universidades',
            //            'slug' => Str::slug('Lenovo L340 Gaming', '-'),
            'slug' => 'universidades',
            'description' => 'universidades',
            'image' => '/assets/categories/category-universidad.png',
            'status' => 'ACTIVE'
        ]);

        PropertyType::create([
            'name' => 'Casa de Verano',
            'slug' => Str::slug('Casa de Verano', '-'),
            'description' => 'casa de verano',
            'image' => '/assets/categories/category-casadeverano.png',
            'status' => 'ACTIVE'
        ]);

        PropertyType::create([
            'name' => 'Almacenes',
            //            'slug' => Str::slug('Lenovo L340 Gaming', '-'),
            'slug' => 'almacenes',
            'description' => 'almacenes',
            'image' => '/assets/categories/category-almacenes2.png',
            'status' => 'ACTIVE'
        ]);

        //        PropertyType::create([
        //            'name' => 'Terreno',
        //            //            'slug' => Str::slug('Lenovo L340 Gaming', '-'),
        //            'slug' => 'terreno',
        //            'description' => 'Terreno de 1 piso',
        //            'image' => '/assets/categories/category-terreno.png',
        //            'status' => 'ACTIVE'
        //        ]);
        //
        //        PropertyType::create([
        //            'name' => 'Oficina',
        //            //            'slug' => Str::slug('Lenovo L340 Gaming', '-'),
        //            'slug' => 'oficina',
        //            'description' => 'Oficina de 1 piso',
        //            'image' => '/assets/categories/category-oficina.png',
        //            'status' => 'ACTIVE'
        //        ]);

    }
}
