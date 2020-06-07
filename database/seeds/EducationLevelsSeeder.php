<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class EducationLevelsSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('education_levels') -> insert([
            'name' => 'Preescolar',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('education_levels') -> insert([
            'name' => 'Primaria',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('education_levels') -> insert([
            'name' => 'Secundaria',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('education_levels') -> insert([
            'name' => 'Media',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('education_levels') -> insert([
            'name' => 'Técnico',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('education_levels') -> insert([
            'name' => 'Tecnológica',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('education_levels') -> insert([
            'name' => 'Profesional',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('education_levels') -> insert([
            'name' => 'Especialización',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('education_levels') -> insert([
            'name' => 'Maestría',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('education_levels') -> insert([
            'name' => 'Doctorado',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('education_levels') -> insert([
            'name' => 'Posdoctorado',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
