<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Producto; // Asegúrate de usar el modelo adecuado
use Faker\Factory as Faker;

class ProductosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        $paises = ['Chile', 'Perú', 'México'];
        $tipos = ['Decoración', 'Textil', 'Cocina'];

        foreach (range(1, 20) as $index) {
            Producto::create([
                'titulo' => $faker->word,
                'descripcion' => $faker->paragraph,
                'precio' => $faker->randomFloat(2, 10, 100),
                'imagen' => $faker->imageUrl(640, 480, 'products', true),
                'artesano' => $faker->name,
                'localidad' => $faker->city,
    
                'pais' => $faker->randomElement($paises),
            
                'tipo' => $faker->randomElement($tipos),
                'material' => $faker->word,
            ]);
        }
    }
}
