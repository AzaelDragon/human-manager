@extends('layouts.app', ['active' => 'assistant'])
@section('title', 'Asistente')
@section('content')

    @if(session('errors'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert" id="alert">
            <span class="alert-icon"><i class="fas fa-thumbs-down"></i></span>
            <span class="alert-text"><strong>¡Oh, No!</strong> Revisa tus datos e intenta de nuevo.</span>
            <button type="button" class="close" data-dismiss="alert" data-toggle="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            {{ var_dump($errors) }}
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
    @if(session('no-benefit'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert" id="alert">
            <span class="alert-icon"><i class="fas fa-thumbs-down"></i></span>
            <span class="alert-text"><strong>¡Oh, No!</strong> Ha habido un error al buscar el usuario seleccionado.</span>
            <button type="button" class="close" data-dismiss="alert" data-toggle="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    <form method="post" action="{{ route('assistant.store') }}" id="main-form">
        @csrf
        <input type="hidden" name="application_type" id="application_type">
        <input type="hidden" name="employee" id="employee" value="{{ $employee -> id }}">
        <input type="hidden" name="last_year_beneficiary" id="last_year_beneficiary">
        <input type="hidden" name="has_past_semester_approbation" id="has_past_semester_approbation">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <br/><br/>
                        <div class="row text-center justify-content-center">
                            <h1 style="font-size: 75px" class="animate__animated animate__fadeIn text-primary">
                                <i class="fas fa-chart-network"></i>
                            </h1>
                        </div>
                        <div id="main-header-stuff">
                            <div class="row text-center justify-content-center">
                                <h1 class="card-title animate__animated animate__fadeIn text-primary" style="font-size: xx-large; font-weight: bold">
                                    ¡Perfecto!
                                </h1>
                            </div>
                            <div class="row text-center justify-content-center">
                                <h1 class="card-title animate__animated animate__fadeIn">
                                    @php($employee_name = explode(' ', ucwords(strtolower($employee -> name))))
                                    Para poder crear una solicitud para {{ $employee_name[0] }} @if(array_key_exists(2, $employee_name)) {{ $employee_name[2] }}, @elseif(array_key_exists(1, $employee_name)) {{ $employee_name[1] }}, @endif
                                    <br/> necesitamos un poco de información.
                                </h1>
                            </div>
                            <br/>
                            <div class="row text-center justify-content-center">
                                <h2 class="card-title animate__animated animate__fadeIn">
                                    ¿Esta solicitud es para el empleado, o para un familiar del empleado?
                                </h2>
                            </div>
                            <div class="row text-center justify-content-center">
                                <button type="button" class="btn btn-lg btn-primary" onclick="setApplicationType(0);">
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Empleado&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                </button>
                                &nbsp;&nbsp;&nbsp;
                                <button type="button" class="btn btn-lg btn-dark" onclick="setApplicationType(1);">
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Familiar&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                </button>
                            </div>
                        </div>
                        <div id="main-info-stuff" class="d-none">
                            <div class="row text-center justify-content-center">
                                <h1 class="card-title animate__animated animate__fadeIn">
                                    Ahora, un poco de información básica.
                                </h1>
                            </div>
                            <br/>
                            <div class="row text-center justify-content-center">
                                <div class="col-lg-8">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1"> # de Radicado </span>
                                            </div>
                                            <input type="text" class="form-control form-control-lg" placeholder="2020-XX-XXXX" id="filling_number" name="filling_number">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row text-center justify-content-center">
                                <div class="col-lg-8">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1"> Fecha de Radicado </span>
                                            </div>
                                            <input type="date" class="form-control form-control-lg" placeholder="MM-DD-AAAA" id="filling_date" name="filling_date">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row text-center justify-content-center">
                                <div class="col-lg-8">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1"> Monto solicitado </span>
                                                <span class="input-group-text"> $ </span>
                                            </div>
                                            <input type="number" class="form-control form-control-lg" placeholder="1000000" id="requested_money" name="requested_money">
                                            <div class="input-group-append">
                                                <span class="input-group-text"> .00 </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row text-center justify-content-center">
                                <div class="col-lg-8">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1"> Objetivo Académico </span>
                                            </div>
                                            <select class="form-control form-control-lg" id="application_target" name="application_target">
                                                @foreach(\App\Models\ApplicationTarget::all() as $applicationTarget)
                                                    <option value="{{ $applicationTarget -> id }}"> {{ $applicationTarget -> name }} </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row text-center justify-content-center">
                                <span id="basic-error" class="text-danger"></span>
                            </div>
                            <br/>
                            <div class="row text-center justify-content-center">
                                <button type="button" onclick="checkBasic()" class="btn btn-lg btn-primary">
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Siguiente&nbsp;&nbsp;<i class="fas fa-arrow-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                </button>
                            </div>
                            <br/>
                        </div>
                        <div id="beneficiary-stuff" class="d-none">
                            <div class="row text-center justify-content-center">
                                <h1 class="card-title animate__animated animate__fadeIn">
                                    Debido a que esta es una solicitud familiar,
                                    <br/>¿Quién será el beneficiario?
                                </h1>
                            </div>
                            <br/>
                            <div class="row text-center justify-content-center">
                                <div class="col-lg-8">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1"> Nombre </span>
                                            </div>
                                            <input type="text" class="form-control form-control-lg" placeholder="Julián Genérico" id="beneficiary_name" name="beneficiary_name">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row text-center justify-content-center">
                                <div class="col-lg-8">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1"> Cédula </span>
                                            </div>
                                            <input type="number" class="form-control form-control-lg" placeholder="1010101010" id="beneficiary_document" name="beneficiary_document">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row text-center justify-content-center">
                                <h3>¿Posee documento de relación de parentesco?</h3>
                            </div>
                            <div class="row text-center justify-content-center">
                                <div class="custom-control custom-checkbox">
                                    <label class="custom-toggle">
                                        <input name="has_family_certificate" id="has_family_certificate" type="checkbox">
                                        <span class="custom-toggle-slider rounded-circle" data-label-off="No" data-label-on="Sí"></span>
                                    </label>
                                </div>
                            </div>
                            <div class="row text-center justify-content-center">
                                <span id="beneficiary-error" class="text-danger"></span>
                            </div>
                            <br/>
                            <div class="row text-center justify-content-center">
                                <button type="button" onclick="checkBeneficiary()" class="btn btn-lg btn-primary">
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Siguiente&nbsp;&nbsp;<i class="fas fa-arrow-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                </button>
                            </div>
                        </div>
                        <div id="mandatory-stuff" class="d-none">
                            <div class="row text-center justify-content-center">
                                <h1 class="card-title animate__animated animate__fadeIn">
                                    ¿Cúales de los siguientes documentos fueron radicados?
                                </h1>
                            </div>
                            <br/>
                            <div class="row text-center justify-content-center">
                                <div class="col-lg-3">
                                    <h3>Carta de manifestación de interés</h3>
                                </div>
                                <div class="col-lg-1">
                                    <div class="custom-control custom-checkbox">
                                        <label class="custom-toggle">
                                            <input name="has_interest_letter" id="has_interest_letter" type="checkbox">
                                            <span class="custom-toggle-slider rounded-circle" data-label-off="No" data-label-on="Sí"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <br/>
                            <div class="row text-center justify-content-center">
                                <div class="col-lg-3">
                                    <h3>Certificado de matrícula&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h3>
                                </div>
                                <div class="col-lg-1">
                                    <div class="custom-control custom-checkbox">
                                        <label class="custom-toggle">
                                            <input name="has_education_signup" id="has_education_signup" type="checkbox">
                                            <span class="custom-toggle-slider rounded-circle" data-label-off="No" data-label-on="Sí"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <br/>
                            <div class="row text-center justify-content-center">
                                <div class="col-lg-3">
                                    <h3>Declaración bajo juramento&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h3>
                                </div>
                                <div class="col-lg-1">
                                    <div class="custom-control custom-checkbox">
                                        <label class="custom-toggle">
                                            <input name="has_juramented_declaration" id="has_juramented_declaration" type="checkbox">
                                            <span class="custom-toggle-slider rounded-circle" data-label-off="No" data-label-on="Sí"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <br/>
                            <div class="row text-center justify-content-center">
                                <button type="button" onclick="handleMandatory()" class="btn btn-lg btn-primary">
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Siguiente&nbsp;&nbsp;<i class="fas fa-arrow-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                </button>
                            </div>
                        </div>
                        <div id="prev-benefit-stuff" class="d-none">
                            <div class="row text-center justify-content-center">
                                <h2 class="card-title animate__animated animate__fadeIn">
                                    ¿Ha recibido este beneficiario un auxilio educativo en el 2019?
                                </h2>
                            </div>
                            <div id="prev-ben-btn" class="row text-center justify-content-center">
                                <button type="button" class="btn btn-lg btn-success" onclick="handlePrevBenefit(0);">
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sí&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                </button>
                                &nbsp;&nbsp;&nbsp;
                                <button type="button" class="btn btn-lg btn-danger" onclick="handlePrevBenefit(1);">
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;No&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                </button>
                            </div>
                            <div id="second-prev-benefit-stuff" class="d-none">
                                <br/>
                                <div class="row text-center justify-content-center">
                                    <h2 class="card-title animate__animated animate__fadeIn">
                                        ¿Posee una certificación de aprobación del curso del año anterior?
                                    </h2>
                                </div>
                                <div id="prev-ben-btn" class="row text-center justify-content-center">
                                    <button type="button" class="btn btn-lg btn-success" onclick="handleSecondPrevBenefit(0);">
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sí&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    </button>
                                    &nbsp;&nbsp;&nbsp;
                                    <button type="button" class="btn btn-lg btn-danger" onclick="handleSecondPrevBenefit(1);">
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;No&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    </button>
                                </div>
                            </div>
                            <br/>
                        </div>
                        <div id="comment-stuff" class="d-none">
                            <div class="row text-center justify-content-center">
                                <h1 class="card-title animate__animated animate__fadeIn">
                                    ¿Algún comentario?
                                </h1>
                            </div>
                            <div class="row text-center justify-content-center">
                                <div class="col-lg-8">
                                    <div class="form-group">
                                        <textarea class="form-control" id="comments" name="comments" rows="6"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row text-center justify-content-center">
                                <button type="button" onclick="finishProcessing()" class="btn btn-lg btn-primary">
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Siguiente&nbsp;&nbsp;<i class="fas fa-arrow-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                </button>
                            </div>
                        </div>
                        <div id="finish-stuff" class="d-none">
                            <div class="row text-center justify-content-center">
                                <h1 class="text-success card-title animate__animated animate__fadeIn">
                                    ¡Excelente!
                                </h1>
                            </div>
                            <div class="row text-center justify-content-center">
                                <h2 class="card-title animate__animated animate__fadeIn">
                                    Tu solicitud se ha almacenado correctamente.
                                </h2>
                            </div>
                        </div>
                        <br/><br/><br/>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
@section('scripts')
    <script type="text/javascript">

        function hideFirstBanner(func, num) {
            $('#main-header-stuff').addClass('animate__animated animate__fadeOut').on('animationend', function () {
                $(this).addClass('d-none');
                func(num);
            });
        }

        function showBasic() {
            $('#main-info-stuff').removeClass('d-none').addClass('animate__animated animate__fadeIn');
        }

        function afterFirst(num) {
            if (num === 0) {
                $('#application_type').val(1);
                showBasic();
            } else {
                $('#application_type').val(2);
                $('#beneficiary-stuff').removeClass('d-none').addClass('animate__animated animate__fadeIn');
            }
        }

        function showPrevBenefit() {
            $('#prev-benefit-stuff').removeClass('d-none').addClass('animate__animated animate__fadeIn');
        }

        function showComments() {
            $('#comment-stuff').removeClass('d-none').addClass('animate__animated animate__fadeIn');
        }

        function showSecondPrevPrompt() {
            $('#second-prev-benefit-stuff').removeClass('d-none').addClass('animate__animated animate__fadeIn');
        }

        function showMandatory() {
            $('#prev-benefit-stuff').addClass('animate__animated animate__fadeOut').on('animationend', function () {
                $(this).addClass('d-none');
                $('#mandatory-stuff').removeClass('d-none').addClass('animate__animated animate__fadeIn');
            });
        }

        function handleMandatory() {
            $('#mandatory-stuff').addClass('animate__animated animate__fadeOut').on('animationend', function () {
                $(this).addClass('d-none');
                showComments();
            });
        }

        function handlePrevBenefit(num) {
            if (num === 0) {
                $('#last_year_beneficiary').val('on');
                $('#prev-ben-btn').addClass('animate__animated animate__fadeOut').on('animationend', function () {
                    $(this).html('<h2 class="text-success"><i class="fas fa-check"></i> &nbsp;&nbsp; Sí.</h2>').removeClass('animate__fadeOut').addClass('animate__fadeIn');
                    showSecondPrevPrompt();
                });
            } else {
                showMandatory();
            }
        }

        function handleSecondPrevBenefit(num) {
            if (num === 0) {
                $('#has_past_semester_approbation').val('on');
            }
            showMandatory();
        }

        function checkBasic() {
            if ($('#filling_number').val() === '' || $('#requested_money').val() === '') {
                $('#basic-error').html('Algo no está bien. Revisa tus datos e intenta de nuevo.')
            } else {
                $('#main-info-stuff').addClass('animate__animated animate__fadeOut').on('animationend', function () {
                    $(this).addClass('d-none');
                    showPrevBenefit();
                });
            }
        }

        function checkBeneficiary() {
            if ($('#beneficiary_document').val() === '' || $('#beneficiary_name').val() === '') {
                $('#beneficiary-error').html('Algo no está bien. Revisa tus datos e intenta de nuevo.')
            } else {
                $('#beneficiary-stuff').addClass('animate__animated animate__fadeOut').on('animationend', function () {
                    $(this).addClass('d-none');
                    showBasic();
                });
            }
        }

        function setApplicationType(num) {
            $('#application_type').val(num);
            hideFirstBanner(afterFirst, num)
        }

        function finishProcessing() {
            $('#comment-stuff').addClass('animate__animated animate__fadeOut').on('animationend', function () {
                $(this).addClass('d-none');
                $('#finish-stuff').removeClass('d-none').addClass('animate__animated animate__fadeIn').on('animationend', function () {
                    $('#main-form').submit();
                });
            });
        }

    </script>
@endsection
