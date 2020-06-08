<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run() {
        $this -> call([
            RecipientTypesSeeder::class,
            EducationLevelsSeeder::class,
            EmployeesSeeder::class,
            OldRecipientsSeeder::class,
            RecipientsSeeder::class,
            ApplicationSeeder::class
        ]);
    }
}
