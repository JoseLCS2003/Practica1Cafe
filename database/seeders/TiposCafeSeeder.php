<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TiposCafeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tipos_cafe')->insert([
            [
                'nombre' => 'Espresso',
                'descripcion' => 'Café concentrado e intenso con crema en la superficie.',
                'regiones' => 'Italia, América Latina',
                'curiosidades' => 'Base para muchas otras preparaciones como el cappuccino y el latte.',
                'precio' => 30.00,
            ],
            [
                'nombre' => 'Americano',
                'descripcion' => 'Espresso diluido con agua caliente, más suave.',
                'regiones' => 'Global',
                'curiosidades' => 'Su nombre proviene de soldados estadounidenses que diluían el espresso en Italia.',
                'precio' => 40.00,
            ],
            [
                'nombre' => 'Capuchino',
                'descripcion' => 'Equilibrio perfecto de café, leche y espuma.',
                'regiones' => 'Italia, Europa',
                'curiosidades' => 'Su nombre proviene de los monjes capuchinos, por el color de sus hábitos.',
                'precio' => 70.00,
            ],
            [
                'nombre' => 'Latte',
                'descripcion' => 'Espresso con abundante leche vaporizada y algo de espuma.',
                'regiones' => 'Europa, América',
                'curiosidades' => 'Popular entre los amantes del arte latte, donde se crean dibujos en la espuma.',
                'precio' => 80.00,
            ],
            [
                'nombre' => 'Mocha',
                'descripcion' => 'Mezcla de café con chocolate y leche vaporizada.',
                'regiones' => 'Global',
                'curiosidades' => 'Inspirado por la ciudad portuaria de Moka en Yemen, famosa por su café con notas de chocolate.',
                'precio' => 90.00,
            ],
            [
                'nombre' => 'Macchiato',
                'descripcion' => 'Espresso con un toque de leche vaporizada.',
                'regiones' => 'Italia',
                'curiosidades' => 'En italiano, "macchiato" significa "manchado", por la leche que mancha el espresso.',
                'precio' => 50.00,
            ],
            [
                'nombre' => 'Flat White',
                'descripcion' => 'Similar al latte, pero con más café y menos espuma.',
                'regiones' => 'Australia, Nueva Zelanda',
                'curiosidades' => 'Popularizado en Oceanía; el equilibrio entre espresso y leche lo hace único.',
                'precio' => 75.00,
            ],
            [
                'nombre' => 'Café con Leche',
                'descripcion' => 'Mitad café filtrado y mitad leche caliente.',
                'regiones' => 'Europa, América Latina',
                'curiosidades' => 'Versión casera y sencilla de café, muy popular en hogares.',
                'precio' => 35.00,
            ],
            [
                'nombre' => 'Cold Brew',
                'descripcion' => 'Café infusionado en agua fría por largas horas.',
                'regiones' => 'Global, especialmente EE. UU.',
                'curiosidades' => 'Su preparación reduce la acidez del café, ideal para climas cálidos.',
                'precio' => 95.00,
            ],
            [
                'nombre' => 'Frappe',
                'descripcion' => 'Café helado mezclado con leche, hielo y azúcar.',
                'regiones' => 'Grecia, Global',
                'curiosidades' => 'Originado en Grecia; se hace típicamente con café instantáneo.',
                'precio' => 65.00,
            ],
            [
                'nombre' => 'Café Turco',
                'descripcion' => 'Café espeso preparado sin filtrar, con posos en el fondo.',
                'regiones' => 'Medio Oriente, Balcanes',
                'curiosidades' => 'Reconocido como patrimonio cultural inmaterial por la UNESCO.',
                'precio' => 40.00,
            ],
            [
                'nombre' => 'Café Irlandés',
                'descripcion' => 'Café con whisky irlandés y crema batida.',
                'regiones' => 'Irlanda',
                'curiosidades' => 'Inventado en los años 40 para calentar a los pasajeros de vuelos transatlánticos.',
                'precio' => 110.00,
            ],
        ]);
    }
}
