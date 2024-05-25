@extends('magazines.layout')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Détails du magazine</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('magazines.index') }}"> Retour</a>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Numéro :</strong>
                {{ $magazine->id }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Date Bouclage :</strong>
                {{ $magazine->bouclage }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Date Sortie :</strong>
                {{ $magazine->sortie }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Date Paiement :</strong>
                {{ $magazine->paiement }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Budget :</strong>
                {{ $magazine->budget }}
            </div>
        </div>
    </div>
@endsection