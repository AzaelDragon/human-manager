<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class RecipientTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('recipient_types') -> insert([
            'name' => 'Propio',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('recipient_types') -> insert([
            'name' => 'Familiar',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
