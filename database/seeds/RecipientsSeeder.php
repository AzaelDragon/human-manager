<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class RecipientsSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {

        DB::table('recipients') -> insert([
            'document' => 1011095053,
            'name' => 'ANA MARÍA PEÑA GALINDO',
            'requested_money' => 0,
            'education_level' => 2,
            'has_family_certificate' => 1,
            'has_past_semester_approbation' => 0,
            'has_education_signup' => 1,
            'recipient_type' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('recipients') -> insert([
            'document' => 1027285566,
            'name' => 'MIGUEL ÁNGEL PEÑA GALINDO',
            'requested_money' => 0,
            'education_level' => 3,
            'has_family_certificate' => 1,
            'has_past_semester_approbation' => 0,
            'has_education_signup' => 1,
            'recipient_type' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('recipients') -> insert([
            'document' => 1007103450,
            'name' => 'MARIA ANGELICA SOLANO GOMEZ',
            'requested_money' => 2286342,
            'education_level' => 4,
            'has_family_certificate' => 0,
            'has_past_semester_approbation' => 0,
            'has_education_signup' => 1,
            'recipient_type' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('recipients') -> insert([
            'document' => 36301321,
            'name' => 'LINA GISELLA SUAREZ LOSADA',
            'requested_money' => 1926000,
            'education_level' => 9,
            'has_education_signup' => 1,
            'recipient_type' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('recipients') -> insert([
            'document' => 1000862754,
            'name' => 'JUAN DIEGO SILVA GALEANO',
            'requested_money' => 1542000,
            'education_level' => 4,
            'has_family_certificate' => 1,
            'has_past_semester_approbation' => 0,
            'has_education_signup' => 1,
            'recipient_type' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('recipients') -> insert([
            'document' => 1016597789,
            'name' => 'JUAN MARTIN PRADO QUESADA',
            'requested_money' => 3000000,
            'education_level' => 2,
            'has_family_certificate' => 1,
            'has_past_semester_approbation' => 0,
            'has_education_signup' => 1,
            'recipient_type' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('recipients') -> insert([
            'document' => 1110043931,
            'name' => 'SARA SOFIA PRADA QUESADA',
            'requested_money' => 2801508,
            'education_level' => 3,
            'has_family_certificate' => 1,
            'has_past_semester_approbation' => 0,
            'has_education_signup' => 1,
            'recipient_type' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('recipients') -> insert([
            'document' => 65745058,
            'name' => 'HERNERLY SHIRLEY SANCHEZ BOLIVAR',
            'requested_money' => 3681000,
            'education_level' => 8,
            'has_education_signup' => 1,
            'recipient_type' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('recipients') -> insert([
            'document' => 1031653672,
            'name' => 'SAMUEL ALEJANDRO OLARTE HERRERA',
            'requested_money' => 4728000,
            'education_level' => 3,
            'has_family_certificate' => 1,
            'has_past_semester_approbation' => 0,
            'has_education_signup' => 1,
            'recipient_type' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('recipients') -> insert([
            'document' => 1018465745,
            'name' => 'MARIANA IZQUIERDO CASTIBLANCO',
            'requested_money' => 17658900,
            'education_level' => 8,
            'has_family_certificate' => 1,
            'has_past_semester_approbation' => 0,
            'has_education_signup' => 1,
            'recipient_type' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('recipients') -> insert([
            'document' => 1032494011,
            'name' => 'PAOLA ANDREA TRUJILLO BARRERA',
            'requested_money' => 6357600,
            'education_level' => 8,
            'has_family_certificate' => 1,
            'has_past_semester_approbation' => 0,
            'has_education_signup' => 1,
            'recipient_type' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('recipients') -> insert([
            'document' => 35529764,
            'name' => 'ZAYDA IVETTE RIAÑO SALAMANCA',
            'requested_money' => 5293000,
            'education_level' => 8,
            'has_education_signup' => 1,
            'recipient_type' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('recipients') -> insert([
            'document' => 1001324203,
            'name' => 'JUN ESTEBAN CARRILLO RIAÑO',
            'requested_money' => 7451000,
            'education_level' => 7,
            'has_family_certificate' => 1,
            'has_past_semester_approbation' => 0,
            'has_education_signup' => 1,
            'recipient_type' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('recipients') -> insert([
            'document' => 1016094160,
            'name' => 'JUANITA NIÑO BAUTISTA',
            'requested_money' => 12656000,
            'education_level' => 7,
            'has_family_certificate' => 1,
            'has_past_semester_approbation' => 0,
            'has_education_signup' => 1,
            'recipient_type' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('recipients') -> insert([
            'document' => 1016105011,
            'name' => 'VALENTINA NIÑO BAUTISTA',
            'requested_money' => 12311000,
            'education_level' => 7,
            'has_family_certificate' => 1,
            'has_past_semester_approbation' => 0,
            'has_education_signup' => 1,
            'recipient_type' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('recipients') -> insert([
            'document' => 52411973,
            'name' => 'YENNY REYES GONZALEZ',
            'requested_money' => 3160100,
            'education_level' => 8,
            'has_education_signup' => 0,
            'has_past_semester_approbation' => 1,
            'recipient_type' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('recipients') -> insert([
            'document' => 1001344614,
            'name' => 'MARIA PAULA MALAGON VALERO',
            'requested_money' => 1867092,
            'education_level' => 4,
            'has_family_certificate' => 1,
            'has_past_semester_approbation' => 0,
            'has_education_signup' => 1,
            'recipient_type' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('recipients') -> insert([
            'document' => 1188215807,
            'name' => 'JUAN MARTIN ARISTIZABAL MARIN',
            'requested_money' => 4134000,
            'education_level' => 2,
            'has_family_certificate' => 1,
            'has_past_semester_approbation' => 0,
            'has_education_signup' => 1,
            'recipient_type' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('recipients') -> insert([
            'document' => 1001010890,
            'name' => 'MANUEL FELIPE NEIRA MARIN',
            'requested_money' => 2868090,
            'education_level' => 4,
            'has_family_certificate' => 1,
            'has_past_semester_approbation' => 0,
            'has_education_signup' => 1,
            'recipient_type' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('recipients') -> insert([
            'document' => 1007019711,
            'name' => 'MARIA ALEJANDRA ORREGO RIVERA',
            'requested_money' => 6226300,
            'education_level' => 7,
            'has_family_certificate' => 1,
            'has_past_semester_approbation' => 0,
            'has_education_signup' => 0,
            'recipient_type' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('recipients') -> insert([
            'document' => 1010046243,
            'name' => 'ANDREA MILENA RUIZ JIMENEZ',
            'requested_money' => 9048000,
            'education_level' => 7,
            'has_family_certificate' => 1,
            'has_past_semester_approbation' => 0,
            'has_education_signup' => 0,
            'recipient_type' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('recipients') -> insert([
            'document' => 1233908460,
            'name' => 'ANA MARIA GONZALEZ REINA',
            'requested_money' => 10180000,
            'education_level' => 7,
            'has_family_certificate' => 1,
            'has_past_semester_approbation' => 0,
            'has_education_signup' => 1,
            'recipient_type' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('recipients') -> insert([
            'document' => 1025700640,
            'name' => 'EDGAR FELIPE RODRIGUEZ CABREJO',
            'requested_money' => 1542000,
            'education_level' => 4,
            'has_family_certificate' => 1,
            'has_past_semester_approbation' => 0,
            'has_education_signup' => 1,
            'recipient_type' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('recipients') -> insert([
            'document' => 1025548570,
            'name' => 'JUAN SEBASTIAN RODRIGUEZ CABREJO',
            'requested_money' => 1392000,
            'education_level' => 2,
            'has_family_certificate' => 1,
            'has_past_semester_approbation' => 0,
            'has_education_signup' => 1,
            'recipient_type' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('recipients') -> insert([
            'document' => 1014269196,
            'name' => 'MARIA ALEJANDRA GUZMAN CUERVO',
            'requested_money' => 7978500,
            'education_level' => 7,
            'has_family_certificate' => 1,
            'has_past_semester_approbation' => 0,
            'has_education_signup' => 1,
            'recipient_type' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('recipients') -> insert([
            'document' => 1016606051,
            'name' => 'JOSEPH AVILA FAJARDO',
            'requested_money' => 1799994,
            'education_level' => 1,
            'has_family_certificate' => 1,
            'has_past_semester_approbation' => 0,
            'has_education_signup' => 1,
            'recipient_type' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('recipients') -> insert([
            'document' => 1032492551,
            'name' => 'DANIELA NATALIE ANDRADE CELIS',
            'requested_money' => 7184772,
            'education_level' => 7,
            'has_family_certificate' => 1,
            'has_past_semester_approbation' => 0,
            'has_education_signup' => 1,
            'recipient_type' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('recipients') -> insert([
            'document' => 1011201600,
            'name' => 'IVAN DARIO RIVAS MENA',
            'requested_money' => 1804800,
            'education_level' => 3,
            'has_family_certificate' => 1,
            'has_past_semester_approbation' => 0,
            'has_education_signup' => 1,
            'recipient_type' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('recipients') -> insert([
            'document' => 1014992731,
            'name' => 'SARA SOFIA PAEZ AYALA',
            'requested_money' => 4029600,
            'education_level' => 2,
            'has_family_certificate' => 1,
            'has_past_semester_approbation' => 0,
            'has_education_signup' => 1,
            'recipient_type' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('recipients') -> insert([
            'document' => 1233695448,
            'name' => 'NATHALIA LIZBETHCASTAÑEDA CORBA',
            'requested_money' => 2124094,
            'education_level' => 7,
            'has_family_certificate' => 0,
            'has_past_semester_approbation' => 0,
            'has_education_signup' => 1,
            'recipient_type' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('recipients') -> insert([
            'document' => 1019846021,
            'name' => 'FATIMA RIVERA OTALORA',
            'requested_money' => 4200000,
            'education_level' => 1,
            'has_family_certificate' => 1,
            'has_past_semester_approbation' => 0,
            'has_education_signup' => 1,
            'recipient_type' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('recipients') -> insert([
            'document' => 1014739803,
            'name' => 'ANDRES FELIPE PARDO ROMERO',
            'requested_money' => 3667746,
            'education_level' => 3,
            'has_family_certificate' => 1,
            'has_past_semester_approbation' => 0,
            'has_education_signup' => 1,
            'recipient_type' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('recipients') -> insert([
            'document' => 52930452,
            'name' => 'MAGALY ALVAREZ MAHECHA',
            'requested_money' => 2260000,
            'education_level' => 9,
            'has_education_signup' => 1,
            'has_past_semester_approbation' => 1,
            'recipient_type' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('recipients') -> insert([
            'document' => 1019844442,
            'name' => 'EMILIANO MESA ALVAREZ',
            'requested_money' => 3700764,
            'education_level' => 3,
            'has_family_certificate' => 1,
            'has_past_semester_approbation' => 0,
            'has_education_signup' => 1,
            'recipient_type' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('recipients') -> insert([
            'document' => 1014979782,
            'name' => 'TOMAS AYALA ARDILA',
            'requested_money' => 4716677,
            'education_level' => 3,
            'has_family_certificate' => 1,
            'has_past_semester_approbation' => 0,
            'has_education_signup' => 1,
            'recipient_type' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('recipients') -> insert([
            'document' => 1014483761,
            'name' => 'MANUEL HUMBERTO COCA PEÑA',
            'requested_money' => 1089000,
            'education_level' => 2,
            'has_family_certificate' => 1,
            'has_past_semester_approbation' => 0,
            'has_education_signup' => 1,
            'recipient_type' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('recipients') -> insert([
            'document' => 52519672,
            'name' => 'LUZ DARY SEGURA JIMENEZ',
            'requested_money' => 4167700,
            'education_level' => 9,
            'has_education_signup' => 1,
            'recipient_type' => 1,
            'has_past_semester_approbation' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('recipients') -> insert([
            'document' => 79789430,
            'name' => 'OMAR TORRES CAICEDO',
            'requested_money' => 1286550,
            'education_level' => 7,
            'has_family_certificate' => 0,
            'has_past_semester_approbation' => 0,
            'has_education_signup' => 1,
            'recipient_type' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('recipients') -> insert([
            'document' => 9396803,
            'name' => 'MANUEL IGNACIO SALAMANCA MERCHAN',
            'requested_money' => 3160100,
            'education_level' => 8,
            'has_education_signup' => 1,
            'recipient_type' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('recipients') -> insert([
            'document' => 1058354457,
            'name' => 'SARA ESTEFANIA SALAMANCA TORRES',
            'requested_money' => 1899000,
            'education_level' => 3,
            'has_family_certificate' => 1,
            'has_past_semester_approbation' => 0,
            'has_education_signup' => 1,
            'recipient_type' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('recipients') -> insert([
            'document' => 1220217331,
            'name' => 'JUAN SEBASTIAN VILLARAGA CLAVIJO',
            'requested_money' => 4145000,
            'education_level' => 1,
            'has_family_certificate' => 1,
            'has_past_semester_approbation' => 0,
            'has_education_signup' => 1,
            'recipient_type' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('recipients') -> insert([
            'document' => 79750237,
            'name' => 'IVAN DARIO VILLARAGA FLORES',
            'requested_money' => 5174000,
            'education_level' => 8,
            'has_family_certificate' => 1,
            'has_past_semester_approbation' => 0,
            'has_education_signup' => 1,
            'recipient_type' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('recipients') -> insert([
            'document' => 1034399592,
            'name' => 'DAVID FELIPE RUBIO NATERA',
            'requested_money' => 2783700,
            'education_level' => 3,
            'has_family_certificate' => 1,
            'has_past_semester_approbation' => 0,
            'has_education_signup' => 0,
            'recipient_type' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('recipients') -> insert([
            'document' => 1011217172,
            'name' => 'CRISTIAN CAMILO RUBIO NATERA',
            'requested_money' => 3166500,
            'education_level' => 2,
            'has_family_certificate' => 1,
            'has_past_semester_approbation' => 0,
            'has_education_signup' => 0,
            'recipient_type' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('recipients') -> insert([
            'document' => 79646970,
            'name' => 'LUIS FERNANDO OLARTE VALENCIA',
            'requested_money' => 1927716,
            'education_level' => 7,
            'has_family_certificate' => 1,
            'has_past_semester_approbation' => 0,
            'has_education_signup' => 1,
            'recipient_type' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('recipients') -> insert([
            'document' => 1021393597,
            'name' => 'SAMUEL ALEJANDRO OLARTE RODRIGUEZ',
            'requested_money' => 1782230,
            'education_level' => 3,
            'has_family_certificate' => 1,
            'has_past_semester_approbation' => 0,
            'has_education_signup' => 1,
            'recipient_type' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('recipients') -> insert([
            'document' => 1032492861,
            'name' => 'JEISON CAMILO ORJUELA LOPEZ',
            'requested_money' => 6515000,
            'education_level' => 7,
            'has_family_certificate' => 1,
            'has_past_semester_approbation' => 0,
            'has_education_signup' => 1,
            'recipient_type' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('recipients') -> insert([
            'document' => 1015076782,
            'name' => 'OSCAR ANDRES ESTUPIÑAN VELASCO',
            'requested_money' => 10482282,
            'education_level' => 2,
            'has_family_certificate' => 1,
            'has_past_semester_approbation' => 0,
            'has_education_signup' => 1,
            'recipient_type' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('recipients') -> insert([
            'document' => 1143374511,
            'name' => 'MARIO ALEJANDRO SANJUAN AGUALIMPIA',
            'requested_money' => 5663300,
            'education_level' => 8,
            'has_family_certificate' => 1,
            'has_past_semester_approbation' => 0,
            'has_education_signup' => 1,
            'recipient_type' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('recipients') -> insert([
            'document' => 1014296039,
            'name' => 'MARTHA SOFIA SANJUAN AGUALIMPIA',
            'requested_money' => 5938700,
            'education_level' => 7,
            'has_family_certificate' => 1,
            'has_past_semester_approbation' => 0,
            'has_education_signup' => 1,
            'recipient_type' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('recipients') -> insert([
            'document' => 79435633,
            'name' => 'JOSE JAVIER ACERO HERNANDEZ',
            'requested_money' => 0,
            'education_level' => 7,
            'has_education_signup' => 1,
            'recipient_type' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('recipients') -> insert([
            'document' => 52634105,
            'name' => 'ROSA RAMIREZ GONZALEZ',
            'requested_money' => 6632000,
            'education_level' => 8,
            'has_family_certificate' => 1,
            'has_past_semester_approbation' => 0,
            'has_education_signup' => 0,
            'recipient_type' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('recipients') -> insert([
            'document' => 1096215566,
            'name' => 'MARIA DEL MAR DE LA ROSA PINILLA',
            'requested_money' => 2081400,
            'education_level' => 2,
            'has_family_certificate' => 1,
            'has_past_semester_approbation' => 0,
            'has_education_signup' => 1,
            'recipient_type' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('recipients') -> insert([
            'document' => 1096235363,
            'name' => 'TALIANA DEL MAR DE LA ROSA PINILLA',
            'requested_money' => 2098200,
            'education_level' => 2,
            'has_family_certificate' => 1,
            'has_past_semester_approbation' => 0,
            'has_education_signup' => 1,
            'recipient_type' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('recipients') -> insert([
            'document' => 1052414882,
            'name' => 'ANA SOFIA SALAZAR ESTUPIÑAN',
            'requested_money' => 1472500,
            'education_level' => 1,
            'has_family_certificate' => 1,
            'has_past_semester_approbation' => 0,
            'has_education_signup' => 1,
            'recipient_type' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('recipients') -> insert([
            'document' => 1052394362,
            'name' => 'MARIA FERNANDA SALAZAR ESTUPIÑAN',
            'requested_money' => 1472500,
            'education_level' => 2,
            'has_family_certificate' => 1,
            'has_past_semester_approbation' => 0,
            'has_education_signup' => 1,
            'recipient_type' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('recipients') -> insert([
            'document' => 52172034,
            'name' => 'CAROLINA RECALDE VEGA',
            'requested_money' => 2083960,
            'education_level' => 7,
            'has_education_signup' => 1,
            'recipient_type' => 1,
            'has_past_semester_approbation' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('recipients') -> insert([
            'document' => 1188214571,
            'name' => 'NICOLLE JULIANA LORA HERNANDEZ',
            'requested_money' => 1494564,
            'education_level' => 2,
            'has_family_certificate' => 1,
            'has_past_semester_approbation' => 0,
            'has_education_signup' => 1,
            'recipient_type' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('recipients') -> insert([
            'document' => 1193130702,
            'name' => 'DAVID ESTEBAN APARICIO NAJAR',
            'requested_money' => 17968000,
            'education_level' => 7,
            'has_family_certificate' => 1,
            'has_past_semester_approbation' => 0,
            'has_education_signup' => 1,
            'recipient_type' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('recipients') -> insert([
            'document' => 1000270150,
            'name' => 'ALEJANDRO ALFONSO  BEJARANO DIAZ',
            'requested_money' => 6150000,
            'education_level' => 7,
            'has_family_certificate' => 1,
            'has_past_semester_approbation' => 0,
            'has_education_signup' => 1,
            'recipient_type' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('recipients') -> insert([
            'document' => 1014861375,
            'name' => 'MARIA CAROLINA BEJARANO DIAZ',
            'requested_money' => 3396048,
            'education_level' => 3,
            'has_family_certificate' => 1,
            'has_past_semester_approbation' => 0,
            'has_education_signup' => 1,
            'recipient_type' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('recipients') -> insert([
            'document' => 1026599461,
            'name' => 'PAULA ANDREA TOVAR AREVALO',
            'requested_money' => 5469000,
            'education_level' => 7,
            'has_family_certificate' => 1,
            'has_past_semester_approbation' => 0,
            'has_education_signup' => 1,
            'recipient_type' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('recipients') -> insert([
            'document' => 1003556735,
            'name' => 'WILLIAM FERNANDO TOVAR AREVALO',
            'requested_money' => 1706400,
            'education_level' => 4,
            'has_family_certificate' => 1,
            'has_past_semester_approbation' => 0,
            'has_education_signup' => 1,
            'recipient_type' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('recipients') -> insert([
            'document' => 1013671262,
            'name' => 'LINA MARIA CAMELO BAQUERO',
            'requested_money' => 2063081,
            'education_level' => 7,
            'has_family_certificate' => 1,
            'has_past_semester_approbation' => 0,
            'has_education_signup' => 0,
            'recipient_type' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('recipients') -> insert([
            'document' => 1013684740,
            'name' => 'DANNA VALENTINAMORENO MOLINA',
            'requested_money' => 12311000,
            'education_level' => 7,
            'has_family_certificate' => 1,
            'has_past_semester_approbation' => 0,
            'has_education_signup' => 1,
            'recipient_type' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('recipients') -> insert([
            'document' => 1014976870,
            'name' => 'SAMUEL LARA CASTRO',
            'requested_money' => 3865500,
            'education_level' => 4,
            'has_family_certificate' => 1,
            'has_past_semester_approbation' => 0,
            'has_education_signup' => 1,
            'recipient_type' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('recipients') -> insert([
            'document' => 1010238553,
            'name' => 'MARIA ALEJANDRA PINZON SALCEDO',
            'requested_money' => 2261000,
            'education_level' => 6,
            'has_family_certificate' => 1,
            'has_past_semester_approbation' => 0,
            'has_education_signup' => 1,
            'recipient_type' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('recipients') -> insert([
            'document' => 1019909708,
            'name' => 'ERIC SANTIAGO SOSA PEDRAZA',
            'requested_money' => 5440680,
            'education_level' => 2,
            'has_family_certificate' => 1,
            'has_past_semester_approbation' => 0,
            'has_education_signup' => 1,
            'recipient_type' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('recipients') -> insert([
            'document' => 79736107,
            'name' => 'JOSE ANTONIO REINA GUEVARA',
            'requested_money' => 5800000,
            'education_level' => 9,
            'has_education_signup' => 0,
            'recipient_type' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('recipients') -> insert([
            'document' => 52919008,
            'name' => 'DIANA CAROLINA SEPÚLVEDA',
            'requested_money' => 1850000,
            'education_level' => 7,
            'has_family_certificate' => 1,
            'has_past_semester_approbation' => 0,
            'has_education_signup' => 1,
            'recipient_type' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('recipients') -> insert([
            'document' => 1034782376,
            'name' => 'JULIAN ANDRES BERNAL JAIMES',
            'requested_money' => 4466940,
            'education_level' => 2,
            'has_family_certificate' => 1,
            'has_past_semester_approbation' => 0,
            'has_education_signup' => 1,
            'recipient_type' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('recipients') -> insert([
            'document' => 1014659031,
            'name' => 'LAURA SOFIA RODRIGUEZ RODRIGUEZ',
            'requested_money' => 1489000,
            'education_level' => 3,
            'has_family_certificate' => 1,
            'has_past_semester_approbation' => 0,
            'has_education_signup' => 1,
            'recipient_type' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('recipients') -> insert([
            'document' => 1014672520,
            'name' => 'DAVID JACOBO RODRIGUEZ RODRIGUEZ',
            'requested_money' => 1650000,
            'education_level' => 2,
            'has_family_certificate' => 1,
            'has_past_semester_approbation' => 0,
            'has_education_signup' => 1,
            'recipient_type' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('recipients') -> insert([
            'document' => 79911769,
            'name' => 'EDGAR BAUTISTA GAMBA',
            'requested_money' => 3839400,
            'education_level' => 8,
            'has_education_signup' => 1,
            'recipient_type' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('recipients') -> insert([
            'document' => 1034519038,
            'name' => 'JULIANA FLECHAS BARRERA',
            'requested_money' => 9960500,
            'education_level' => 2,
            'has_family_certificate' => 1,
            'has_past_semester_approbation' => 0,
            'has_education_signup' => 1,
            'recipient_type' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('recipients') -> insert([
            'document' => 1034516792,
            'name' => 'SANTIAGO FLECHAS BARRERA',
            'requested_money' => 4746000,
            'education_level' => 3,
            'has_family_certificate' => 1,
            'has_past_semester_approbation' => 0,
            'has_education_signup' => 1,
            'recipient_type' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('recipients') -> insert([
            'document' => 79239504,
            'name' => 'ALVARO JAIME VALDERRAMA CASTRO',
            'requested_money' => 2633400,
            'education_level' => 8,
            'has_education_signup' => 0,
            'recipient_type' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('recipients') -> insert([
            'document' => 1000288702,
            'name' => 'ANGELA MARIA VALDERRAMA NIETO',
            'requested_money' => 7690000,
            'education_level' => 7,
            'has_family_certificate' => 1,
            'has_past_semester_approbation' => 0,
            'has_education_signup' => 1,
            'recipient_type' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('recipients') -> insert([
            'document' => 1014857610,
            'name' => 'DAVID FERNANDO LOPEZ PEREZ',
            'requested_money' => 2783700,
            'education_level' => 4,
            'has_family_certificate' => 1,
            'has_past_semester_approbation' => 0,
            'has_education_signup' => 1,
            'recipient_type' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('recipients') -> insert([
            'document' => 1000272887,
            'name' => 'DANIEL EDUARDO LOPEZ PEREZ',
            'requested_money' => 5459000,
            'education_level' => 7,
            'has_family_certificate' => 1,
            'has_past_semester_approbation' => 0,
            'has_education_signup' => 1,
            'recipient_type' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('recipients') -> insert([
            'document' => 1019146563,
            'name' => 'JUAN SEBASTIAN JAIMES AGUDELO',
            'requested_money' => 8563000,
            'education_level' => 7,
            'has_family_certificate' => 1,
            'has_past_semester_approbation' => 0,
            'has_education_signup' => 1,
            'recipient_type' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('recipients') -> insert([
            'document' => 1031645990,
            'name' => 'LAURA CAMILA SOLIS AGUDELO',
            'requested_money' => 1868500,
            'education_level' => 3,
            'has_family_certificate' => 1,
            'has_past_semester_approbation' => 0,
            'has_education_signup' => 1,
            'recipient_type' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('recipients') -> insert([
            'document' => 51994187,
            'name' => 'JOHANA ALDANA CRANE',
            'requested_money' => 3758400,
            'education_level' => 8,
            'has_education_signup' => 1,
            'recipient_type' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('recipients') -> insert([
            'document' => 36456602,
            'name' => 'MYRIAM GEMADE OLAYA',
            'requested_money' => 2798600,
            'education_level' => 8,
            'has_education_signup' => 1,
            'recipient_type' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('recipients') -> insert([
            'document' => 80505509,
            'name' => 'RAÚL FERNANDO CAMARGO MEDINA',
            'requested_money' => 3758400,
            'education_level' => 8,
            'has_education_signup' => 1,
            'recipient_type' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('recipients') -> insert([
            'document' => 79598354,
            'name' => 'HECTOR HUMBERTO HERNANDEZ SERRANO',
            'requested_money' => 0,
            'education_level' => 8,
            'has_education_signup' => 1,
            'has_past_semester_approbation' => 1,
            'recipient_type' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('recipients') -> insert([
            'document' => 1233693582,
            'name' => 'JUANA VALENTINA ROJAS ROJAS',
            'requested_money' => 5172750,
            'education_level' => 7,
            'has_family_certificate' => 1,
            'has_past_semester_approbation' => 0,
            'has_education_signup' => 1,
            'recipient_type' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('recipients') -> insert([
            'document' => 52268223,
            'name' => 'MARÍA FERNANDA POLANIA CORREA',
            'requested_money' => 8670000,
            'education_level' => 9,
            'has_education_signup' => 1,
            'recipient_type' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('recipients') -> insert([
            'document' => 1000612099,
            'name' => 'DANNA SOFIA FORERO LOPEZ',
            'requested_money' => 5385990,
            'education_level' => 4,
            'has_family_certificate' => 1,
            'has_past_semester_approbation' => 0,
            'has_education_signup' => 1,
            'recipient_type' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('recipients') -> insert([
            'document' => 1013263815,
            'name' => 'GERÓNIMO FORERO LOPÉZ',
            'requested_money' => 4862950,
            'education_level' => 3,
            'has_family_certificate' => 1,
            'has_past_semester_approbation' => 0,
            'has_education_signup' => 1,
            'recipient_type' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('recipients') -> insert([
            'document' => 1010000766,
            'name' => 'MARIA CAMILA RUIZ ORTIZ',
            'requested_money' => 4699100,
            'education_level' => 7,
            'has_family_certificate' => 1,
            'has_past_semester_approbation' => 0,
            'has_education_signup' => 1,
            'recipient_type' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('recipients') -> insert([
            'document' => 1010962353,
            'name' => 'JUAN DAVID POLONIA RAMIREZ',
            'requested_money' => 2016000,
            'education_level' => 3,
            'has_family_certificate' => 1,
            'has_past_semester_approbation' => 0,
            'has_education_signup' => 1,
            'recipient_type' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('recipients') -> insert([
            'document' => 1000806607,
            'name' => 'ESTEBAN RUSINQUE BARRERA',
            'requested_money' => 5319000,
            'education_level' => 7,
            'has_family_certificate' => 1,
            'has_past_semester_approbation' => 0,
            'has_education_signup' => 1,
            'recipient_type' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('recipients') -> insert([
            'document' => 1014979868,
            'name' => 'PAULA RUSINQUE BARRERA',
            'requested_money' => 2713854,
            'education_level' => 3,
            'has_family_certificate' => 1,
            'has_past_semester_approbation' => 0,
            'has_education_signup' => 1,
            'recipient_type' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('recipients') -> insert([
            'document' => 1000377553,
            'name' => 'LINA GABRIELA ROMERO VARGAS',
            'requested_money' => 7171000,
            'education_level' => 7,
            'has_family_certificate' => 1,
            'has_past_semester_approbation' => 0,
            'has_education_signup' => 0,
            'recipient_type' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('recipients') -> insert([
            'document' => 1015470743,
            'name' => 'NICOLAS FERNANDO VELA BAQUERO',
            'requested_money' => 7531000,
            'education_level' => 7,
            'has_family_certificate' => 0,
            'has_past_semester_approbation' => 0,
            'has_education_signup' => 1,
            'recipient_type' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('recipients') -> insert([
            'document' => 1013011804,
            'name' => 'ÁNGEL SANTIAGO DUSSÁN GÓMEZ',
            'requested_money' => 1468200,
            'education_level' => 2,
            'has_family_certificate' => 1,
            'has_past_semester_approbation' => 0,
            'has_education_signup' => 1,
            'recipient_type' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('recipients') -> insert([
            'document' => 1013658048,
            'name' => 'CARLOS DANIEL HERNANDEZ MONTIEL',
            'requested_money' => 6350700,
            'education_level' => 8,
            'has_family_certificate' => 1,
            'has_past_semester_approbation' => 0,
            'has_education_signup' => 0,
            'recipient_type' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('recipients') -> insert([
            'document' => 1013259585,
            'name' => 'SANTIAGO PINZÓN CORDOBA',
            'requested_money' => 2784000,
            'education_level' => 3,
            'has_family_certificate' => 1,
            'has_past_semester_approbation' => 0,
            'has_education_signup' => 1,
            'recipient_type' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('recipients') -> insert([
            'document' => 51702163,
            'name' => 'MARTHA LUCIA GOMEZ MONTES',
            'requested_money' => 4185000,
            'education_level' => 8,
            'has_education_signup' => 1,
            'recipient_type' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('recipients') -> insert([
            'document' => 1022408315,
            'name' => 'DANIEL RICARDO ARIAS GOMEZ',
            'requested_money' => 1662860,
            'education_level' => 7,
            'has_family_certificate' => 1,
            'has_past_semester_approbation' => 0,
            'has_education_signup' => 1,
            'recipient_type' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('recipients') -> insert([
            'document' => 60352529,
            'name' => 'LUZ MARYORI VARGAS ROMERO',
            'requested_money' => 6550000,
            'education_level' => 9,
            'has_education_signup' => 1,
            'recipient_type' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('recipients') -> insert([
            'document' => 1016110568,
            'name' => 'MARLY JOSE CARVAJAL VARGAS',
            'requested_money' => 10334000,
            'education_level' => 7,
            'has_family_certificate' => 1,
            'has_past_semester_approbation' => 0,
            'has_education_signup' => 1,
            'recipient_type' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('recipients') -> insert([
            'document' => 1030659886,
            'name' => 'LAURA KATHERINE SAAVEDRA CHAVARRO',
            'requested_money' => 11947000,
            'education_level' => 7,
            'has_family_certificate' => 1,
            'has_past_semester_approbation' => 0,
            'has_education_signup' => 0,
            'recipient_type' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('recipients') -> insert([
            'document' => 34613490,
            'name' => 'LADY MORENO CIFUENTES',
            'requested_money' => 6417000,
            'education_level' => 9,
            'has_education_signup' => 1,
            'recipient_type' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('recipients') -> insert([
            'document' => 1019907805,
            'name' => 'MARIA JOSE ZAMUDIO CHAVES',
            'requested_money' => 5607470,
            'education_level' => 2,
            'has_family_certificate' => 1,
            'has_past_semester_approbation' => 0,
            'has_education_signup' => 1,
            'recipient_type' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('recipients') -> insert([
            'document' => 1014857437,
            'name' => 'LAURA JULIANA VARGAS QUINTERO',
            'requested_money' => 0,
            'education_level' => 2,
            'has_family_certificate' => 1,
            'has_past_semester_approbation' => 0,
            'has_education_signup' => 1,
            'recipient_type' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('recipients') -> insert([
            'document' => 1005231357,
            'name' => 'ANDRES STIVEN OBREGON AFRICANO',
            'requested_money' => 0,
            'education_level' => 2,
            'has_family_certificate' => 1,
            'has_past_semester_approbation' => 0,
            'has_education_signup' => 1,
            'recipient_type' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('recipients') -> insert([
            'document' => 1141525990,
            'name' => 'SARA ISABELA MALDONADO OBREGON',
            'requested_money' => 0,
            'education_level' => 2,
            'has_family_certificate' => 1,
            'has_past_semester_approbation' => 0,
            'has_education_signup' => 1,
            'recipient_type' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('recipients') -> insert([
            'document' => 109942234,
            'name' => 'MARIA JOSE PINZON DIAS',
            'requested_money' => 0,
            'education_level' => 2,
            'has_family_certificate' => 1,
            'has_past_semester_approbation' => 0,
            'has_education_signup' => 0,
            'recipient_type' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('recipients') -> insert([
            'document' => 1121335679,
            'name' => 'JESUS DAVID GAITAN GARAY',
            'requested_money' => 0,
            'education_level' => 2,
            'has_family_certificate' => 1,
            'has_past_semester_approbation' => 0,
            'has_education_signup' => 1,
            'recipient_type' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('recipients') -> insert([
            'document' => 1010043523,
            'name' => 'ALISSON TATIANA QUIROGA VENEGAS',
            'requested_money' => 0,
            'education_level' => 7,
            'has_family_certificate' => 1,
            'has_past_semester_approbation' => 0,
            'has_education_signup' => 0,
            'recipient_type' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('recipients') -> insert([
            'document' => 26323779,
            'name' => 'CAMILA ISABEL WILQUEN GIL',
            'requested_money' => 13710000,
            'education_level' => 7,
            'has_family_certificate' => 1,
            'has_past_semester_approbation' => 0,
            'has_education_signup' => 1,
            'recipient_type' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('recipients') -> insert([
            'document' => 1014889944,
            'name' => 'JUANITA JIMENEZ RIVERA',
            'requested_money' => 0,
            'education_level' => 1,
            'has_family_certificate' => 1,
            'has_past_semester_approbation' => 0,
            'has_education_signup' => 1,
            'recipient_type' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('recipients') -> insert([
            'document' => 1000586876,
            'name' => 'MARIA FERNANDA RODRIGUEZ',
            'requested_money' => 0,
            'education_level' => 7,
            'has_family_certificate' => 1,
            'has_past_semester_approbation' => 0,
            'has_education_signup' => 0,
            'recipient_type' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('recipients') -> insert([
            'document' => 28566983,
            'name' => 'YORDILEY TORRES HERRERA',
            'requested_money' => 4526400,
            'education_level' => 9,
            'has_education_signup' => 1,
            'has_past_semester_approbation' => 1,
            'recipient_type' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('recipients') -> insert([
            'document' => 1032508738,
            'name' => 'ALEJANDRA BETANCOUR GUEVARA',
            'requested_money' => 13247000,
            'education_level' => 7,
            'has_family_certificate' => 1,
            'has_past_semester_approbation' => 0,
            'has_education_signup' => 1,
            'recipient_type' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('recipients') -> insert([
            'document' => 1010847402,
            'name' => 'ANGELA SOFIA BLANCO TORRES',
            'requested_money' => 1525000,
            'education_level' => 1,
            'has_family_certificate' => 0,
            'has_past_semester_approbation' => 0,
            'has_education_signup' => 1,
            'recipient_type' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('recipients') -> insert([
            'document' => 1027285479,
            'name' => 'JUAN SEBASTIAN CAMARGO GARCIA',
            'requested_money' => 0,
            'education_level' => 2,
            'has_family_certificate' => 1,
            'has_past_semester_approbation' => 0,
            'has_education_signup' => 1,
            'recipient_type' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('recipients') -> insert([
            'document' => 52118473,
            'name' => 'JACQUELINE GARAVITO MARIÑO',
            'requested_money' => 0,
            'education_level' => 8,
            'has_education_signup' => 0,
            'has_past_semester_approbation' => 0,
            'recipient_type' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('recipients') -> insert([
            'document' => 1019906618,
            'name' => 'PABLO FERNANDEZ DE SOTO ARRAZOLA',
            'requested_money' => 0,
            'education_level' => 2,
            'has_family_certificate' => 1,
            'has_past_semester_approbation' => 0,
            'has_education_signup' => 0,
            'recipient_type' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('recipients') -> insert([
            'document' => 1006008267,
            'name' => 'FRANK FELIPE COBO SALAZAR',
            'requested_money' => 8770000,
            'education_level' => 7,
            'has_family_certificate' => 1,
            'has_past_semester_approbation' => 0,
            'has_education_signup' => 1,
            'recipient_type' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('recipients') -> insert([
            'document' => 94390226,
            'name' => 'FRANCIS COBO GARCIA',
            'requested_money' => 4550000,
            'education_level' => 8,
            'has_family_certificate' => 1,
            'has_past_semester_approbation' => 0,
            'has_education_signup' => 1,
            'recipient_type' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('recipients') -> insert([
            'document' => 1001167218,
            'name' => 'JUANITA VALENTINA CORREA ORTIZ',
            'requested_money' => 4331342,
            'education_level' => 7,
            'has_family_certificate' => 1,
            'has_past_semester_approbation' => 0,
            'has_education_signup' => 1,
            'recipient_type' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('recipients') -> insert([
            'document' => 1031644274,
            'name' => 'SAMUEL DAVID GRANADOS OLMOS',
            'requested_money' => 0,
            'education_level' => 12,
            'has_family_certificate' => 0,
            'has_past_semester_approbation' => 0,
            'has_education_signup' => 0,
            'recipient_type' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('recipients') -> insert([
            'document' => 65738385,
            'name' => 'OLGA PATRICIA CARDENAS GUZMAN',
            'requested_money' => 4740100,
            'education_level' => 8,
            'has_education_signup' => 0,
            'recipient_type' => 1,
            'has_past_semester_approbation' => 0,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('recipients') -> insert([
            'document' => 52220883,
            'name' => 'FEBE LUCIA RUIZ TIRADO',
            'requested_money' => 2268400,
            'education_level' => 9,
            'has_education_signup' => 1,
            'recipient_type' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('recipients') -> insert([
            'document' => 1098825325,
            'name' => 'GABRIELA MARQUEZ MERCADO',
            'requested_money' => 7420000,
            'education_level' => 7,
            'has_family_certificate' => 1,
            'has_past_semester_approbation' => 0,
            'has_education_signup' => 1,
            'recipient_type' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('recipients') -> insert([
            'document' => 1000077147,
            'name' => 'JULIANA MARQUEZ BUSTOS',
            'requested_money' => 3815343,
            'education_level' => 7,
            'has_family_certificate' => 1,
            'has_past_semester_approbation' => 0,
            'has_education_signup' => 1,
            'recipient_type' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('recipients') -> insert([
            'document' => 1011320375,
            'name' => 'LAURA CAMILA JURADO LOZANO',
            'requested_money' => 0,
            'education_level' => 3,
            'has_family_certificate' => 1,
            'has_past_semester_approbation' => 0,
            'has_education_signup' => 1,
            'recipient_type' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('recipients') -> insert([
            'document' => 102284806,
            'name' => 'SAMUEL ALEJANDRO RIVADENEIRA SILVA',
            'requested_money' => 0,
            'education_level' => 2,
            'has_family_certificate' => 0,
            'has_past_semester_approbation' => 0,
            'has_education_signup' => 1,
            'recipient_type' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('recipients') -> insert([
            'document' => 1027288297,
            'name' => 'MARIA JULIANA RIVADENEIRA SILVA',
            'requested_money' => 0,
            'education_level' => 2,
            'has_family_certificate' => 0,
            'has_past_semester_approbation' => 0,
            'has_education_signup' => 1,
            'recipient_type' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('recipients') -> insert([
            'document' => 101950606,
            'name' => 'SOFIA SOSA ACOSTA',
            'requested_money' => 4464269,
            'education_level' => 7,
            'has_family_certificate' => 0,
            'has_past_semester_approbation' => 0,
            'has_education_signup' => 1,
            'recipient_type' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('recipients') -> insert([
            'document' => 1020824115,
            'name' => 'MARIA JOSE STAND GOMEZ',
            'requested_money' => 10982000,
            'education_level' => 7,
            'has_family_certificate' => 1,
            'has_past_semester_approbation' => 0,
            'has_education_signup' => 1,
            'recipient_type' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('recipients') -> insert([
            'document' => 1057987201,
            'name' => 'PAULA CATALINA CASTRO VARGAS',
            'requested_money' => 2051810,
            'education_level' => 3,
            'has_family_certificate' => 1,
            'has_past_semester_approbation' => 0,
            'has_education_signup' => 1,
            'recipient_type' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('recipients') -> insert([
            'document' => 1000616192,
            'name' => 'LUKAS VALEBTINA RIOS PAEZ',
            'requested_money' => 1272161,
            'education_level' => 7,
            'has_family_certificate' => 1,
            'has_past_semester_approbation' => 0,
            'has_education_signup' => 1,
            'recipient_type' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('recipients') -> insert([
            'document' => 19453919,
            'name' => 'JAIRO MOSQUERA MENA',
            'requested_money' => 3160100,
            'education_level' => 8,
            'has_education_signup' => 0,
            'recipient_type' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('recipients') -> insert([
            'document' => 1123511369,
            'name' => 'MERCY ALEJANDRA RIVEROS LIZ',
            'requested_money' => 5186500,
            'education_level' => 9,
            'has_family_certificate' => 1,
            'has_past_semester_approbation' => 0,
            'has_education_signup' => 0,
            'recipient_type' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('recipients') -> insert([
            'document' => 52361029,
            'name' => 'JADY OLIVA CABALLERO CRUZ',
            'requested_money' => 9216000,
            'education_level' => 9,
            'has_education_signup' => 1,
            'recipient_type' => 1,
            'has_past_semester_approbation' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('recipients') -> insert([
            'document' => 1027151284,
            'name' => 'JUAN DAVID MARTINEZ CABALLERO',
            'requested_money' => 2447710,
            'education_level' => 3,
            'has_family_certificate' => 1,
            'has_past_semester_approbation' => 0,
            'has_education_signup' => 1,
            'recipient_type' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('recipients') -> insert([
            'document' => 1007423171,
            'name' => 'ANDRES FELIPE BEDOYA CONDE',
            'requested_money' => 4068916,
            'education_level' => 7,
            'has_family_certificate' => 1,
            'has_past_semester_approbation' => 0,
            'has_education_signup' => 1,
            'recipient_type' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('recipients') -> insert([
            'document' => 1013679545,
            'name' => 'DAVID ENRIQUE SALDAÑA MEDINA',
            'requested_money' => 9611700,
            'education_level' => 7,
            'has_family_certificate' => 1,
            'has_past_semester_approbation' => 0,
            'has_education_signup' => 1,
            'recipient_type' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('recipients') -> insert([
            'document' => 1193448351,
            'name' => 'JUAN PABLO MARTINEZ MORENO',
            'requested_money' => 3906991,
            'education_level' => 7,
            'has_family_certificate' => 1,
            'has_past_semester_approbation' => 0,
            'has_education_signup' => 1,
            'recipient_type' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('recipients') -> insert([
            'document' => 1014206266,
            'name' => 'NURY MARCELA TOCARRUNCHO VIASUS',
            'requested_money' => 961600,
            'education_level' => 7,
            'has_education_signup' => 1,
            'recipient_type' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('recipients') -> insert([
            'document' => 4071207,
            'name' => 'FABIO ERNESTO PATIÑO CARO',
            'requested_money' => 3606300,
            'education_level' => 9,
            'has_education_signup' => 1,
            'has_past_semester_approbation' => 1,
            'recipient_type' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('recipients') -> insert([
            'document' => 1013262027,
            'name' => 'DANNA SOFIA PATIÑO VALCARCEL',
            'requested_money' => 0,
            'education_level' => 3,
            'has_family_certificate' => 1,
            'has_past_semester_approbation' => 0,
            'has_education_signup' => 1,
            'recipient_type' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('recipients') -> insert([
            'document' => 101325467,
            'name' => 'VICTORIA RUIZ CORTES',
            'requested_money' => 0,
            'education_level' => 1,
            'has_family_certificate' => 1,
            'has_past_semester_approbation' => 0,
            'has_education_signup' => 1,
            'recipient_type' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('recipients') -> insert([
            'document' => 1007558179,
            'name' => 'CAMILA LARROTTA TORRES',
            'requested_money' => 2560600,
            'education_level' => 3,
            'has_family_certificate' => 1,
            'has_past_semester_approbation' => 0,
            'has_education_signup' => 1,
            'recipient_type' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('recipients') -> insert([
            'document' => 37898086,
            'name' => 'ANA MILENA GUALDRON DIAZ',
            'requested_money' => 10944000,
            'education_level' => 9,
            'has_education_signup' => 1,
            'recipient_type' => 1,
            'has_past_semester_approbation' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('recipients') -> insert([
            'document' => 1023394387,
            'name' => 'PAULA SOFIA CASTAÑEDA ROJAS',
            'requested_money' => 900000,
            'education_level' => 2,
            'has_family_certificate' => 0,
            'has_past_semester_approbation' => 0,
            'has_education_signup' => 1,
            'recipient_type' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('recipients') -> insert([
            'document' => 1025151498,
            'name' => 'GABRIEL ISAAC CASTAÑEDA ROJAS',
            'requested_money' => 925000,
            'education_level' => 1,
            'has_family_certificate' => 1,
            'has_past_semester_approbation' => 0,
            'has_education_signup' => 1,
            'recipient_type' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('recipients') -> insert([
            'document' => 1000335754,
            'name' => 'SEBASTIAN MORENO ROJAS',
            'requested_money' => 0,
            'education_level' => 7,
            'has_family_certificate' => 1,
            'has_past_semester_approbation' => 0,
            'has_education_signup' => 1,
            'recipient_type' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('recipients') -> insert([
            'document' => 13895205,
            'name' => 'ERNESTO FONTECHA FONTECHA',
            'requested_money' => 4389015,
            'education_level' => 9,
            'has_education_signup' => 1,
            'has_past_semester_approbation' => 1,
            'recipient_type' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('recipients') -> insert([
            'document' => 1000940624,
            'name' => 'IRENE ANGELICA FONTECHA OBANDO',
            'requested_money' => 0,
            'education_level' => 3,
            'has_family_certificate' => 1,
            'has_past_semester_approbation' => 0,
            'has_education_signup' => 1,
            'recipient_type' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('recipients') -> insert([
            'document' => 10284959921,
            'name' => 'JHONATAN ALEJANDRO GONZALEZ GOMEZ',
            'requested_money' => 0,
            'education_level' => 2,
            'has_family_certificate' => 0,
            'has_past_semester_approbation' => 0,
            'has_education_signup' => 1,
            'recipient_type' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('recipients') -> insert([
            'document' => 52021366,
            'name' => 'EDNA PATRICIA ORTEGA CORDERO',
            'requested_money' => 3357520,
            'education_level' => 7,
            'has_education_signup' => 1,
            'recipient_type' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('recipients') -> insert([
            'document' => 1025537749,
            'name' => 'SAMUEL ANDRES AVILES LEON',
            'requested_money' => 0,
            'education_level' => 3,
            'has_family_certificate' => 1,
            'has_past_semester_approbation' => 0,
            'has_education_signup' => 1,
            'recipient_type' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('recipients') -> insert([
            'document' => 1015458307,
            'name' => 'VALERIA CAMILA FONSECA FARFAN',
            'requested_money' => 6206500,
            'education_level' => 7,
            'has_family_certificate' => 1,
            'has_past_semester_approbation' => 0,
            'has_education_signup' => 1,
            'recipient_type' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('recipients') -> insert([
            'document' => 1193075374,
            'name' => 'LAURA MARCELA VARGAS BORNACHERA',
            'requested_money' => 6219000,
            'education_level' => 7,
            'has_family_certificate' => 1,
            'has_past_semester_approbation' => 0,
            'has_education_signup' => 1,
            'recipient_type' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('recipients') -> insert([
            'document' => 1032491625,
            'name' => 'ANDRES EDUARDO MONTES AGUDELO',
            'requested_money' => 2975882,
            'education_level' => 7,
            'has_family_certificate' => 1,
            'has_past_semester_approbation' => 0,
            'has_education_signup' => 1,
            'recipient_type' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('recipients') -> insert([
            'document' => 1193571347,
            'name' => 'JUAN FELIPE PEREZ VILLANUEVA',
            'requested_money' => 299000,
            'education_level' => 3,
            'has_family_certificate' => 1,
            'has_past_semester_approbation' => 0,
            'has_education_signup' => 1,
            'recipient_type' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('recipients') -> insert([
            'document' => 1030677487,
            'name' => 'ANDREA CAMILA RIAÑO ORTIZ',
            'requested_money' => 2673300,
            'education_level' => 5,
            'has_family_certificate' => 1,
            'has_past_semester_approbation' => 0,
            'has_education_signup' => 1,
            'recipient_type' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('recipients') -> insert([
            'document' => 1000836416,
            'name' => 'ANDRES RUEDA LOPEZ',
            'requested_money' => 17968000,
            'education_level' => 7,
            'has_family_certificate' => 0,
            'has_past_semester_approbation' => 0,
            'has_education_signup' => 1,
            'recipient_type' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('recipients') -> insert([
            'document' => 1000596940,
            'name' => 'JUANITA FONSECA FARFAN',
            'requested_money' => 10239000,
            'education_level' => 7,
            'has_family_certificate' => 1,
            'has_past_semester_approbation' => 0,
            'has_education_signup' => 1,
            'recipient_type' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('recipients') -> insert([
            'document' => 1032486115,
            'name' => 'DANIELA ANDREA VARGAS DELGADO',
            'requested_money' => 3160100,
            'education_level' => 8,
            'has_family_certificate' => 0,
            'has_past_semester_approbation' => 0,
            'has_education_signup' => 1,
            'recipient_type' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('recipients') -> insert([
            'document' => 1085307404,
            'name' => 'DIANA LEIDY LOPEZ QUENORAN',
            'requested_money' => 8538400,
            'education_level' => 9,
            'has_education_signup' => 1,
            'recipient_type' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('recipients') -> insert([
            'document' => 79705785,
            'name' => 'HUGO YEZID GORDILLO GÓNGORA',
            'requested_money' => 3496000,
            'education_level' => 8,
            'has_education_signup' => 1,
            'recipient_type' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('recipients') -> insert([
            'document' => 1018497695,
            'name' => 'JUAN PABLO RUEDA LOPEZ',
            'requested_money' => 13191000,
            'education_level' => 7,
            'has_family_certificate' => 0,
            'has_past_semester_approbation' => 0,
            'has_education_signup' => 1,
            'recipient_type' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('recipients') -> insert([
            'document' => 1010125335,
            'name' => 'MARA ALEJANDRA CALDERON DIAZ ',
            'requested_money' => 12450000,
            'education_level' => 7,
            'has_family_certificate' => 1,
            'has_past_semester_approbation' => 0,
            'has_education_signup' => 1,
            'recipient_type' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('recipients') -> insert([
            'document' => 1013014768,
            'name' => 'VALENTINA IBAÑEZ GOMEZ ',
            'requested_money' => 0,
            'education_level' => 2,
            'has_family_certificate' => 0,
            'has_past_semester_approbation' => 0,
            'has_education_signup' => 1,
            'recipient_type' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('recipients') -> insert([
            'document' => 1000502388,
            'name' => 'MARIA ALEJANDRA IBAÑEZ CHUDT',
            'requested_money' => 2475979,
            'education_level' => 7,
            'has_family_certificate' => 0,
            'has_past_semester_approbation' => 0,
            'has_education_signup' => 0,
            'recipient_type' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('recipients') -> insert([
            'document' => 1015473576,
            'name' => 'VALERIA LINARES BELTRAN ',
            'requested_money' => 8650000,
            'education_level' => 7,
            'has_family_certificate' => 1,
            'has_past_semester_approbation' => 0,
            'has_education_signup' => 1,
            'recipient_type' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('recipients') -> insert([
            'document' => 1001197923,
            'name' => 'LINARES BELTRAN MARIA SALOME ',
            'requested_money' => 6153606,
            'education_level' => 7,
            'has_family_certificate' => 1,
            'has_past_semester_approbation' => 0,
            'has_education_signup' => 1,
            'recipient_type' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('recipients') -> insert([
            'document' => 1025065822,
            'name' => 'SARA CRUZ MENDOZA',
            'requested_money' => 0,
            'education_level' => 2,
            'has_family_certificate' => 1,
            'has_past_semester_approbation' => 0,
            'has_education_signup' => 1,
            'recipient_type' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('recipients') -> insert([
            'document' => 1023369520,
            'name' => 'JUAN DAVID VELASQUEZ CASTRO',
            'requested_money' => 0,
            'education_level' => 3,
            'has_family_certificate' => 1,
            'has_past_semester_approbation' => 0,
            'has_education_signup' => 1,
            'recipient_type' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('recipients') -> insert([
            'document' => 1022440626,
            'name' => 'SARA LEIRE LEURO PEDRAZA',
            'requested_money' => 17968000,
            'education_level' => 7,
            'has_family_certificate' => 1,
            'has_past_semester_approbation' => 0,
            'has_education_signup' => 1,
            'recipient_type' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('recipients') -> insert([
            'document' => 40026100,
            'name' => 'ANA FRANCISCA USSA ALVAREZ',
            'requested_money' => 3160100,
            'education_level' => 8,
            'has_education_signup' => 1,
            'recipient_type' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('recipients') -> insert([
            'document' => 52430738,
            'name' => 'YULITZA MAILETH FUENMAYOR SIERRA',
            'requested_money' => 2798600,
            'education_level' => 8,
            'has_education_signup' => 1,
            'recipient_type' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('recipients') -> insert([
            'document' => 1000589116,
            'name' => 'ERWIN DAVID ALVAREZ FUENMAYOR',
            'requested_money' => 6534000,
            'education_level' => 7,
            'has_family_certificate' => 1,
            'has_past_semester_approbation' => 0,
            'has_education_signup' => 1,
            'recipient_type' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('recipients') -> insert([
            'document' => 52009765,
            'name' => 'ADRIANA ANGELICA BORDA RODRIGUEZ',
            'requested_money' => 3994200,
            'education_level' => 8,
            'has_education_signup' => 1,
            'has_past_semester_approbation' => 1,
            'recipient_type' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('recipients') -> insert([
            'document' => 79444529,
            'name' => 'ERNESTO JOSE CARABALLO ZAMUDIO',
            'requested_money' => 3396400,
            'education_level' => 8,
            'has_family_certificate' => 0,
            'has_past_semester_approbation' => 0,
            'has_education_signup' => 1,
            'recipient_type' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('recipients') -> insert([
            'document' => 1022154643,
            'name' => 'SARAH ISABEL ABDALA SERNA ',
            'requested_money' => 0,
            'education_level' => 2,
            'has_family_certificate' => 1,
            'has_past_semester_approbation' => 0,
            'has_education_signup' => 1,
            'recipient_type' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('recipients') -> insert([
            'document' => 1019765779,
            'name' => 'SOFIA CAMACHO ZARATE ',
            'requested_money' => 0,
            'education_level' => 3,
            'has_family_certificate' => 1,
            'has_past_semester_approbation' => 0,
            'has_education_signup' => 1,
            'recipient_type' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('recipients') -> insert([
            'document' => 1016962751,
            'name' => 'SAMANTA JUNCO MORALES ',
            'requested_money' => 0,
            'education_level' => 1,
            'has_family_certificate' => 1,
            'has_past_semester_approbation' => 0,
            'has_education_signup' => 1,
            'recipient_type' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('recipients') -> insert([
            'document' => 1010244428,
            'name' => 'LAURA DANIELA RODRIGUEZ  MOLINA',
            'requested_money' => 5931000,
            'education_level' => 7,
            'has_family_certificate' => 1,
            'has_past_semester_approbation' => 0,
            'has_education_signup' => 1,
            'recipient_type' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('recipients') -> insert([
            'document' => 1013132525,
            'name' => 'JUAN JOSE CASTRO SOSA',
            'requested_money' => 0,
            'education_level' => 2,
            'has_family_certificate' => 1,
            'has_past_semester_approbation' => 0,
            'has_education_signup' => 1,
            'recipient_type' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('recipients') -> insert([
            'document' => 1011204987,
            'name' => 'MARIANA ESCOBAR BARRERA',
            'requested_money' => 2246860,
            'education_level' => 2,
            'has_family_certificate' => 1,
            'has_past_semester_approbation' => 0,
            'has_education_signup' => 1,
            'recipient_type' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

    }

}
