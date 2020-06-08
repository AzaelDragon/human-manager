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
    @if (session('comment-ok'))
        <div class="alert alert-success alert-dismissible fade show" role="alert" id="keeley-alert">
            <span class="alert-icon"><i class="fas fa-thumbs-up"></i></span>
            <span class="alert-text"><strong>¡Perfecto!</strong> Se han actualizado los comentarios de esta solicitud.</span>
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
                    <h6 class="heading-small text-muted mb-4"> funcionario ::&nbsp; <a href="{{ route('employees.edit', $employee -> id) }}" class="text-muted heading-small"> <i class="fas fa-pen"></i> Editar </a> </h6>
                    <div class="container">
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
                                        <input type="text" class="form-control form-control-sm" placeholder="" aria-describedby="basic-addon1" value="{{ explode(' ', $employee -> employment_date)[0] }}" readonly>
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
                        <div class="row justify-content-center">
                            <div class="col-3">
                                <div class="card" data-toggle="tooltip" data-placement="top" title="¿Es funcionario de carrera administrativa?">
                                    <div class="card-body" style="border: 10px #0a0c0d;">
                                        <div class="row justify-content-center">
                                            C. Administrativa
                                        </div>
                                        <div class="row justify-content-center" style="margin-top: 2px">
                                            @if($data -> r_employee -> is_administrative == 1)
                                                <i class="text-success fas fa-check"></i>
                                            @else
                                                <i class="text-danger fas fa-times"></i>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="card" data-toggle="tooltip" data-placement="top" title="¿El funcionario posee más de un año de antigüedad?">
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
                            <div class="col-3">
                                <div class="card" data-toggle="tooltip" data-placement="top" title="¿El funcionario posee una calificación mayor a 90 en su evaluación de desempeño?">
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
                    </div>
                    <hr class="my-4" />
                    <h6 class="heading-small text-muted mb-4"> @if(!is_null($data -> recipient_2)) Primer @endif Beneficiario </h6>
                    @if ($data -> recipient1 -> document == $data -> r_employee -> document)
                        <div class="row justify-content-center text-center">
                            <span class="text-muted text-sm text-center" style="font-style: italic"> <b>Nota:</b> Este beneficiario es el mismo funcionario. </span>
                            <br/><br/>
                        </div>
                    @endif
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <div class="input-group input-group-sm">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text text-sm" id="basic-addon1">Nombre</span>
                                        </div>
                                        <input type="text" class="form-control form-control-sm" placeholder="" aria-describedby="basic-addon1" value="{{ $data -> recipient1 -> name }}" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <div class="input-group input-group-sm">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text text-sm" id="basic-addon1">DNI</span>
                                        </div>
                                        <input type="text" class="form-control form-control-sm" placeholder="" aria-describedby="basic-addon1" value="{{ $data -> recipient1 -> document }}" readonly>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="form-group">
                                    <div class="input-group input-group-sm">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text text-sm" id="basic-addon1">Nivel Educativo</span>
                                        </div>
                                        <input type="text" class="form-control form-control-sm" placeholder="" aria-describedby="basic-addon1" value="{{ $data -> recipient1 -> level -> name }}" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="form-group">
                                    <div class="input-group input-group-sm">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text text-sm" id="basic-addon1"> Monto Solicitado </span>
                                            <span class="input-group-text text-sm" id="basic-addon1"> $ </span>
                                        </div>
                                        <input type="text" class="form-control form-control-sm" placeholder="" aria-describedby="basic-addon1" value="{{ number_format($data -> recipient1 -> requested_money, 0, ',', '.') }}" readonly>
                                        <div class="input-group-append">
                                            <span class="input-group-text text-sm" id="basic-addon1"> .00 </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center" style="margin-left: 35px; margin-right: 35px">
                            <div class="col-3">
                                <div class="card" data-toggle="tooltip" data-placement="top" title="¿Se radicó un documento de matrícula en una institución educativa?">
                                    <div class="card-body" style="border: 10px #0a0c0d;">
                                        <div class="row justify-content-center">
                                            Matrícula
                                        </div>
                                        <div class="row justify-content-center" style="margin-top: 2px">
                                            @if($data -> recipient1 -> has_education_signup)
                                                <i class="text-success fas fa-check"></i>
                                            @else
                                                <i class="text-danger fas fa-times"></i>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @if($data -> recipient1 -> recipient_type == 2)
                            <div class="col-3">
                                <div class="card" data-toggle="tooltip" data-placement="top" title="¿Se radicó un documento que soporte su parentesco con el funcionario?">
                                    <div class="card-body" style="border: 10px #0a0c0d;">
                                        <div class="row justify-content-center">
                                            Parentesco
                                        </div>
                                        <div class="row justify-content-center" style="margin-top: 2px">
                                            @if($data -> conditional_requirements[4]['family1'])
                                                <i class="text-success fas fa-check"></i>
                                            @else
                                                <i class="text-danger fas fa-times"></i>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif
                            @if(!\App\Models\OldRecipient::where('id', $data -> recipient_1) -> get() -> isEmpty())
                            <div class="col-3">
                                <div class="card" data-toggle="tooltip" data-placement="top" title="¿Se radicó un documento que demuestre que se aprobó el programa cursado en la convocatoria anterior?">
                                    <div class="card-body" style="border: 10px #0a0c0d;">
                                        <div class="row justify-content-center">
                                            Aprobación
                                        </div>
                                        <div class="row justify-content-center" style="margin-top: 2px">
                                            @if($data -> recipient1 -> has_past_semester_approbation)
                                                <i class="text-success fas fa-check"></i>
                                            @else
                                                <i class="text-danger fas fa-times"></i>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="card" data-toggle="tooltip" data-placement="top" title="¿El monto solicitado para este beneficiario es válido?">
                                    <div class="card-body" style="border: 10px #0a0c0d;">
                                        <div class="row justify-content-center">
                                            ($) Válido
                                        </div>
                                        <div class="row justify-content-center" style="margin-top: 2px">
                                            @if($data -> recipient1 -> requested_money >= 1)
                                                <i class="text-success fas fa-check"></i>
                                            @else
                                                <i class="text-danger fas fa-times"></i>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif
                        </div>
                    </div>
                    @if (!is_null($data -> recipient_2))
                        <hr class="my-4" />
                        <h6 class="heading-small text-muted mb-4"> Segundo Beneficiario </h6>
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <div class="input-group input-group-sm">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text text-sm" id="basic-addon1">Nombre</span>
                                            </div>
                                            <input type="text" class="form-control form-control-sm" placeholder="" aria-describedby="basic-addon1" value="{{ $data -> recipient2 -> name }}" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <div class="input-group input-group-sm">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text text-sm" id="basic-addon1">DNI</span>
                                            </div>
                                            <input type="text" class="form-control form-control-sm" placeholder="" aria-describedby="basic-addon1" value="{{ $data -> recipient2 -> document }}" readonly>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-lg-5">
                                    <div class="form-group">
                                        <div class="input-group input-group-sm">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text text-sm" id="basic-addon1">Nivel Educativo</span>
                                            </div>
                                            <input type="text" class="form-control form-control-sm" placeholder="" aria-describedby="basic-addon1" value="{{ $data -> recipient2 -> level -> name }}" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="form-group">
                                        <div class="input-group input-group-sm">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text text-sm" id="basic-addon1"> Monto Solicitado </span>
                                                <span class="input-group-text text-sm" id="basic-addon1"> $ </span>
                                            </div>
                                            <input type="text" class="form-control form-control-sm" placeholder="" aria-describedby="basic-addon1" value="{{ number_format($data -> recipient2 -> requested_money, 0, ',', '.') }}" readonly>
                                            <div class="input-group-append">
                                                <span class="input-group-text text-sm" id="basic-addon1"> .00 </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-center" style="margin-left: 35px; margin-right: 35px">
                                <div class="col-3">
                                    <div class="card" data-toggle="tooltip" data-placement="top" title="¿Se radicó un documento de matrícula en una institución educativa?">
                                        <div class="card-body" style="border: 10px #0a0c0d;">
                                            <div class="row justify-content-center">
                                                Matrícula
                                            </div>
                                            <div class="row justify-content-center" style="margin-top: 2px">
                                                @if($data -> recipient2 -> has_education_signup)
                                                    <i class="text-success fas fa-check"></i>
                                                @else
                                                    <i class="text-danger fas fa-times"></i>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @if($data -> recipient2 -> recipient_type == 2)
                                    <div class="col-3">
                                        <div class="card" data-toggle="tooltip" data-placement="top" title="¿Se radicó un documento que soporte su parentesco con el funcionario?">
                                            <div class="card-body" style="border: 10px #0a0c0d;">
                                                <div class="row justify-content-center">
                                                    Parentesco
                                                </div>
                                                <div class="row justify-content-center" style="margin-top: 2px">
                                                    @if($data -> conditional_requirements[4]['family2'])
                                                        <i class="text-success fas fa-check"></i>
                                                    @else
                                                        <i class="text-danger fas fa-times"></i>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                                @if(!\App\Models\OldRecipient::where('id', $data -> recipient_2) -> get() -> isEmpty())
                                    <div class="col-3">
                                        <div class="card" data-toggle="tooltip" data-placement="top" title="¿Se radicó un documento que demuestre que se aprobó el programa cursado en la convocatoria anterior?">
                                            <div class="card-body" style="border: 10px #0a0c0d;">
                                                <div class="row justify-content-center">
                                                    Aprobación
                                                </div>
                                                <div class="row justify-content-center" style="margin-top: 2px">
                                                    @if($data -> recipient2 -> has_past_semester_approbation)
                                                        <i class="text-success fas fa-check"></i>
                                                    @else
                                                        <i class="text-danger fas fa-times"></i>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="card" data-toggle="tooltip" data-placement="top" title="¿El monto solicitado para este beneficiario es válido?">
                                            <div class="card-body" style="border: 10px #0a0c0d;">
                                                <div class="row justify-content-center">
                                                    ($) Válido
                                                </div>
                                                <div class="row justify-content-center" style="margin-top: 2px">
                                                    @if($data -> recipient1 -> requested_money >= 1)
                                                        <i class="text-success fas fa-check"></i>
                                                    @else
                                                        <i class="text-danger fas fa-times"></i>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
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
                            <h3 class="mb-0"> <i class="fas fa-star"></i>  &nbsp; Información adicional</h3>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <h6 class="heading-small text-muted mb-4"> Documentación Básica </h6>
                    <div class="row justify-content-center">
                        <div class="col-3">
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
                        <div class="col-3">
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
                    <hr class="my-4" />
                    <h6 class="heading-small text-muted mb-4"> Comentarios </h6>
                    <form method="post" action="{{ route('applications.comment') }}">
                        <div class="row justify-content-center">
                            <div class="col-10">
                                @csrf
                                <input type="hidden" value="{{ $data -> id }}" name="application" id="application">
                                <textarea class="form-control" rows="6" id="comments" name="comments">
                                    {{ $data -> comments }}
                                </textarea>
                            </div>
                        </div>
                        <br/>
                        <div class="row justify-content-center">
                            <button type="submit" class="btn btn-info btn-icon">
                                <i class="fas fa-sync"></i> &nbsp; Actualizar
                            </button>
                        </div>
                    </form>
                    <hr class="my-4" />
                    <h6 class="heading-small text-muted mb-4"> Puntaje ponderado </h6>
                    @if(!is_null($score[2]))
                        <div class="row justify-content-center" style="margin-right: 35px; margin-left: 35px">
                            <div class="col-4">
                                <div class="card" data-toggle="tooltip" data-placement="top" title="Define cuántos años ha pertenecido el funcionario al ministerio.">
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
                                <div class="card" data-toggle="tooltip" data-placement="top" title="Define cuántos años ha pertenecido el funcionario al ministerio.">
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
                                <div class="card" data-toggle="tooltip" data-placement="top" title="Define cuántos años ha pertenecido el funcionario al ministerio.">
                                    <div class="card-body" style="border: 10px #0a0c0d;">
                                        <div class="row justify-content-center text-center" style="padding-bottom: 5px; font-size: x-large">
                                            <i class="fad fa-dot-circle @if($score[2][1][1] >= 50) text-success @elseif($score[2][1][1] >= 25) text-warning @else text-danger @endif"></i>
                                        </div>
                                        <div class="row justify-content-center text-center">
                                            Condición salarial (35%)
                                        </div>
                                        <div class="row justify-content-center text-center" style="margin-top: 2px">
                                            <span class="status text-sm"> {{ $score[2][1][0] }} SMMLV :: {{ $score[2][1][1] }} puntos </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center" style="margin-right: 35px; margin-left: 35px">
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
                                            <h3 class="card-title" style="padding-left: 70px; padding-right: 70px">
                                                Debido a que todos los requerimientos no se han cumplido, no es posible calcular
                                                un puntaje para esta solicitud, y no será tenida en cuenta.
                                            </h3>
                                            <br/>
                                        </div>
                                        <div class="row justify-content-center">
                                            <div class="col-4">
                                                {!! $data -> mandatory_requirements[3] !!}
                                            </div>
                                            <div class="col-5">
                                                {!! $data -> conditional_requirements[3] !!}
                                            </div>
                                        </div>
                                        <br/><br/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
