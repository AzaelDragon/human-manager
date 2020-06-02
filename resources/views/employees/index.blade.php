@extends('layouts.app', ['active' => 'employees'])
@section('title', 'Empleados')
@section('top-navbar')
    <form class="navbar-search navbar-search-light form-inline mr-sm-3" id="navbar-search-main" method="post" action="{{ route('employees.search') }}">
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
        <a href="{{ route('employees.create') }}" class="btn btn-neutral">
            <i class="fas fa-user-plus"></i>
            Nuevo empleado
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
                @if (isset($nores))
                        <br/><br/><br/>
                        <h1 class="title text-center justify-content-center">
                            <i class="fas fa-sad-tear" style="font-size: 60px"></i>
                        </h1>
                        <br/>
                        <h2 class="title text-center justify-content-center">
                            No se encontraron resultados para esa consulta.
                        </h2>
                        <br/><br/><br/>
                @else
                <div class="card-header border-0">
                    <h3 class="mb-0"> @yield('title') Registrados</h3>
                </div>
                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                        <tr>
                            <th scope="col" class="sort" data-sort="document"> Cédula </th>
                            <th scope="col" class="sort" data-sort="name"> Nombre </th>
                            <th scope="col" class="sort" data-sort="perfomance_score"> Desempeño </th>
                            <th scope="col" class="sort" data-sort="is_administrative"> ¿Administrativo? </th>
                            <th scope="col" class="sort" data-sort="employment_date"> Antigüedad </th>
                            <th scope="col" class="sort" data-sort="wage"> Salario </th>
                            <th scope="col" class="sort" data-sort="limit"> Solicitudes </th>
                            <th scope="col" class="text-center"> Acciones </th>
                        </tr>
                        </thead>
                        <tbody class="list" id="data-list">
                            @foreach($data as $entry)
                            <tr>
                                <td scope="row">
                                    {{ $entry -> document }}
                                </td>
                                <td scope="row">
                                    {{ $entry -> name }}
                                </td>
                                <td>
                                    <span class="badge badge-dot mr-4">
                                        <i class=" @if($entry -> performance_score > 80) bg-success @elseif($entry -> performance_score < 35) bg-danger @else bg-warning @endif "></i>
                                        <span class="status"> {{ $entry -> performance_score  }} </span>
                                    </span>
                                </td>
                                <td>
                                    @if($entry -> is_administrative == 1)
                                        <i class="fas fa-check text-success"></i>
                                    @else
                                        <i class="fas fa-times text-danger"></i>
                                    @endif
                                </td>
                                <td scope="row">
                                    {{ substr($entry -> employment_date, 0, 10) }}
                                </td>
                                <td scope="row">
                                    $ {{ number_format($entry -> wage, 2, ',', '.') }}
                                </td>
                                <td>
                                    <span class="badge badge-dot mr-4">
                                        <i class=" @if(\App\Models\Application::where('employee', $entry -> id) -> count() <= 2) bg-success @else bg-danger @endif "></i>
                                        <span class="status"> {{ \App\Models\Application::where('employee', $entry -> id) -> count() }} </span>
                                    </span>
                                </td>
                                <td class="text-center">
                                    <a href="" class="btn btn-primary btn-icon-only btn-sm" data-toggle="tooltip" data-placement="bottom" title="Crear una solicitud para este empleado">
                                        <i class="fas fa-chart-network"></i>
                                    </a>
                                    <a href="{{ route('employees.edit', $entry -> id) }}" class="btn btn-info btn-icon-only btn-sm" data-toggle="tooltip" data-placement="bottom" title="Editar este empleado">
                                        <i class="fas fa-pencil"></i>
                                    </a>
                                    <button class="btn btn-danger btn-icon-only btn-sm keel-trigger" data-toggle="tooltip" data-placement="bottom" data-keelid="{{ $entry -> id }}" title="Eliminar este empleado">
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
                    $('#delete-form').attr('action', '{{route('employees.index')}}/' + keelId).submit();
                }
            })
        });
    </script>
@endsection
