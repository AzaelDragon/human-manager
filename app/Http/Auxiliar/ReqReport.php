<?php


namespace App\Http\Auxiliar;

use App\Models\Application;
use App\Models\Employee;
use App\Models\Recipient;

/**
 * Class ReqReport
 * @package App\Http\Auxiliar
 *
 * @property Application $application
 * @property Employee $employee
 * @property Recipient $recipient1
 * @property Recipient $recipient2
 * @property array $mandatory_reqs
 * @property array $conditional_rqs
 * @property string $comments
 * @property string $csv_row
 * @property string $final_report
 * @property
 */
class ReqReport {

    public $application;
    public $employee;
    public $recipient1;
    public $recipient2;
    public $mandatory_reqs;
    public $conditional_reqs;
    public $final_report;
    public $comments;
    public $csv_row;
    public $doc_row;

    /**
     * ReportEntity constructor.
     * @param Application $_application
     */
    public function __construct(Application $_application) {

        $this -> application = Application::firstWhere('id', $_application -> id);
        $this -> employee = $this -> application -> r_employee;
        $this -> recipient1 = $this -> application -> recipient1;
        $this -> recipient2 = $this -> application -> recipient2;
        $this -> comments = $this -> application -> comments;

        $m_req = $this -> application -> mandatory_requirements;
        $c_req = $this -> application -> conditional_requirements;

        $this -> mandatory_reqs = $m_req[4];
        $this -> conditional_reqs = ($c_req[0] != 0) ? $c_req[4] : [];

        $mr_req = array_merge($this -> mandatory_reqs, $this -> conditional_reqs);

        $mr_flg = ($m_req[2] == 1 && $c_req[0] == $c_req[1]);

        $summary = $this -> __build_summary($mr_req, $mr_flg, !is_null($this -> application -> getRelation('recipient1')), !is_null($this -> application -> getRelation('recipient2')));
        $this -> final_report = $summary[0];

        $this -> csv_row = $this->__build_csv($summary[1]);
        $this -> doc_row = $this->__build_doc($summary[1]);

    }

    private function __build_csv($rq) {

        $comment = $this -> comments;
        $summary = $this -> final_report;

        $nq = [];

        foreach ($rq as $key => $val) {
            $var = (int)$val;
            if ($var == 0) {
                $nq[$key] = "No";
            } else if ($var == 1) {
                $nq[$key] = "Sí";
            } else {
                $nq[$key] = "N/A";
            }
        }

        $vars = [
            '$a_rad' => '"'.$this -> application -> filling_number.'"',
            '$e_doc' => $this -> employee -> document,
            '$e_name' => $this -> employee -> name,
            '$b1_doc' => (is_null($this -> application -> getRelation('recipient1'))) ? 'N/A' : $this -> recipient1 -> document,
            '$b1_name' => (is_null($this -> application -> getRelation('recipient1'))) ? 'N/A' : $this -> recipient1 -> name,
            '$b2_doc' => (is_null($this -> application -> getRelation('recipient2'))) ? 'N/A' : $this -> recipient2 -> document,
            '$b2_name' => (is_null($this -> application -> getRelation('recipient2'))) ? 'N/A' : $this -> recipient2 -> name,
            '$admon' => $nq['admon'],
            '$year' => $nq['year'],
            '$score' => $nq['score'],
            '$interest' => $nq['interest'],
            '$juramented' => $nq['juramented'],
            '$signup1' => $nq['sg1'],
            '$money1' => $nq['money1'],
            '$fam1' => $nq['fam1'],
            '$y1' => $nq['y1'],
            '$signup2' => $nq['sg2'],
            '$money2' => $nq['money2'],
            '$fam2' => $nq['fam2'],
            '$y2' => $nq['y2'],
            '$comment' => '"'.$comment.'"',
            '$summary1' => '"'.$summary[0].'"',
            '$summary2' => '"'.$summary[1].'"',
            '$summary3' => '"'.$summary[2].'"',
            '$summary4' => '"'.$summary[3].'"'
        ];

        $template = '$a_rad;$e_doc;$e_name;$b1_doc;$b1_name;$b2_doc;$b2_name;$admon;$year;$score;$interest;$juramented;$signup1;$money1;$fam1;$y1;$signup2;$money2;$fam2;$y2;$comment;$summary2;$summary3;$summary4';

        return strtr($template, $vars);

    }

    private function __build_doc($rq) {

        $comment = $this -> comments;
        $summary = $this -> final_report;

        $nq = [];

        foreach ($rq as $key => $val) {
            $var = (int)$val;
            if ($var == 0) {
                $nq[$key] = "No";
            } else if ($var == 1) {
                $nq[$key] = "Sí";
            } else {
                $nq[$key] = "N/A";
            }
        }

        $vars = [
            '$a_rad' => '"'.$this -> application -> filling_number.'"',
            '$e_doc' => $this -> employee -> document,
            '$e_name' => $this -> employee -> name,
            '$b1_doc' => (is_null($this -> application -> getRelation('recipient1'))) ? 'N/A' : $this -> recipient1 -> document,
            '$b1_name' => (is_null($this -> application -> getRelation('recipient1'))) ? 'N/A' : $this -> recipient1 -> name,
            '$b2_doc' => (is_null($this -> application -> getRelation('recipient2'))) ? 'N/A' : $this -> recipient2 -> document,
            '$b2_name' => (is_null($this -> application -> getRelation('recipient2'))) ? 'N/A' : $this -> recipient2 -> name,
            '$admon' => $nq['admon'],
            '$year' => $nq['year'],
            '$score' => $nq['score'],
            '$interest' => $nq['interest'],
            '$juramented' => $nq['juramented'],
            '$signup1' => $nq['sg1'],
            '$money1' => $nq['money1'],
            '$fam1' => $nq['fam1'],
            '$y1' => $nq['y1'],
            '$signup2' => $nq['sg2'],
            '$money2' => $nq['money2'],
            '$fam2' => $nq['fam2'],
            '$y2' => $nq['y2'],
            '$comment' => trim($comment),
            '$summary1' => trim(str_replace('. -', '.'.PHP_EOL.'-', $summary[0])),
            '$summary2' => trim(str_replace('. -', '.'.PHP_EOL.'-', $summary[1])),
            '$summary3' => trim(str_replace('. -', '.'.PHP_EOL.'-', $summary[2])),
            '$summary4' => trim(str_replace('. -', '.'.PHP_EOL.'-', $summary[3])),
        ];

        $template = '=============================================================================' . PHP_EOL. PHP_EOL;
        $template .= 'RADICADO $a_rad; FUNCIONARIO INDENTIFICADO CON CC $e_doc' . PHP_EOL . PHP_EOL;
        $template .= 'Beneficiario 1: Documento $b1_doc, Beneficiario 2: Documento $b2_doc' . PHP_EOL . PHP_EOL;
        $template .= 'Observaciones:'.PHP_EOL.PHP_EOL;
        $template .= '$comment' . PHP_EOL . PHP_EOL;
        $template .= 'Requerimientos faltantes:'.PHP_EOL.PHP_EOL;
        if ($summary[0] != '') $template .= '$summary1'.PHP_EOL;
        if ($summary[1] != '') $template .= '$summary2'.PHP_EOL;
        if ($summary[2] != '') $template .= '$summary3'.PHP_EOL;
        if ($summary[3] != '') $template .= '$summary4'.PHP_EOL;
        $template .= PHP_EOL;

        return strtr($template, $vars);

    }

    private function __build_summary(array $rq, bool $fl, bool $sc1, bool $sc2) {

        if ($fl) {
            return 'Todos los requerimientos de la solicitud han sido subsanados.';
        }

        if (array_key_exists('family1', $rq)) {
            $rq['fam1'] = (int)$rq['family1'];
        } else {
            $rq['fam1'] = 3;
        }

        if (array_key_exists('year1', $rq)) {
            $rq['y1'] = (int)$rq['year1'];
        } else {
            $rq['y1'] = 3;
        }

        if (array_key_exists('family2', $rq)) {
            $rq['fam2'] = (int)$rq['family2'];
        } else {
            $rq['fam2'] = 3;
        }

        if (array_key_exists('year2', $rq)) {
            $rq['y2'] = (int)$rq['year2'];
        } else {
            $rq['y2'] = 3;
        }

        if (array_key_exists('signup1', $rq)) {
            $rq['sg1'] = (int)$rq['signup1'];
        } else {
            $rq['sg1'] = 3;
        }

        if (array_key_exists('signup2', $rq)) {
            $rq['sg2'] = (int)$rq['signup2'];
        } else {
            $rq['sg2'] = 3;
        }

        if (array_key_exists('money1', $rq)) {
            $rq['money1'] = (int)$rq['money1'];
        } else {
            $rq['money1'] = 3;
        }

        if (array_key_exists('money2', $rq)) {
            $rq['money2'] = (int)$rq['money2'];
        } else {
            $rq['money2'] = 3;
        }

        $summary = [];
        $summary1 = '';
        $summary2 = '';
        $summary3 = '';
        $summary4 = '';

        if (!$rq['admon']) $summary1 .= ' - El funcionario no es de carrera administrativa.';
        if (!$rq['year']) $summary1  .= ' - El funcionario no cumple con la antigüedad mínima de un año.';
        if (!$rq['score']) $summary1 .= ' - El puntaje de desempeño del funcionario no es igual o mayor a sobresaliente.';

        $summary[0] = $summary1;

        if (!$rq['interest']) $summary2   .= ' - No se ha radicado una carta expresando interés por el auxilio.';
        if (!$rq['juramented']) $summary2 .= ' - No se ha radicado una declaración bajo juramento de no recibir otros auxilios.';

        $summary[1] = $summary2;

        if ($sc1) {
            if (!$rq['signup1']) $summary3   .= ' - No se ha radicado un certificado de matrícula en institución educativa para el beneficiario 1.';
            if (!$rq['money1']) $summary3    .= ' - El monto solicitado para el beneficiario 1 es desconocido.';
            if ($rq['fam1'] == 0) $summary3 .= ' - No se ha radicado un documento que certifique una relación de parentesco entre el beneficiario 1 y  el funcionario.';
            if ($rq['y1'] == 0) $summary3   .= ' - No se ha radicado un documento que certifique que el beneficiario 1 aprobó el programa cursado con un auxilio recibido en 2019-II.';
        }

        $summary[2] = $summary3;

        if ($sc2) {

            if (!$rq['sg2']) $summary4   .= ' - No se ha radicado un certificado de matrícula en institución educativa para el beneficiario 2.';
            if (!$rq['money2']) $summary4    .= ' - El monto solicitado para el beneficiario 2 es desconocido.';
            if ($rq['fam2'] == 0) $summary4 .= ' - No se ha radicado un documento que certifique una relación de parentesco entre el beneficiario 2 y  el funcionario.';
            if ($rq['y2'] == 0) $summary4   .= ' - No se ha radicado un documento que certifique que el beneficiario 2 aprobó el programa cursado con un auxilio recibido en 2019-II.';

        }

        $summary[3] = $summary4;

        return [$summary, $rq];

    }


}
