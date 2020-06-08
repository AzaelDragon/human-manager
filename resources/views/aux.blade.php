@foreach ($data as $boop)
{{ $boop -> document }} :: {{ $boop -> name }}
@endforeach
