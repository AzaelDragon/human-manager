@extends('layouts.app', ['active' => 'recipients'])
@section('title', 'Beneficiarios')
@section('top-navbar')
    <form class="navbar-search navbar-search-light form-inline mr-sm-3" id="navbar-search-main" method="post" action="{{ route('recipients.search') }}">
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
                                <th scope="col" class="sort" data-sort="document"> DNI </th>
                                <th scope="col" class="sort" data-sort="name"> Nombre </th>
                                <th scope="col" class="sort" data-sort="recipient_type"> Clasificación </th>
                                <th scope="col" class="sort" data-sort="requested_money"> Monto Solicitado </th>
                                <th scope="col" class="sort" data-sort="education_level"> Nivel educativo </th>
                                <th scope="col" class="sort text-center" data-sort="wage"> Requerimientos </th>
                                <th scope="col" class="text-center"> Acciones </th>
                            </tr>
                            </thead>
                            <tbody class="list" id="data-list">
                            @foreach($data as $entry)
                                @php($requirements = $entry -> calculate_requirements())
                                @php($application_count = \App\Models\Application::whereRecipient1($entry -> id) -> orWhere('recipient_2', $entry -> id) -> get() -> count())
                                @php($summary = $entry -> make_req_summary())
                                <tr>
                                    <td scope="row">
                                        {{ $entry -> document }}
                                    </td>
                                    <td scope="row">
                                        {{ $entry -> name }}
                                    </td>
                                    <td>
                                        {{ $entry -> type -> name }}
                                    </td>
                                    <td>
                                        $ {{ number_format($entry -> requested_money, 2, ',', '.') }}
                                    </td>
                                    <td scope="row">
                                        {{ $entry -> level -> name }}
                                    </td>
                                    <td class="text-center text-center">
                                        @if( $requirements[1] == 0 )
                                        <button class="d-flex align-items-center btn btn-link text-default" data-container="body" data-toggle="popover" data-color="secondary" data-placement="left" data-html="true" data-content="Est beneficiario no requiere documentación adicional.">
                                            <span class="completion mr-2"> -/- </span>
                                            <div>
                                                <div class="progress" style="">
                                                    <div class="progress-bar" role="progressbar" aria-valuenow="3" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>
                                                </div>
                                            </div>
                                        </button>
                                        @else
                                        <button class="d-flex align-items-center btn btn-link text-default" data-container="body" data-toggle="popover" data-color="secondary" data-placement="left" data-html="true" data-content="{{ $summary }}">
                                            <span class="completion mr-2"> {{ $requirements[0] }}/{{ $requirements[1] }} </span>
                                            <div>
                                                <div class="progress" style="">
                                                    <div class="progress-bar @if($requirements[0] == $requirements[1]) bg-success @else bg-danger @endif" role="progressbar" aria-valuenow="3" aria-valuemin="0" aria-valuemax="100" style="width: {{ $requirements[2] }}%;"></div>
                                                </div>
                                            </div>
                                        </button>
                                        @endif
                                    </td>
                                    <td class="text-center">
                                        <button class="btn @if($application_count == 0) btn-dark @else btn-success @endif btn-icon-only btn-sm lookup-trigger" data-toggle="tooltip" data-placement="bottom" data-lookid="{{ $entry -> document }}" title="Buscar solicitudes de este beneficiario" @if($application_count == 0) disabled @endif>
                                            <i class="fas fa-search"></i>
                                        </button>
                                        <a href="{{ route('recipients.edit', $entry -> id) }}" class="btn btn-info btn-icon-only btn-sm" data-toggle="tooltip" data-placement="bottom" title="Editar este empleado">
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
    <form action="{{ route('applications.search') }}" method="post" id="lookup-form">
        @csrf
        <input type="hidden" id="auxiliar-query" name="query_text" />
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
    <script type="text/javascript">
        $('.lookup-trigger').click( function () {
            var lookupId = $(this).data('lookid');
            $('#auxiliar-query').val(lookupId);
            $('#lookup-form').submit();
        });
    </script>
@endsection
