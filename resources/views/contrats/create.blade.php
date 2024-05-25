@extends('contrats.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Ajout d'un contrat</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('contrats.index') }}"><i class='fa fa-plus-circle'></i> Retour</a>
            </div>
        </div>
    </div>


      <form method="post" action="{{url('contrats')}}" enctype="multipart/form-data">
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
<div class="main">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12"></div>
        <div class="form-group col-md-4">
            <strong>Numéro du Pigiste :</strong>
            <select name="numpigiste" class="form-control">
                @foreach($pigistes as $pigiste)
                <option value="{{ $pigiste->id }}">{{ $pigiste->id }} - {{ $pigiste->nom }} </option>
                @endforeach
            </select>          
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12"></div>
        <div class="form-group col-md-4">
            <strong>Numéro du Magazine :</strong>
            <select name="nummagazine" class="form-control">
                @foreach($magazines as $magazine)
                <option value="{{ $magazine->id }}">{{ $magazine->id }}</option>
                @endforeach
            </select>     
        </div>
    </div>
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12"></div>
      <div class="form-group col-md-4">
          {{ Form::label('montantn', 'Montant Net :') }}
          {{ Form::text('montantn', '', ['class'=>'form-control', 'onchange'=>'toBrut(this.value)']) }}
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12"></div>
      <div class="form-group col-md-4" style="margin-top:20px">
          <button type="submit" class="btn btn-success">Ajouter</button>
      </div>
    </div>
</div>
<hr \>
<h2>Options</h2>
<div class="option">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12"></div>
      <div class="form-group col-md-4">
          {{ Form::label('montant', 'Montant Brut :') }}
          {{ Form::text('montant', '', ['class'=>'form-control', 'onchange'=>'toNet(this.value)']) }}
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12"></div>
      <div class="form-group col-md-4">
          {{ Form::label('etat', 'Etat du contrat :') }}
          {{ Form::select('etat', ['0' => 'A renvoyer', '1' => 'Reçu', '2' => 'Reglé'], 0, ['class'=>'form-control'])}}
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12"></div>
      <div class="form-group col-md-4" id="datepaiement">
          {{ Form::label('datepaiement', 'Date de paiement :') }}
          {{ Form::text('datepaiement', '', ['class'=>'date form-control', 'id'=>'datepicker1'])}}
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12"></div>
      <div class="form-group col-md-4">
          {{ Form::hidden('agessa',0) }}
          {{ Form::label('agessa', 'Agessa :') }}
          {{ Form::checkbox('agessa',1, true) }}
      </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12"></div>
        <div class="form-group col-md-4">
            {{ Form::hidden('facture',0) }}
            {{ Form::label('facture', 'Facture :') }}
            {{ Form::checkbox('facture',1, false) }}
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12"></div>
        <div class="form-group col-md-4">
            {{ Form::label('lettreaccord', 'Lettre Accord :') }}
            <input type="text" name="lettreaccord" value="1m2p-la-" class="form-control">
        </div>
    </div>
</div>
</form>
</div>
<script type="text/javascript">
    $('#datepicker1').datepicker({
        autoclose: true,
        format: 'yyyy-mm-dd'
    });

    function toBrut(v) {
        document.getElementById("montant").value = v*1.1;
    }

    function toNet(v) {
        document.getElementById("montantn").value = v*0.90;
    }
</script>
@endsection