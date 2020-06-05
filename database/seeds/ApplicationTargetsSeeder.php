<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class ApplicationTargetsSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('application_targets') -> insert([
            'name' => 'Preescolar',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('application_targets') -> insert([
            'name' => 'Básica',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('application_targets') -> insert([
            'name' => 'Media',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('application_targets') -> insert([
            'name' => 'Técnico',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('application_targets') -> insert([
            'name' => 'Tecnológica',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('application_targets') -> insert([
            'name' => 'Profesional',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('application_targets') -> insert([
            'name' => 'Especialización',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('application_targets') -> insert([
            'name' => 'Maestría',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('application_targets') -> insert([
            'name' => 'Doctorado',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('application_targets') -> insert([
            'name' => 'Posdoctorado',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
