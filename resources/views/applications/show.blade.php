@extends('layouts.app', ['active' => 'applications'])
@php($employee = \App\Models\Employee::firstWhere('id', $data -> employee))
@php($score = $data -> score)
@section('title', 'Solicitudes')
@section('content')
    @if(session('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert" id="alert">
            <span class="alert-icon"><i class="fas fa-thumbs-down"></i></span>
            <span class="alert-text"><strong>¡Oh, No!</strong> Revisa tus datos e intenta de nuevo.</span>
            <button type="button" class="close" data-dismiss="alert" data-toggle="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    @if(session('wrong-cc'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert" id="alert">
            <span class="alert-icon"><i class="fas fa-thumbs-down"></i></span>
            <span class="alert-text"><strong>¡Oh, No!</strong> Asegúrate de que estés introduciendo un número de cédula válido.</span>
            <button type="button" class="close" data-dismiss="alert" data-toggle="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    @if (session('edit-ok'))
        <div class="alert alert-success alert-dismissible fade show" role="alert" id="keeley-alert">
            <span class="alert-icon"><i class="fas fa-thumbs-up"></i></span>
            <span class="alert-text"><strong>¡Perfecto!</strong> El registro seleccionado se ha actualizado con éxito.</span>
            <span type="button" id="keel" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </span>
        </div>
    @endif
    <div class="row justify-content-center">
        <div class="col-xl-6 order-xl-1">
            <div class="card">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h3 class="mb-0"> <i class="fas fa-eye"></i> &nbsp; Resumen de la solicitud </h3>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <h6 class="heading-small text-muted mb-4"> Empleado ::&nbsp; <a href="{{ route('employees.edit', $employee -> id) }}" class="text-muted heading-small"> <i class="fas fa-pen"></i> Editar </a> </h6>
                    <div class="pl-lg-4">
                        <div class="row justify-content-center">
                            <div class="col-lg-10">
                                <div class="form-group">
                                    <div class="input-group input-group-sm">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text text-sm" id="basic-addon1">Nombre</span>
                                        </div>
                                        <input type="text" class="form-control form-control-sm" placeholder="" aria-describedby="basic-addon1" value="{{ $employee -> name }}" readonly>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <div class="input-group input-group-sm">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text text-sm" id="basic-addon1">CC</span>
                                        </div>
                                        <input type="text" class="form-control form-control-sm" placeholder="" aria-describedby="basic-addon1" value="{{ $employee -> document }}" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <div class="input-group input-group-sm">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text text-sm" id="basic-addon1"> Vinculación </span>
                                        </div>
                                        <input type="text" class="form-control form-control-sm" placeholder="" aria-describedby="basic-addon1" value="{{ $employee -> employment_date }}" readonly>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <div class="input-group input-group-sm">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text text-sm" id="basic-addon1">Puntaje</span>
                                        </div>
                                        <input type="text" class="form-control form-control-sm" placeholder="" aria-describedby="basic-addon1" value="{{ $employee -> performance_score }}" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <div class="input-group input-group-sm">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text text-sm" id="basic-addon1"> Salario </span>
                                            <span class="input-group-text text-sm" id="basic-addon1"> $ </span>
                                        </div>
                                        <input type="text" class="form-control form-control-sm" placeholder="" aria-describedby="basic-addon1" value="{{ number_format($employee -> wage, 0, ',', '.') }}" readonly>
                                        <div class="input-group-append">
                                            <span class="input-group-text text-sm" id="basic-addon1"> .00 </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="my-4" />
                    <h6 class="heading-small text-muted mb-4"> Estado de requerimientos </h6>
                    <div class="row justify-content-center">
                        <div class="col-4">
                            <div class="card" data-toggle="tooltip" data-placement="top" title="¿El empleado posee más de un año de antigüedad?">
                                <div class="card-body" style="border: 10px #0a0c0d;">
                                    <div class="row justify-content-center">
                                        Antigüedad
                                    </div>
                                    <div class="row justify-content-center" style="margin-top: 2px">
                                        @if($data -> mandatory_requirements[4]['year'])
                                            <i class="text-success fas fa-check"></i>
                                        @else
                                            <i class="text-danger fas fa-times"></i>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="card" data-toggle="tooltip" data-placement="top" title="¿El empleado posee una calificación mayor a 90 en su evaluación de desempeño?">
                                <div class="card-body" style="border: 10px #0a0c0d;">
                                    <div class="row justify-content-center">
                                        Desempeño
                                    </div>
                                    <div class="row justify-content-center" style="margin-top: 2px">
                                        @if($data -> mandatory_requirements[4]['score'])
                                            <i class="text-success fas fa-check"></i>
                                        @else
                                            <i class="text-danger fas fa-times"></i>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                            <div class="col-4">
                                <div class="card" data-toggle="tooltip" data-placement="top" title="¿Se radicó una carta de manifestación de interés?">
                                    <div class="card-body" style="border: 10px #0a0c0d;">
                                        <div class="row justify-content-center">
                                            Carta de Interés
                                        </div>
                                        <div class="row justify-content-center" style="margin-top: 2px">
                                            @if($data -> has_interest_letter == 1)
                                                <i class="text-success fas fa-check"></i>
                                            @else
                                                <i class="text-danger fas fa-times"></i>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="card" data-toggle="tooltip" data-placement="top" title="¿Se radicó un certificado de matrícula en una institución educativa?">
                                    <div class="card-body" style="border: 10px #0a0c0d;">
                                        <div class="row justify-content-center">
                                            Matrícula
                                        </div>
                                        <div class="row justify-content-center" style="margin-top: 2px">
                                            @if($data -> has_education_signup == 1)
                                                <i class="text-success fas fa-check"></i>
                                            @else
                                                <i class="text-danger fas fa-times"></i>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="card" data-toggle="tooltip" data-placement="top" title="¿Se radicó una declaración bajo juramento de no recibir otro auxilio?">
                                    <div class="card-body" style="border: 10px #0a0c0d;">
                                        <div class="row justify-content-center">
                                            Declaración
                                        </div>
                                        <div class="row justify-content-center" style="margin-top: 2px">
                                            @if($data -> has_juramented_declaration == 1)
                                                <i class="text-success fas fa-check"></i>
                                            @else
                                                <i class="text-danger fas fa-times"></i>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <div class="row justify-content-center">
                        @isset($data -> conditional_requirements[4]['year'])
                        <div class="col-4">
                            <div class="card" data-toggle="tooltip" data-placement="top" title="¿Se radicó un certificado de aprobación de estudios de la convocatoria anterior?">
                                <div class="card-body" style="border: 10px #0a0c0d;">
                                    <div class="row justify-content-center">
                                        Aprobación anterior
                                    </div>
                                    <div class="row justify-content-center" style="margin-top: 2px">
                                        @if($data -> has_past_semester_approbation == 1)
                                            <i class="text-success fas fa-check"></i>
                                        @else
                                            <i class="text-danger fas fa-times"></i>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endisset
                        @isset($data -> conditional_requirements[4]['family'])
                        <div class="col-4">
                            <div class="card" data-toggle="tooltip" data-placement="top" title="¿Se radicó un documento que pruebe una relación de parentesco?">
                                <div class="card-body" style="border: 10px #0a0c0d;">
                                    <div class="row justify-content-center">
                                        Parentesco
                                    </div>
                                    <div class="row justify-content-center" style="margin-top: 2px">
                                        @if($data -> has_family_certificate == 1)
                                            <i class="text-success fas fa-check"></i>
                                        @else
                                            <i class="text-danger fas fa-times"></i>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endisset
                    </div>
                    <hr class="my-4" />
                    <h6 class="heading-small text-muted mb-4"> Puntaje ponderado </h6>
                    @if(!is_null($score[2]))
                        <div class="row justify-content-center">
                            <div class="col-4">
                                <div class="card" data-toggle="tooltip" data-placement="top" title="Define cuántos años ha pertenecido el empleado al ministerio.">
                                    <div class="card-body" style="border: 10px #0a0c0d;">
                                        <div class="row justify-content-center text-center" style="padding-bottom: 5px; font-size: x-large">
                                            <i class="fad fa-dot-circle @if($score[2][0][1] >= 50) text-success @elseif($score[2][0][1] >= 25) text-warning @else text-danger @endif"></i>
                                        </div>
                                        <div class="row justify-content-center text-center">
                                            Antigüedad (35%)
                                        </div>
                                        <div class="row justify-content-center text-center" style="margin-top: 2px">
                                            <span class="status text-sm"> {{ $score[2][0][0] }} años :: {{ $score[2][0][1] }} puntos </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="card" data-toggle="tooltip" data-placement="top" title="Define cuántos años ha pertenecido el empleado al ministerio.">
                                    <div class="card-body" style="border: 10px #0a0c0d;">
                                        <div class="row justify-content-center text-center" style="padding-bottom: 5px; font-size: x-large">
                                            <i class="fad fa-dot-circle @if($score[2][2][1] >= 50) text-success @elseif($score[2][2][1] >= 25) text-warning @else text-danger @endif"></i>
                                        </div>
                                        <div class="row justify-content-center text-center">
                                            Nivel objetivo (35%)
                                        </div>
                                        <div class="row justify-content-center text-center" style="margin-top: 2px">
                                            <span class="status text-sm"> {{ $score[2][2][0] -> name }} :: {{ $score[2][2][1] }} puntos </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="card" data-toggle="tooltip" data-placement="top" title="Define cuántos años ha pertenecido el empleado al ministerio.">
                                    <div class="card-body" style="border: 10px #0a0c0d;">
                                        <div class="row justify-content-center text-center" style="padding-bottom: 5px; font-size: x-large">
                                            <i class="fad fa-dot-circle @if($score[2][1][1] >= 50) text-success @elseif($score[2][1][1] >= 25) text-warning @else text-danger @endif"></i>
                                        </div>
                                        <div class="row justify-content-center text-center">
                                            Condición salarial (35%)
                                        </div>
                                        <div class="row justify-content-center text-center" style="margin-top: 2px">
                                            <span class="status text-sm"> {{ round($score[2][1][0]) }} SMMLV :: {{ $score[2][1][1] }} puntos </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-8">
                                <div class="card" data-toggle="tooltip" data-placement="top" title="Es la suma de los puntajes anteriores multiplicados por sus respectivos porcentajes.">
                                    <div class="card-body" style="border: 10px #0a0c0d;">
                                        <div class="row justify-content-center text-center" style="padding-bottom: 5px; font-size: x-large">
                                            <i class="fad fa-dot-circle @if($score[0] >= 50) text-success @elseif($score[0] >= 25) text-warning @else text-danger @endif"></i>
                                        </div>
                                        <div class="row justify-content-center text-center">
                                            Puntaje ponderado (100%)
                                        </div>
                                        <div class="row justify-content-center text-center" style="margin-top: 2px">
                                            <span class="status text-sm"> {{ $score[0] }} puntos </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="card" data-toggle="tooltip" data-placement="top" title="Posición en el escalafón de solicitudes.">
                                    <div class="card-body" style="border: 10px #0a0c0d;">
                                        <div class="row justify-content-center text-center" style="padding-bottom: 5px; font-size: x-large">
                                            <i class="fad fa-trophy-alt @if($data -> rank[0] <= 15) text-success @elseif($data -> rank[0] >= 30) text-warning @else text-danger @endif"></i>
                                        </div>
                                        <div class="row justify-content-center text-center">
                                            Posición general
                                        </div>
                                        <div class="row justify-content-center text-center" style="margin-top: 2px">
                                            <span class="status text-sm"> #{{ $data -> rank[0] + 1 }} de {{ $data -> rank[1] }} </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="row justify-content-center">
                            <div class="col-10">
                                <div class="card">
                                    <div class="card-body">
                                        <br/><br/>
                                        <div class="row text-center justify-content-center">
                                            <i class="fas fa-frown-open" style="font-size: 60px"></i>
                                        </div>
                                        <br/>
                                        <div class="row text-center justify-content-center">
                                            <h3 class="card-title">
                                                Debido a que todos los requerimientos no se han cumplido, no es posible calcular
                                                un puntaje para esta solicitud, y no será tenida en cuenta.
                                            </h3>
                                        </div>
                                        <br/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
        <div class="col-xl-6 order-xl-2">
            <div class="card">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h3 class="mb-0"> <i class="fas fa-pen"></i> &nbsp; Editar solicitud </h3>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form method="post" action="{{ route('applications.update', $data -> id) }}">
                        @csrf
                        @method('PATCH')
                        <h6 class="heading-small text-muted mb-4"> Información básica </h6>
                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="filling_number">Número de radicado</label>
                                        <input type="text" id="filling_number" name="filling_number" class="form-control" placeholder="XXXXXXX" value="{{ $data -> filling_number }}">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="filling_date">Fecha de radicado</label>
                                        <input type="date" id="filling_date" name="filling_date" class="form-control" placeholder="MM-DD-YYYY" value="{{ substr($data -> filling_date,0,10) }}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="employee_cc">Cédula del empleado</label>
                                        <input type="number" id="employee_cc" name="employee_cc" class="form-control" placeholder="XXXXXXXX" value="{{ \App\Models\Employee::firstWhere('id', $data -> employee) -> document }}">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="requested_money"> Monto solicitado ($) </label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">$</span>
                                            </div>
                                            <input id="requested_money" name="requested_money" type="number" class="form-control" value="{{ $data -> requested_money }}">
                                            <div class="input-group-append">
                                                <span class="input-group-text">.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="application_type">Tipo de aplicación</label>
                                        <select class="form-control" id="application_type" name="application_type" onchange="unhideForm(this)">
                                            @foreach(\App\Models\ApplicationType::all() as $applicationType)
                                                <option value="{{ $applicationType -> id }}"> {{ $applicationType -> name }} </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="application_target">Objetivo académico</label>
                                        <select class="form-control" id="application_target" name="application_target">
                                            @foreach(\App\Models\ApplicationTarget::all() as $applicationTarget)
                                                <option value="{{ $applicationTarget -> id }}"> {{ $applicationTarget -> name }} </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="hidden-form" class="d-none">
                            <hr class="my-4" />
                            <h6 class="heading-small text-muted mb-4"> Información del beneficiario (sólo solicitudes familiares) </h6>
                            <div class="pl-lg-4">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="employee_cc"> Cédula del beneficiario </label>
                                            <input type="number" id="beneficiary_document" name="beneficiary_document" class="form-control" placeholder="XXXXXXXXX" value="{{ $data -> beneficiary_document }}">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="requested_money"> Nombre del beneficiario </label>
                                            <input type="text" id="beneficiary_name" name="beneficiary_name" class="form-control" placeholder="Pepito Pérez" value="{{ $data -> beneficiary_name }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr class="my-4" />
                        <h6 class="heading-small text-muted mb-4"> Requerimientos obligatorios </h6>
                        <div class="pl-lg-4">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-lg-10">
                                            <label>¿Posee carta de manifestación de interés?</label>
                                        </div>
                                        <div class="col-lg-2">
                                            <div class="custom-control custom-checkbox">
                                                <label class="custom-toggle">
                                                    <input name="has_interest_letter" id="has_interest_letter" type="checkbox" @if($data -> has_interest_letter == 1) checked @endif>
                                                    <span class="custom-toggle-slider rounded-circle" data-label-off="No" data-label-on="Sí"></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-10">
                                            <label>¿Posee certificado de matrícula?</label>
                                        </div>
                                        <div class="col-lg-2">
                                            <div class="custom-control custom-checkbox">
                                                <label class="custom-toggle">
                                                    <input name="has_education_signup" id="has_education_signup" type="checkbox" @if($data -> has_education_signup == 1) checked @endif>
                                                    <span class="custom-toggle-slider rounded-circle" data-label-off="No" data-label-on="Sí"></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-10">
                                            <label>¿Posee declaración bajo juramento de no recibir otro auxilio?</label>
                                        </div>
                                        <div class="col-lg-2">
                                            <div class="custom-control custom-checkbox">
                                                <label class="custom-toggle">
                                                    <input name="has_juramented_declaration" id="has_juramented_declaration" type="checkbox" @if($data -> has_juramented_declaration == 1) checked @endif>
                                                    <span class="custom-toggle-slider rounded-circle" data-label-off="No" data-label-on="Sí"></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr class="my-4" />
                        <h6 class="heading-small text-muted mb-4"> Requerimientos opcionales </h6>
                        <div class="pl-lg-4">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-lg-10">
                                            <label>¿Fué beneficiario del año anterior?</label>
                                        </div>
                                        <div class="col-lg-2">
                                            <div class="custom-control custom-checkbox">
                                                <label class="custom-toggle">
                                                    <input name="last_year_beneficiary" id="last_year_beneficiary" type="checkbox" @if($data -> last_year_beneficiary == 1) checked @endif>
                                                    <span class="custom-toggle-slider rounded-circle" data-label-off="No" data-label-on="Sí"></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-10">
                                            <label>¿Posee certificado de aprobación del año anterior?</label>
                                        </div>
                                        <div class="col-lg-2">
                                            <div class="custom-control custom-checkbox">
                                                <label class="custom-toggle">
                                                    <input name="has_past_semester_approbation" id="has_past_semester_approbation" type="checkbox" @if($data -> has_past_semester_approbation == 1) checked @endif>
                                                    <span class="custom-toggle-slider rounded-circle" data-label-off="No" data-label-on="Sí"></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-10">
                                            <label>¿Posee documento de relación de parentesco? <i class="text-gray">(Sólo solicitudes familiares)</i></label>
                                        </div>
                                        <div class="col-lg-2">
                                            <div class="custom-control custom-checkbox">
                                                <label class="custom-toggle">
                                                    <input name="has_family_certificate" id="has_family_certificate" type="checkbox" @if($data -> has_family_certificate == 1) checked @endif>
                                                    <span class="custom-toggle-slider rounded-circle" data-label-off="No" data-label-on="Sí"></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr class="my-4" />
                        <h6 class="heading-small text-muted mb-4"> Comentarios </h6>
                        <div class="pl-lg-4">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <textarea class="form-control" id="comments" name="comments" rows="3">{{ $data -> comments }}</textarea>
                                </div>
                            </div>
                        </div>
                        <hr class="my-4" />
                        <div class="row justify-content-center">
                            <button class="btn btn-primary btn-icon" type="submit"> <i class="fas fa-check"></i> Aplicar </button>
                            <a class="btn btn-secondary btn-icon" href="{{ route('applications.index') }}"> <i class="fas fa-times"></i> Cancelar </a>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script type="text/javascript">
        $('#application_type').val({{ $data -> application_type }});
        $('#application_target').val({{ $data -> application_target }});
    </script>
    <script type="text/javascript">
        $(document).ready(function () {
            var app_f_id = $('#application_type').val();
            if (app_f_id == 2) {
                $('#hidden-form').removeClass();
            } else {
                $('#hidden-form').addClass("d-none");
            }
        })
    </script>
    <script type="text/javascript">
        function unhideForm(sel) {
            if (sel.value == 2) {
                $('#hidden-form').removeClass();
            } else {
                $('#hidden-form').addClass("d-none");
            }
        }
    </script>
@endsection
