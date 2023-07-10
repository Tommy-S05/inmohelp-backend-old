<?php

namespace Database\Seeders;

use App\Models\Province;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProvinceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Province::create([
            "name" => "Distrito Nacional",
            "code" => "01",
            "identifier" => "1001",
            "regionCode" => "10"
        ]);

        Province::create([
            "name" => "Azua",
            "code" => "02",
            "identifier" => "0502",
            "regionCode" => "05"
        ]);

        Province::create([
            "name" => "Bahoruco",
            "code" => "03",
            "identifier" => "0603",
            "regionCode" => "06"
        ]);

        Province::create([
            "name" => "Barahona",
            "code" => "04",
            "identifier" => "0604",
            "regionCode" => "06"
        ]);

        Province::create([
            "name" => "Dajabón",
            "code" => "05",
            "identifier" => "0405",
            "regionCode" => "04"
        ]);

        Province::create([
            "name" => "Duarte",
            "code" => "06",
            "identifier" => "0306",
            "regionCode" => "03"
        ]);

        Province::create([
            "name" => "Elías Piña",
            "code" => "07",
            "identifier" => "0707",
            "regionCode" => "07"
        ]);

        Province::create([
            "name" => "El Seibo",
            "code" => "08",
            "identifier" => "0808",
            "regionCode" => "08"
        ]);

        Province::create([
            "name" => "Espaillat",
            "code" => "09",
            "identifier" => "0109",
            "regionCode" => "01"
        ]);

        Province::create([
            "name" => "Independencia",
            "code" => "10",
            "identifier" => "0610",
            "regionCode" => "06"
        ]);

        Province::create([
            "name" => "La Altagracia",
            "code" => "11",
            "identifier" => "0811",
            "regionCode" => "08"
        ]);

        Province::create([
            "name" => "La Romana",
            "code" => "12",
            "identifier" => "0812",
            "regionCode" => "08"
        ]);

        Province::create([
            "name" => "La Vega",
            "code" => "13",
            "identifier" => "0213",
            "regionCode" => "02"
        ]);

        Province::create([
            "name" => "María Trinidad Sánchez",
            "code" => "14",
            "identifier" => "0314",
            "regionCode" => "03"
        ]);

        Province::create([
            "name" => "Monte Cristi",
            "code" => "15",
            "identifier" => "0415",
            "regionCode" => "04"
        ]);

        Province::create([
            "name" => "Pedernales",
            "code" => "16",
            "identifier" => "0616",
            "regionCode" => "06"
        ]);

        Province::create([
            "name" => "Peravia",
            "code" => "17",
            "identifier" => "0517",
            "regionCode" => "05"
        ]);

        Province::create([
            "name" => "Puerto Plata",
            "code" => "18",
            "identifier" => "0118",
            "regionCode" => "01"
        ]);

        Province::create([
            "name" => "Hermanas Mirabal",
            "code" => "19",
            "identifier" => "0319",
            "regionCode" => "03"
        ]);

        Province::create([
            "name" => "Samaná",
            "code" => "20",
            "identifier" => "0320",
            "regionCode" => "03"
        ]);

        Province::create([
            "name" => "San Cristóbal",
            "code" => "21",
            "identifier" => "0521",
            "regionCode" => "05"
        ]);

        Province::create([
            "name" => "San Juan",
            "code" => "22",
            "identifier" => "0722",
            "regionCode" => "07"
        ]);

        Province::create([
            "name" => "San Pedro de Macorís",
            "code" => "23",
            "identifier" => "0923",
            "regionCode" => "09"
        ]);

        Province::create([
            "name" => "Sanchez Ramírez",
            "code" => "24",
            "identifier" => "0224",
            "regionCode" => "02"
        ]);

        Province::create([
            "name" => "Santiago",
            "code" => "25",
            "identifier" => "0125",
            "regionCode" => "01"
        ]);

        Province::create([
            "name" => "Santiago Rodríguez",
            "code" => "26",
            "identifier" => "0426",
            "regionCode" => "04"
        ]);

        Province::create([
            "name" => "Valverde",
            "code" => "27",
            "identifier" => "0427",
            "regionCode" => "04"
        ]);

        Province::create([
            "name" => "Monseñor Nouel",
            "code" => "28",
            "identifier" => "0228",
            "regionCode" => "02"
        ]);

        Province::create([
            "name" => "Monte Plata",
            "code" => "29",
            "identifier" => "0929",
            "regionCode" => "09"
        ]);

        Province::create([
            "name" => "Hato Mayor",
            "code" => "30",
            "identifier" => "0930",
            "regionCode" => "09"
        ]);

        Province::create([
            "name" => "San José de Ocoa",
            "code" => "31",
            "identifier" => "0531",
            "regionCode" => "05"
        ]);

        Province::create([
            "name" => "Santo Domingo",
            "code" => "32",
            "identifier" => "1032",
            "regionCode" => "10"
        ]);
    }
}
