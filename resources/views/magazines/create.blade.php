@extends('magazines.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Ajout d'un magazine</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('magazines.index') }}"><i class='fa fa-plus-circle'></i> Retour</a>
            </div>
        </div>
    </div>


      <form method="post" action="{{url('magazines')}}" enctype="multipart/form-data">
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
      <strong>Date Bouclage : </strong>
      <input type="date" class="form-control" name="bouclage">
  </div>
</div>
<div class="row">
  <div class="col-xs-12 col-sm-12 col-md-12"></div>
  <div class="form-group col-md-4">
      <strong>Date Sortie : </strong>
      <input type="date" class="form-control" name="sortie">
  </div>
</div>
<div class="row">
  <div class="col-xs-12 col-sm-12 col-md-12"></div>
  <div class="form-group col-md-4">
      <strong>Date Paiement : </strong>
      <input type="date" class="form-control" name="paiement">
  </div>
</div>
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12"></div>
    <div class="form-group col-md-4">
        <strong>Budget : </strong>
        <input type="text" class="form-control" name="budget">
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