<?php

use App\Prodotto;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class ProdottoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 5; $i++){
            $newProduct = new Prodotto();
            $newProduct->name = $faker->word(10);
            $newProduct->category = $faker->word(10);
            $newProduct->sale = $faker->word(2);  
            $newProduct->save();    
        }
        
     }
}
