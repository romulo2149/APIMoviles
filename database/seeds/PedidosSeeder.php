<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class PedidosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('App\Pedido');
        
        for($i = 1 ; $i <= 10 ; $i++){
        	DB::table('pedidos')->insert([
            'descripcion' => $faker->catchPhrase,
        	'direccion' => $faker->unique()->streetAddress,
            'fecha_entrega' => $faker->dateTimeBetween($startDate = 'now', $endDate = '+1 month', $timezone = null)
        ]);
        }
    }
}
