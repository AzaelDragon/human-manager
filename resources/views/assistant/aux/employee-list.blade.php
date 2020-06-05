<br/>
<div class="row text-center justify-content-center animate__animated animate__fadeIn">
    <div class="col-lg-3"></div>
    <div class="col-lg-6">
    <br/><br/>
    @if (isset($nores))
        <h1 class="title text-center justify-content-center">
            <i class="fas fa-sad-tear" style="font-size: 60px"></i>
        </h1>
        <br/>
        <h2 class="title text-center justify-content-center">
            No parecen haber empleados con este nombre o cédula.
        </h2>
        <br/>
        <a class="" href="{{ route('employees.create') }}">
            ¿Deseas crear uno nuevo?
        </a>.
    @else
        <div class="table-responsive">
            <table class="table align-items-center table-flush">
                <thead class="thead-light">
                    <tr>
                        <th scope="col" class="sort" data-sort="document"> Cédula </th>
                        <th scope="col" class="sort" data-sort="name"> Nombre </th>
                        <th scope="col"></th>
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
                            <td scope="row">
                                <a class="btn btn-sm btn-success" href="{{ route('assistant.basic', $entry -> id) }}">
                                    <i class="fas fa-check"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endif
    <br/><br/>
    </div>
    <div class="col-lg-3"></div>
</div>
<br/><br/>
