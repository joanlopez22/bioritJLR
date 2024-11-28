@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-body">
        <h2>Calcula el teu Biorritme</h2>
        <p>Els biorritmes afecten la nostra energia física, emotiva i intel·lectual en diferents cicles. Introdueix les teves dades per calcular-los.</p>

        <form action="{{ route('biorritmes.calcular') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="nom" class="form-label">Nom:</label>
                <input type="text" name="nom" id="nom" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="data_naixement" class="form-label">Data de Naixement:</label>
                <input type="date" name="data_naixement" id="data_naixement" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary">Calcular Biorritmes</button>
        </form>
    </div>
</div>
@endsection
