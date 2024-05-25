@extends('pigistes.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Ajout d'un pigiste</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('pigistes.index') }}"><i class='fa fa-plus-circle'></i> Retour</a>
            </div>
        </div>
    </div>


      <form method="post" action="{{url('pigistes')}}" enctype="multipart/form-data">
@csrf
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

<div class="row">
  <div class="col-xs-12 col-sm-12 col-md-12"></div>
  <div class="form-group col-md-4">
      <strong>Prénom : </strong>
      <input type="text" class="form-control" name="prenom">
  </div>
</div>
<div class="row">
  <div class="col-xs-12 col-sm-12 col-md-12"></div>
  <div class="form-group col-md-4">
      <strong>Nom : </strong>
      <input type="text" class="form-control" name="nom">
  </div>
</div>
<div class="row">
  <div class="col-xs-12 col-sm-12 col-md-12"></div>
  <div class="form-group col-md-4">
      <strong>Adresse : </strong>
      <input type="text" class="form-control" name="adresse">
  </div>
</div>
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12"></div>
    <div class="form-group col-md-4">
        <strong>Code Postal : </strong>
        <input type="text" class="form-control" name="cp">
    </div>
</div>
<div class="row">
  <div class="col-xs-12 col-sm-12 col-md-12"></div>
  <div class="form-group col-md-4">
      <strong>Ville : </strong>
      <input type="text" class="form-control" name="ville">
  </div>
</div>
<div class="row">
  <div class="col-xs-12 col-sm-12 col-md-12"></div>
  <div class="form-group col-md-4">
      <strong>Mail : </strong>
      <input type="text" class="form-control" name="mail">
  </div>
</div>
<div class="row">
  <div class="col-xs-12 col-sm-12 col-md-12"></div>
  <div class="form-group col-md-4">
      <strong>Téléphone : </strong>
      <input type="text" class="form-control" name="tel">
  </div>
</div>
<div class="row">
  <div class="col-xs-12 col-sm-12 col-md-12"></div>
  <div class="form-group col-md-4">
      <strong>Sécurité Sociale : </strong>
      <input type="text" class="form-control" name="securitesociale">
  </div>
</div>
<div class="row">
  <div class="col-xs-12 col-sm-12 col-md-12"></div>
  <div class="form-group col-md-4">
      <strong>Contrat Cadre : </strong>
      <input type="text" class="form-control" name="contratcadre">
  </div>
</div>
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12"></div>
    <div class="form-group col-md-4" style="margin-top:20px">
        <button type="submit" class="btn btn-success">Ajouter</button>
    </div>
</div>
</form>
</div>

@endsection