@extends('layouts.app', ['active' => 'assistant'])
@section('title', 'Asistente')
@section('content')
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
                                ¡Bienvenido!
                            </h1>
                        </div>
                        <div class="row text-center justify-content-center">
                            <h1 class="card-title animate__animated animate__fadeIn">
                                Empecemos por el empleado interesado en un auxilio.<br/>¿Cuál es su nombre o cédula?
                            </h1>
                        </div>
                        <br/>
                    </div>
                    <div id="post-search-stuff" class="d-none">
                        <div class="row text-center justify-content-center">
                            <h1 class="card-title animate__animated animate__fadeIn">
                                Si el empleado que buscas está en esta lista, haz click en el &nbsp;<span disabled class="btn btn-sm btn-success" style="cursor: default !important;"><i class="fas fa-check"></i></span>&nbsp; a su izquierda.
                            </h1>
                        </div>
                        <div class="row text-center justify-content-center">
                            <i class="text-gray">
                                Si no lo encuentras, simplemente intenta otra búsqueda o <a class="" href="{{ route('employees.create') }}"> crea uno nuevo</a>.
                            </i>
                        </div>
                        <br/><br/>
                    </div>
                    <div class="row text-center justify-content-center">
                        <form class="animate__animated animate__fadeIn navbar-search navbar-search-light form-inline mr-sm-3" id="lookup-form" method="post" action="{{ route('employees.search') }}">
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
                    </div>
                    <div class="row text-center justify-content-center">
                        <i class="text-gray form-inline mr-sm-3 animate__animated animate__fadeIn animate__delay-1s" style="padding-top: 15px; font-size: small">
                            Puedes presionar la tecla [⏎ Enter] para realizar una búsqueda.
                        </i>
                    </div>
                    <div id="data-insert"></div>
                    <br/><br/>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            }
        });
        $('#lookup-form').submit(function (e) {
            e.preventDefault();
            var meta_query = $('#query_text').val();
            $('#data-insert').addClass('animate__animated animate__fadeOut');
            $.ajax({
                type: 'POST',
                url: '{{ route('assistant.employee.lookup') }}',
                data: {
                    'csrf_token': '{{ csrf_token() }}',
                    'query_text': meta_query
                },
                success: function (data) {
                    $('#data-insert').removeClass('animate__animated animate__fadeOut').html(data);
                    $('#main-header-stuff').addClass('animate__animated animate__fadeOut').on('animationend', function () {
                        $(this).addClass('d-none');
                    });
                    $('#post-search-stuff').removeClass('d-none').addClass('animate__animated animate__fadeIn animate__delay-1s');
                }
            })
        });
    </script>
@endsection
