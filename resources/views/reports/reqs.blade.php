{{--Número de Radicado;CC Funcionario;Nombre Funcionario;Documento Ben. 1;Nombre Ben. 1;Document Ben. 1;Nombre Ben. 1;RQ-ADM;RQ-ANT;RQ_DES;DC-INT;DC-JUR;B1-MAT;B1-$;B1-FAM;B1-PREV;B2-MAT;B2-$;B2-FAM;B2-PREV;Comentarios;Req. Funcionario;Req. Básicos;Req. Benefeciario 1;Req. Beneficiario 2--}}
@foreach($data as $boop)
{{ $boop -> doc_row }}
@endforeach
