<?php


use App\Student;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $students_coures = [
            [
                'nome' => 'Nicola',
                'classe' => '23',
                'corso' => 'Boolean'
            ],
            [
                'nome' => 'Alfredo',
                'classe' => '23',
                'corso' => 'Boolean'
            ],
            [
                'nome' => 'Antonio',
                'classe' => '23',
                'corso' => 'Boolean'
            ],
            [
                'nome' => 'MariaPia',
                'classe' => '23',
                'corso' => 'Boolean'
            ]
        ];


        foreach ($students_coures as $student) {
            $newStudent = new Student();
            $newStudent->nome = $student['nome'];
            $newStudent->classe = $student['classe'];
            $newStudent->corso = $student['corso'];
            $newStudent->save();
        }
        dd($students_coures);
    }
}
