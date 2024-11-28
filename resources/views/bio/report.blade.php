@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-body">
        <h2>Historial de Biorritmes</h2>
        <pre>{{ $json_data }}</pre>
    </div>
</div>
@endsection
