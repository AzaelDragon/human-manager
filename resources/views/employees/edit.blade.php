@extends('layouts.app', ['active' => 'employees'])
@section('title', 'Empleados')
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
    <div class="row justify-content-center">
        <div class="col-xl-8 order-xl-1">
            <div class="card">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h3 class="mb-0">Editar empleado </h3>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form method="post" action="{{ route('employees.update', $data -> id) }}">
                        @csrf
                        @method('PATCH')
                        <h6 class="heading-small text-muted mb-4"> Información personal</h6>
                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="document">Documento de Identidad</label>
                                        <input type="text" id="document" name="document" class="form-control" placeholder="11223344" value="{{ $data -> document }}">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="employment_date">Fecha de Ingreso</label>
                                        <input type="date" id="employment_date" name="employment_date" class="form-control" placeholder="MM-DD-YYYY" value="{{ substr($data -> employment_date,0,10) }}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="name"> Nombre completo </label>
                                        <input type="text" id="name" name="name" class="form-control" placeholder="..." value="{{ $data -> name }}">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="wage"> Salario básico </label>
                                        <input type="number" id="wage" name="wage" class="form-control" placeholder="1111111" value="{{ $data -> wage }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr class="my-4" />
                        <h6 class="heading-small text-muted mb-4"> Información específica</h6>
                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-address"> Puntaje de desempeño</label>
                                        <input id="performance_score" name="performance_score" class="form-control" placeholder="XXX" value="{{ $data -> performance_score }}" type="number">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label style="margin-left: 28px">¿Es de carrera administrativa?</label>
                                        <div class="custom-control custom-checkbox">
                                            <label class="custom-toggle">
                                                <input name="is_administrative" id="is_administrative" type="checkbox" @if($data -> is_administrative == 1) checked @endif>
                                                <span class="custom-toggle-slider rounded-circle" data-label-off="No" data-label-on="Sí"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label style="margin-left: 28px">¿Fúe beneficiario en el 2019?</label>
                                        <div class="custom-control custom-checkbox">
                                            <label class="custom-toggle">
                                                <input name="last_year_beneficiary" id="last_year_beneficiary" type="checkbox" @if($data -> last_year_beneficiary == 1) checked @endif>
                                                <span class="custom-toggle-slider rounded-circle" data-label-off="No" data-label-on="Sí"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr class="my-4" />
                        <div class="row justify-content-center">
                            <button class="btn btn-primary btn-icon" type="submit"> <i class="fas fa-check"></i> Aplicar </button>
                            <a class="btn btn-secondary btn-icon" href="{{ route('employees.index') }}"> <i class="fas fa-times"></i> Cancelar </a>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
