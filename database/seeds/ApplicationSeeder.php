<?php

use Illuminate\Database\Seeder;
use App\Models\Employee;
use App\Models\Recipient;
use Illuminate\Support\Carbon;

class ApplicationSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {

        DB::table('applications') -> insert([
            'filling_number' => 'IE-021555',
            'comments' => 'SUBSANAR: DE ACUERDO AL ARTICULO 10° NUMERAL A) EN LA CARTA DE MANIFESTACIÓN DE INTERES FALTA: 1. NUMERO DE IDENTIFICACIÓN DEL SERVIDOR. 2. NUMERO DE IDENTIFICACIÓN DE LOS BENEFICIARIOS CON LA INDICACIÓN DE PARENTESCO, EN CASO DE APLICAR 3. INDICACIÓN DE LOS ESTUDIOS A NIVEL A CURSAR, ASI COMO EL NOMBRE DE LA INSTITUCIÓN LA CUAL DEBE ESTAR DEBIDAMENTE ACREDITADA POR LA AUTORIDAD COMPETENTE. 4.FECHA DE INICIO Y CULMINACIÓN DE LOS ESTUDIOS A CURSAR. EN LOS CASOSDE EDUCACIÓN PREESCOLAR, BASICA Y MEDIASE INDICARÁ ESTA INFORMACIÓN DE MANERA SEMESTRAL. 5. FALTA VALOR DEL SEMESTRE, EN LOS CASOS DE EDUCACIÓN PRESCOLAR, BÁSICA O MEDIA SE DEBE CALCULAR EL VALOR DE LOS PAGOS MENSUALES, UNICAMENTE POR CONCEPTO DE PENSIÓN ESCOLAR.',
            'has_interest_letter' => 1,
            'has_juramented_declaration' => 1,
            'employee' => Employee::firstWhere('document', 11348063) -> id,
            'recipient_1' => Recipient::firstWhere('document', 1011095053) -> id,
            'recipient_2' => Recipient::firstWhere('document', 1027285566) -> id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('applications') -> insert([
            'filling_number' => 'ER-113757',
            'comments' => 'SUBSANAR: DE ACUERDO AL ARTICULO 10° NUMERAL FALTA: A) CARTA DE MANIFESTACIÓN DE INTERES ',
            'has_interest_letter' => 0,
            'has_juramented_declaration' => 0,
            'employee' => Employee::firstWhere('document', 37888643) -> id,
            'recipient_1' => Recipient::firstWhere('document', 1007103450) -> id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('applications') -> insert([
            'filling_number' => 'ER-113760, ER-113760',
            'comments' => 'SUBSANAR LA DECLARACIÓN JURAMENTADA',
            'has_interest_letter' => 1,
            'has_juramented_declaration' => 0,
            'employee' => Employee::firstWhere('document', 36301321) -> id,
            'recipient_1' => Recipient::firstWhere('document', 36301321) -> id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('applications') -> insert([
            'filling_number' => 'ER-113763',
            'comments' => 'CUMPLE',
            'has_interest_letter' => 1,
            'has_juramented_declaration' => 1,
            'employee' => Employee::firstWhere('document', 52476069) -> id,
            'recipient_1' => Recipient::firstWhere('document', 1000862754) -> id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('applications') -> insert([
            'filling_number' => 'ER-113766',
            'comments' => 'SUBSANAR: DE ACUERDO AL ARTICULO 10° NUMERAL A) EN LA CARTA DE MANIFESTACIÓN DE INTERES FALTA: 2. NUMERO DE IDENTIFICACIÓN DEL BENEFICIARIO 3. FECHAS DE INICIO Y CULMINACIÓN DE LOS ESTUDIOS A CURSAR, EN LOS CASOS DE EDUCACIÓN PREESCOLAR, BASICA O MEDIA SE INDICARA ESTA INFORMACIÓN DE MANERA SEMESTRAL. 4. VALOR DEL SEMESTRE, EN LOS CASOS DE EDUCACIÓN PREESCOLAR, BASICA O MEDIA SE DEBE CALCULAR EL VALOR DE LOS PAGOS MENSUALES, UNICAMENTE POR CONCEPTO DE PENSION ESCOLAR.',
            'has_interest_letter' => 1,
            'has_juramented_declaration' => 1,
            'employee' => Employee::firstWhere('document', 29126388) -> id,
            'recipient_1' => Recipient::firstWhere('document', 1016597789) -> id,
            'recipient_2' => Recipient::firstWhere('document', 1110043931) -> id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('applications') -> insert([
            'filling_number' => 'ER-113771',
            'comments' => 'NO HAY OBSERVACIONES',
            'has_interest_letter' => 1,
            'has_juramented_declaration' => 1,
            'employee' => Employee::firstWhere('document', 65745058) -> id,
            'recipient_1' => Recipient::firstWhere('document', 65745058) -> id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('applications') -> insert([
            'filling_number' => 'ER-113774',
            'comments' => 'SUBSANAR: DE ACUERDO AL ARTICULO 10° NUMERAL A) EN LA CARTA DE MANIFESTACIÓN DE INTERES FALTA: 1. FECHAS DE INICIO Y CULMINACIÓN DE LOS ESTUDIOS A CURSAR. EN LOS CASOS DE EDUCACIÓN PREESCOLAR, BASICA O MEDIA SE INDICARA ESTA INFORMACIÓN DE MANERA SEMESTRAL.',
            'has_interest_letter' => 1,
            'has_juramented_declaration' => 0,
            'employee' => Employee::firstWhere('document', 51656147) -> id,
            'recipient_1' => Recipient::firstWhere('document', 1031653672) -> id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('applications') -> insert([
            'filling_number' => 'ER-113794',
            'comments' => 'NO HAY OBSERVACIONES',
            'has_interest_letter' => 1,
            'has_juramented_declaration' => 1,
            'employee' => Employee::firstWhere('document', 19425324) -> id,
            'recipient_1' => Recipient::firstWhere('document', 1018465745) -> id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('applications') -> insert([
            'filling_number' => 'ER-116108, ER-113805',
            'comments' => 'NO HAY ',
            'has_interest_letter' => 1,
            'has_juramented_declaration' => 1,
            'employee' => Employee::firstWhere('document', 36278435) -> id,
            'recipient_1' => Recipient::firstWhere('document', 1032494011) -> id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('applications') -> insert([
            'filling_number' => 'ER-113845, ER-113829',
            'has_interest_letter' => 1,
            'has_juramented_declaration' => 1,
            'employee' => Employee::firstWhere('document', 35529764) -> id,
            'recipient_1' => Recipient::firstWhere('document', 35529764) -> id,
            'recipient_2' => Recipient::firstWhere('document', 1001324203) -> id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('applications') -> insert([
            'filling_number' => 'ER-113902, ER-113802, ER-113854',
            'comments' => 'SUBSANAR: DE ACUERDO AL ARTICULO 10° NUMERAL A) EN LA CARTA DE MANIFESTACIÓN DE INTERES FALTA: 1. NUMERO DE IDENTIFICACIÓN DE LAS BENEFICIARIAS',
            'has_interest_letter' => 1,
            'has_juramented_declaration' => 1,
            'employee' => Employee::firstWhere('document', 79147133) -> id,
            'recipient_1' => Recipient::firstWhere('document', 1016094160) -> id,
            'recipient_2' => Recipient::firstWhere('document', 1016105011) -> id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('applications') -> insert([
            'filling_number' => 'ER-113867',
            'comments' => 'NO HAY ',
            'has_interest_letter' => 1,
            'has_juramented_declaration' => 1,
            'employee' => Employee::firstWhere('document', 52411973) -> id,
            'recipient_1' => Recipient::firstWhere('document', 52411973) -> id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('applications') -> insert([
            'filling_number' => 'ER-113865',
            'comments' => 'SUBSANAR: DE ACUERDO AL ARTICULO 10° NUMERAL A) EN LA CARTA DE MANIFESTACIÓN DE INTERES FALTA: 1. NUMERO DE IDENTIFICACIÓN DE LA BENEFICIARIA. 2.FECHAS DE INICIO Y CULMINACIÓN DE LOS ESTUDIOS A CURSAR. EN LOS CASOS DE EDUCACIÓN PREESCOLAR, BASICA O MEDIA SE INDICARA ESTA INFORMACIÓN DE MANERA SEMESTRAL',
            'has_interest_letter' => 1,
            'has_juramented_declaration' => 1,
            'employee' => Employee::firstWhere('document', 39616599) -> id,
            'recipient_1' => Recipient::firstWhere('document', 1001344614) -> id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('applications') -> insert([
            'filling_number' => 'ER-113876,ER-113862',
            'comments' => 'EL CERTIFICADO DEL BENEFIIARIO MANUEL FELIPE NEIRA MARIN NO COINCIDEN CON EL PARENTESCO DEL SERVIDOR',
            'has_interest_letter' => 1,
            'has_juramented_declaration' => 1,
            'employee' => Employee::firstWhere('document', 79592581) -> id,
            'recipient_1' => Recipient::firstWhere('document', 1188215807) -> id,
            'recipient_2' => Recipient::firstWhere('document', 1001010890) -> id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('applications') -> insert([
            'filling_number' => 'IE-021557, ER-114485-R',
            'comments' => 'NO HAY ',
            'has_interest_letter' => 1,
            'has_juramented_declaration' => 1,
            'employee' => Employee::firstWhere('document', 51916945) -> id,
            'recipient_1' => Recipient::firstWhere('document', 1007019711) -> id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('applications') -> insert([
            'filling_number' => 'ER-113868',
            'comments' => 'SUBSANAR: DE ACUERDO AL ARTICULO 10° NUMERAL A) EN LA CARTA DE MANIFESTACIÓN DE INTERES FALTA: 1. NUMERO DE IDENTIFICACIÓN DEL BENEFICIARIO.',
            'has_interest_letter' => 1,
            'has_juramented_declaration' => 1,
            'employee' => Employee::firstWhere('document', 52103118) -> id,
            'recipient_1' => Recipient::firstWhere('document', 1010046243) -> id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('applications') -> insert([
            'filling_number' => 'ER-116474',
            'comments' => 'SUBSANAR LA DECLARACIÓN JURAMENTADA',
            'has_interest_letter' => 1,
            'has_juramented_declaration' => 0,
            'employee' => Employee::firstWhere('document', 79480282) -> id,
            'recipient_1' => Recipient::firstWhere('document', 1233908460) -> id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('applications') -> insert([
            'filling_number' => 'ER-116374',
            'comments' => 'SUBSANAR: DE ACUERDO AL ARTICULO 10° NUMERAL A) EN LA CARTA DE MANIFESTACIÓN DE INTERES FALTA: 1. NUMERO DE IDENTIFICACIÓN DE LAS BENEFICIARIAS.',
            'has_interest_letter' => 1,
            'has_juramented_declaration' => 0,
            'employee' => Employee::firstWhere('document', 80235033) -> id,
            'recipient_1' => Recipient::firstWhere('document', 1025700640) -> id,
            'recipient_2' => Recipient::firstWhere('document', 1025548570) -> id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('applications') -> insert([
            'filling_number' => 'ER-116251',
            'comments' => 'SUBSANAR: DE ACUERDO AL ARTICULO 10° NUMERAL A) EN LA CARTA DE MANIFESTAIÓN DE INTERES FALTA: 1. NUMERO DE IDENTIFICACIÓN DEL SERVIDOR. 2. NUMERO DE IDENTIFICACIÓN DE LA BENEFICIARIA.',
            'has_interest_letter' => 1,
            'has_juramented_declaration' => 1,
            'employee' => Employee::firstWhere('document', 39548135) -> id,
            'recipient_1' => Recipient::firstWhere('document', 1014269196) -> id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('applications') -> insert([
            'filling_number' => 'ER-116179',
            'comments' => 'SUBSANAR: DE ACUERDO AL ARTICULO 10° NUMERAL A) EN LA CARTA DE MANIFESTACIÓN DE INTERES FALTA: 1. FECHAS DE INICIO Y CULMINACIÓN DE LOS ESTUDIOS A CURSAR. EN LOS CASOS DE EDUCACIÓN PREESCOLAR, BASICA O MEDIA SE INDICARA ESTA INFORMACIÓN DE MANERA SEMESTRAL',
            'has_interest_letter' => 1,
            'has_juramented_declaration' => 1,
            'employee' => Employee::firstWhere('document', 79974873) -> id,
            'recipient_1' => Recipient::firstWhere('document', 1016606051) -> id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('applications') -> insert([
            'filling_number' => 'ER-116140',
            'comments' => 'SUBSANAR: DE ACUERDO AL ARTICULO 10° NUMERAL A) EN LA CARTA DE MANIFESTACIÓN DE INTERES FALTA: 1. NUMERO DE IDENTIFICACIÓN DE LA BENEFICIARIA',
            'has_interest_letter' => 1,
            'has_juramented_declaration' => 1,
            'employee' => Employee::firstWhere('document', 60308989) -> id,
            'recipient_1' => Recipient::firstWhere('document', 1032492551) -> id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('applications') -> insert([
            'filling_number' => 'ER-115908',
            'comments' => 'SUBSANAR: DE ACUERDO AL ARTICULO 10° NUMERAL A) EN LA CARTA DE MANIFESTACIÓN DE INTERES FALTA: 1. INDICACIÓN DE LS ESTUDIOS A NIVEL A CURSAR, ASI COMO EL NOMBRE DE LA INSTITUCIÓN LA CUAL DEBE ESTAR DEBIDAMENTE ACREDITADA POR LA AUTORIDAD COMPETENTE. 2.FECHA DE INICIO Y CULMINACIÓN DE LOS ESTUDIOS A CURSAR. EN LOS CASOSDE EDUCACIÓN PREESCOLAR, BASICA Y MEDIASE INDICARÁ ESTA INFORMACIÓN DE MANERA SEMESTRAL. 3. FALTA VALOR DEL SEMESTRE, EN LOS CASOS DE EDUCACIÓN PRESCOLAR, BÁSICA O MEDIA SE DEBE CALCULAR EL VALOR DE LOS PAGOS MENSUALES, UNICAMENTE POR CONCEPTO DE PENSIÓN ESCOLAR.',
            'has_interest_letter' => 1,
            'has_juramented_declaration' => 1,
            'employee' => Employee::firstWhere('document', 11791330) -> id,
            'recipient_1' => Recipient::firstWhere('document', 1011201600) -> id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('applications') -> insert([
            'filling_number' => 'ER-115775',
            'comments' => 'SUBSANAR: DE ACUERDO AL ARTICULO 10° NUMERAL A) EN LA CARTA DE MANIFESTACIÓN DE INTERES FALTA: 1 FALTA VALOR DEL SEMESTRE, EN LOS CASOS DE EDUCACIÓN PRESCOLAR, BÁSICA O MEDIA SE DEBE CALCULAR EL VALOR DE LOS PAGOS MENSUALES, UNICAMENTE POR CONCEPTO DE PENSIÓN ESCOLAR',
            'has_interest_letter' => 1,
            'has_juramented_declaration' => 1,
            'employee' => Employee::firstWhere('document', 79590354) -> id,
            'recipient_1' => Recipient::firstWhere('document', 1014992731) -> id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('applications') -> insert([
            'filling_number' => '115466',
            'comments' => 'NO HAY ',
            'has_interest_letter' => 1,
            'has_juramented_declaration' => 0,
            'employee' => Employee::firstWhere('document', 24138500) -> id,
            'recipient_1' => Recipient::firstWhere('document', 1233695448) -> id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('applications') -> insert([
            'filling_number' => 'ER-115253',
            'comments' => 'SUBSANAR: DE ACUERDO AL ARTICULO 10° NUMERAL A) EN LA CARTA DE MANIFESTACIÓN DE INTERES FALTA: 1 FALTA VALOR DEL SEMESTRE, EN LOS CASOS DE EDUCACIÓN PRESCOLAR, BÁSICA O MEDIA SE DEBE CALCULAR EL VALOR DE LOS PAGOS MENSUALES, UNICAMENTE POR CONCEPTO DE PENSIÓN ESCOLAR',
            'has_interest_letter' => 1,
            'has_juramented_declaration' => 1,
            'employee' => Employee::firstWhere('document', 35196321) -> id,
            'recipient_1' => Recipient::firstWhere('document', 1019846021) -> id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('applications') -> insert([
            'filling_number' => 'ER-115247',
            'comments' => 'SUBSANAR: DE ACUERDO AL ARTICULO 10° NUMERAL A) EN LA CARTA DE MANIFESTACIÓN DE INTERES FALTA: 1 FALTA VALOR DEL SEMESTRE, EN LOS CASOS DE EDUCACIÓN PRESCOLAR, BÁSICA O MEDIA SE DEBE CALCULAR EL VALOR DE LOS PAGOS MENSUALES, UNICAMENTE POR CONCEPTO DE PENSIÓN ESCOLAR',
            'has_interest_letter' => 1,
            'has_juramented_declaration' => 0,
            'employee' => Employee::firstWhere('document', 20352576) -> id,
            'recipient_1' => Recipient::firstWhere('document', 1014739803) -> id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('applications') -> insert([
            'filling_number' => 'ER-115208, ER-115202',
            'comments' => 'SUBSANAR: DE ACUERDO AL ARTICULO 10° NUMERAL A) EN LA CARTA DE MANIFESTACIÓN DE INTERES FALTA: 1 FALTA VALOR DEL SEMESTRE, EN LOS CASOS DE EDUCACIÓN PRESCOLAR, BÁSICA O MEDIA SE DEBE CALCULAR EL VALOR DE LOS PAGOS MENSUALES, UNICAMENTE POR CONCEPTO DE PENSIÓN ESCOLAR DEL BENEFICIARIO ',
            'has_interest_letter' => 1,
            'has_juramented_declaration' => 1,
            'employee' => Employee::firstWhere('document', 52930452) -> id,
            'recipient_1' => Recipient::firstWhere('document', 52930452) -> id,
            'recipient_2' => Recipient::firstWhere('document', 1019844442) -> id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('applications') -> insert([
            'filling_number' => 'ER-115165',
            'comments' => 'NO HAY ',
            'has_interest_letter' => 1,
            'has_juramented_declaration' => 1,
            'employee' => Employee::firstWhere('document', 30203750) -> id,
            'recipient_1' => Recipient::firstWhere('document', 1014979782) -> id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('applications') -> insert([
            'filling_number' => 'ER-115145',
            'comments' => 'SUBSANAR: DE ACUERDO AL ARTICULO 10° NUMERAL A) EN LA CARTA DE MANIFESTACIÓN DE INTERES FALTA: 1 FALTA VALOR DEL SEMESTRE, EN LOS CASOS DE EDUCACIÓN PRESCOLAR, BÁSICA O MEDIA SE DEBE CALCULAR EL VALOR DE LOS PAGOS MENSUALES, UNICAMENTE POR CONCEPTO DE PENSIÓN ESCOLAR',
            'has_interest_letter' => 1,
            'has_juramented_declaration' => 1,
            'employee' => Employee::firstWhere('document', 52029898) -> id,
            'recipient_1' => Recipient::firstWhere('document', 1014483761) -> id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('applications') -> insert([
            'filling_number' => 'ER-115106, ER-115102',
            'comments' => 'NO HAY ',
            'has_interest_letter' => 1,
            'has_juramented_declaration' => 1,
            'employee' => Employee::firstWhere('document', 52519672) -> id,
            'recipient_1' => Recipient::firstWhere('document', 52519672) -> id,
            'recipient_2' => Recipient::firstWhere('document', 79789430) -> id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('applications') -> insert([
            'filling_number' => 'ER-115093',
            'comments' => 'SUBSANAR: DE ACUERDO AL ARTICULO 10° NUMERAL A) EN LA CARTA DE MANIFESTACIÓN DE INTERES FALTA: 1 FALTA VALOR DEL SEMESTRE, EN LOS CASOS DE EDUCACIÓN PRESCOLAR, BÁSICA O MEDIA SE DEBE CALCULAR EL VALOR DE LOS PAGOS MENSUALES, UNICAMENTE POR CONCEPTO DE PENSIÓN ESCOLAR 2. IDENTIFICACIÓN DEL BENEFICIARIO CON LA INDICACIÓN DEL PARENTESCO, EN CASO DE APLICAR. 3. FECHAS DE INICIO Y CULMINACIÓN DE LOS ESTUDIOS A CURSAR. EN LOS CASOS DE EDUCACIÓN PREESCOLAR, BASICA O MEDIA SE INDICARÁ ESTA INFORMACIÓN DE MANERA SEMESTRAL.',
            'has_interest_letter' => 1,
            'has_juramented_declaration' => 1,
            'employee' => Employee::firstWhere('document', 9396803) -> id,
            'recipient_1' => Recipient::firstWhere('document', 9396803) -> id,
            'recipient_2' => Recipient::firstWhere('document', 1058354457) -> id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('applications') -> insert([
            'filling_number' => 'ER-115082',
            'comments' => 'SUBSANAR: DE ACUERDO AL ARTICULO 10° NUMERAL A) EN LA CARTA DE MANIFESTACIÓN DE INTERES FALTA: 1. FECHAS DE INICIO Y CULMINACIÓN DE LOS ESTUDIOS A CURSAR. EN LOS CASOS DE EDUCACIÓN PREESCOLAR, BASICA O MEDIA SE INDICARÁ ESTA INFORMACIÓN DE MANERA SEMESTRAL.',
            'has_interest_letter' => 1,
            'has_juramented_declaration' => 0,
            'employee' => Employee::firstWhere('document', 52858476) -> id,
            'recipient_1' => Recipient::firstWhere('document', 1220217331) -> id,
            'recipient_2' => Recipient::firstWhere('document', 79750237) -> id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('applications') -> insert([
            'filling_number' => 'ER-115049',
            'comments' => 'SUBSANAR: DE ACUERDO AL ARTICULO 10° NUMERAL A) EN LA CARTA DE MANIFESTACIÓN DE INTERES FALTA: 1. NUMERO DE IDENTIFICACIÓN DE LOS BENEFICIARIOS CON LA INDICACIÓN DEL PARENTESCO, EN CASO DE APLICAR 2. VALOR DEL SEMESTRE, EN LOS CASOS DE EDUCACIÓN PRESCOLAR, BÁSICA O MEDIA SE DEBE CALCULAR EL VALOR DE LOS PAGOS MENSUALES, UNICAMENTE POR CONCEPTO DE PENSIÓN ESCOLAR',
            'has_interest_letter' => 1,
            'has_juramented_declaration' => 1,
            'employee' => Employee::firstWhere('document', 52485582) -> id,
            'recipient_1' => Recipient::firstWhere('document', 1034399592) -> id,
            'recipient_2' => Recipient::firstWhere('document', 1011217172) -> id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('applications') -> insert([
            'filling_number' => 'ER-115025',
            'comments' => 'SUBSANAR: DE ACUERDO AL ARTICULO 10° NUMERAL A) EN LA CARTA DE MANIFESTACIÓN DE INTERES FALTA: 1. NUMERO DE IDENTIFICACIÓN DEL BENEFICIARIO CON LA INDICACIÓN DEL PARENTESCO, EN CASO DE APLICAR',
            'has_interest_letter' => 1,
            'has_juramented_declaration' => 1,
            'employee' => Employee::firstWhere('document', 52033318) -> id,
            'recipient_1' => Recipient::firstWhere('document', 79646970) -> id,
            'recipient_2' => Recipient::firstWhere('document', 1021393597) -> id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('applications') -> insert([
            'filling_number' => 'ER-114996',
            'comments' => 'SUBSANAR: DE ACUERDO AL ARTICULO 10° NUMERAL A) EN LA CARTA DE MANIFESTACIÓN DE INTERES FALTA: 1. NUMERO DE IDENTIFICACIÓN DEL BENEFICIARIO CON LA INDICACIÓN DEL PARENTESCO, EN CASO DE APLICAR',
            'has_interest_letter' => 1,
            'has_juramented_declaration' => 1,
            'employee' => Employee::firstWhere('document', 19261879) -> id,
            'recipient_1' => Recipient::firstWhere('document', 1032492861) -> id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('applications') -> insert([
            'filling_number' => 'ER-114963',
            'comments' => 'SUBSANAR: DE ACUERDO AL ARTICULO 10° NUMERAL A) EN LA CARTA DE MANIFESTACIÓN DE INTERES FALTA: 1 FECHAS DE INICIO Y CULMINACIÓN DE LOS ESTUDIOS A CURSAR. EN LOS CASOS DE EDUCACIÓN PREESCOLAR, BASICA O MEDIA SE INDICARÁ ESTA INFORMACIÓN DE MANERA SEMESTRAL. 2. VALOR DEL SEMESTRE, EN LOS CASOS DE EDUCACIÓN PRESCOLAR, BÁSICA O MEDIA SE DEBE CALCULAR EL VALOR DE LOS PAGOS MENSUALES, UNICAMENTE POR CONCEPTO DE PENSIÓN ESCOLAR',
            'has_interest_letter' => 1,
            'has_juramented_declaration' => 1,
            'employee' => Employee::firstWhere('document', 51792695) -> id,
            'recipient_1' => Recipient::firstWhere('document', 1015076782) -> id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('applications') -> insert([
            'filling_number' => 'ER-114904, ER-114874',
            'comments' => 'SUBSANAR: DE ACUERDO AL ARTICULO 10° NUMERAL A) EN LA CARTA DE MANIFESTACIÓN DE INTERES FALTA: 1 FECHAS DE INICIO Y CULMINACIÓN DE LOS ESTUDIOS A CURSAR. EN LOS CASOS DE EDUCACIÓN PREESCOLAR, BASICA O MEDIA SE INDICARÁ ESTA INFORMACIÓN DE MANERA SEMESTRAL.',
            'has_interest_letter' => 1,
            'has_juramented_declaration' => 1,
            'employee' => Employee::firstWhere('document', 45436651) -> id,
            'recipient_1' => Recipient::firstWhere('document', 1143374511) -> id,
            'recipient_2' => Recipient::firstWhere('document', 1014296039) -> id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('applications') -> insert([
            'filling_number' => 'ER-114884',
            'comments' => 'SUBSANAR: DE ACUERDO AL ARTICULO 10° NUMERAL A) EN LA CARTA DE MANIFESTACIÓN DE INTERES FALTA: 1. AL BENEFICIARIO UNO LE HACE FALTA EL VALOR DEL SEMESTRE, EN LOS CASOS DE EDUCACIÓN PRESCOLAR, BÁSICA O MEDIA SE DEBE CALCULAR EL VALOR DE LOS PAGOS MENSUALES, UNICAMENTE POR CONCEPTO DE PENSIÓN ESCOLAR 2. FECHAS DE INICIO Y CULMINACIÓN DE LOS ESTUDIOS A CURSAR. EN LOS CASOS DE EDUCACIÓN PREESCOLAR, BASICA O MEDIA SE INDICARÁ ESTA INFORMACIÓN DE MANERA SEMESTRAL.',
            'has_interest_letter' => 1,
            'has_juramented_declaration' => 0,
            'employee' => Employee::firstWhere('document', 79435633) -> id,
            'recipient_1' => Recipient::firstWhere('document', 79435633) -> id,
            'recipient_2' => Recipient::firstWhere('document', 52634105) -> id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('applications') -> insert([
            'filling_number' => 'ER-114841',
            'comments' => 'SUBSANAR: DE ACUERDO AL ARTICULO 10° NUMERAL A) EN LA CARTA DE MANIFESTACIÓN DE INTERES FALTA: 1 FECHAS DE INICIO Y CULMINACIÓN DE LOS ESTUDIOS A CURSAR. EN LOS CASOS DE EDUCACIÓN PREESCOLAR, BASICA O MEDIA SE INDICARÁ ESTA INFORMACIÓN DE MANERA SEMESTRAL. 2. VALOR DEL SEMESTRE, EN LOS CASOS DE EDUCACIÓN PRESCOLAR, BÁSICA O MEDIA SE DEBE CALCULAR EL VALOR DE LOS PAGOS MENSUALES, UNICAMENTE POR CONCEPTO DE PENSIÓN ESCOLAR',
            'has_interest_letter' => 1,
            'has_juramented_declaration' => 1,
            'employee' => Employee::firstWhere('document', 37579219) -> id,
            'recipient_1' => Recipient::firstWhere('document', 1096215566) -> id,
            'recipient_2' => Recipient::firstWhere('document', 1096235363) -> id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('applications') -> insert([
            'filling_number' => 'ER-114820',
            'comments' => 'SUBSANAR: DE ACUERDO AL ARTICULO 10° NUMERAL A) EN LA CARTA DE MANIFESTACIÓN DE INTERES FALTA: 1. NUMERO DE IDENTIFICACIÓN DE LAS BENEFICIARIAS CON LA INDICACIÓN DEL PARENTESCO, EN CASO DE APLICAR',
            'has_interest_letter' => 1,
            'has_juramented_declaration' => 1,
            'employee' => Employee::firstWhere('document', 74379564) -> id,
            'recipient_1' => Recipient::firstWhere('document', 1052414882) -> id,
            'recipient_2' => Recipient::firstWhere('document', 1052394362) -> id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('applications') -> insert([
            'filling_number' => 'ER-114799',
            'has_interest_letter' => 1,
            'has_juramented_declaration' => 1,
            'employee' => Employee::firstWhere('document', 52172034) -> id,
            'recipient_1' => Recipient::firstWhere('document', 52172034) -> id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('applications') -> insert([
            'filling_number' => 'ER-114767',
            'comments' => 'SUBSANAR: DE ACUERDO AL ARTICULO 10° NUMERAL A) EN LA CARTA DE MANIFESTACIÓN DE INTERES FALTA: 1 FECHAS DE INICIO Y CULMINACIÓN DE LOS ESTUDIOS A CURSAR. EN LOS CASOS DE EDUCACIÓN PREESCOLAR, BASICA O MEDIA SE INDICARÁ ESTA INFORMACIÓN DE MANERA SEMESTRAL. 2. VALOR DEL SEMESTRE, EN LOS CASOS DE EDUCACIÓN PRESCOLAR, BÁSICA O MEDIA SE DEBE CALCULAR EL VALOR DE LOS PAGOS MENSUALES, UNICAMENTE POR CONCEPTO DE PENSIÓN ESCOLAR',
            'has_interest_letter' => 1,
            'has_juramented_declaration' => 1,
            'employee' => Employee::firstWhere('document', 23454236) -> id,
            'recipient_1' => Recipient::firstWhere('document', 1188214571) -> id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('applications') -> insert([
            'filling_number' => 'ER-114567',
            'comments' => 'SUBSANAR: DE ACUERDO AL ARTICULO 10° NUMERAL A) EN LA CARTA DE MANIFESTACIÓN DE INTERES FALTA: 1 FECHAS DE INICIO Y CULMINACIÓN DE LOS ESTUDIOS A CURSAR. EN LOS CASOS DE EDUCACIÓN PREESCOLAR, BASICA O MEDIA SE INDICARÁ ESTA INFORMACIÓN DE MANERA SEMESTRAL.',
            'has_interest_letter' => 1,
            'has_juramented_declaration' => 1,
            'employee' => Employee::firstWhere('document', 51971462) -> id,
            'recipient_1' => Recipient::firstWhere('document', 1193130702) -> id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('applications') -> insert([
            'filling_number' => 'ER-114522',
            'comments' => 'SUBSANAR: DE ACUERDO AL ARTICULO 10° NUMERAL A) EN LA CARTA DE MANIFESTACIÓN DE INTERES FALTA: 1. NÚMERO DE IDENTIFICACIÓN DE LOS BENEFICIARIOS 2. FECHAS DE INICIO Y CULMINACIÓN DE LOS ESTUDIOS A CURSAR. EN LOS CASOS DE EDUCACIÓN PREESCOLAR, BASICA O MEDIA SE INDICARA ESTA INFORMACIÓN DE MANERA SEMESTRAL 3. VALOR DEL SEMESTRE, EN LOS CASOS DE EDUCACIÓN PREESCOLAR, BASICA O MEDIA SE DEBE CALCULAR EL VALOR DE LOS PAGOS MENSUALES, UNICAMENTE POR CONCEPTO DE PENSION ESCOLAR',
            'has_interest_letter' => 1,
            'has_juramented_declaration' => 1,
            'employee' => Employee::firstWhere('document', 32707483) -> id,
            'recipient_1' => Recipient::firstWhere('document', 1000270150) -> id,
            'recipient_2' => Recipient::firstWhere('document', 1014861375) -> id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('applications') -> insert([
            'filling_number' => 'ER-114458',
            'comments' => 'SUBSANAR: DE ACUERDO AL ARTICULO 10° NUMERAL A) EN LA CARTA DE MANIFESTACIÓN DE INTERES FALTA: 1. NÚMERO DE IDENTIFICACIÓN DE LOS BENEFICIARIOS 2. FECHAS DE INICIO Y CULMINACIÓN DE LOS ESTUDIOS A CURSAR. EN LOS CASOS DE EDUCACIÓN PREESCOLAR, BASICA O MEDIA SE INDICARA ESTA INFORMACIÓN DE MANERA SEMESTRAL 3. VALOR DEL SEMESTRE, EN LOS CASOS DE EDUCACIÓN PREESCOLAR, BASICA O MEDIA SE DEBE CALCULAR EL VALOR DE LOS PAGOS MENSUALES, UNICAMENTE POR CONCEPTO DE PENSION ESCOLAR',
            'has_interest_letter' => 1,
            'has_juramented_declaration' => 1,
            'employee' => Employee::firstWhere('document', 65554501) -> id,
            'recipient_1' => Recipient::firstWhere('document', 1026599461) -> id,
            'recipient_2' => Recipient::firstWhere('document', 1003556735) -> id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('applications') -> insert([
            'filling_number' => 'ER-114437',
            'comments' => 'SUBSANAR: DE ACUERDO AL ARTICULO 10° NUMERAL A) EN LA CARTA DE MANIFESTACIÓN DE INTERES FALTA 1. FECHHAS DE INICIO Y CULMINACIÓN DE LOS ESTUDIOS A CURSAR. EN LOS CASOS DE EDUCACIÓN PREESCOLAR, BASICA O MEDIA SE INDICARA ESTA INFORMACIÓN DE MANERA SEMESTRAL',
            'has_interest_letter' => 1,
            'has_juramented_declaration' => 1,
            'employee' => Employee::firstWhere('document', 19493203) -> id,
            'recipient_1' => Recipient::firstWhere('document', 1013671262) -> id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('applications') -> insert([
            'filling_number' => 'ER-114433',
            'has_interest_letter' => 1,
            'has_juramented_declaration' => 1,
            'employee' => Employee::firstWhere('document', 52103154) -> id,
            'recipient_1' => Recipient::firstWhere('document', 1013684740) -> id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('applications') -> insert([
            'filling_number' => 'ER-114405',
            'has_interest_letter' => 1,
            'has_juramented_declaration' => 1,
            'employee' => Employee::firstWhere('document', 52703855) -> id,
            'recipient_1' => Recipient::firstWhere('document', 1014976870) -> id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('applications') -> insert([
            'filling_number' => 'ER-114375',
            'comments' => 'SUBSANAR: DE ACUERDO AL ARTICULO 10° NUMERAL A) EN LA CARTA DE MANIFESTACIÓN DE INTERES FALTA 1. FECHAS DE INICIO Y CULMINACIÓN DE LOS ESTUDIOS A CURSAR. EN LOS CASOS DE EDUCACIÓN PREESCOLAR, BASICA O MEDIA SE INDICARA ESTA INFORMACIÓN DE MANERA SEMESTRAL 2. VALOR DEL SEMESTRE, EN LOS CASOS DE EDUCACIÓN PREESCOLAR, BASICA O MEDIA SE DEBE CALCULAR EL VALOR DE LOS PAGOS MENSUALES, UNICAMENTE POR CONCEPTO DE PENSION ESCOLAR',
            'has_interest_letter' => 1,
            'has_juramented_declaration' => 1,
            'employee' => Employee::firstWhere('document', 51955669) -> id,
            'recipient_1' => Recipient::firstWhere('document', 1010238553) -> id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('applications') -> insert([
            'filling_number' => 'ER-114359',
            'comments' => 'SUBSANAR: DE ACUERDO AL ARTICULO 10° NUMERAL A) EN LA CARTA DE MANIFESTACIÓN DE INTERES FALTA: 1. NÚMERO DE IDENTIFICACIÓN DEL BENEFICIARIO 2. VALOR SEMESTRAL',
            'has_interest_letter' => 1,
            'has_juramented_declaration' => 1,
            'employee' => Employee::firstWhere('document', 52917664) -> id,
            'recipient_1' => Recipient::firstWhere('document', 1019909708) -> id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('applications') -> insert([
            'filling_number' => 'ER-114335',
            'comments' => 'SUBSANAR: DE ACUERDO AL ARTICULO 10° NUMERAL A) EN LAS DOS CARTAS DE MANIFESTACIÓN DE INTERES FALTA: 1. FECHA DE INICIO Y CULMINACIÓN DE LOS ESTUDIOS A CURSAR. EN LOS CASOSDE EDUCACIÓN PREESCOLAR, BASICA Y MEDIASE INDICARÁ ESTA INFORMACIÓN DE MANERA SEMESTRAL. ',
            'has_interest_letter' => 1,
            'has_juramented_declaration' => 1,
            'employee' => Employee::firstWhere('document', 79736107) -> id,
            'recipient_1' => Recipient::firstWhere('document', 79736107) -> id,
            'recipient_2' => Recipient::firstWhere('document', 52919008) -> id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('applications') -> insert([
            'filling_number' => 'ER-114327',
            'comments' => 'SUBSANAR: DE ACUERDO AL ARTICULO 10° NUMERAL A) EN LA CARTA DE MANIFESTACIÓN DE INTERES FALTA: 1. VALOR SEMESTRAL ',
            'has_interest_letter' => 1,
            'has_juramented_declaration' => 1,
            'employee' => Employee::firstWhere('document', 63343228) -> id,
            'recipient_1' => Recipient::firstWhere('document', 1034782376) -> id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('applications') -> insert([
            'filling_number' => 'ER-114192, ER-114283, ER-113186, ER-113176',
            'comments' => 'SUBSANAR: DE ACUERDO AL ARTICULO 10° NUMERAL A) EN LA CARTA DE MANIFESTACIÓN DE INTERES FALTA: 1. FECHA DE INICIO Y CULMINACIÓN DE LOS ESTUDIOS A CURSAR. EN LOS CASOSDE EDUCACIÓN PREESCOLAR, BASICA Y MEDIASE INDICARÁ ESTA INFORMACIÓN DE MANERA SEMESTRAL. ',
            'has_interest_letter' => 1,
            'has_juramented_declaration' => 1,
            'employee' => Employee::firstWhere('document', 55159718) -> id,
            'recipient_1' => Recipient::firstWhere('document', 1014659031) -> id,
            'recipient_2' => Recipient::firstWhere('document', 1014672520) -> id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('applications') -> insert([
            'filling_number' => 'ER-114190',
            'comments' => 'SUBSANAR: DE ACUERDO AL ARTICULO 10° NUMERAL A) EN LA CARTA DE MANIFESTACIÓN DE INTERES FALTA: 1. NÚMERO DE IDENTIFICACIÓN DEL BENEFICIARIO',
            'has_interest_letter' => 1,
            'has_juramented_declaration' => 0,
            'employee' => Employee::firstWhere('document', 79911769) -> id,
            'recipient_1' => Recipient::firstWhere('document', 79911769) -> id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('applications') -> insert([
            'filling_number' => 'ER-114172',
            'comments' => 'SUBSANAR: DE ACUERDO AL ARTICULO 10° NUMERAL A) EN LA CARTA DE MANIFESTACIÓN DE INTERES FALTA: 1. NÚMERO DE IDENTIFICACIÓN DE LOS BENEFICIARIOS',
            'has_interest_letter' => 1,
            'has_juramented_declaration' => 1,
            'employee' => Employee::firstWhere('document', 79287227) -> id,
            'recipient_1' => Recipient::firstWhere('document', 1034519038) -> id,
            'recipient_2' => Recipient::firstWhere('document', 1034516792) -> id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('applications') -> insert([
            'filling_number' => 'ER-114140',
            'comments' => 'SUBSANAR: DE ACUERDO AL ARTICULO 10° NUMERAL A) EN LA CARTA DE MANIFESTACIÓN DE INTERES FALTA: 1. NÚMERO DE IDENTIFICACIÓN DE LOS BENEFICIARIOS',
            'has_interest_letter' => 1,
            'has_juramented_declaration' => 1,
            'employee' => Employee::firstWhere('document', 79239504) -> id,
            'recipient_1' => Recipient::firstWhere('document', 79239504) -> id,
            'recipient_2' => Recipient::firstWhere('document', 1000288702) -> id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('applications') -> insert([
            'filling_number' => 'ER-114108',
            'comments' => 'NO ADJUNTA CARTA DE MANIFESTACIÓN DEL BENEFICIARIO NO. 1 CARTA DE MANIFESTACIÓN DEL BENEFICIARIO NO. 2 SUBSANAR: DE ACUERDO AL ARTICULO 10° NUMERAL A) EN LA CARTA DE MANIFESTACIÓN DE INTERES FALTA: 1. NÚMERO DE IDENTIFICACIÓN DE LOS BENEFICIARIOS 2. FECHA DE INICIO Y CULMINACIÓN DE LOS ESTUDIOS A CURSAR. EN LOS CASOSDE EDUCACIÓN PREESCOLAR, BASICA Y MEDIASE INDICARÁ ESTA INFORMACIÓN DE MANERA SEMESTRAL. ',
            'has_interest_letter' => 1,
            'has_juramented_declaration' => 1,
            'employee' => Employee::firstWhere('document', 19499486) -> id,
            'recipient_1' => Recipient::firstWhere('document', 1014857610) -> id,
            'recipient_2' => Recipient::firstWhere('document', 1000272887) -> id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('applications') -> insert([
            'filling_number' => 'ER-114094',
            'comments' => 'CUMPLE ',
            'has_interest_letter' => 1,
            'has_juramented_declaration' => 1,
            'employee' => Employee::firstWhere('document', 52337661) -> id,
            'recipient_1' => Recipient::firstWhere('document', 1019146563) -> id,
            'recipient_2' => Recipient::firstWhere('document', 1031645990) -> id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('applications') -> insert([
            'filling_number' => 'ER-114085',
            'comments' => 'CUMPLE ',
            'has_interest_letter' => 1,
            'has_juramented_declaration' => 1,
            'employee' => Employee::firstWhere('document', 51994187) -> id,
            'recipient_1' => Recipient::firstWhere('document', 51994187) -> id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('applications') -> insert([
            'filling_number' => 'IE-021596, ER114047',
            'comments' => 'CUMPLE ',
            'has_interest_letter' => 1,
            'has_juramented_declaration' => 1,
            'employee' => Employee::firstWhere('document', 36456602) -> id,
            'recipient_1' => Recipient::firstWhere('document', 36456602) -> id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('applications') -> insert([
            'filling_number' => 'ER-114054',
            'comments' => 'CUMPLE ',
            'has_interest_letter' => 1,
            'has_juramented_declaration' => 1,
            'employee' => Employee::firstWhere('document', 80505509) -> id,
            'recipient_1' => Recipient::firstWhere('document', 80505509) -> id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('applications') -> insert([
            'filling_number' => 'ER-114044',
            'comments' => 'CUMPLE ',
            'has_interest_letter' => 1,
            'has_juramented_declaration' => 1,
            'employee' => Employee::firstWhere('document', 79598354) -> id,
            'recipient_1' => Recipient::firstWhere('document', 79598354) -> id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('applications') -> insert([
            'filling_number' => 'ER-114021',
            'comments' => 'SUBSANAR: DE ACUERDO AL ARTICULO 10° NUMERAL A) EN LA CARTA DE MANIFESTACIÓN DE INTERES FALTA: 1. FECHA DE INICIO Y CULMINACIÓN DE LOS ESTUDIOS A CURSAR. EN LOS CASOSDE EDUCACIÓN PREESCOLAR, BASICA Y MEDIASE INDICARÁ ESTA INFORMACIÓN DE MANERA SEMESTRAL. ',
            'has_interest_letter' => 1,
            'has_juramented_declaration' => 1,
            'employee' => Employee::firstWhere('document', 52079402) -> id,
            'recipient_1' => Recipient::firstWhere('document', 1233693582) -> id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('applications') -> insert([
            'filling_number' => 'ER-114016',
            'comments' => 'SUBSANAR: DE ACUERDO AL ARTICULO 10° NUMERAL A) EN LA CARTA DE MANIFESTACIÓN DE INTERES FALTA: 1. FECHA DE INICIO Y CULMINACIÓN DE LOS ESTUDIOS A CURSAR. EN LOS CASOSDE EDUCACIÓN PREESCOLAR, BASICA Y MEDIASE INDICARÁ ESTA INFORMACIÓN DE MANERA SEMESTRAL. 2. FALTA VALOR DEL SEMESTRE, EN LOS CASOS DE EDUCACIÓN PRESCOLAR, BÁSICA O MEDIA SE DEBE CALCULAR EL VALOR DE LOS PAGOS MENSUALES, UNICAMENTE POR CONCEPTO DE PENSIÓN ESCOLAR.',
            'has_interest_letter' => 1,
            'has_juramented_declaration' => 0,
            'employee' => Employee::firstWhere('document', 52268223) -> id,
            'recipient_1' => Recipient::firstWhere('document', 52268223) -> id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('applications') -> insert([
            'filling_number' => 'ER-114011, ER-113947',
            'comments' => 'SUBSANAR: DE ACUERDO AL ARTICULO 10° NUMERAL A) EN LA CARTA DE MANIFESTACIÓN DE INTERES FALTA: 1. NÚMERO DE IDENTIFICACIÓN DEL BENEFICIARIO',
            'has_interest_letter' => 1,
            'has_juramented_declaration' => 1,
            'employee' => Employee::firstWhere('document', 79535619) -> id,
            'recipient_1' => Recipient::firstWhere('document', 1000612099) -> id,
            'recipient_2' => Recipient::firstWhere('document', 1013263815) -> id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('applications') -> insert([
            'filling_number' => 'ER-113930',
            'comments' => 'SUBSANAR: DE ACUERDO AL ARTICULO 10° NUMERAL A) EN LA CARTA DE MANIFESTACIÓN DE INTERES FALTA: 1. NÚMERO DE IDENTIFICACIÓN DEL BENEFICIARIO',
            'has_interest_letter' => 1,
            'has_juramented_declaration' => 1,
            'employee' => Employee::firstWhere('document', 79270189) -> id,
            'recipient_1' => Recipient::firstWhere('document', 1010000766) -> id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('applications') -> insert([
            'filling_number' => 'ER-113896',
            'comments' => 'SUBSANAR: DE ACUERDO AL ARTICULO 10° NUMERAL A) EN LA CARTA DE MANIFESTACIÓN DE INTERES FALTA: 1. NÚMERO DE IDENTIFICACIÓN DEL BENEFICIARIO 2.VALOR DEL SEMESTRE, EN LOS CASOS DE EDUCACIÓN PREESCOLAR BÁSICA O MEDIA SE DEBE CALCULAR EL VALOR DE LOS PAGOS MENSUALES, UNICAMENTE POR CONCEPTO DE PENSIÓN ESCOLAR.',
            'has_interest_letter' => 1,
            'has_juramented_declaration' => 1,
            'employee' => Employee::firstWhere('document', 79640912) -> id,
            'recipient_1' => Recipient::firstWhere('document', 1010962353) -> id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('applications') -> insert([
            'filling_number' => 'ER-113887, ER - 113881',
            'comments' => 'NO APLICA ',
            'has_interest_letter' => 1,
            'has_juramented_declaration' => 1,
            'employee' => Employee::firstWhere('document', 52115975) -> id,
            'recipient_1' => Recipient::firstWhere('document', 1000806607) -> id,
            'recipient_2' => Recipient::firstWhere('document', 1014979868) -> id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('applications') -> insert([
            'filling_number' => 'ER-113751',
            'comments' => 'NO APLICA ',
            'has_interest_letter' => 1,
            'has_juramented_declaration' => 1,
            'employee' => Employee::firstWhere('document', 51787842) -> id,
            'recipient_1' => Recipient::firstWhere('document', 1000377553) -> id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('applications') -> insert([
            'filling_number' => 'ER-113726',
            'comments' => 'NO APLICA ',
            'has_interest_letter' => 1,
            'has_juramented_declaration' => 1,
            'employee' => Employee::firstWhere('document', 39545844) -> id,
            'recipient_1' => Recipient::firstWhere('document', 1015470743) -> id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('applications') -> insert([
            'filling_number' => 'ER-113594, ER-110768',
            'comments' => 'NO APLICA ',
            'has_interest_letter' => 1,
            'has_juramented_declaration' => 0,
            'employee' => Employee::firstWhere('document', 1018407285) -> id,
            'recipient_1' => Recipient::firstWhere('document', 1013011804) -> id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('applications') -> insert([
            'filling_number' => 'ER-113346',
            'comments' => 'NO APLICA ',
            'has_interest_letter' => 1,
            'has_juramented_declaration' => 1,
            'employee' => Employee::firstWhere('document', 79368156) -> id,
            'recipient_1' => Recipient::firstWhere('document', 1013658048) -> id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('applications') -> insert([
            'filling_number' => 'ER-112874',
            'comments' => 'SUBSANAR: DE ACUERDO AL ARTICULO 10° NUMERAL A) EN LA CARTA DE MANIFESTACIÓN DE INTERES FALTA: 1. VALOR DEL SEMESTRE',
            'has_interest_letter' => 1,
            'has_juramented_declaration' => 1,
            'employee' => Employee::firstWhere('document', 79600546) -> id,
            'recipient_1' => Recipient::firstWhere('document', 1013259585) -> id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('applications') -> insert([
            'filling_number' => 'ER-112868',
            'comments' => 'SUBSANAR: DE ACUERDO AL ARTICULO 10° NUMERAL A) EN LA CARTA DE MANIFESTACIÓN DE INTERES FALTA: 1. NÚMERO DE IDENTIFICACIÓN DEL BENEFICIARIO',
            'has_interest_letter' => 1,
            'has_juramented_declaration' => 1,
            'employee' => Employee::firstWhere('document', 51702163) -> id,
            'recipient_1' => Recipient::firstWhere('document', 51702163) -> id,
            'recipient_2' => Recipient::firstWhere('document', 1022408315) -> id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('applications') -> insert([
            'filling_number' => 'ER-114383, ER-112780',
            'comments' => 'SUBSANAR: DE ACUERDO AL ARTICULO 10° NUMERAL A) CARTA DE MANIFESTACIÓN DE INTERÉS DE PARTICIPAR EN EL PROGRAMA.',
            'has_interest_letter' => 0,
            'has_juramented_declaration' => 0,
            'employee' => Employee::firstWhere('document', 60352529) -> id,
            'recipient_1' => Recipient::firstWhere('document', 60352529) -> id,
            'recipient_2' => Recipient::firstWhere('document', 1016110568) -> id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('applications') -> insert([
            'filling_number' => 'ER-112205',
            'comments' => 'SUBSANAR: DE ACUERDO AL ARTICULO 10° NUMERAL A) EN LA CARTA DE MANIFESTACIÓN DE INTERES FALTA: 1. FECHA DE INICIO Y CULMINACIÓN DE LOS ESTUDIOS A CURSAR. EN LOS CASOSDE EDUCACIÓN PREESCOLAR, BASICA Y MEDIASE INDICARÁ ESTA INFORMACIÓN DE MANERA SEMESTRAL. ',
            'has_interest_letter' => 1,
            'has_juramented_declaration' => 1,
            'employee' => Employee::firstWhere('document', 51852839) -> id,
            'recipient_1' => Recipient::firstWhere('document', 1030659886) -> id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('applications') -> insert([
            'filling_number' => 'ER-118883,ER-118877',
            'comments' => 'CUMPLE',
            'has_interest_letter' => 1,
            'has_juramented_declaration' => 1,
            'employee' => Employee::firstWhere('document', 34613490) -> id,
            'recipient_1' => Recipient::firstWhere('document', 34613490) -> id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('applications') -> insert([
            'filling_number' => 'ER-118871,ER-118486',
            'comments' => 'CUMPLE',
            'has_interest_letter' => 1,
            'has_juramented_declaration' => 1,
            'employee' => Employee::firstWhere('document', 1078366566) -> id,
            'recipient_1' => Recipient::firstWhere('document', 1019907805) -> id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('applications') -> insert([
            'filling_number' => 'ER-118864,ER-118862,ER118446',
            'comments' => 'SUBSANAR: FALTA ESPCIFICAR EL VALOR TOTAL DEL AUXILIO SOLICITADO.',
            'has_interest_letter' => 1,
            'has_juramented_declaration' => 1,
            'employee' => Employee::firstWhere('document', 52157557) -> id,
            'recipient_1' => Recipient::firstWhere('document', 1014857437) -> id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('applications') -> insert([
            'filling_number' => 'ER-118856',
            'comments' => 'SUBSANAR: DE ACUERDO AL ARTICULO 10° NUMERAL A) EN LA CARTA DE MANIFESTACIÓN DE INTERES FALTA: 1. FECHA DE INICIO Y CULMINACIÓN DE LOS ESTUDIOS A CURSAR. EN LOS CASOSDE EDUCACIÓN PREESCOLAR, BASICA Y MEDIASE INDICARÁ ESTA INFORMACIÓN DE MANERA SEMESTRAL. 2. FALTA VALOR DEL SEMESTRE, EN LOS CASOS DE EDUCACIÓN PRESCOLAR, BÁSICA O MEDIA SE DEBE CALCULAR EL VALOR DE LOS PAGOS MENSUALES, UNICAMENTE POR CONCEPTO DE PENSIÓN ESCOLAR. 3. FALTA CERTIFICADO DE MATRICULA DE SARA ISABELA MALDONADO OBREGON.',
            'has_interest_letter' => 1,
            'has_juramented_declaration' => 1,
            'employee' => Employee::firstWhere('document', 13928187) -> id,
            'recipient_1' => Recipient::firstWhere('document', 1005231357) -> id,
            'recipient_2' => Recipient::firstWhere('document', 1141525990) -> id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('applications') -> insert([
            'filling_number' => 'ER-119014',
            'comments' => 'SUBSANARSE: 1. FALTA ESPECIFICAR EL VALOR MES A MES DE LA PENSION, Y EL VALOR TOTAL DEL SEMESTRE, ADEMAS DE LAS FECHAS EXACTAS DE INICO Y TERMINACION DE SEMESTRE ACADEMICO, DE ACUERDO CON EL ARTICULO 10, NUMERAL A DE LA RESOLUCION 006690 DEL 4 DE MAYO DE 2020. 2. FALTA CERTIFICAO DE MATRICULA ESPEDIDO POR LA INSTITUCION EDUCATIVA, SEGUN EL ARTICULO 10, NUMERAL B DE LA RESOLUCION 006690 DEL 4 DE MAYO DE 2020. 3. FALTA DECLARACION JURAMENTADA DE QUE NO RECIBE NINGUN TIPO DE SUBSIDIO.',
            'has_interest_letter' => 1,
            'has_juramented_declaration' => 0,
            'employee' => Employee::firstWhere('document', 37840813) -> id,
            'recipient_1' => Recipient::firstWhere('document', 109942234) -> id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('applications') -> insert([
            'filling_number' => 'ER-118851,ER-118845',
            'comments' => 'SUBSANARSE: 1. FALTA ESPECIFICAR LAS FECHAS EXACTAS DE INICO Y TERMINACION DE SEMESTRE ACADEMICO, ASI COMO EL VALOR TOTAL DEL SEMESTRE ACADEMICO DE ACUERDO CON EL ARTICULO 10, NUMERAL A DE LA RESOLUCION 006690 DEL 4 DE MAYO DE 2020. 2.FALTA CERTIFICADO DE PARENTESCO, 3. FALTA DECLARACION JURAMENTADA.',
            'has_interest_letter' => 1,
            'has_juramented_declaration' => 0,
            'employee' => Employee::firstWhere('document', 13715542) -> id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('applications') -> insert([
            'filling_number' => 'ER-118848,ER-117899',
            'comments' => 'SUBSANARSE: FALTA DEFINIR EL MONTO TOTAL DEL VALOR DEL AUXILIO SOLICITADO.',
            'has_interest_letter' => 1,
            'has_juramented_declaration' => 1,
            'employee' => Employee::firstWhere('document', 74814409) -> id,
            'recipient_1' => Recipient::firstWhere('document', 1121335679) -> id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('applications') -> insert([
            'filling_number' => 'ER-118833',
            'comments' => 'SUBSANARSE: 1 FALTA ANEXAR CARTA DE INTENCION DE ACUERDO CON EL ARTICULO 10 NUMERAL A), 2. FALTA ANEXAR CERTIFICADO DE MATRICULA DEL BENEFICIARIO DE ACUERDO CON EL NUMERAL B) DEL ARTICULO 10 DE LA RESOLUCION, 3. FALTA ANEXAR DECLARACION JURAMENTADA.',
            'has_interest_letter' => 0,
            'has_juramented_declaration' => 0,
            'employee' => Employee::firstWhere('document', 79468496) -> id,
            'recipient_1' => Recipient::firstWhere('document', 1010043523) -> id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('applications') -> insert([
            'filling_number' => 'ER-11-8775',
            'comments' => 'CUMPLE',
            'has_interest_letter' => 1,
            'has_juramented_declaration' => 1,
            'employee' => Employee::firstWhere('document', 51690199) -> id,
            'recipient_1' => Recipient::firstWhere('document', 26323779) -> id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('applications') -> insert([
            'filling_number' => 'ER-118786,IE 022151,IE118298',
            'comments' => 'SUBSANARSE: DEBE ESPECIFICAR EN LA CARTA DE INTENCION, FECHA DE INICIO Y TERMINACION DE SEMESTRE Y VALOR TOTAL PAGADO POR SEMESTRE.',
            'has_interest_letter' => 1,
            'has_juramented_declaration' => 1,
            'employee' => Employee::firstWhere('document', 52775694) -> id,
            'recipient_1' => Recipient::firstWhere('document', 1014889944) -> id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('applications') -> insert([
            'filling_number' => 'ER-118745, ER-118693',
            'comments' => 'SUBSANARSE: FALTA CERTIFICADO DE MATRICULA DEL BENEFICIARIO',
            'has_interest_letter' => 1,
            'has_juramented_declaration' => 1,
            'employee' => Employee::firstWhere('document', 19319426) -> id,
            'recipient_1' => Recipient::firstWhere('document', 1000586876) -> id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('applications') -> insert([
            'filling_number' => 'ER-118720,IE021838',
            'comments' => 'CUMPLE',
            'has_interest_letter' => 1,
            'has_juramented_declaration' => 1,
            'employee' => Employee::firstWhere('document', 28566983) -> id,
            'recipient_1' => Recipient::firstWhere('document', 28566983) -> id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('applications') -> insert([
            'filling_number' => 'ER-118648',
            'comments' => 'CUMPLE',
            'has_interest_letter' => 1,
            'has_juramented_declaration' => 1,
            'employee' => Employee::firstWhere('document', 51842223) -> id,
            'recipient_1' => Recipient::firstWhere('document', 1032508738) -> id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('applications') -> insert([
            'filling_number' => 'ER-118584',
            'comments' => 'SUBSANAR: FALTA ANEXAR REGISTRO CIVIL DEL BENEFICIARIO',
            'has_interest_letter' => 1,
            'has_juramented_declaration' => 1,
            'employee' => Employee::firstWhere('document', 1049604703) -> id,
            'recipient_1' => Recipient::firstWhere('document', 1010847402) -> id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('applications') -> insert([
            'filling_number' => 'ER-118579',
            'comments' => 'SUBSANAR: FALTA ESPECIFICAR VALOR TOTAL DEL AUXILIO A SOLICTAR',
            'has_interest_letter' => 1,
            'has_juramented_declaration' => 1,
            'employee' => Employee::firstWhere('document', 52821746) -> id,
            'recipient_1' => Recipient::firstWhere('document', 1027285479) -> id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('applications') -> insert([
            'filling_number' => 'ER-1186566',
            'comments' => 'SUBSANAR: FALTA CARTA DE INETERES, DE ACUERDO CON LO ESTIPULADO EN EL ARTICULO 10 NUMERAL A) DE LA RESOLUCION 006690 DEL 4 DE MAYO DE 2020. 2. FALTA CERTIFICADO DE MATRICULA.3.FALTA ESPECIFICAR EL VALOR TOTAL DE AUXILIO SOLICITADO.',
            'has_interest_letter' => 0,
            'has_juramented_declaration' => 1,
            'employee' => Employee::firstWhere('document', 52118473) -> id,
            'recipient_1' => Recipient::firstWhere('document', 52118473) -> id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('applications') -> insert([
            'filling_number' => 'ER-118483',
            'comments' => 'SUBSANAR: DEBE CORREGIR LA CARTA DE INTENCION DE ACUERDO CON LO ESTIPULADO EN EL ARTICULO 10 NUMERAL A) DE LA RESOLUCCION 006690 DE 4 DE MAYO DE 2020. 2 FALTA PRESENTAR CERTIFICADO DE MATRICULA DEL BENEFICIARIO. 3.DEBE ESPECIFICAR EL VALOR TOTAL DEL AUXILIO SOLICITADO. ',
            'has_interest_letter' => 1,
            'has_juramented_declaration' => 1,
            'employee' => Employee::firstWhere('document', 80180015) -> id,
            'recipient_1' => Recipient::firstWhere('document', 1019906618) -> id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('applications') -> insert([
            'filling_number' => 'ER-118441',
            'comments' => 'CUMPLE',
            'has_interest_letter' => 1,
            'has_juramented_declaration' => 1,
            'employee' => Employee::firstWhere('document', 38869957) -> id,
            'recipient_1' => Recipient::firstWhere('document', 1006008267) -> id,
            'recipient_2' => Recipient::firstWhere('document', 94390226) -> id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('applications') -> insert([
            'filling_number' => 'ER-118421',
            'comments' => 'CUMPLE',
            'has_interest_letter' => 1,
            'has_juramented_declaration' => 1,
            'employee' => Employee::firstWhere('document', 52054602) -> id,
            'recipient_1' => Recipient::firstWhere('document', 1001167218) -> id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('applications') -> insert([
            'filling_number' => 'ER-118380',
            'comments' => 'SUBSANAR: DEBE ESPECIFICAR EN LA CARTA DE INTERES, LAS FECHAS DE INICIO Y TERMINACION DEL SEMESTRE ACADEMICO Y EL COSTO MENSUAL Y SEMESTRAL, DE ACUERDO CON LO ESTIPULADO EN EL ARTICULO 10 NUMERAL A) DE LA RESOLUCION 006690 DEL 4 DE MAYO DE 2020. . 2. ESPECIFICAR EL VALOR TOTAL DEL AUXILIO SOLICITADO.',
            'has_interest_letter' => 1,
            'has_juramented_declaration' => 1,
            'employee' => Employee::firstWhere('document', 80811088) -> id,
            'recipient_1' => Recipient::firstWhere('document', 1031644274) -> id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('applications') -> insert([
            'filling_number' => 'ER-118363',
            'comments' => 'SUBSANAR: DEBE PRESENTAR CERTIFICADO DE MATRICULA DEL BENEFICIARIO.',
            'has_interest_letter' => 1,
            'has_juramented_declaration' => 1,
            'employee' => Employee::firstWhere('document', 65738385) -> id,
            'recipient_1' => Recipient::firstWhere('document', 65738385) -> id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('applications') -> insert([
            'filling_number' => 'ER-118292',
            'comments' => 'CUMPLE',
            'has_interest_letter' => 1,
            'has_juramented_declaration' => 1,
            'employee' => Employee::firstWhere('document', 52220883) -> id,
            'recipient_1' => Recipient::firstWhere('document', 52220883) -> id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('applications') -> insert([
            'filling_number' => 'ER-118184',
            'comments' => 'CUMPLE',
            'has_interest_letter' => 1,
            'has_juramented_declaration' => 1,
            'employee' => Employee::firstWhere('document', 88000876) -> id,
            'recipient_1' => Recipient::firstWhere('document', 1098825325) -> id,
            'recipient_2' => Recipient::firstWhere('document', 1000077147) -> id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('applications') -> insert([
            'filling_number' => 'ER-118176, ER-118182',
            'comments' => 'SUBSANAR: 1.ESPECIFICAR EN LA CARTA DE INTENCION, LAS FECHAS DE INICIACION Y TERMINACION DE EL SEMESTRE ACADEMICO, SEGÚN SE ESTIPULA EN EL ARTICULO 10, NUMERAL A) DE LA RESOLUCION 006690 DEL 4 E MAYO DE 2020, ASI COMO EL VALOR TOTAL DEL AUXILIO SOLICITADO. 2. ADJUNTAR CERTIFICAION JURAMENTADA DE NO RECIBO DE AUXILIOS.',
            'has_interest_letter' => 1,
            'has_juramented_declaration' => 0,
            'employee' => Employee::firstWhere('document', 79701066) -> id,
            'recipient_1' => Recipient::firstWhere('document', 1011320375) -> id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('applications') -> insert([
            'filling_number' => 'ER-118169, ER 118297',
            'comments' => 'SUBSANAR: DE ACUERDO AL ARTICULO 10° NUMERAL A) EN LA CARTA DE MANIFESTACIÓN DE INTERES FALTA: 1. FECHA DE INICIO Y CULMINACIÓN DE LOS ESTUDIOS A CURSAR. EN LOS CASOSDE EDUCACIÓN PREESCOLAR, BASICA Y MEDIASE INDICARÁ ESTA INFORMACIÓN DE MANERA SEMESTRAL, ADEMAS DEL VALOR TOTAL DEL AUXILIO A SOLICITAR. 2.FALTA REGISTRO CIVIL DE LOS DOS BENEFICIARIOS. ',
            'has_interest_letter' => 1,
            'has_juramented_declaration' => 1,
            'employee' => Employee::firstWhere('document', 40361891) -> id,
            'recipient_1' => Recipient::firstWhere('document', 102284806) -> id,
            'recipient_2' => Recipient::firstWhere('document', 1027288297) -> id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('applications') -> insert([
            'filling_number' => 'ER-118167',
            'comments' => 'SUBSANAR: FALTA REGISTRO CIVIL DEL BENEFICIARIO',
            'has_interest_letter' => 1,
            'has_juramented_declaration' => 1,
            'employee' => Employee::firstWhere('document', 51894816) -> id,
            'recipient_1' => Recipient::firstWhere('document', 101950606) -> id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('applications') -> insert([
            'filling_number' => 'ER-118037',
            'comments' => 'CUMPLE',
            'has_interest_letter' => 1,
            'has_juramented_declaration' => 1,
            'employee' => Employee::firstWhere('document', 79453469) -> id,
            'recipient_1' => Recipient::firstWhere('document', 1020824115) -> id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('applications') -> insert([
            'filling_number' => 'ER-119720',
            'comments' => 'CUMPLE',
            'has_interest_letter' => 1,
            'has_juramented_declaration' => 1,
            'employee' => Employee::firstWhere('document', 40022595) -> id,
            'recipient_1' => Recipient::firstWhere('document', 1057987201) -> id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('applications') -> insert([
            'filling_number' => 'ER-117772',
            'comments' => 'CUMPLE',
            'has_interest_letter' => 1,
            'has_juramented_declaration' => 1,
            'employee' => Employee::firstWhere('document', 52957174) -> id,
            'recipient_1' => Recipient::firstWhere('document', 1000616192) -> id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('applications') -> insert([
            'filling_number' => 'ER-117761',
            'comments' => 'NO CUMPLE YA QUE EL DIPLOMADO NO ES EDUCACIÓN FORMAL. FALTA CERTIFICADO DE MATRICULA DE JAIRO MOSQUERA MENA. 2.PARA ANDRES FELIPE MOSQUERA CLAVIJO NO APLICA, YA QUE EL DIPLOMADO NO SE CONSIDERA EDUCACION FORMAL.',
            'has_interest_letter' => 1,
            'has_juramented_declaration' => 1,
            'employee' => Employee::firstWhere('document', 19453919) -> id,
            'recipient_1' => Recipient::firstWhere('document', 19453919) -> id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('applications') -> insert([
            'filling_number' => 'ER-117720',
            'comments' => 'SUBSANAR: FALTA ADJUNTAR CERTIFICACION DE MATRICULA DEL BENEFICIARIO.',
            'has_interest_letter' => 1,
            'has_juramented_declaration' => 1,
            'employee' => Employee::firstWhere('document', 86078943) -> id,
            'recipient_1' => Recipient::firstWhere('document', 1123511369) -> id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('applications') -> insert([
            'filling_number' => 'ER-117588, ER-113971, ER-115471',
            'comments' => 'CUMPLE',
            'has_interest_letter' => 1,
            'has_juramented_declaration' => 1,
            'employee' => Employee::firstWhere('document', 52361029) -> id,
            'recipient_1' => Recipient::firstWhere('document', 52361029) -> id,
            'recipient_2' => Recipient::firstWhere('document', 1027151284) -> id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('applications') -> insert([
            'filling_number' => 'ER-117587',
            'comments' => 'CUMPLE',
            'has_interest_letter' => 1,
            'has_juramented_declaration' => 1,
            'employee' => Employee::firstWhere('document', 28554631) -> id,
            'recipient_1' => Recipient::firstWhere('document', 1007423171) -> id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('applications') -> insert([
            'filling_number' => 'ER-117501',
            'comments' => 'CUMPLE',
            'has_interest_letter' => 1,
            'has_juramented_declaration' => 1,
            'employee' => Employee::firstWhere('document', 79295201) -> id,
            'recipient_1' => Recipient::firstWhere('document', 1013679545) -> id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('applications') -> insert([
            'filling_number' => 'ER-117417',
            'comments' => 'CUMPLE',
            'has_interest_letter' => 1,
            'has_juramented_declaration' => 1,
            'employee' => Employee::firstWhere('document', 51769462) -> id,
            'recipient_1' => Recipient::firstWhere('document', 1193448351) -> id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('applications') -> insert([
            'filling_number' => 'ER-117333',
            'comments' => 'CUMPLE',
            'has_interest_letter' => 1,
            'has_juramented_declaration' => 1,
            'employee' => Employee::firstWhere('document', 1014206266) -> id,
            'recipient_1' => Recipient::firstWhere('document', 1014206266) -> id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('applications') -> insert([
            'filling_number' => 'ER-117264, ER-117229',
            'comments' => 'SUBSANAR: DEBE ESPECIFICAR EN LA CARTA DE INTERES, EL PERIDO POR SEMESTRE, CON FECHA DE INICIO Y TERMINACIÒN, ASI COMO EL VALOR TOTAL DEL AUXILIO A SOLCIITAR, DE ACUERDO CON EL ARTICULO 10 , NUMERAL A), DE LA RESOLUCION 006690 DE 4 DE MAYO DE 2020.',
            'has_interest_letter' => 1,
            'has_juramented_declaration' => 1,
            'employee' => Employee::firstWhere('document', 4071207) -> id,
            'recipient_1' => Recipient::firstWhere('document', 4071207) -> id,
            'recipient_2' => Recipient::firstWhere('document', 1013262027) -> id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('applications') -> insert([
            'filling_number' => 'ER-117201',
            'comments' => 'SUBSANAR: DEBE ESPECIFICAR EN LA CARTA DE INTERES, EL PERIDO POR SEMESTRE, CON FECHA DE INICIO Y TERMINACIÒN, ASI COMO EL VALOR TOTAL DEL AUXILIO A SOLCIITAR, DE ACUERDO CON EL ARTICULO 10 , NUMERAL A), DE LA RESOLUCION 006690 DE 4 DE MAYO DE 2020.',
            'has_interest_letter' => 1,
            'has_juramented_declaration' => 1,
            'employee' => Employee::firstWhere('document', 46378326) -> id,
            'recipient_1' => Recipient::firstWhere('document', 101325467) -> id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('applications') -> insert([
            'filling_number' => 'ER-117053',
            'comments' => 'CUMPLE',
            'has_interest_letter' => 1,
            'has_juramented_declaration' => 1,
            'employee' => Employee::firstWhere('document', 51761887) -> id,
            'recipient_1' => Recipient::firstWhere('document', 1007558179) -> id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('applications') -> insert([
            'filling_number' => 'ER-118360, ER-118893',
            'comments' => 'SUBSANAR: DEBE ANEXAR CERTIFICACION JURAMENTADA DE QUE NO RECIBE AUXILIOS EDUCATIVOS',
            'has_interest_letter' => 1,
            'has_juramented_declaration' => 0,
            'employee' => Employee::firstWhere('document', 37898086) -> id,
            'recipient_1' => Recipient::firstWhere('document', 37898086) -> id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('applications') -> insert([
            'filling_number' => 'ER-117025',
            'comments' => 'SUBSANAR: DEBE ADJUNTAR REGISTRO CIVIL DE PAOLA SOFIA CASTAÑEDA ROJAS.',
            'has_interest_letter' => 1,
            'has_juramented_declaration' => 0,
            'employee' => Employee::firstWhere('document', 52834903) -> id,
            'recipient_1' => Recipient::firstWhere('document', 1023394387) -> id,
            'recipient_2' => Recipient::firstWhere('document', 1025151498) -> id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('applications') -> insert([
            'filling_number' => 'ER-117006',
            'comments' => 'SUBSANAR: DE ACUERDO AL ARTICULO 10° NUMERAL A) EN LA CARTA DE MANIFESTACIÓN DE INTERES FALTA: 1. FECHAS DE INICIO Y CULMINACIÓN DE INICIO DE LOS ESTUDIOS A CURSAR. EN LOS CASOS DE EDUCACIÓN PREESCOLAR, BÁSICA O MEDIA SE INDICARÁ ESTA INFORMACIÓN DE MANERA SEMESTRAL. ',
            'has_interest_letter' => 1,
            'has_juramented_declaration' => 1,
            'employee' => Employee::firstWhere('document', 88157540) -> id,
            'recipient_1' => Recipient::firstWhere('document', 1000335754) -> id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('applications') -> insert([
            'filling_number' => 'ER-117003, ER-117002,ER-11699',
            'comments' => 'SUBSANAR: DE ACUERDO AL ARTICULO 10° NUMERAL A) EN LA CARTA DE MANIFESTACIÓN DE INTERES FALTA: 1.IDENTIFICACIÒN DEL BENEFICIARIO. 2. FALTA VALOR DEL SEMESTRE DEL BENEFICIARIO , EN LOS CASOS DE EDUCACIÓN PRESCOLAR, BÁSICA O MEDIA SE DEBE CALCULAR EL VALOR DE LOS PAGOS MENSUALES, UNICAMENTE POR CONCEPTO DE PENSIÓN ESCOLAR. 3. FECHAS DE INICIO Y CULMINACIÓN DE INICIO DE LOS ESTUDIOS A CURSAR. EN LOS CASOS DE EDUCACIÓN PREESCOLAR, BÁSICA O MEDIA SE INDICARÁ ESTA INFORMACIÓN DE MANERA SEMESTRAL. NUMERAL B: FALTA CERTIFICADO ORIGINAL (FÍSICO O ELECTRÓNICO) DE MATRICULA EXPEDIDA POR LA INSTITUCIÓN EDUCATIVA EN LA CUAL SE OBSERVE EL NOMBRE E IDENTIFICACIÓN DEL ESTUDIANTE, LOS ESTUDIOS A CURSAR, LA FECHA DE INICIO Y TERMIANCIÓN DEL PERÍODO ACADÉMICO Y EL VALOR DE LA MATRICULA. EN LOS CASOS DE EDUCACIÓN PREESCOLAR, BÁSICA O MEDIA, UNA CARTA DE LA ENTIDAD EDUCATIVA CERTIFICANDO EL VALOR MENSUAL DE LA PENSIÓN.',
            'has_interest_letter' => 1,
            'has_juramented_declaration' => 1,
            'employee' => Employee::firstWhere('document', 14234189) -> id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('applications') -> insert([
            'filling_number' => 'ER-116547',
            'comments' => 'SUBSANAR: DE ACUERDO AL ARTICULO 10° NUMERAL A) EN LA CARTA DE MANIFESTACIÓN DE INTERES FALTA: 1.FALTA VALOR DEL SEMESTRE DEL BENEFICIARIO 1 , EN LOS CASOS DE EDUCACIÓN PRESCOLAR, BÁSICA O MEDIA SE DEBE CALCULAR EL VALOR DE LOS PAGOS MENSUALES, UNICAMENTE POR CONCEPTO DE PENSIÓN ESCOLAR. ',
            'has_interest_letter' => 1,
            'has_juramented_declaration' => 1,
            'employee' => Employee::firstWhere('document', 13895205) -> id,
            'recipient_1' => Recipient::firstWhere('document', 13895205) -> id,
            'recipient_2' => Recipient::firstWhere('document', 1000940624) -> id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('applications') -> insert([
            'filling_number' => 'ER-116793',
            'comments' => 'SUBSANAR: DE ACUERDO AL ARTICULO 10° NUMERAL A) EN LA CARTA DE MANIFESTACIÓN DE INTERES FALTA: 1.IDENTIFICACIÒN DE LOS BENEFICIARIOS CON LA INDICACIÒN DEL PARENTESCO. 2. FALTA VALOR DEL SEMESTRE DEL BENEFICIARIO 1 , EN LOS CASOS DE EDUCACIÓN PRESCOLAR, BÁSICA O MEDIA SE DEBE CALCULAR EL VALOR DE LOS PAGOS MENSUALES, UNICAMENTE POR CONCEPTO DE PENSIÓN ESCOLAR. 3. FECHAS DE INICIO Y CULMINACIÓN DE INICIO DE LOS ESTUDIOS A CURSAR. EN LOS CASOS DE EDUCACIÓN PREESCOLAR, BÁSICA O MEDIA SE INDICARÁ ESTA INFORMACIÓN DE MANERA SEMESTRAL. 4. FIRMA DE LA CARTA DE MANIFESTACIÓN DE INTERÉS. NUMERAL E) CERTIFICACIÓN EXPEDIDA POR PARTE DE LA INSTITUCION EDUCATIVA DONDE SE ENCUENTRE MATRICULADO O EN SU DEFECTO, UNA COMUNICACION EN LA QUE MANIFIESTE BAJO LA GRAVEDAD DE JURAMENTO QUE NO RECIBE OTRO AUXILIO O AYUDA PARA EL PAGO DE LA MATRICULA O DE LAS MENSUALIDADES. ',
            'has_interest_letter' => 1,
            'has_juramented_declaration' => 0,
            'employee' => Employee::firstWhere('document', 39757154) -> id,
            'recipient_1' => Recipient::firstWhere('document', 10284959921) -> id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('applications') -> insert([
            'filling_number' => 'ER-116776',
            'comments' => 'SUBSANAR: DE ACUERDO AL ARTICULO 10° NUMERAL A) EN LA CARTA DE MANIFESTACIÓN DE INTERES FALTA: 1.FECHAS DE INICIO Y CULMINACIÓN DE INICIO DE LOS ESTUDIOS A CURSAR. EN LOS CASOS DE EDUCACIÓN PREESCOLAR, BÁSICA O MEDIA SE INDICARÁ ESTA INFORMACIÓN DE MANERA SEMESTRAL. ',
            'has_interest_letter' => 1,
            'has_juramented_declaration' => 1,
            'employee' => Employee::firstWhere('document', 52021366) -> id,
            'recipient_1' => Recipient::firstWhere('document', 52021366) -> id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('applications') -> insert([
            'filling_number' => 'ER-116688',
            'comments' => 'SUBSANAR: DE ACUERDO AL ARTICULO 10° NUMERAL A) EN LA CARTA DE MANIFESTACIÓN DE INTERES FALTA: 1.FALTA VALOR DEL SEMESTRE DEL BENEFICIARIO , EN LOS CASOS DE EDUCACIÓN PRESCOLAR, BÁSICA O MEDIA SE DEBE CALCULAR EL VALOR DE LOS PAGOS MENSUALES, UNICAMENTE POR CONCEPTO DE PENSIÓN ESCOLAR. ',
            'has_interest_letter' => 1,
            'has_juramented_declaration' => 1,
            'employee' => Employee::firstWhere('document', 52442853) -> id,
            'recipient_1' => Recipient::firstWhere('document', 1025537749) -> id,
            'recipient_2' => Recipient::firstWhere('document', 1015458307) -> id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('applications') -> insert([
            'filling_number' => 'ER-116889',
            'comments' => 'SUBSANAR: DE ACUERDO AL ARTICULO 10° NUMERAL A) EN LA CARTA DE MANIFESTACIÓN DE INTERES FALTA: 1.FALTA VALOR DEL SEMESTRE DEL BENEFICIARIO , EN LOS CASOS DE EDUCACIÓN PRESCOLAR, BÁSICA O MEDIA SE DEBE CALCULAR EL VALOR DE LOS PAGOS MENSUALES, UNICAMENTE POR CONCEPTO DE PENSIÓN ESCOLAR. ',
            'has_interest_letter' => 1,
            'has_juramented_declaration' => 1,
            'employee' => Employee::firstWhere('document', 79448382) -> id,
            'recipient_1' => Recipient::firstWhere('document', 1193075374) -> id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('applications') -> insert([
            'filling_number' => 'ER-116660',
            'comments' => 'UBSANAR: DE ACUERDO AL ARTICULO 10° NUMERAL A) EN LA CARTA DE MANIFESTACIÓN DE INTERES FALTA: 1.IDENTIFICACIÒN DEL BENEFICIARIO. 2. FALTA VALOR DEL SEMESTRE DEL BENEFICIARIO 2 , EN LOS CASOS DE EDUCACIÓN PRESCOLAR, BÁSICA O MEDIA SE DEBE CALCULAR EL VALOR DE LOS PAGOS MENSUALES, UNICAMENTE POR CONCEPTO DE PENSIÓN ESCOLAR. ',
            'has_interest_letter' => 1,
            'has_juramented_declaration' => 1,
            'employee' => Employee::firstWhere('document', 51837704) -> id,
            'recipient_1' => Recipient::firstWhere('document', 1032491625) -> id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('applications') -> insert([
            'filling_number' => 'ER-116617',
            'has_interest_letter' => 1,
            'has_juramented_declaration' => 1,
            'employee' => Employee::firstWhere('document', 52011012) -> id,
            'recipient_1' => Recipient::firstWhere('document', 1193571347) -> id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('applications') -> insert([
            'filling_number' => 'ER-116529',
            'comments' => 'SUBSANAR: DE ACUERDO AL ARTICULO 10° NUMERAL A) EN LA CARTA DE MANIFESTACIÓN DE INTERES FALTA: 1.FECHAS DE INICIO Y CULMINACIÓN DE INICIO DE LOS ESTUDIOS A CURSAR. EN LOS CASOS DE EDUCACIÓN PREESCOLAR, BÁSICA O MEDIA SE INDICARÁ ESTA INFORMACIÓN DE MANERA SEMESTRAL. ',
            'has_interest_letter' => 1,
            'has_juramented_declaration' => 1,
            'employee' => Employee::firstWhere('document', 19394677) -> id,
            'recipient_1' => Recipient::firstWhere('document', 1030677487) -> id,
            'recipient_2' => Recipient::firstWhere('document', 1000836416) -> id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('applications') -> insert([
            'filling_number' => 'ER-113971',
            'has_interest_letter' => 1,
            'has_juramented_declaration' => 1,
            'employee' => Employee::firstWhere('document', 19469022) -> id,
            'recipient_1' => Recipient::firstWhere('document', 1000596940) -> id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('applications') -> insert([
            'filling_number' => 'ER-113953',
            'comments' => 'ADJUNTA DECLARACIÓN JURAMENTADA DE CONVIVENCIA',
            'has_interest_letter' => 1,
            'has_juramented_declaration' => 1,
            'employee' => Employee::firstWhere('document', 1010171266) -> id,
            'recipient_1' => Recipient::firstWhere('document', 1032486115) -> id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('applications') -> insert([
            'filling_number' => 'ER-118136',
            'has_interest_letter' => 1,
            'has_juramented_declaration' => 1,
            'employee' => Employee::firstWhere('document', 1085307404) -> id,
            'recipient_1' => Recipient::firstWhere('document', 1085307404) -> id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('applications') -> insert([
            'filling_number' => 'ER-118543, ER-118423',
            'has_interest_letter' => 1,
            'has_juramented_declaration' => 1,
            'employee' => Employee::firstWhere('document', 79705785) -> id,
            'recipient_1' => Recipient::firstWhere('document', 79705785) -> id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('applications') -> insert([
            'filling_number' => 'ER-118474, ER-118393',
            'comments' => 'SUBSANAR: DE ACUERDO AL ARTICULO 10° NUMERAL A) EN LA CARTA DE MANIFESTACIÓN DE INTERES FALTA: 1.IDENTIFICACIÒN DEL BENEFICIARIO. NUMERAL C): EN CASO DE QUE EL APOYO SEA PARA UN FAMILIAR DEBERÁ ADJUNTAR EL DOCUMENTO IDÓNEO QUE PERMITA VERIFICAR EL VÍNCULO FAMILIAR YA SEA REGISTRO CIVIL, ACTA DE ADOPCIÓN, ACTA DE MATRIMONIO O DOCEUMENTO QUE DECLARE LA UNIÓN MARITAL DE HECHO.',
            'has_interest_letter' => 1,
            'has_juramented_declaration' => 1,
            'employee' => Employee::firstWhere('document', 52056876) -> id,
            'recipient_1' => Recipient::firstWhere('document', 1018497695) -> id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('applications') -> insert([
            'filling_number' => 'ER-118374',
            'has_interest_letter' => 1,
            'has_juramented_declaration' => 1,
            'employee' => Employee::firstWhere('document', 17317338) -> id,
            'recipient_1' => Recipient::firstWhere('document', 1010125335) -> id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('applications') -> insert([
            'filling_number' => 'IE-022254',
            'comments' => 'SUBSANAR: DE ACUERDO AL ARTICULO 10° NUMERAL A) EN LA CARTA DE MANIFESTACIÓN DE INTERES FALTA: 1.IDENTIFICACIÒN DE LOS BENEFICIARIOS CON LA INDICACIÒN DEL PARENTESCO. 2. FALTA VALOR DEL SEMESTRE DEL BENEFICIARIO 1 , EN LOS CASOS DE EDUCACIÓN PRESCOLAR, BÁSICA O MEDIA SE DEBE CALCULAR EL VALOR DE LOS PAGOS MENSUALES, UNICAMENTE POR CONCEPTO DE PENSIÓN ESCOLAR.',
            'has_interest_letter' => 1,
            'has_juramented_declaration' => 1,
            'employee' => Employee::firstWhere('document', 79569388) -> id,
            'recipient_1' => Recipient::firstWhere('document', 1013014768) -> id,
            'recipient_2' => Recipient::firstWhere('document', 1000502388) -> id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('applications') -> insert([
            'filling_number' => 'IE-022240-IE022235',
            'comments' => 'SUBSANAR: DE ACUERDO AL ARTICULO 10° NUMERAL A) EN LA CARTA DE MANIFESTACIÓN DE INTERES FALTA: 1.IDENTIFICACIÒN DE LOS BENEFICIARIOS CON LA INDICACIÒN DEL PARENTESCO. 2. NUMERAL E) CERTIFICACIÓN EXPEDIDA POR PARTE DE LA INSTITUCION EDUCATIVA DONDE SE ENCUENTRE MATRICULADO O EN SU DEFECTO, UNA COMUNICACION EN LA QUE MANIFIESTE BAJO LA GRAVEDAD DE JURAMENTO QUE NO RECIBE OTRO AUXILIO O AYUDA PARA EL PAGO DE LA MATRICULA O DE LAS MENSUALIDADES. ',
            'has_interest_letter' => 1,
            'has_juramented_declaration' => 0,
            'employee' => Employee::firstWhere('document', 261874) -> id,
            'recipient_1' => Recipient::firstWhere('document', 1015473576) -> id,
            'recipient_2' => Recipient::firstWhere('document', 1001197923) -> id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('applications') -> insert([
            'filling_number' => 'IE-022230 - IE-022061',
            'has_interest_letter' => 1,
            'has_juramented_declaration' => 1,
            'employee' => Employee::firstWhere('document', 79625589) -> id,
            'recipient_1' => Recipient::firstWhere('document', 1025065822) -> id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('applications') -> insert([
            'filling_number' => 'IE-022123',
            'comments' => 'SUBSANAR: DE ACUERDO AL ARTICULO 10° NUMERAL A) EN LA CARTA DE MANIFESTACIÓN DE INTERES FALTA: 1.VALOR DEL SEMESTRE , EN LOS CASOS DE EDUCACIÓN PRESCOLAR, BÁSICA O MEDIA SE DEBE CALCULAR EL VALOR DE LOS PAGOS MENSUALES, UNICAMENTE POR CONCEPTO DE PENSIÓN ESCOLAR. ',
            'has_interest_letter' => 1,
            'has_juramented_declaration' => 1,
            'employee' => Employee::firstWhere('document', 52885434) -> id,
            'recipient_1' => Recipient::firstWhere('document', 1023369520) -> id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('applications') -> insert([
            'filling_number' => 'IE-022114',
            'comments' => 'SUBSANAR: DE ACUERDO AL ARTICULO 10° NUMERAL E) 1. CERTIFICACIÓN EXPEDIDA POR PARTE DE LA INSTITUCION EDUCATIVA DONDE SE ENCUENTRE MATRICULADO O EN SU DEFECTO, UNA COMUNICACION EN LA QUE MANIFIESTE BAJO LA GRAVEDAD DE JURAMENTO QUE NO RECIBE OTRO AUXILIO O AYUDA PARA EL PAGO DE LA MATRICULA O DE LAS MENSUALIDADES. ',
            'has_interest_letter' => 1,
            'has_juramented_declaration' => 0,
            'employee' => Employee::firstWhere('document', 51958380) -> id,
            'recipient_1' => Recipient::firstWhere('document', 1022440626) -> id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('applications') -> insert([
            'filling_number' => 'IE-022106',
            'has_interest_letter' => 1,
            'has_juramented_declaration' => 1,
            'employee' => Employee::firstWhere('document', 40026100) -> id,
            'recipient_1' => Recipient::firstWhere('document', 40026100) -> id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('applications') -> insert([
            'filling_number' => 'IE-022080',
            'comments' => 'SUBSANAR: DE ACUERDO AL ARTICULO 10° NUMERAL A) EN LA CARTA DE MANIFESTACIÓN DE INTERES FALTA: 1.IDENTIFICACIÒN DE LOS BENEFICIARIOS CON LA INDICACIÒN DEL PARENTESCO.',
            'has_interest_letter' => 1,
            'has_juramented_declaration' => 1,
            'employee' => Employee::firstWhere('document', 52430738) -> id,
            'recipient_1' => Recipient::firstWhere('document', 52430738) -> id,
            'recipient_2' => Recipient::firstWhere('document', 1000589116) -> id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('applications') -> insert([
            'filling_number' => 'IE-021943',
            'comments' => 'ADJUNTA REGISTRO CIVIL DE MATRIMONIO ',
            'has_interest_letter' => 1,
            'has_juramented_declaration' => 1,
            'employee' => Employee::firstWhere('document', 52009765) -> id,
            'recipient_1' => Recipient::firstWhere('document', 52009765) -> id,
            'recipient_2' => Recipient::firstWhere('document', 79444529) -> id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('applications') -> insert([
            'filling_number' => 'IE-021847',
            'comments' => 'SUBSANAR: DE ACUERDO AL ARTICULO 10° NUMERAL A) EN LA CARTA DE MANIFESTACIÓN DE INTERES FALTA: 1.VALOR DEL SEMESTRE , EN LOS CASOS DE EDUCACIÓN PRESCOLAR, BÁSICA O MEDIA SE DEBE CALCULAR EL VALOR DE LOS PAGOS MENSUALES, UNICAMENTE POR CONCEPTO DE PENSIÓN ESCOLAR.',
            'has_interest_letter' => 1,
            'has_juramented_declaration' => 1,
            'employee' => Employee::firstWhere('document', 98647204) -> id,
            'recipient_1' => Recipient::firstWhere('document', 1022154643) -> id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('applications') -> insert([
            'filling_number' => 'IE-021837',
            'comments' => 'SUBSANAR: DE ACUERDO AL ARTICULO 10° NUMERAL A) EN LA CARTA DE MANIFESTACIÓN DE INTERES FALTA: 1.IDENTIFICACIÒN DE LOS BENEFICIARIOS CON LA INDICACIÒN DEL PARENTESCO. 2. FALTA VALOR DEL SEMESTRE DEL BENEFICIARIO , EN LOS CASOS DE EDUCACIÓN PRESCOLAR, BÁSICA O MEDIA SE DEBE CALCULAR EL VALOR DE LOS PAGOS MENSUALES, UNICAMENTE POR CONCEPTO DE PENSIÓN ESCOLAR. 3. NUMERAL E) CERTIFICACIÓN EXPEDIDA POR PARTE DE LA INSTITUCION EDUCATIVA DONDE SE ENCUENTRE MATRICULADO O EN SU DEFECTO, UNA COMUNICACION EN LA QUE MANIFIESTE BAJO LA GRAVEDAD DE JURAMENTO QUE NO RECIBE OTRO AUXILIO O AYUDA PARA EL PAGO DE LA MATRICULA O DE LAS MENSUALIDADES. ',
            'has_interest_letter' => 1,
            'has_juramented_declaration' => 0,
            'employee' => Employee::firstWhere('document', 63447470) -> id,
            'recipient_1' => Recipient::firstWhere('document', 1019765779) -> id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('applications') -> insert([
            'filling_number' => 'IE-021685 - IE021675',
            'comments' => 'SUBSANAR: DE ACUERDO AL ARTICULO 10° NUMERAL A) EN LA CARTA DE MANIFESTACIÓN DE INTERES FALTA: 1.IDENTIFICACIÒN DEL SERVIDOR 2.VALOR DEL SEMESTRE , EN LOS CASOS DE EDUCACIÓN PRESCOLAR, BÁSICA O MEDIA SE DEBE CALCULAR EL VALOR DE LOS PAGOS MENSUALES, UNICAMENTE POR CONCEPTO DE PENSIÓN ESCOLAR.',
            'has_interest_letter' => 1,
            'has_juramented_declaration' => 1,
            'employee' => Employee::firstWhere('document', 80724684) -> id,
            'recipient_1' => Recipient::firstWhere('document', 1016962751) -> id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('applications') -> insert([
            'filling_number' => 'IE-021663',
            'comments' => 'SUBSANAR: DE ACUERDO AL ARTICULO 10° NUMERAL A) EN LA CARTA DE MANIFESTACIÓN DE INTERES FALTA: 1.FECHAS DE INICIO Y CULMINACION DE LOS ESTUDIOS A CURSAR.',
            'has_interest_letter' => 1,
            'has_juramented_declaration' => 1,
            'employee' => Employee::firstWhere('document', 79279462) -> id,
            'recipient_1' => Recipient::firstWhere('document', 1010244428) -> id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('applications') -> insert([
            'filling_number' => 'IE-021622',
            'comments' => 'SUBSANAR: DE ACUERDO AL ARTICULO 10° NUMERAL A) EN LA CARTA DE MANIFESTACIÓN DE INTERES FALTA: 1.IDENTIFICACIÒN DE LOS BENEFICIARIOS CON LA INDICACIÒN DEL PARENTESCO. 2. FALTA VALOR DEL SEMESTRE DEL BENEFICIARIO , EN LOS CASOS DE EDUCACIÓN PRESCOLAR, BÁSICA O MEDIA SE DEBE CALCULAR EL VALOR DE LOS PAGOS MENSUALES, UNICAMENTE POR CONCEPTO DE PENSIÓN ESCOLAR. ',
            'has_interest_letter' => 1,
            'has_juramented_declaration' => 1,
            'employee' => Employee::firstWhere('document', 11187421) -> id,
            'recipient_1' => Recipient::firstWhere('document', 1013132525) -> id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('applications') -> insert([
            'filling_number' => 'IE-021620',
            'has_interest_letter' => 1,
            'has_juramented_declaration' => 1,
            'employee' => Employee::firstWhere('document', 40036998) -> id,
            'recipient_1' => Recipient::firstWhere('document', 1011204987) -> id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

    }

}
