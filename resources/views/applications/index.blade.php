@extends('layouts.app', ['active' => 'applications'])
@section('title', 'Solicitudes')
@section('top-navbar')
    <form class="navbar-search navbar-search-light form-inline mr-sm-3" id="navbar-search-main" method="post" action="{{ route('applications.search') }}">
        <div class="form-group mb-0">
            <div class="input-group input-group-alternative input-group-merge">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-search"></i></span>
                </div>
                @csrf
                <input class="form-control" placeholder="Buscar un registro..." type="text" id="query_text" name="query_text">
            </div>
        </div>
    </form>
@endsection
@section('top-buttons')
        <a href="{{ route('applications.create') }}" class="btn btn-neutral">
            <i class="fas fa-user-plus"></i>
            Crear solicitud manualmente
        </a>
@endsection
@section('content')
    @if (session('edit-ok'))
        <div class="alert alert-success alert-dismissible fade show" role="alert" id="keeley-alert">
            <span class="alert-icon"><i class="fas fa-thumbs-up"></i></span>
            <span class="alert-text"><strong>¡Perfecto!</strong> El registro seleccionado se ha actualizado con éxito.</span>
            <span type="button" id="keel" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </span>
        </div>
    @endif
    @if (session('create-ok'))
        <div class="alert alert-success alert-dismissible fade show" role="alert" id="keeley-alert">
            <span class="alert-icon"><i class="fas fa-thumbs-up"></i></span>
            <span class="alert-text"><strong>¡Perfecto!</strong> Se ha creado un nuevo registro.</span>
            <span type="button" id="keel" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </span>
        </div>
    @endif
    @if (session('delete-ok'))
        <div class="alert alert-success alert-dismissible fade show" role="alert" id="keeley-alert">
            <span class="alert-icon"><i class="fas fa-thumbs-up"></i></span>
            <span class="alert-text"><strong>¡Perfecto!</strong> Se ha eliminado el registro especificado.</span>
            <span type="button" id="keel" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </span>
        </div>
    @endif
    <div class="row">
        <div class="col">
            <div class="card">
                @if (isset($nores) || $data -> isEmpty())
                        <br/><br/><br/>
                        <h1 class="title text-center justify-content-center">
                            <i class="fas fa-sad-tear" style="font-size: 60px"></i>
                        </h1>
                        <br/>
                        <h2 class="title text-center justify-content-center">
                            No se encontraron resultados.
                        </h2>
                        <br/><br/><br/>
                @else
                <div class="card-header border-0">
                    <h3 class="mb-0"> @yield('title') Registradas</h3>
                </div>
                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                        <tr>
                            <th scope="col" class="sort" data-sort="filling_number"> Radicado </th>
                            <th scope="col" class="sort" data-sort="filling_date"> Fecha </th>
                            <th scope="col" class="sort" data-sort="employee"> Empleado </th>
                            <th scope="col" class="sort" data-sort="req-ob-count"> Req. Obligatorios</th>
                            <th scope="col" class="sort" data-sort="req-op-count"> Req. Condicionales</th>
                            <th scope="col" class="sort" data-sort="final-score"> Puntaje </th>
                            <th scope="col" class="text-center"> Acciones </th>
                        </tr>
                        </thead>
                        <tbody class="list" id="data-list">
                            @foreach($data as $entry)
                            @php($employee = $entry -> r_employee)
                            @php($pond_req = $entry -> mandatory_requirements)
                            @php($pond_opt = $entry -> conditional_requirements)
                            @php($score = $entry -> score)
                            <tr>
                                <td scope="row">
                                    {{ $entry -> filling_number }}
                                </td>
                                <td scope="row">
                                    @if(isset($entry -> filling_date) && $entry -> filling_date != null)
                                        {{ substr($entry -> filling_date, 0, 10) }}
                                    @else
                                        N/A
                                    @endif
                                </td>
                                <td scope="row">
                                    {{ \App\Models\Employee::firstWhere('id', $entry -> employee) -> name }}
                                </td>
                                <td>
                                    <button class="d-flex align-items-center btn btn-link text-default" data-container="body" data-toggle="popover" data-color="secondary" data-placement="left" data-html="true" data-content="{{ $pond_req[3] }}">
                                        <span class="completion mr-2"> {{ $pond_req[1] }}/{{ $pond_req[0] }} </span>
                                        <div>
                                            <div class="progress" style="width: 70px !important;">
                                                <div class="progress-bar @if($pond_req[1] == $pond_req[0]) bg-success @else bg-danger @endif" role="progressbar" aria-valuenow="3" aria-valuemin="0" aria-valuemax="100" style="width: {{ $pond_req[2] }}%;"></div>
                                            </div>
                                        </div>
                                    </button>
                                </td>
                                <td>
                                    <button class="d-flex align-items-center btn btn-link text-default" data-container="body" data-toggle="popover" data-color="secondary" data-placement="left" data-html="true" data-content="{{ $pond_opt[3] }}">
                                        <span class="completion mr-2"> @if($pond_opt[0] == 0) <span class="text-gray">No aplica</span> @else {{ $pond_opt[1] }}/{{ $pond_opt[0] }} @endif </span>
                                        @if($pond_opt[0] != 0)
                                        <div>
                                            <div class="progress" style="width: 70px !important;">
                                                <div class="progress-bar @if($pond_opt[1] == $pond_opt[0]) bg-success @else bg-danger @endif" role="progressbar" aria-valuenow="3" aria-valuemin="0" aria-valuemax="100" style="width: {{ $pond_opt[2] }}%;"></div>
                                            </div>
                                        </div>
                                        @endif
                                    </button>
                                </td>
                                <td>
                                    <button class="badge badge-dot mr-4 btn btn-link text-default" data-container="body" data-toggle="popover" data-color="secondary" data-placement="left" data-html="true" data-content="{{ $score[1] }}">
                                        <i class=" @if($score[0] >= 1) bg-success @else bg-danger @endif "></i>
                                        <span class="status"> @if($score[0] >= 1) {{ $score[0] }} @else N/A @endif </span>
                                    </button>
                                </td>
                                <td class="text-center">
                                    <a href="{{ route('applications.show', $entry -> id) }}" class="btn btn-primary btn-icon-only btn-sm" data-toggle="tooltip" data-placement="bottom" title="Visualizar esta solicitud">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <a href="{{ route('applications.edit', $entry -> id) }}" class="btn btn-info btn-icon-only btn-sm" data-toggle="tooltip" data-placement="bottom" title="Editar esta solicitud">
                                        <i class="fas fa-pencil"></i>
                                    </a>
                                    <button class="btn btn-danger btn-icon-only btn-sm keel-trigger" data-toggle="tooltip" data-placement="bottom" data-keelid="{{ $entry -> id }}" title="Eliminar esta solicitud">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="card-footer py-4">
                    {{ $data -> links() }}
                </div>
                @endif
            </div>
        </div>
    </div>
@endsection
@section('meta-content')
    <form action="" method="post" id="delete-form">
        @csrf
        @method('DELETE')
    </form>
@endsection
@section('scripts')
    <script type="text/javascript">
        $('.keel-trigger').click( function () {
            var keelId = $(this).data('keelid');
            var swalAlert = Swal.mixin({
                customClass: {
                    confirmButton: 'btn btn-success',
                    cancelButton: 'btn btn-danger'
                },
                buttonsStyling: false
            })
            swalAlert.fire({
                title: '¿Estás seguro?',
                text: "¡Este cambio no es reversible!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Sí, estoy seguro.',
                cancelButtonText: 'No, cancelar.',
                reverseButtons: true
            }).then((result) => {
                if (result.value) {
                    $('#delete-form').attr('action', '{{route('applications.index')}}/' + keelId).submit();
                }
            })
        });
    </script>
@endsection
