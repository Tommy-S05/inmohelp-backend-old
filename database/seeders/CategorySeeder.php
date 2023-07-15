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
        Category::create([
            'name' => 'Ingresos',
            'slug' => 'ingresos',
            'type' => 'income',
            'description' => 'Descripción de la categoría ingresos',
            'active' => true,
        ]);

        Category::create([
            'name' => 'Hogar y Servicios Públicos',
            'slug' => 'hogar-y-servicios-públicos',
            'type' => 'expense',
            'description' => 'Descripción de la categoría hogar',
            'active' => true,
        ]);

        Category::create([
            'name' => 'Seguros y Deudad',
            'slug' => 'seguro-y-deudas',
            'type' => 'expense',
            'description' => 'Descripción de la categoría Seguros y Deudas',
            'active' => true,
        ]);

        Category::create([
            'name' => 'Comestibles',
            'slug' => 'comestibles',
            'type' => 'expense',
            'description' => 'Descripción de la categoría comestibles',
            'active' => true,
        ]);

        Category::create([
            'name' => 'Personales y Médicos',
            'slug' => 'personales-y-médicos',
            'type' => 'expense',
            'description' => 'Descripción de la categoría Personales y Médicos',
            'active' => true,
        ]);

        Category::create([
            'name' => 'Entretenimiento y Diversión',
            'slug' => 'entretenimiento-y-diversion',
            'type' => 'expense',
            'description' => 'Descripción de la categoría Entretenimiento y Diversión',
            'active' => true,
        ]);

        Category::create([
            'name' => 'Transporte',
            'slug' => 'transporte',
            'type' => 'expense',
            'description' => 'Descripción de la categoría transporte',
            'active' => true,
        ]);

        Category::create([
            'name' => 'Niños',
            'slug' => 'niños',
            'type' => 'expense',
            'description' => 'Descripción de la categoría niños',
            'active' => true,
        ]);
    }
}
