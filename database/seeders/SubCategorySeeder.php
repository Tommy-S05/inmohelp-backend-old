<?php

namespace Database\Seeders;

use App\Models\SubCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Income
        SubCategory::create([
            //SubCategory_id = 1
            'category_id' => 1,
            'name' => 'Salario',
            'slug' => 'salario',
            'description' => 'Descripción de la subcategoría salario',
            'active' => true,
        ]);

        SubCategory::create([
            //SubCategory_id = 2
            'category_id' => 1,
            'name' => 'Inversiones',
            'slug' => 'inversiones',
            'description' => 'Descripción de la subcategoría inversiones',
            'active' => true,
        ]);

        SubCategory::create([
            //SubCategory_id = 3
            'category_id' => 1,
            'name' => 'Bonificaciones',
            'slug' => 'bonificaciones',
            'description' => 'Descripción de la subcategoría bonificaciones',
            'active' => true,
        ]);

        SubCategory::create([
            //SubCategory_id = 4
            'category_id' => 1,
            'name' => 'Manuntención Infantil',
            'slug' => 'manuntencion-infantil',
            'description' => 'Descripción de la subcategoría manuntención infantil',
            'active' => true,
        ]);

        SubCategory::create([
            //SubCategory_id = 5
            'category_id' => 1,
            'name' => 'Pagos de Prestaciones',
            'slug' => 'pagos-de-prestaciones',
            'description' => 'Descripción de la subcategoría pagos de prestaciones',
            'active' => true,
        ]);

        SubCategory::create([
            //SubCategory_id = 6
            'category_id' => 1,
            'name' => 'Otros ingresos',
            'slug' => 'otros-ingresos',
            'description' => 'Descripción de la subcategoría otros ingresos',
            'active' => true,
        ]);

        // Expense
        // Hogar y Servicios Públicos
        SubCategory::create([
            //SubCategory_id = 7
            'category_id' => 2,
            'name' => 'Alquiler',
            'slug' => 'alquiler',
            'description' => 'Descripción de la subcategoría alquiler',
            'active' => true,
        ]);

        SubCategory::create([
            //SubCategory_id = 8
            'category_id' => 2,
            'name' => 'Hipoteca',
            'slug' => 'hipoteca',
            'description' => 'Descripción de la subcategoría hipoteca',
            'active' => true,
        ]);

        SubCategory::create([
            //SubCategory_id = 9
            'category_id' => 2,
            'name' => 'Agua',
            'slug' => 'agua',
            'description' => 'Descripción de la subcategoría agua',
            'active' => true,
        ]);

        SubCategory::create([
            //SubCategory_id = 10
            'category_id' => 2,
            'name' => 'Luz',
            'slug' => 'luz',
            'description' => 'Descripción de la subcategoría luz',
            'active' => true,
        ]);

        SubCategory::create([
            //SubCategory_id = 11
            'category_id' => 2,
            'name' => 'Gas',
            'slug' => 'gas',
            'description' => 'Descripción de la subcategoría gas',
            'active' => true,
        ]);

        SubCategory::create([
            //SubCategory_id = 12
            'category_id' => 2,
            'name' => 'Internet',
            'slug' => 'internet',
            'description' => 'Descripción de la subcategoría internet',
            'active' => true,
        ]);

        SubCategory::create([
            //SubCategory_id = 13
            'category_id' => 2,
            'name' => 'Teléfono',
            'slug' => 'telefono',
            'description' => 'Descripción de la subcategoría teléfono',
            'active' => true,
        ]);

        SubCategory::create([
            //SubCategory_id = 14
            'category_id' => 2,
            'name' => 'Móvil',
            'slug' => 'movil',
            'description' => 'Descripción de la subcategoría móvil',
            'active' => true,
        ]);

        SubCategory::create([
            //SubCategory_id = 15
            'category_id' => 2,
            'name' => 'Reparaciones y Mantenimiento',
            'slug' => 'reparaciones-y-mantenimiento',
            'description' => 'Descripción de la subcategoría reparaciones y mantenimiento',
            'active' => true,
        ]);

        SubCategory::create([
            //SubCategory_id = 16
            'category_id' => 2,
            'name' => 'Muebles y Electrodomésticos',
            'slug' => 'muebles-y-electrodomesticos',
            'description' => 'Descripción de la subcategoría muebles y electrodomésticos',
            'active' => true,
        ]);

        SubCategory::create([
            //SubCategory_id = 17
            'category_id' => 2,
            'name' => 'Otros gastos de hogar',
            'slug' => 'otros-gastos-de-hogar',
            'description' => 'Descripción de la subcategoría otros gastos de hogar',
            'active' => true,
        ]);

        //Seguros y Finanzas
        SubCategory::create([
            //SubCategory_id = 18
            'category_id' => 3,
            'name' => 'Seguro de Vida',
            'slug' => 'seguro-de-vida',
            'description' => 'Descripción de la subcategoría seguro de vida',
            'active' => true,
        ]);

        SubCategory::create([
            //SubCategory_id = 19
            'category_id' => 3,
            'name' => 'Seguro de salud',
            'slug' => 'seguro-de-salud',
            'description' => 'Descripción de la subcategoría seguro de salud',
            'active' => true,
        ]);

        SubCategory::create([
            //SubCategory_id = 20
            'category_id' => 3,
            'name' => 'Seguro de Auto',
            'slug' => 'seguro-de-auto',
            'description' => 'Descripción de la subcategoría seguro de auto',
            'active' => true,
        ]);

        SubCategory::create([
            //SubCategory_id = 21
            'category_id' => 3,
            'name' => 'Seguro de Hogar',
            'slug' => 'seguro-de-hogar',
            'description' => 'Descripción de la subcategoría seguro de hogar',
            'active' => true,
        ]);

        SubCategory::create([
            //SubCategory_id = 22
            'category_id' => 3,
            'name' => 'Préstamo de Auto',
            'slug' => 'prestamo-de-auto',
            'description' => 'Descripción de la subcategoría prestamo de auto',
            'active' => true,
        ]);

        SubCategory::create([
            //SubCategory_id = 23
            'category_id' => 3,
            'name' => 'Préstamos Personales',
            'slug' => 'prestamos-personales',
            'description' => 'Descripción de la subcategoría prestamos personales',
            'active' => true,
        ]);

        SubCategory::create([
            //SubCategory_id = 24
            'category_id' => 3,
            'name' => 'Préstamo Estudiantil',
            'slug' => 'prestamo-estudiantil',
            'description' => 'Descripción de la subcategoría prestamo estudiantil',
            'active' => true,
        ]);

        SubCategory::create([
            //SubCategory_id = 25
            'category_id' => 3,
            'name' => 'Otros préstamos',
            'slug' => 'otros-prestamos',
            'description' => 'Descripción de la subcategoría otros préstamos',
            'active' => true,
        ]);

        SubCategory::create([
            //SubCategory_id = 26
            'category_id' => 3,
            'name' => 'Pago de Tarjeta de Crédito',
            'slug' => 'pago-de-tarjeta-de-credito',
            'description' => 'Descripción de la subcategoría pago de tarjeta de crédito',
            'active' => true,
        ]);

        SubCategory::create([
            //SubCategory_id = 27
            'category_id' => 3,
            'name' => 'Pago de otras deudas',
            'slug' => 'pago-de-otras-deudas',
            'description' => 'Descripción de la subcategoría pago de otras deudas',
            'active' => true,
        ]);

        SubCategory::create([
            //SubCategory_id = 28
            'category_id' => 3,
            'name' => 'Otros gastos de seguros y deudas',
            'slug' => 'otros-gastos-de-seguros-y-deudas',
            'description' => 'Descripción de la subcategoría otros gastos de seguros y deudas',
            'active' => true,
        ]);

        //Comestibles
        SubCategory::create([
            //SubCategory_id = 29
            'category_id' => 4,
            'name' => 'Supermercado',
            'slug' => 'supermercado',
            'description' => 'Descripción de la subcategoría supermercado',
            'active' => true,
        ]);

        SubCategory::create([
            //SubCategory_id = 30
            'category_id' => 4,
            'name' => 'Carniceria',
            'slug' => 'carniceria',
            'description' => 'Descripción de la subcategoría carniceria',
            'active' => true,
        ]);

        SubCategory::create([
            //SubCategory_id = 31
            'category_id' => 4,
            'name' => 'Mercado',
            'slug' => 'mercado',
            'description' => 'Descripción de la subcategoría mercado',
            'active' => true,
        ]);

        SubCategory::create([
            //SubCategory_id = 32
            'category_id' => 4,
            'name' => 'Panadería',
            'slug' => 'panaderia',
            'description' => 'Descripción de la subcategoría panaderia',
            'active' => true,
        ]);

        SubCategory::create([
            //SubCategory_id = 33
            'category_id' => 4,
            'name' => 'Alimentos para mascotas',
            'slug' => 'alimentos-para-mascotas',
            'description' => 'Descripción de la subcategoría alimentos para mascotas',
            'active' => true,
        ]);

        SubCategory::create([
            //SubCategory_id = 34
            'category_id' => 4,
            'name' => 'Otros comestibles',
            'slug' => 'otros-comestibles',
            'description' => 'Descripción de la subcategoría otros comestibles',
            'active' => true,
        ]);

        //Personales y Medicos
        SubCategory::create([
            //SubCategory_id = 35
            'category_id' => 5,
            'name' => 'Peluquería y belleza',
            'slug' => 'ropa',
            'description' => 'Descripción de la subcategoría ropa',
            'active' => true,
        ]);

        SubCategory::create([
            //SubCategory_id = 36
            'category_id' => 5,
            'name' => 'Spa',
            'slug' => 'spa',
            'description' => 'Descripción de la subcategoría spa',
            'active' => true,
        ]);

        SubCategory::create([
            //SubCategory_id = 37
            'category_id' => 5,
            'name' => 'Medicamentos y farmacia',
            'slug' => 'medicamentos-y-farmacia',
            'description' => 'Descripción de la subcategoría medicamentos y farmacia',
            'active' => true,
        ]);

        SubCategory::create([
            //SubCategory_id = 38
            'category_id' => 5,
            'name' => 'Medicos y dentistas',
            'slug' => 'medicos-y-dentistas',
            'description' => 'Descripción de la subcategoría medicos y dentistas',
            'active' => true,
        ]);

        SubCategory::create([
            //SubCategory_id = 39
            'category_id' => 5,
            'name' => 'Gafas y cuidado de la vista',
            'slug' => 'gafas-y-cuidado-de-la-vista',
            'description' => 'Descripción de la subcategoría gafas y cuidado de la vista',
            'active' => true,
        ]);

        SubCategory::create([
            //SubCategory_id = 40
            'category_id' => 5,
            'name' => 'Hobbies',
            'slug' => 'hobbies',
            'description' => 'Descripción de la subcategoría hobbies',
            'active' => true,
        ]);

        SubCategory::create([
            //SubCategory_id = 41
            'category_id' => 5,
            'name' => 'Ropa y calzado',
            'slug' => 'ropa-y-calzado',
            'description' => 'Descripción de la subcategoría ropa y calzado',
            'active' => true,
        ]);

        SubCategory::create([
            //SubCategory_id = 42
            'category_id' => 5,
            'name' => 'Joyas y accesorios',
            'slug' => 'joyas-y-accesorios',
            'description' => 'Descripción de la subcategoría joyas y accesorios',
            'active' => true,
        ]);

        SubCategory::create([
            //SubCategory_id = 43
            'category_id' => 5,
            'name' => 'Computadoras y artefactos',
            'slug' => 'computadoras-y-artefactos',
            'description' => 'Descripción de la subcategoría computadoras y artefactos',
            'active' => true,
        ]);

        SubCategory::create([
            //SubCategory_id = 44
            'category_id' => 5,
            'name' => 'Gimnasio y deportes',
            'slug' => 'gimnasio-y-deportes',
            'description' => 'Descripción de la subcategoría gimnasio y deportes',
            'active' => true,
        ]);

        SubCategory::create([
            //SubCategory_id = 45
            'category_id' => 5,
            'name' => 'Eduación',
            'slug' => 'educacion',
            'description' => 'Descripción de la subcategoría educación',
            'active' => true,
        ]);

        SubCategory::create([
            //SubCategory_id = 46
            'category_id' => 5,
            'name' => 'Cuidado de Mascotas y veterinaria',
            'slug' => 'cuidado-de-mascotas-y-veterinaria',
            'description' => 'Descripción de la subcategoría cuidado de mascotas y veterinaria',
            'active' => true,
        ]);

        SubCategory::create([
            //SubCategory_id = 47
            'category_id' => 5,
            'name' => 'Otros gastos personales y médicos',
            'slug' => 'otros-gastos-personales-y-medicos',
            'description' => 'Descripción de la subcategoría otros gastos personales y médicos',
            'active' => true,
        ]);

        //Entretenimiento y diversión
        SubCategory::create([
            //SubCategory_id = 48
            'category_id' => 6,
            'name' => 'Viajes y vacaciones',
            'slug' => 'viajes-y-vacaciones',
            'description' => 'Descripción de la subcategoría viajes y vacaciones',
            'active' => true,
        ]);

        SubCategory::create([
            //SubCategory_id = 49
            'category_id' => 6,
            'name' => 'Cine',
            'slug' => 'cine',
            'description' => 'Descripción de la subcategoría cine',
            'active' => true,
        ]);

        SubCategory::create([
            //SubCategory_id = 50
            'category_id' => 6,
            'name' => 'Teatro',
            'slug' => 'teatro',
            'description' => 'Descripción de la subcategoría teatro',
            'active' => true,
        ]);

        SubCategory::create([
            //SubCategory_id = 51
            'category_id' => 6,
            'name' => 'Concierto',
            'slug' => 'concierto',
            'description' => 'Descripción de la subcategoría concierto',
            'active' => true,
        ]);

        SubCategory::create([
            //SubCategory_id = 52
            'category_id' => 6,
            'name' => 'Café',
            'slug' => 'cafe',
            'description' => 'Descripción de la subcategoría café',
            'active' => true,
        ]);

        SubCategory::create([
            //SubCategory_id = 53
            'category_id' => 6,
            'name' => 'Restaurante',
            'slug' => 'restaurante',
            'description' => 'Descripción de la subcategoría restaurante',
            'active' => true,
        ]);

        SubCategory::create([
            //SubCategory_id = 54
            'category_id' => 6,
            'name' => 'Bares y discotecas',
            'slug' => 'bares-y-discotecas',
            'description' => 'Descripción de la subcategoría bares y discotecas',
            'active' => true,
        ]);

        SubCategory::create([
            //SubCategory_id = 55
            'category_id' => 6,
            'name' => 'Bebidas y Alcohol',
            'slug' => 'bebidas-y-alcohol',
            'description' => 'Descripción de la subcategoría bebidas y alcohol',
            'active' => true,
        ]);

        SubCategory::create([
            //SubCategory_id = 56
            'category_id' => 6,
            'name' => 'Cigarrillos',
            'slug' => 'cigarrillos',
            'description' => 'Descripción de la subcategoría cigarrillos',
            'active' => true,
        ]);

        SubCategory::create([
            //SubCategory_id = 57
            'category_id' => 6,
            'name' => 'Libros',
            'slug' => 'libros',
            'description' => 'Descripción de la subcategoría libros',
            'active' => true,
        ]);

        SubCategory::create([
            //SubCategory_id = 58
            'category_id' => 6,
            'name' => 'Revistas y periódicos',
            'slug' => 'revistas-y-periodicos',
            'description' => 'Descripción de la subcategoría revistas y periódicos',
            'active' => true,
        ]);

        SubCategory::create([
            //SubCategory_id = 59
            'category_id' => 6,
            'name' => 'Suscripciones',
            'slug' => 'suscripciones',
            'description' => 'Descripción de la subcategoría suscripciones',
            'active' => true,
        ]);

        SubCategory::create([
            //SubCategory_id = 60
            'category_id' => 6,
            'name' => 'Celebraciones y regalos',
            'slug' => 'celebraciones-y-regalos',
            'description' => 'Descripción de la subcategoría celebraciones y regalos',
            'active' => true,
        ]);

        SubCategory::create([
            //SubCategory_id = 61
            'category_id' => 6,
            'name' => 'Otros gastos de entretenimiento y diversión',
            'slug' => 'otros-gastos-de-entretenimiento-y-diversion',
            'description' => 'Descripción de la subcategoría otros gastos de entretenimiento y diversión',
            'active' => true,
        ]);

        //Transporte
        SubCategory::create([
            //SubCategory_id = 62
            'category_id' => 7,
            'name' => 'Transporte público',
            'slug' => 'transporte-publico',
            'description' => 'Descripción de la subcategoría transporte público',
            'active' => true,
        ]);

        SubCategory::create([
            //SubCategory_id = 63
            'category_id' => 7,
            'name' => 'Taxi',
            'slug' => 'taxi',
            'description' => 'Descripción de la subcategoría taxi',
            'active' => true,
        ]);

        SubCategory::create([
            //SubCategory_id = 64
            'category_id' => 7,
            'name' => 'Gasolina',
            'slug' => 'gasolina',
            'description' => 'Descripción de la subcategoría gasolina',
            'active' => true,
        ]);

        SubCategory::create([
            //SubCategory_id = 65
            'category_id' => 7,
            'name' => 'Mantenimiento y Reparación de automóvil',
            'slug' => 'mantenimiento-y-reparacion-de-automovil',
            'description' => 'Descripción de la subcategoría mantenimiento y reparación de automóvil',
            'active' => true,
        ]);

        SubCategory::create([
            //SubCategory_id = 66
            'category_id' => 7,
            'name' => 'Peajes y estacionamientos',
            'slug' => 'peajes-y-estacionamientos',
            'description' => 'Descripción de la subcategoría peajes y estacionamientos',
            'active' => true,
        ]);

        SubCategory::create([
            //SubCategory_id = 67
            'category_id' => 7,
            'name' => 'Otros gastos de transporte',
            'slug' => 'otros-gastos-de-transporte',
            'description' => 'Descripción de la subcategoría otros gastos de transporte',
            'active' => true,
        ]);

        //Niños
        SubCategory::create([
            //SubCategory_id = 68
            'category_id' => 8,
            'name' => 'Pago de manutención',
            'slug' => 'pago-de-manutencion',
            'description' => 'Descripción de la subcategoría pago de manutención',
            'active' => true,
        ]);

        SubCategory::create([
            //SubCategory_id = 69
            'category_id' => 8,
            'name' => 'Pagos escolares',
            'slug' => 'pagos-escolares',
            'description' => 'Descripción de la subcategoría pagos escolares',
            'active' => true,
        ]);

        SubCategory::create([
            //SubCategory_id = 70
            'category_id' => 8,
            'name' => 'Uniformes escolares',
            'slug' => 'uniformes-escolares',
            'description' => 'Descripción de la subcategoría uniformes escolares',
            'active' => true,
        ]);

        SubCategory::create([
            //SubCategory_id = 71
            'category_id' => 8,
            'name' => 'Utiles escolares',
            'slug' => 'utiles-escolares',
            'description' => 'Descripción de la subcategoría utiles escolares',
            'active' => true,
        ]);

        SubCategory::create([
            //SubCategory_id = 72
            'category_id' => 8,
            'name' => 'Niñera',
            'slug' => 'ninera',
            'description' => 'Descripción de la subcategoría niñera',
            'active' => true,
        ]);

        SubCategory::create([
            //SubCategory_id = 73
            'category_id' => 8,
            'name' => 'Productos para bebé',
            'slug' => 'productos-para-bebe',
            'description' => 'Descripción de la subcategoría productos para bebé',
            'active' => true,
        ]);

        SubCategory::create([
            //SubCategory_id = 74
            'category_id' => 8,
            'name' => 'Juguetes',
            'slug' => 'juguetes',
            'description' => 'Descripción de la subcategoría juguetes',
            'active' => true,
        ]);

        SubCategory::create([
            //SubCategory_id = 75
            'category_id' => 8,
            'name' => 'Actividades deportivas',
            'slug' => 'actividades-deportivas',
            'description' => 'Descripción de la subcategoría actividades deportivas',
            'active' => true,
        ]);

        SubCategory::create([
            //SubCategory_id = 76
            'category_id' => 8,
            'name' => 'Otros gastos de niños',
            'slug' => 'otros-gastos-de-ninos',
            'description' => 'Descripción de la subcategoría otros gastos de niños',
            'active' => true,
        ]);
    }
}
