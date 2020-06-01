<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class EmployeesSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {

        DB::table('employees') -> insert([
            'document' => '39650499',
            'name' => 'GLORIA STELLA PATAQUIVA SALAMANCA',
            'performance_score' => 0,
            'has_exceeded_applications' => 0,
            'employment_date' => '2018-10-01 00:00:00',
            'wage' => '1842722',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 0
        ]);

        DB::table('employees') -> insert([
            'document' => '6767058',
            'name' => 'ISRAEL PERILLA VACA',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '1995-04-20 00:00:00',
            'wage' => '6148245',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '79613399',
            'name' => 'JORGE HERNAN FRANCO GALLEGO',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '1995-09-11 00:00:00',
            'wage' => '6148245',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '17317338',
            'name' => 'RENAN CALDERON MORALES',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '1997-03-01 00:00:00',
            'wage' => '6148245',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '40188561',
            'name' => 'MARIEN ZORAIDA RIVERA GUZMAN',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '2018-09-03 00:00:00',
            'wage' => '5334460',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 0
        ]);

        DB::table('employees') -> insert([
            'document' => '79640912',
            'name' => 'CARLOS YUNIOR POLANIA ZAMORA',
            'performance_score' => 0,
            'has_exceeded_applications' => 0,
            'employment_date' => '2014-06-03 00:00:00',
            'wage' => '5334460',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '51994187',
            'name' => 'JOHANA ALDANA CRANE',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '2005-03-18 00:00:00',
            'wage' => '5334460',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '42127078',
            'name' => 'OLGA LILIANA CANO ALVARÁN',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '2010-02-16 00:00:00',
            'wage' => '5334460',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 0
        ]);

        DB::table('employees') -> insert([
            'document' => '80758078',
            'name' => 'HECTOR JAVIER CORTES SUAREZ',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '2014-05-12 00:00:00',
            'wage' => '5334460',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 0
        ]);

        DB::table('employees') -> insert([
            'document' => '11348063',
            'name' => 'FREDY PEÑUELA PINTO',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '2008-12-16 00:00:00',
            'wage' => '5334460',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '79542516',
            'name' => 'ALBERTO ZAMBRANO GUERRERO',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '2020-01-09 00:00:00',
            'wage' => '5334460',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '43203670',
            'name' => 'ELISA GABRIELA BENAVIDES MONTENEGRO',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '2018-10-01 00:00:00',
            'wage' => '5334460',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 0
        ]);

        DB::table('employees') -> insert([
            'document' => '51837704',
            'name' => 'CLARA HELENA AGUDELO QUINTERO',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '1995-10-19 00:00:00',
            'wage' => '5334460',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '79625589',
            'name' => 'MANUEL ANTONIO CRUZ PINEDA',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '1995-08-09 00:00:00',
            'wage' => '4953304',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 0
        ]);

        DB::table('employees') -> insert([
            'document' => '20352576',
            'name' => 'CAROL BIBIANA ROMERO CAÑON',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '2018-08-08 00:00:00',
            'wage' => '4953304',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 0
        ]);

        DB::table('employees') -> insert([
            'document' => '51761887',
            'name' => 'DIANA CECILIA TORRES VEGA',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '1990-08-13 00:00:00',
            'wage' => '4709262',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '79046330',
            'name' => 'FRANCISCO JOSE GAITAN DAZA',
            'performance_score' => 0,
            'has_exceeded_applications' => 0,
            'employment_date' => '2015-03-16 00:00:00',
            'wage' => '4709262',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '19261879',
            'name' => 'OMAR ORJUELA MORA',
            'performance_score' => 0,
            'has_exceeded_applications' => 0,
            'employment_date' => '2008-12-15 00:00:00',
            'wage' => '4709262',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '1013622135',
            'name' => 'ANDRES FABIAN GONZALEZ RODAS',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '2018-08-15 00:00:00',
            'wage' => '4709262',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 0
        ]);

        DB::table('employees') -> insert([
            'document' => '46673822',
            'name' => 'ANA MILENA FAJARDO CORREDOR',
            'performance_score' => 0,
            'has_exceeded_applications' => 0,
            'employment_date' => '2014-07-10 00:00:00',
            'wage' => '4709262',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '37579219',
            'name' => 'JESSICA FABIOLA PINILLA SALGADO',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '2018-09-14 00:00:00',
            'wage' => '4709262',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 0
        ]);

        DB::table('employees') -> insert([
            'document' => '41643696',
            'name' => 'ANGELA MARIA CORREA VELEZ',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '1978-11-03 00:00:00',
            'wage' => '4709262',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '72315573',
            'name' => 'JAIME LUIS CHARRIS PIZARRO',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '2019-05-02 00:00:00',
            'wage' => '4709262',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 0
        ]);

        DB::table('employees') -> insert([
            'document' => '29126388',
            'name' => 'XIMENA ANDREA QUESADA MORENO',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '2018-09-03 00:00:00',
            'wage' => '4709262',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 0
        ]);

        DB::table('employees') -> insert([
            'document' => '1039451128',
            'name' => 'ELLA MARIA AÑEZ RODRIGUEZ',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '2019-05-02 00:00:00',
            'wage' => '4709262',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 0
        ]);

        DB::table('employees') -> insert([
            'document' => '52411973',
            'name' => 'YENNY REYES GONZALEZ',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '2005-05-02 00:00:00',
            'wage' => '4367944',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '52054602',
            'name' => 'MARTHA PATRICIA ORTIZ CAMACHO',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '2008-12-18 00:00:00',
            'wage' => '4709262',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '52485582',
            'name' => 'MERLYS PATRICIA NATERA CONTRERAS',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '2018-09-04 00:00:00',
            'wage' => '4709262',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 0
        ]);

        DB::table('employees') -> insert([
            'document' => '79671013',
            'name' => 'CARLOS ARTURO SANCHEZ RINCON',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '2014-07-01 00:00:00',
            'wage' => '4709262',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '52033318',
            'name' => 'YOLANDA RODRIGUEZ RODRIGUEZ',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '2011-07-19 00:00:00',
            'wage' => '4709262',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 0
        ]);

        DB::table('employees') -> insert([
            'document' => '52834903',
            'name' => 'LUZ ANDREA ROJAS RODRIGUEZ',
            'performance_score' => 0,
            'has_exceeded_applications' => 0,
            'employment_date' => '2014-04-01 00:00:00',
            'wage' => '4709262',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '79569388',
            'name' => 'FELIPE IBAÑEZ AMAYA',
            'performance_score' => 0,
            'has_exceeded_applications' => 0,
            'employment_date' => '2011-08-01 00:00:00',
            'wage' => '4709262',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '52821746',
            'name' => 'GINNA FERNANDA GARCIA AVILA',
            'performance_score' => 0,
            'has_exceeded_applications' => 0,
            'employment_date' => '2014-05-02 00:00:00',
            'wage' => '4709262',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '51924701',
            'name' => 'MARTHA BERENICE SANCHEZ LOPEZ',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '1995-08-09 00:00:00',
            'wage' => '4709262',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '41576854',
            'name' => 'CLARA IVETH CORDOBA RINCON',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '1999-10-01 00:00:00',
            'wage' => '4709262',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '22673256',
            'name' => 'EMMA CONSUELO CORONEL FUENTES',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '2018-08-15 00:00:00',
            'wage' => '4709262',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 0
        ]);

        DB::table('employees') -> insert([
            'document' => '51792695',
            'name' => 'ELSA NELLY VELASCO PULIDO',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '1996-10-25 00:00:00',
            'wage' => '4709262',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '51769462',
            'name' => 'PILAR CRISTINA MORENO SIERRA',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '2009-06-01 00:00:00',
            'wage' => '4709262',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '40361891',
            'name' => 'ANDREA MILENA SILVA CARDONA',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '2015-01-13 00:00:00',
            'wage' => '4709262',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '52977430',
            'name' => 'NORMA CONSTANZA CAMARGO CASALLAS',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '2018-08-15 00:00:00',
            'wage' => '4709262',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 0
        ]);

        DB::table('employees') -> insert([
            'document' => '63325174',
            'name' => 'SONIA URIBE LASPRILLA',
            'performance_score' => 0,
            'has_exceeded_applications' => 0,
            'employment_date' => '2013-09-02 00:00:00',
            'wage' => '4709262',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '16635502',
            'name' => 'CARLOS ALBERTO PINZON SALCEDO',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '1995-10-09 00:00:00',
            'wage' => '4709262',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '73192071',
            'name' => 'JORGE LUIS SUAREZ FIGUEROA',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '2018-10-01 00:00:00',
            'wage' => '4709262',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 0
        ]);

        DB::table('employees') -> insert([
            'document' => '52100192',
            'name' => 'MARTHA LILIANA FUNEME ARIAS',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '2018-08-15 00:00:00',
            'wage' => '4709262',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 0
        ]);

        DB::table('employees') -> insert([
            'document' => '51842223',
            'name' => 'MARTHA JANETH GUEVARA TRIANA',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '1995-01-11 00:00:00',
            'wage' => '4709262',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '12107927',
            'name' => 'RODRIGO PUENTES GONZALEZ',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '1978-08-09 00:00:00',
            'wage' => '4709262',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '79287227',
            'name' => 'HECTOR JULIO FLECHAS PACHECO',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '1996-05-23 00:00:00',
            'wage' => '4709262',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 0
        ]);

        DB::table('employees') -> insert([
            'document' => '51738998',
            'name' => 'RUTH TERESA BERNAL RUIZ',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '2010-01-21 00:00:00',
            'wage' => '4709262',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '64516843',
            'name' => 'JULIA DEL CARMEN BETANCOURT GUTIERREZ',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '1993-02-02 00:00:00',
            'wage' => '4709262',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '65746353',
            'name' => 'OLGA LUCIA GALLEGO SAAVEDRA',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '2008-12-16 00:00:00',
            'wage' => '4709262',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '51923785',
            'name' => 'GLORIA ASTRID GOMEZ RIVEROS',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '1995-10-24 00:00:00',
            'wage' => '4709262',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '19425324',
            'name' => 'NELSON ANDRES IZQUIERDO CHAVES',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '1983-05-09 00:00:00',
            'wage' => '4367944',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '39702002',
            'name' => 'DEYANIRA ROMERO GARCIA',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '2012-10-01 00:00:00',
            'wage' => '4367944',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '4071207',
            'name' => 'FABIO ERNESTO PATIÑO CARO',
            'performance_score' => 0,
            'has_exceeded_applications' => 0,
            'employment_date' => '2014-04-01 00:00:00',
            'wage' => '4367944',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '7171685',
            'name' => 'JORGE ALBERTO ESPINOSA ESPITIA',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '2018-09-03 00:00:00',
            'wage' => '4367944',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 0
        ]);

        DB::table('employees') -> insert([
            'document' => '52981469',
            'name' => 'LUZ DARY GONZALEZ MARTIN ',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '2019-04-12 00:00:00',
            'wage' => '4367944',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 0
        ]);

        DB::table('employees') -> insert([
            'document' => '24175582',
            'name' => 'LUZ MARINA BECERRA BARRETO',
            'performance_score' => 0,
            'has_exceeded_applications' => 0,
            'employment_date' => '2019-04-24 00:00:00',
            'wage' => '3950730',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 0
        ]);

        DB::table('employees') -> insert([
            'document' => '52415640',
            'name' => 'LOIDA RUTH SILVA MORALES',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '2018-10-01 00:00:00',
            'wage' => '3950730',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 0
        ]);

        DB::table('employees') -> insert([
            'document' => '52337661',
            'name' => 'DULFARY AGUDELO OSORIO',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '2018-09-04 00:00:00',
            'wage' => '3950730',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 0
        ]);

        DB::table('employees') -> insert([
            'document' => '79468496',
            'name' => 'CARLOS JULIO QUIROGA QUEVEDO',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '2012-09-10 00:00:00',
            'wage' => '3950730',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '1018407285',
            'name' => 'DIANA ELIZABETH GOMEZ SANTISTEBAN',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '2014-08-01 00:00:00',
            'wage' => '3950730',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 0
        ]);

        DB::table('employees') -> insert([
            'document' => '51835820',
            'name' => 'MARTHA LILIANA SARMIENTO CHAVES',
            'performance_score' => 0,
            'has_exceeded_applications' => 0,
            'employment_date' => '2018-08-15 00:00:00',
            'wage' => '3950730',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 0
        ]);

        DB::table('employees') -> insert([
            'document' => '51882559',
            'name' => 'NELLY BERNAL OLARTE',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '1989-02-21 00:00:00',
            'wage' => '3950730',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 0
        ]);

        DB::table('employees') -> insert([
            'document' => '1024529260',
            'name' => 'KATHERINE CERQUERA ROJAS',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '2018-09-14 00:00:00',
            'wage' => '3691789',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '52858476',
            'name' => 'DIANA PATRICIA CLAVIJO YATE',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '2014-09-15 00:00:00',
            'wage' => '3691789',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '51690199',
            'name' => 'BLANCA ISABEL GIL LOPEZ',
            'performance_score' => 0,
            'has_exceeded_applications' => 0,
            'employment_date' => '1996-04-15 00:00:00',
            'wage' => '3691789',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '35529764',
            'name' => 'ZAYDA IVETTE RIAÑO SALAMANCA',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '2019-04-01 00:00:00',
            'wage' => '3211673',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '52896274',
            'name' => 'MARÍA CAMILA LAGUNA FORERO',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '2018-09-04 00:00:00',
            'wage' => '3211673',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '30002845',
            'name' => 'MARTA NUBIA VERA MORENO',
            'performance_score' => 0,
            'has_exceeded_applications' => 0,
            'employment_date' => '2009-09-01 00:00:00',
            'wage' => '3081918',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '52957174',
            'name' => 'DIANA JAENNETH RIOS PAEZ',
            'performance_score' => 0,
            'has_exceeded_applications' => 0,
            'employment_date' => '2012-09-11 00:00:00',
            'wage' => '3081918',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '1026270954',
            'name' => 'VIVIANA ANDREA CASTILLO SIATAME',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '2019-04-10 00:00:00',
            'wage' => '3081918',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 0
        ]);

        DB::table('employees') -> insert([
            'document' => '51936552',
            'name' => 'SONIA MERCEDES PONCE CHARRIA',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '1992-04-14 00:00:00',
            'wage' => '3081918',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 0
        ]);

        DB::table('employees') -> insert([
            'document' => '79659834',
            'name' => 'JUAN FERNANDO TABARES SALCEDO',
            'performance_score' => 0,
            'has_exceeded_applications' => 0,
            'employment_date' => '2014-05-02 00:00:00',
            'wage' => '3081918',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '79736107',
            'name' => 'JOSE ANTONIO REINA GUEVARA',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '2012-03-13 00:00:00',
            'wage' => '3081918',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '1072654234',
            'name' => 'MANUEL ALEJANDRO RAMIREZ MUÑOZ',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '2019-05-02 00:00:00',
            'wage' => '3081918',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 0
        ]);

        DB::table('employees') -> insert([
            'document' => '1013590253',
            'name' => 'DAVID ALEJANDRO BOHORQUEZ FITATA',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '2018-10-01 00:00:00',
            'wage' => '3081918',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '41516074',
            'name' => 'CLARA ERMINIA EUGENIA ROBAYO VANEGAS',
            'performance_score' => 0,
            'has_exceeded_applications' => 0,
            'employment_date' => '1977-03-18 00:00:00',
            'wage' => '2980227',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '79911769',
            'name' => 'EDGAR BAUTISTA GAMBA',
            'performance_score' => 0,
            'has_exceeded_applications' => 0,
            'employment_date' => '2018-10-01 00:00:00',
            'wage' => '2990759',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 0
        ]);

        DB::table('employees') -> insert([
            'document' => '39616599',
            'name' => 'ROSA INES MALAGON VALERO',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '2012-09-10 00:00:00',
            'wage' => '2990759',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '19485196',
            'name' => 'MANUEL ALFONSO RAMOS CORTES',
            'performance_score' => 0,
            'has_exceeded_applications' => 0,
            'employment_date' => '1990-08-21 00:00:00',
            'wage' => '2990759',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '51589158',
            'name' => 'CLARA INES UMBARILA CHACON',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '1988-02-11 00:00:00',
            'wage' => '2990759',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '39710592',
            'name' => 'YANIRA HERRERA VACA',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '1989-11-01 00:00:00',
            'wage' => '2990759',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '382312',
            'name' => 'CARLOS ARTURO SILVA SALINAS',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '1985-05-27 00:00:00',
            'wage' => '2990759',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '41765829',
            'name' => 'FANNY RUIZ GONZALEZ',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '1996-04-01 00:00:00',
            'wage' => '2990759',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '51993422',
            'name' => 'MARTHA CECILIA CAMACHO ESGUERRA',
            'performance_score' => 0,
            'has_exceeded_applications' => 0,
            'employment_date' => '1995-07-28 00:00:00',
            'wage' => '2721555',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '51896225',
            'name' => 'CLAUDIA FARIDE GARZON MOSSO',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '2005-02-15 00:00:00',
            'wage' => '2721555',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '52011012',
            'name' => 'CLAUDIA PATRICIA VILLANUEVA BARRETO',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '2010-01-21 00:00:00',
            'wage' => '2721555',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '52221164',
            'name' => 'HANET MARFORI CHAPARRO HERNANDEZ',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '2019-06-04 00:00:00',
            'wage' => '2721555',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 0
        ]);

        DB::table('employees') -> insert([
            'document' => '21231569',
            'name' => 'GRETA MARLENY GALINDO BAQUERO',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '1992-11-26 00:00:00',
            'wage' => '2721555',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '52172034',
            'name' => 'CAROLINA RECALDE VEGA',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '1993-02-24 00:00:00',
            'wage' => '2721555',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '79239504',
            'name' => 'ALVARO JAIME VALDERRAMA CASTRO',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '2018-09-14 00:00:00',
            'wage' => '2721555',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 0
        ]);

        DB::table('employees') -> insert([
            'document' => '19499486',
            'name' => 'JORGE EDUARDO LOPEZ GALLEGO',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '2011-08-01 00:00:00',
            'wage' => '2721555',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '195272',
            'name' => 'JOSE ORLANDO HERNANDEZ CIFUENTES',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '1993-12-03 00:00:00',
            'wage' => '2721555',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '37888643',
            'name' => 'CAROLINA GOMEZ CHAPARRO',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '1990-05-15 00:00:00',
            'wage' => '2721555',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '40376287',
            'name' => 'CARMEN ALICIA SANTOS ESPITIA',
            'performance_score' => 0,
            'has_exceeded_applications' => 0,
            'employment_date' => '1986-06-23 00:00:00',
            'wage' => '2721555',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '52703855',
            'name' => 'LUZ ANGELA CASTRO FERNANDEZ',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '2011-08-01 00:00:00',
            'wage' => '2542265',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '51646651',
            'name' => 'AIDA PERALTA IZQUIERDO',
            'performance_score' => 0,
            'has_exceeded_applications' => 0,
            'employment_date' => '1981-06-16 00:00:00',
            'wage' => '2542265',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '28714708',
            'name' => 'NUBIA GRACIELA HENAO NUÑEZ',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '2012-09-07 00:00:00',
            'wage' => '2542265',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '51648730',
            'name' => 'HILDA MARIA BONILLA CAICEDO',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '1996-03-27 00:00:00',
            'wage' => '2542265',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '51656147',
            'name' => 'DORIS PATRICIA HERRERA REYES',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '1987-10-26 00:00:00',
            'wage' => '2542265',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '52820437',
            'name' => 'HELGA MARIA BALLEN PATIÑO',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '2012-09-13 00:00:00',
            'wage' => '2542265',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '39535332',
            'name' => 'SILVIA PATRICIA OLARTE RUJANA',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '1996-03-28 00:00:00',
            'wage' => '2250064',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '72307971',
            'name' => 'JAISSIR GABRIEL CUENTAS CERVANTES',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '2018-09-14 00:00:00',
            'wage' => '2250064',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 0
        ]);

        DB::table('employees') -> insert([
            'document' => '1014189979',
            'name' => 'DIEGO ALEXANDER MAYORGA MAYORGA',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '2018-09-04 00:00:00',
            'wage' => '2250064',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 0
        ]);

        DB::table('employees') -> insert([
            'document' => '39757154',
            'name' => 'LUZ AIDEE GOMEZ CAMACHO',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '2018-09-04 00:00:00',
            'wage' => '2250064',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 0
        ]);

        DB::table('employees') -> insert([
            'document' => '39636840',
            'name' => 'DORIS HERRERA QUINTERO',
            'performance_score' => 0,
            'has_exceeded_applications' => 0,
            'employment_date' => '1992-04-13 00:00:00',
            'wage' => '2250064',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '1032395262',
            'name' => 'MONICA ALEJANDRA DIAZ GUZMAN',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '2018-12-03 00:00:00',
            'wage' => '2250064',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 0
        ]);

        DB::table('employees') -> insert([
            'document' => '51844184',
            'name' => 'CLAUDIA PATRICIA MURCIA TOVAR',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '2011-07-19 00:00:00',
            'wage' => '2250064',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '24138500',
            'name' => 'EDELMIRA CORBA CARVAJAL',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '1996-04-02 00:00:00',
            'wage' => '2250064',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '1023945833',
            'name' => 'INGRIT JINET GARCIA LAGOS',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '2019-05-10 00:00:00',
            'wage' => '2077050',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 0
        ]);

        DB::table('employees') -> insert([
            'document' => '41694919',
            'name' => 'FLOR ALBA RIVERA TRIANA',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '1983-12-22 00:00:00',
            'wage' => '2077050',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '51702163',
            'name' => 'MARTHA LUCIA GOMEZ MONTES',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '1996-04-01 00:00:00',
            'wage' => '1947688',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 0
        ]);

        DB::table('employees') -> insert([
            'document' => '41658828',
            'name' => 'MARIA ADELA RIVERA DE CHAVES',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '1974-06-10 00:00:00',
            'wage' => '2077050',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '39746791',
            'name' => 'LUZ CLEMENCIA OJEDA CIFUENTES',
            'performance_score' => 0,
            'has_exceeded_applications' => 0,
            'employment_date' => '1996-04-01 00:00:00',
            'wage' => '2250064',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '80724740',
            'name' => 'EDGAR YESITH TRIANA TORRES',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '2018-10-01 00:00:00',
            'wage' => '1920275',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '28656634',
            'name' => 'MARIA JULIETA BELTRAN GUIRAL',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '1980-10-09 00:00:00',
            'wage' => '1920275',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '1085307404',
            'name' => 'DIANA LEIDY LOPEZ QUENORAN',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '2019-04-12 00:00:00',
            'wage' => '1920275',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 0
        ]);

        DB::table('employees') -> insert([
            'document' => '52524220',
            'name' => 'ADRIANA MARCELA GARAVITO JIMENEZ',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '2018-10-12 00:00:00',
            'wage' => '1920275',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 0
        ]);

        DB::table('employees') -> insert([
            'document' => '51697944',
            'name' => 'ANA ISABEL MORENO VARGAS',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '1994-07-14 00:00:00',
            'wage' => '1920275',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '52082947',
            'name' => 'SANDRA GUTIERREZ MORENO',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '2011-08-01 00:00:00',
            'wage' => '1920275',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '80829838',
            'name' => 'JINO MARDUK IGUARAN SAAVEDRA',
            'performance_score' => 0,
            'has_exceeded_applications' => 0,
            'employment_date' => '2018-09-14 00:00:00',
            'wage' => '1920275',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 0
        ]);

        DB::table('employees') -> insert([
            'document' => '20684811',
            'name' => 'CLARA INES DIAZ LEON',
            'performance_score' => 0,
            'has_exceeded_applications' => 0,
            'employment_date' => '1977-07-28 00:00:00',
            'wage' => '1920275',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '51718841',
            'name' => 'SONIA LORELA HERNANDEZ CORDOBA',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '1990-08-21 00:00:00',
            'wage' => '1920275',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '39548135',
            'name' => 'MARIELA CUERVO JIMENEZ',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '1994-06-20 00:00:00',
            'wage' => '1920275',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '79270189',
            'name' => 'LUIS CARLOS RUIZ ',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '1995-06-29 00:00:00',
            'wage' => '1920275',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '1014254584',
            'name' => 'ANA ROCIO MORA LÓPEZ',
            'performance_score' => 0,
            'has_exceeded_applications' => 0,
            'employment_date' => '2018-09-14 00:00:00',
            'wage' => '1920275',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 0
        ]);

        DB::table('employees') -> insert([
            'document' => '51872188',
            'name' => 'INÉS CRISTINA TRIGOS REYES',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '2018-09-14 00:00:00',
            'wage' => '1920275',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 0
        ]);

        DB::table('employees') -> insert([
            'document' => '80811088',
            'name' => 'CRISTIAN CAMILO GRANADOS RAMIREZ',
            'performance_score' => 0,
            'has_exceeded_applications' => 0,
            'employment_date' => '2018-09-14 00:00:00',
            'wage' => '1842722',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 0
        ]);

        DB::table('employees') -> insert([
            'document' => '19406193',
            'name' => 'DAVID ERNESTO DIAZ CARVAJAL',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '1987-01-23 00:00:00',
            'wage' => '1842722',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '41700003',
            'name' => 'LUZ TEMILDA PLAZAS LEON',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '1982-08-06 00:00:00',
            'wage' => '1842722',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '51551835',
            'name' => 'CLARA INES ROJAS DE ZORRO',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '1976-10-01 00:00:00',
            'wage' => '1700082',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '19272245',
            'name' => 'JOSE ANTONIO GALEANO BARRERA',
            'performance_score' => 0,
            'has_exceeded_applications' => 0,
            'employment_date' => '1981-05-22 00:00:00',
            'wage' => '1700082',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '1014206266',
            'name' => 'NURY MARCELA TOCARRUNCHO VIASUS',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '2018-09-14 00:00:00',
            'wage' => '1594046',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 0
        ]);

        DB::table('employees') -> insert([
            'document' => '79323929',
            'name' => 'FABIAN GALINDO PARADA',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '2018-09-14 00:00:00',
            'wage' => '1700082',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 0
        ]);

        DB::table('employees') -> insert([
            'document' => '79045528',
            'name' => 'LUIS ANTONIO NARANJO TEJEDOR',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '1995-02-01 00:00:00',
            'wage' => '1700082',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '79292313',
            'name' => 'JOSE ALEJANDRO SOLANO RODRIGUEZ',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '1995-01-13 00:00:00',
            'wage' => '1700082',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '19495637',
            'name' => 'CARLOS JULIO ALVAREZ MORA',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '1994-07-27 00:00:00',
            'wage' => '1700082',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '79543846',
            'name' => 'WILDER HERNANDO SAAVEDRA MOLANO',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '2018-09-14 00:00:00',
            'wage' => '1594046',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 0
        ]);

        DB::table('employees') -> insert([
            'document' => '19462991',
            'name' => 'OCTAVIO CAÑOLA DUARTE',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '1996-04-01 00:00:00',
            'wage' => '1594046',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '79368156',
            'name' => 'CARLOS ALBERTO HERNANDEZ ALFARO',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '1996-05-17 00:00:00',
            'wage' => '1594046',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '79294555',
            'name' => 'JOSE ARMANDO LOPEZ ACOSTA',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '1996-04-01 00:00:00',
            'wage' => '1512852',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '19486548',
            'name' => 'VICTOR MANUEL GIL HERNANDEZ',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '1996-09-12 00:00:00',
            'wage' => '1512852',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '19394677',
            'name' => 'JAIME RIAÑO LOPEZ',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '1996-04-02 00:00:00',
            'wage' => '1512852',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '55159718',
            'name' => 'YENY RUTH RODRIGUEZ ZAMBRANO',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '1996-04-02 00:00:00',
            'wage' => '1920275',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '12963370',
            'name' => 'JESUS ALIRIO NASPIRAN PATIÑO',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '1995-02-15 00:00:00',
            'wage' => '3950730',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '52103118',
            'name' => 'SANDRA LILIANA JIMENEZ ARIAS',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '1996-04-02 00:00:00',
            'wage' => '3950730',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 0
        ]);

        DB::table('employees') -> insert([
            'document' => '51648984',
            'name' => 'ELIZABETH CONTRERAS LIZARAZO',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '1987-03-19 00:00:00',
            'wage' => '4709262',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '80095670',
            'name' => 'JUAN CAMILO CARO DAZA',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '2019-03-01 00:00:00',
            'wage' => '4709262',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '63447470',
            'name' => 'OLGA LUCIA ZARATE MANTILLA',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '2010-09-01 00:00:00',
            'wage' => '4709262',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '79716220',
            'name' => 'LUIS EDUARDO SUAREZ HUESO',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '2018-10-01 00:00:00',
            'wage' => '4709262',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 0
        ]);

        DB::table('employees') -> insert([
            'document' => '51632506',
            'name' => 'FANNY CARDONA MORENO',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '2009-01-05 00:00:00',
            'wage' => '4709262',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '80134862',
            'name' => 'JUAN SEBASTIAN GUERRERO OTERO',
            'performance_score' => 0,
            'has_exceeded_applications' => 0,
            'employment_date' => '2018-08-15 00:00:00',
            'wage' => '3950730',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 0
        ]);

        DB::table('employees') -> insert([
            'document' => '24333984',
            'name' => 'NATALIA FRANCO MEZA',
            'performance_score' => 0,
            'has_exceeded_applications' => 0,
            'employment_date' => '2018-09-03 00:00:00',
            'wage' => '3950730',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 0
        ]);

        DB::table('employees') -> insert([
            'document' => '80178684',
            'name' => 'ALEJANDRO MIRANDA ZABALETA',
            'performance_score' => 0,
            'has_exceeded_applications' => 0,
            'employment_date' => '2018-08-15 00:00:00',
            'wage' => '3950730',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 0
        ]);

        DB::table('employees') -> insert([
            'document' => '28554631',
            'name' => 'LORENA DEL PILAR CONDE OCHOA',
            'performance_score' => 0,
            'has_exceeded_applications' => 0,
            'employment_date' => '2014-09-01 00:00:00',
            'wage' => '4709262',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '39788710',
            'name' => 'SANDRA CONSUELO GUTIERREZ HERNANDEZ',
            'performance_score' => 0,
            'has_exceeded_applications' => 0,
            'employment_date' => '2014-05-12 00:00:00',
            'wage' => '4709262',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '32707483',
            'name' => 'SENIA MARIA DIAZ SALAZAR',
            'performance_score' => 0,
            'has_exceeded_applications' => 0,
            'employment_date' => '2015-02-18 00:00:00',
            'wage' => '4709262',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '38869957',
            'name' => 'CLAUDIA PATRICIA SALAZAR MEDINA',
            'performance_score' => 0,
            'has_exceeded_applications' => 0,
            'employment_date' => '2014-05-12 00:00:00',
            'wage' => '4709262',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '38225248',
            'name' => 'LUZ MYRIAM GARCIA PELAEZ',
            'performance_score' => 0,
            'has_exceeded_applications' => 0,
            'employment_date' => '2010-01-21 00:00:00',
            'wage' => '3691789',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '11187421',
            'name' => 'MEDARDO CASTRO CARANTONIO',
            'performance_score' => 0,
            'has_exceeded_applications' => 0,
            'employment_date' => '1994-07-01 00:00:00',
            'wage' => '3691789',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '52115975',
            'name' => 'MARTHA ISABEL BARRERA ROJAS',
            'performance_score' => 0,
            'has_exceeded_applications' => 0,
            'employment_date' => '2009-01-05 00:00:00',
            'wage' => '4709262',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '52885434',
            'name' => 'ANA YISED CASTRO ORTIZ',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '2019-03-12 00:00:00',
            'wage' => '4709262',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 0
        ]);

        DB::table('employees') -> insert([
            'document' => '86078943',
            'name' => 'CESAR ANDRES ESCALANTE BORRERO',
            'performance_score' => 99,
            'has_exceeded_applications' => 0,
            'employment_date' => '2019-02-08 00:00:00',
            'wage' => '4709262',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 0
        ]);

        DB::table('employees') -> insert([
            'document' => '11791330',
            'name' => 'DARIO ENRIQUE RIVAS LARA',
            'performance_score' => 0,
            'has_exceeded_applications' => 0,
            'employment_date' => '2010-01-21 00:00:00',
            'wage' => '3081918',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 0
        ]);

        DB::table('employees') -> insert([
            'document' => '39771608',
            'name' => 'MYRIAM RODRIGUEZ OJEDA',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '2005-04-01 00:00:00',
            'wage' => '1947688',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '1078366566',
            'name' => 'SANDRA CAROLINA CHAVES ZAMBRANO',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '2014-04-07 00:00:00',
            'wage' => '4709262',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 0
        ]);

        DB::table('employees') -> insert([
            'document' => '79397819',
            'name' => 'DANIEL RICARDO SOLORZANO RODRIGUEZ',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '2018-08-15 00:00:00',
            'wage' => '4709262',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 0
        ]);

        DB::table('employees') -> insert([
            'document' => '79590354',
            'name' => 'MILLER PAEZ GONZALEZ',
            'performance_score' => 0,
            'has_exceeded_applications' => 0,
            'employment_date' => '2015-03-02 00:00:00',
            'wage' => '4709262',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '13928187',
            'name' => 'WILSON ANDRES MALDONADO HERRERA',
            'performance_score' => 0,
            'has_exceeded_applications' => 0,
            'employment_date' => '2014-05-12 00:00:00',
            'wage' => '4709262',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '52805905',
            'name' => 'BETTY JASMID BUITRAGO ROSERO',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '2010-02-08 00:00:00',
            'wage' => '4709262',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '52697586',
            'name' => 'DIANA BELEN MORA PULIDO',
            'performance_score' => 0,
            'has_exceeded_applications' => 0,
            'employment_date' => '2014-12-15 00:00:00',
            'wage' => '4709262',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '65730876',
            'name' => 'BLANCA LILIANA TRUJILLO AYERBE',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '2014-06-03 00:00:00',
            'wage' => '4709262',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '1090367512',
            'name' => 'SERGIO YAMID SEPULVEDA TORRES',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '2015-08-05 00:00:00',
            'wage' => '5334460',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '39574424',
            'name' => 'ALEJANDRA MARÍA ESPINOSA RUIZ',
            'performance_score' => 0,
            'has_exceeded_applications' => 0,
            'employment_date' => '2015-06-01 00:00:00',
            'wage' => '5334460',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '52073114',
            'name' => 'NOHORA JAZMIN PEREZ BERMUDEZ',
            'performance_score' => 0,
            'has_exceeded_applications' => 0,
            'employment_date' => '2005-03-18 00:00:00',
            'wage' => '5334460',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '35469366',
            'name' => 'MARIA DEL MAR SUAREZ SOLANO',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '1993-06-22 00:00:00',
            'wage' => '5334460',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '52775694',
            'name' => 'PILAR ANDREA RIVERA PARRA',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '2014-05-02 00:00:00',
            'wage' => '5334460',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '261874',
            'name' => 'TOBIAS ALFONSO LINARES JIMENEZ',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '2016-07-06 00:00:00',
            'wage' => '4709262',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '74379564',
            'name' => 'DIEGO FERNANDO SALAZAR BECERRA',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '2016-05-02 00:00:00',
            'wage' => '4709262',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '19469022',
            'name' => 'JAVIER MAURICIO FONSECA SANCHEZ',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '1998-02-09 00:00:00',
            'wage' => '6176855',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '79453469',
            'name' => 'CARLOS ANTONIO STAND VILLARREAL',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '2014-06-16 00:00:00',
            'wage' => '6176855',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '79295201',
            'name' => 'MIGUEL ENRIQUE SALDAÑA PARRA',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '2018-09-14 00:00:00',
            'wage' => '3211673',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 0
        ]);

        DB::table('employees') -> insert([
            'document' => '52174789',
            'name' => 'BRIGITTE ROCIO CORREDOR PEÑA',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '2019-05-10 00:00:00',
            'wage' => '3211673',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 0
        ]);

        DB::table('employees') -> insert([
            'document' => '12967115',
            'name' => 'LUIS ANTONIO MARTINEZ PINTO',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '2014-08-01 00:00:00',
            'wage' => '3211673',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '79535619',
            'name' => 'EMILIO SNEIDER FORERO BELEÑO',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '2018-10-01 00:00:00',
            'wage' => '4709262',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 0
        ]);

        DB::table('employees') -> insert([
            'document' => '80505509',
            'name' => 'RAÚL FERNANDO CAMARGO MEDINA',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '2005-12-01 00:00:00',
            'wage' => '6176855',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 0
        ]);

        DB::table('employees') -> insert([
            'document' => '35196321',
            'name' => 'KENNY TATIANA OTALORA CAMACHO',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '2014-09-15 00:00:00',
            'wage' => '6176855',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '52917664',
            'name' => 'LIDY MILENE PEDRAZA PARRA',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '2012-10-12 00:00:00',
            'wage' => '4709262',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '79318638',
            'name' => 'WILLIAM HERNAN OTALORA CABANZO',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '2015-07-01 00:00:00',
            'wage' => '4709262',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '36278435',
            'name' => 'FARID BARRERA MOLINA',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '2009-01-15 00:00:00',
            'wage' => '4709262',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '37901129',
            'name' => 'LINA MERCEDES DURAN MARTINEZ',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '2018-09-03 00:00:00',
            'wage' => '6176855',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 0
        ]);

        DB::table('employees') -> insert([
            'document' => '51945636',
            'name' => 'CRISTINA LOSADA SAENZ',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '2018-10-01 00:00:00',
            'wage' => '6176855',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 0
        ]);

        DB::table('employees') -> insert([
            'document' => '52897696',
            'name' => 'ADRIANA MILENA OLARTE ABELLO',
            'performance_score' => 0,
            'has_exceeded_applications' => 0,
            'employment_date' => '2018-08-15 00:00:00',
            'wage' => '4709262',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '15932343',
            'name' => 'HECTOR MARIO RAMIREZ RIOS',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '2018-08-15 00:00:00',
            'wage' => '4709262',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 0
        ]);

        DB::table('employees') -> insert([
            'document' => '1010171266',
            'name' => 'HARVEY DARIO LOPEZ CORTES',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '2018-09-14 00:00:00',
            'wage' => '4709262',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 0
        ]);

        DB::table('employees') -> insert([
            'document' => '52422559',
            'name' => 'OLGA LUCÍA MORENO GONZÁLEZ',
            'performance_score' => 0,
            'has_exceeded_applications' => 0,
            'employment_date' => '2018-09-04 00:00:00',
            'wage' => '6176855',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 0
        ]);

        DB::table('employees') -> insert([
            'document' => '4252275',
            'name' => 'FABIO ALBERTO GOMEZ SANTOS',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '1996-02-14 00:00:00',
            'wage' => '6176855',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 0
        ]);

        DB::table('employees') -> insert([
            'document' => '52736491',
            'name' => 'ANDREA MARCELA PANTOJA GARZON',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '2018-10-12 00:00:00',
            'wage' => '6176855',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 0
        ]);

        DB::table('employees') -> insert([
            'document' => '36456602',
            'name' => 'MYRIAM GEMADE OLAYA',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '2009-07-14 00:00:00',
            'wage' => '4709262',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '52009765',
            'name' => 'ADRIANA ANGELICA BORDA RODRIGUEZ',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '2014-05-12 00:00:00',
            'wage' => '4709262',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '74814409',
            'name' => 'JOHN NEPHER TELLEZ MONTAÑA',
            'performance_score' => 0,
            'has_exceeded_applications' => 0,
            'employment_date' => '2014-08-21 00:00:00',
            'wage' => '4709262',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '52430738',
            'name' => 'YULITZA MAILETH FUENMAYOR SIERRA',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '2018-09-04 00:00:00',
            'wage' => '6176855',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 0
        ]);

        DB::table('employees') -> insert([
            'document' => '80033940',
            'name' => 'RAUL ARAMENDI GARCIA',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '2018-09-03 00:00:00',
            'wage' => '4709262',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 0
        ]);

        DB::table('employees') -> insert([
            'document' => '98647204',
            'name' => 'CARLOS ALBERTO ABDALA VERGARA',
            'performance_score' => 0,
            'has_exceeded_applications' => 0,
            'employment_date' => '2014-05-02 00:00:00',
            'wage' => '4709262',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '51556976',
            'name' => 'LUZ MAGALLY PEREZ RODRIGUEZ',
            'performance_score' => 0,
            'has_exceeded_applications' => 0,
            'employment_date' => '2009-01-05 00:00:00',
            'wage' => '6176855',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 0
        ]);

        DB::table('employees') -> insert([
            'document' => '51839096',
            'name' => 'CLAUDIA MARCELA GALVIS BELTRÁN',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '2014-04-07 00:00:00',
            'wage' => '6176855',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 0
        ]);

        DB::table('employees') -> insert([
            'document' => '79701066',
            'name' => 'JOSE LEONARDO JURADO NUMPAQUE',
            'performance_score' => 0,
            'has_exceeded_applications' => 0,
            'employment_date' => '2010-02-16 00:00:00',
            'wage' => '4709262',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '52516430',
            'name' => 'JULISSE GUAYACAN FUENTES',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '2014-05-12 00:00:00',
            'wage' => '4709262',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '41775191',
            'name' => 'MARTHA PATRICIA RODRIGUEZ COLLAZOS',
            'performance_score' => 0,
            'has_exceeded_applications' => 0,
            'employment_date' => '1994-01-14 00:00:00',
            'wage' => '4709262',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '52476069',
            'name' => 'AMALIA GALEANO CABARCA',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '2016-03-07 00:00:00',
            'wage' => '4709262',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '52029898',
            'name' => 'ENITH MIREYA COCA PEÑA',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '2014-06-03 00:00:00',
            'wage' => '4709262',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '79942622',
            'name' => 'ALFREDO OLAYA TORO',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '2014-08-11 00:00:00',
            'wage' => '4709262',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '28566983',
            'name' => 'YORDILEY TORRES HERRERA',
            'performance_score' => 99,
            'has_exceeded_applications' => 0,
            'employment_date' => '2007-05-15 00:00:00',
            'wage' => '4709262',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '80724684',
            'name' => 'HUMBERTO JUNCO ROCHA',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '2014-04-01 00:00:00',
            'wage' => '4709262',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '52527414',
            'name' => 'ERIKA LUCIA VILLAMIL FAJARDO',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '2014-08-19 00:00:00',
            'wage' => '4709262',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '35401450',
            'name' => 'ESPERANZA MARIA EMILIA NAVAS RUBIANO',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '1998-01-22 00:00:00',
            'wage' => '4709262',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '52148253',
            'name' => 'DIANA LICETH PALACIOS DONCEL',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '2018-09-03 00:00:00',
            'wage' => '6176855',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 0
        ]);

        DB::table('employees') -> insert([
            'document' => '51787842',
            'name' => 'ALICIA VARGAS ROMERO',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '1999-08-17 00:00:00',
            'wage' => '6176855',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '52103154',
            'name' => 'JACQUELINE MOLINA MURILLO',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '2014-05-02 00:00:00',
            'wage' => '4709262',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '52157942',
            'name' => 'MARTHA INES OLMOS MORENO',
            'performance_score' => 0,
            'has_exceeded_applications' => 0,
            'employment_date' => '2014-06-16 00:00:00',
            'wage' => '4709262',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '19453919',
            'name' => 'JAIRO MOSQUERA MENA',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '2014-04-16 00:00:00',
            'wage' => '4709262',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '79600546',
            'name' => 'JOHN HAROLD PINZON CARRILLO',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '2009-05-04 00:00:00',
            'wage' => '4709262',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '65738385',
            'name' => 'OLGA PATRICIA CARDENAS GUZMAN',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '2014-04-01 00:00:00',
            'wage' => '4709262',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '52329358',
            'name' => 'SANDRA PATRICIA SANABRIA CASTRO',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '2004-10-14 00:00:00',
            'wage' => '4709262',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '9396803',
            'name' => 'MANUEL IGNACIO SALAMANCA MERCHAN',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '2014-05-12 00:00:00',
            'wage' => '4709262',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '3195136',
            'name' => 'JOSE FERNANDO ESPINOSA ',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '2014-07-21 00:00:00',
            'wage' => '6176855',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 0
        ]);

        DB::table('employees') -> insert([
            'document' => '79598354',
            'name' => 'HECTOR HUMBERTO HERNANDEZ SERRANO',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '2011-01-04 00:00:00',
            'wage' => '4709262',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '88000876',
            'name' => 'MARCO TULIO MARQUEZ ROZO',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '2015-10-08 00:00:00',
            'wage' => '6176855',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '52219186',
            'name' => 'NARDA MAGNOLIA PUENTES SOTO',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '2016-01-18 00:00:00',
            'wage' => '4709262',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '52145712',
            'name' => 'CARMEN YANETH PEREA CRIOLLO',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '2014-07-01 00:00:00',
            'wage' => '4709262',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '52442853',
            'name' => 'JEIMMY ADRIANA DEL PILAR LEON CARDENAS',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '2013-01-15 00:00:00',
            'wage' => '4709262',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '87070190',
            'name' => 'IVAN FERNANDO ENRIQUEZ NARVAEZ',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '2018-10-01 00:00:00',
            'wage' => '6176855',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 0
        ]);

        DB::table('employees') -> insert([
            'document' => '40022595',
            'name' => 'BETTY YOLANDA VARGAS DOTOR',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '2014-05-02 00:00:00',
            'wage' => '6176855',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '52157557',
            'name' => 'LUZ ADRIANA QUINTERO SANCHEZ',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '2008-12-15 00:00:00',
            'wage' => '6176855',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '51857025',
            'name' => 'ISABEL CRISTINA SANCHEZ GARCIA',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '1994-08-17 00:00:00',
            'wage' => '4709262',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '36750318',
            'name' => 'PAOLA ANDREA MEZA VILLOTA',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '2014-07-01 00:00:00',
            'wage' => '4709262',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '79600910',
            'name' => 'NELSON FABIÁN QUIJANO RAMOS',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '2014-05-12 00:00:00',
            'wage' => '4709262',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '51924484',
            'name' => 'JANNE GRICEL RICO CARVAJAL',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '1996-06-04 00:00:00',
            'wage' => '4709262',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '52084900',
            'name' => 'EDNA LUZ MARALDY BELTRAN VILLAMIL',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '2010-03-01 00:00:00',
            'wage' => '4709262',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '79279432',
            'name' => 'HERNANDO RODRIGUEZ CHAPARRO',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '1995-10-19 00:00:00',
            'wage' => '6176855',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '79704985',
            'name' => 'JUAN CARLOS PARRA NIÑO',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '2014-08-11 00:00:00',
            'wage' => '6176855',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '14234189',
            'name' => 'AUGUSTO VARON RUIZ',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '2014-04-01 00:00:00',
            'wage' => '6176855',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '52588315',
            'name' => 'RUBY ESMITH GALEANO BLANCO',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '2013-01-09 00:00:00',
            'wage' => '4709262',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '52118473',
            'name' => 'JACQUELINE GARAVITO MARIÑO',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '2014-05-12 00:00:00',
            'wage' => '4709262',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '79426980',
            'name' => 'LUIS MAURICIO JULIO CUCANCHON',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '1996-05-15 00:00:00',
            'wage' => '4709262',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '79523944',
            'name' => 'ANDRES MAURICIO ZAMBRANO FLOREZ',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '2010-03-01 00:00:00',
            'wage' => '4709262',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '51916945',
            'name' => 'CLAUDIA PATRICIA RIVERA CASTRO',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '2008-12-18 00:00:00',
            'wage' => '4709262',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '79427316',
            'name' => 'PATRIK ERNESTO ALFONSO CAICEDO',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '2010-10-21 00:00:00',
            'wage' => '6176855',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '79592581',
            'name' => 'IVAN DARIO ARISTIZABAL HENAO',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '2014-04-01 00:00:00',
            'wage' => '6176855',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '79705785',
            'name' => 'HUGO YEZID GORDILLO GÓNGORA',
            'performance_score' => 0,
            'has_exceeded_applications' => 0,
            'employment_date' => '2019-03-12 00:00:00',
            'wage' => '3211673',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '52156821',
            'name' => 'CLAUDIA XIMENA ALVARADO CORREA',
            'performance_score' => 0,
            'has_exceeded_applications' => 0,
            'employment_date' => '2018-09-04 00:00:00',
            'wage' => '3950730',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 0
        ]);

        DB::table('employees') -> insert([
            'document' => '35534542',
            'name' => 'ÁNGELA PATRICIA CASTELLANOS BOTHIA',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '2018-09-03 00:00:00',
            'wage' => '4709262',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 0
        ]);

        DB::table('employees') -> insert([
            'document' => '52255047',
            'name' => 'MARIA FERNANDA BARANDICA ROLDAN',
            'performance_score' => 0,
            'has_exceeded_applications' => 0,
            'employment_date' => '2014-08-19 00:00:00',
            'wage' => '4709262',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '52709380',
            'name' => 'LILIANA AMPARO SIERRA PARDO',
            'performance_score' => 0,
            'has_exceeded_applications' => 0,
            'employment_date' => '2019-04-10 00:00:00',
            'wage' => '3950730',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 0
        ]);

        DB::table('employees') -> insert([
            'document' => '94536879',
            'name' => 'GERARDO ANDRES PARADA GOMEZ',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '2011-09-06 00:00:00',
            'wage' => '4709262',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '60352529',
            'name' => 'LUZ MARYORI VARGAS ROMERO',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '2014-05-02 00:00:00',
            'wage' => '4709262',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '14252732',
            'name' => 'LUIS EDUARDO ACUÑA GALINDO',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '2014-08-01 00:00:00',
            'wage' => '4709262',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '1032399951',
            'name' => 'YENNY PAOLA CADENA MEDINA',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '2018-08-15 00:00:00',
            'wage' => '3950730',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 0
        ]);

        DB::table('employees') -> insert([
            'document' => '52993316',
            'name' => 'JENY PATRICIA MARTIN BUITRAGO',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '2018-09-04 00:00:00',
            'wage' => '4367944',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 0
        ]);

        DB::table('employees') -> insert([
            'document' => '41723945',
            'name' => 'SUSANA PAREDES GONZALEZ',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '2010-01-21 00:00:00',
            'wage' => '4709262',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '13895205',
            'name' => 'ERNESTO FONTECHA FONTECHA',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '2014-11-11 00:00:00',
            'wage' => '4709262',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '35502226',
            'name' => 'MARCELA ROJAS CARDENAS',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '2014-08-01 00:00:00',
            'wage' => '4709262',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '1098643716',
            'name' => 'JULIANA MAYERLY BOSSA QUINTERO',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '2014-05-02 00:00:00',
            'wage' => '4709262',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '1049604703',
            'name' => 'ANGELA CONSUELO TORRES ACEVEDO',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '2014-07-07 00:00:00',
            'wage' => '4709262',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '51971462',
            'name' => 'GLADYS LILIANA NAJAR SARMIENTO',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '1995-08-24 00:00:00',
            'wage' => '4709262',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '52930452',
            'name' => 'MAGALY ALVAREZ MAHECHA',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '2015-01-02 00:00:00',
            'wage' => '4709262',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '63343228',
            'name' => 'AIDA NURY BERNAL JAIMES',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '2014-05-02 00:00:00',
            'wage' => '4709262',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '79147133',
            'name' => 'LUIS EDUARDO NIÑO VELANDIA',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '1997-09-01 00:00:00',
            'wage' => '4709262',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '51955669',
            'name' => 'SANDRA PILAR SALCEDO RUALES',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '2014-07-01 00:00:00',
            'wage' => '4709262',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '5967525',
            'name' => 'HERNAN LOZANO TRIANA',
            'performance_score' => 0,
            'has_exceeded_applications' => 0,
            'employment_date' => '1994-06-21 00:00:00',
            'wage' => '4709262',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '13460920',
            'name' => 'LUIS ALFREDO CONTRERAS TRUJILLO',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '2014-05-02 00:00:00',
            'wage' => '4709262',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '65745058',
            'name' => 'HERNERLY SHIRLEY SANCHEZ BOLIVAR',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '2014-09-01 00:00:00',
            'wage' => '4709262',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '46378326',
            'name' => 'GINA MARCELA CORTES PARRA',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '2011-09-07 00:00:00',
            'wage' => '4709262',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '19485279',
            'name' => 'LUIS BERNARDO CARRILLO ALVAREZ',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '1996-02-23 00:00:00',
            'wage' => '6176855',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '63391750',
            'name' => 'GLORIA CLEMENCIA GUARIN TORRES',
            'performance_score' => 98,
            'has_exceeded_applications' => 0,
            'employment_date' => '1993-01-06 00:00:00',
            'wage' => '6176855',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '12982033',
            'name' => 'LUIS ENRIQUE SILVA SEGURA',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '2010-01-21 00:00:00',
            'wage' => '2250064',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '19493203',
            'name' => 'LUIS FERNANDO CAMELO SILVA',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '1995-06-16 00:00:00',
            'wage' => '4709262',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '19380630',
            'name' => 'HERNANDO ALIRIO CADENA GOMEZ',
            'performance_score' => 0,
            'has_exceeded_applications' => 0,
            'employment_date' => '1996-03-05 00:00:00',
            'wage' => '4709262',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '45436651',
            'name' => 'ALMA ROSA AGUALIMPIA DUALIBY',
            'performance_score' => 0,
            'has_exceeded_applications' => 0,
            'employment_date' => '2006-02-01 00:00:00',
            'wage' => '4709262',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '52644107',
            'name' => 'DIANA LUCIA BARRIOS BARRERO',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '2015-02-05 00:00:00',
            'wage' => '6176855',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '79974873',
            'name' => 'EDWIN ALIRIO AVILA WALTEROS',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '2018-09-14 00:00:00',
            'wage' => '2077050',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 0
        ]);

        DB::table('employees') -> insert([
            'document' => '1024517813',
            'name' => 'CARLOS ANDRES JAIMES VERA',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '2019-05-02 00:00:00',
            'wage' => '1664922',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 0
        ]);

        DB::table('employees') -> insert([
            'document' => '40026100',
            'name' => 'ANA FRANCISCA USSA ALVAREZ',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '2015-11-12 00:00:00',
            'wage' => '4709262',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '52352122',
            'name' => 'MARCELA TERESA TORRES HARKER',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '2011-11-01 00:00:00',
            'wage' => '4709262',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '19333475',
            'name' => 'CARLOS ARTURO VELASCO ARIAS',
            'performance_score' => 99,
            'has_exceeded_applications' => 0,
            'employment_date' => '2014-04-01 00:00:00',
            'wage' => '4709262',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '80756290',
            'name' => 'LUIS GIOVANNY GARZON GIL',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '2014-08-01 00:00:00',
            'wage' => '4709262',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '51679826',
            'name' => 'RUTH YANETH RUIZ ALVAREZ',
            'performance_score' => 99,
            'has_exceeded_applications' => 0,
            'employment_date' => '1984-11-26 00:00:00',
            'wage' => '4709262',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '35196609',
            'name' => 'JENNY VARGAS GUATAQUIRA',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '2010-02-16 00:00:00',
            'wage' => '4709262',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '76315177',
            'name' => 'GILBER ALEXANDER CASTILLO COBO',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '1995-08-02 00:00:00',
            'wage' => '4709262',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '98137636',
            'name' => 'CAMILO ERNESTO MUÑOZ CABRERA',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '2014-05-02 00:00:00',
            'wage' => '4709262',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '36301321',
            'name' => 'LINA GISELLA SUAREZ LOSADA',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '2018-09-14 00:00:00',
            'wage' => '4709262',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 0
        ]);

        DB::table('employees') -> insert([
            'document' => '52361029',
            'name' => 'JADY OLIVA CABALLERO CRUZ',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '2014-05-02 00:00:00',
            'wage' => '6176855',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '80235033',
            'name' => 'EDGAR HERNAN RODRIGUEZ ARIZA',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '2009-01-05 00:00:00',
            'wage' => '6176855',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '52494017',
            'name' => 'YAMITH ROCIO NIÑO CONTRERAS',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '2014-04-07 00:00:00',
            'wage' => '4709262',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '51550981',
            'name' => 'MARIA MARGARITA GUTIERREZ DELGADO',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '1978-12-01 00:00:00',
            'wage' => '4709262',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '34613490',
            'name' => 'LADY MORENO CIFUENTES',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '2014-05-02 00:00:00',
            'wage' => '4709262',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '4443309',
            'name' => 'JOSE NORBERTO OSPINA HERNÁNDEZ',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '2014-07-14 00:00:00',
            'wage' => '4709262',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '79157074',
            'name' => 'OMAR ORLANDO GARCIA BOGOTA',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '2014-05-12 00:00:00',
            'wage' => '6176855',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '52621733',
            'name' => 'LUISA FERNANDA HENAO RAMIREZ',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '2010-03-01 00:00:00',
            'wage' => '6176855',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '30203750',
            'name' => 'MARIA DEL PILAR ARDILA QUINTERO',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '2014-06-03 00:00:00',
            'wage' => '6176855',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 1
        ]);

        DB::table('employees') -> insert([
            'document' => '1019040387',
            'name' => 'JOHANNA ATEHORTUA RODRIGUEZ',
            'performance_score' => 100,
            'has_exceeded_applications' => 0,
            'employment_date' => '2018-09-14 00:00:00',
            'wage' => '1920275',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_administrative' => 0
        ]);

    }
}
