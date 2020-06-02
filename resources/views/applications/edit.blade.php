@extends('layouts.app', ['active' => 'applications'])
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
    <div class="row justify-content-center">
        <div class="col-xl-8 order-xl-1">
            <div class="card">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h3 class="mb-0"> Editar solicitud </h3>
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
                                        <input type="number" id="filling_number" name="filling_number" class="form-control" placeholder="XXXXXXX" value="{{ $data -> filling_number }}">
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
                                        <input type="number" id="requested_money" name="requested_money" class="form-control" placeholder="XXXXXXXX" value="{{ $data -> requested_money }}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="application_type">Tipo de aplicación</label>
                                        <select class="form-control" id="application_type" name="application_type">
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
                                            <label>¿Fué beneficiario en 2019?</label>
                                        </div>
                                        <div class="col-lg-2">
                                            <div class="custom-control custom-checkbox">
                                                <label class="custom-toggle">
                                                    <input name="had_benefit_before" id="had_benefit_before" type="checkbox" @if($data -> had_benefit_before == 1) checked @endif>
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
@endsection
