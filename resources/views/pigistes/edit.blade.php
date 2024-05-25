@extends('pigistes.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Editer un pigiste</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('pigistes.index') }}"><i class='fa fa-plus-circle'></i> Retour</a>
            </div>
        </div>
    </div>

    <form action="{{ route('pigistes.update',$pigiste->id) }}" method="POST">
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
                <input type="text" name="id" value="{{ $pigiste->id }}" class="form-control" placeholder="{{ $pigiste->id }}" readonly>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <strong>Nom :</strong>
                <input type="text" name="nom" value="{{ $pigiste->nom }}" class="form-control" placeholder="{{ $pigiste->nom }}">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <strong>Prénom :</strong>
                <input type="text" name="prenom" value="{{ $pigiste->prenom }}" class="form-control" placeholder="{{ $pigiste->prenom }}">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <strong>Adresse :</strong>
                <input type="text" name="adresse" value="{{ $pigiste->adresse }}" class="form-control" placeholder="{{ $pigiste->adresse }}">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <strong>Code Postal :</strong>
                <input type="text" name="cp" value="{{ $pigiste->cp }}" class="form-control" placeholder="{{ $pigiste->cp }}">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <strong>Ville :</strong>
                <input type="text" name="ville" value="{{ $pigiste->ville }}" class="form-control" placeholder="{{ $pigiste->ville }}">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <strong>Mail :</strong>
                <input type="text" name="mail" value="{{ $pigiste->mail }}" class="form-control" placeholder="{{ $pigiste->mail }}">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <strong>Télephone:</strong>
                <input type="text" name="tel" value="{{ $pigiste->tel }}" class="form-control" placeholder="{{ $pigiste->tel }}">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <strong>Sécurité Sociale:</strong>
                <input type="text" name="securitesociale" value="{{ $pigiste->securitesociale }}" class="form-control" placeholder="{{ $pigiste->securitesociale }}">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <strong>Contrat Cadre:</strong>
                <input type="text" name="contratcadre" value="{{ $pigiste->contratcadre }}" class="form-control" placeholder="{{ $pigiste->contratcadre }}">
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