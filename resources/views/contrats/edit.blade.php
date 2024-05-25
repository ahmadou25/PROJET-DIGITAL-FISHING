@extends('contrats.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Editer un contrat</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('contrats.index') }}"><i class='fa fa-plus-circle'></i> Retour</a>
            </div>
        </div>
    </div>

    <form action="{{ route('contrats.update',$contrat->id) }}" method="POST">
        @csrf
        @method('PUT')

        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Oops!</strong> Il y a des soucis dans votre formulaire.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <input name="_method" type="hidden" value="PATCH">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <strong>Numéro :</strong>
                <input type="text" name="id" value="{{ $contrat->id }}" class="form-control" placeholder="{{ $contrat->id }}" readonly>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <strong>Lettre Accord :</strong>
                <input type="text" name="lettreaccord" value="{{ $contrat->lettreaccord }}" class="form-control" placeholder="{{ $contrat->lettreaccord }}">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <strong>État :</strong>
                <input type="text" name="etat" value="{{ $contrat->etat }}" class="form-control" placeholder="{{ $contrat->etat }}">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <strong>Agessa :</strong>
                <input type="text" name="agessa" value="{{ $contrat->agessa }}" class="form-control" placeholder="{{ $contrat->agessa }}">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <strong>Facture :</strong>
                <input type="text" name="facture" value="{{ $contrat->facture }}" class="form-control" placeholder="{{ $contrat->facture }}">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <strong>Montant :</strong>
                <input type="text" name="montant" value="{{ $contrat->montant }}" class="form-control" placeholder="{{ $contrat->montant }}">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <strong>Montant NET :</strong>
                <input type="text" name="montantn" value="{{ $contrat->montantn }}" class="form-control" placeholder="{{ $contrat->montantn }}">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <strong>Date du Paiement :</strong>
                <input type="date" name="datepaiement" value="{{ $contrat->datepaiement }}" class="form-control" placeholder="{{ $contrat->datepaiement }}">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <strong>Numéro du Pigiste :</strong>
                <input type="text" name="numpigiste" value="{{ $contrat->numpigiste }}" class="form-control" placeholder="{{ $contrat->numpigiste }}">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <strong>Numéro du Magazine :</strong>
                <input type="text" name="nummagazine" value="{{ $contrat->nummagazine }}" class="form-control" placeholder="{{ $contrat->nummagazine }}">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4" style="margin-top:30px">
                <button type="submit" class="btn btn-success" style="margin-left:38px">Mettre à jour</button>
            </div>
        </div>
    </form>
</div>
@endsection