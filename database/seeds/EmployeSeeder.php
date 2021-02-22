<?php

use Illuminate\Database\Seeder;

class EmployeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $employers_list = config('employe');

        foreach ($employers_list as $employe) {
            
            $newEmploye = new Employe();
            $newEmploye->name = $employe['name'];
            $newEmploye->departement = $employe['departement'];
            $newEmploye->company = $employe['company'];
            $newEmploye->save();
        }
        dd($employers_list);
    }
}
