@extends('contrats.layout')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Détails du contrat</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('contrats.index') }}"> Retour</a>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Numéro :</strong>
                {{ $contrat->id }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Lettre Accord :</strong>
                {{ $contrat->lettreaccord }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>État :</strong>
                {{ $contrat->etat }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Agessa :</strong>
                {{ $contrat->agessa }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Facture :</strong>
                {{ $contrat->facture }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Montant :</strong>
                {{ $contrat->montant }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Montant NET :</strong>
                {{ $contrat->montantn }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Date du Paiement :</strong>
                {{ $contrat->datepaiement }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Numéro du Pigiste :</strong>
                {{ $contrat->numpigiste }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Numéro du Magazine :</strong>
                {{ $contrat->nummagazine }}
            </div>
        </div>
    </div>
@endsection