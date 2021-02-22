<?php

use App\Classe;
use Illuminate\Database\Seeder;

class ClasseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $classes = config('classe_config');

      foreach ($classes as $classe) {
        $newClasse = new Classe();
        $newClasse->class_name = $classe['class_name'];
        $newClasse->students_number = $classe['students_number'];
        $newClasse->teacher_name = $classe['teacher_name'];
        $newClasse->floor = $classe['floor'];
        $newClasse->save();
      }
    }
}
