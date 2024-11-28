@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-body">
        <h2>Resultats de Biorritmes</h2>
        <p><strong>Nom:</strong> {{ $nom }}</p>
        <p><strong>Data de Naixement:</strong> {{ $data_naixement }}</p>

        <h4>Físic</h4>
        <div class="progress mb-3">
            <div class="progress-bar" role="progressbar" style="width: {{ ($biorritme_fisic + 1) * 50 }}%;" aria-valuenow="{{ $biorritme_fisic }}" aria-valuemin="-1" aria-valuemax="1">{{ $biorritme_fisic }}</div>
        </div>

        <h4>Emotiu</h4>
        <div class="progress mb-3">
            <div class="progress-bar" role="progressbar" style="width: {{ ($biorritme_emotiu + 1) * 50 }}%;" aria-valuenow="{{ $biorritme_emotiu }}" aria-valuemin="-1" aria-valuemax="1">{{ $biorritme_emotiu }}</div>
        </div>

        <h4>Intel·lectual</h4>
        <div class="progress mb-3">
            <div class="progress-bar" role="progressbar" style="width: {{ ($biorritme_intelectual + 1) * 50 }}%;" aria-valuenow="{{ $biorritme_intelectual }}" aria-valuemin="-1" aria-valuemax="1">{{ $biorritme_intelectual }}</div>
        </div>
    </div>
</div>
@endsection
