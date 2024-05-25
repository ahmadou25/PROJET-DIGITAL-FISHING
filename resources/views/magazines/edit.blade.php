@extends('magazines.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Editer un magazine</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('magazines.index') }}"><i class='fa fa-plus-circle'></i> Retour</a>
            </div>
        </div>
    </div>

    <form action="{{ route('magazines.update',$magazine->id) }}" method="POST">
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
                <input type="text" name="id" value="{{ $magazine->id }}" class="form-control" placeholder="{{ $magazine->id }}" readonly>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <strong>Date Bouclage :</strong>
                <input type="date" name="bouclage" value="{{ $magazine->bouclage }}" class="form-control" placeholder="{{ $magazine->bouclage }}">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <strong>Date Sortie :</strong>
                <input type="date" name="sortie" value="{{ $magazine->sortie }}" class="form-control" placeholder="{{ $magazine->sortie }}">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <strong>Date Paiement :</strong>
                <input type="date" name="paiement" value="{{ $magazine->paiement }}" class="form-control" placeholder="{{ $magazine->paiement }}">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <strong>Budget :</strong>
                <input type="text" name="budget" value="{{ $magazine->budget }}" class="form-control" placeholder="{{ $magazine->budget }}">
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