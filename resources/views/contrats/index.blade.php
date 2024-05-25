@extends('contrats.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Gestion des contrats</h2>
            </div>
        </div>
    </div>


    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif






    <form action="{{ route('contrats.index') }}" method="GET">
        <!-- Filtrage par magazine -->
        <label for="magazine_id">Filtrer par Magazine :</label>
        <select name="magazine_id" id="magazine_id">
            <option value="">Tous les Magazines</option>
            @foreach ($magazines as $magazine)
                <option value="{{ $magazine->id }}" {{ $selectedMagazine == $magazine->id ? 'selected' : '' }}>{{ $magazine->id }}</option>
            @endforeach
        </select>

        <br></br>

        <!-- Filtrage par Pigiste -->
        <label for="pigiste_id">Filtrer par Pigiste :</label>
        <select name="pigiste_id" id="pigiste_id">
            <option value="">Tous les Pigistes</option>
            @foreach ($pigistes as $pigiste)
                <option value="{{ $pigiste->id }}" {{ $selectedPigiste == $pigiste->id ? 'selected' : '' }}>{{ $pigiste->nom }}</option>
            @endforeach
        </select>

        <!-- Bouton de soumission -->
        <button type="submit">Filtrer</button>
    </form>





    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>Lettre Accord</th>
            <th>État</th>
            <th>Agessa</th>
            <th>Facture</th>
            <th>Montant</th>
            <th>Montant NET</th>
            <th>Date Du Paiement</th>
            <th>Numéro du Pigiste</th>
            <th>Numéro du Magazine</th>
            <th width="255px">Actions <div class="pull-right"><a class="btn btn-success" href="{{ route('contrats.create') }}"><i class='fa fa-plus-circle'></i> Ajouter un contrat</a></div></th>
        </tr>
        @foreach($contrats as $contrat)
            <tr>
                <td>{{$contrat['id']}}</td>
                <td>{{$contrat['lettreaccord']}}</td>
                <td>{{$contrat['etat']}}</td>
                <td>{{$contrat['agessa']}}</td>
                <td>{{$contrat['facture']}}</td>
                <td>{{$contrat['montant']}}</td>
                <td>{{$contrat['montantn']}}</td>
                <td>{{$contrat['datepaiement']}}</td>
                <td>{{$contrat['numpigiste']}}</td>
                <td>{{$contrat['nummagazine']}}</td>
                <td>
                    <form action="{{ route('contrats.destroy',$contrat->id) }}" method="POST">
                        <a class="btn btn-info" href="{{ route('contrats.show',$contrat->id) }}">Détails</a>
                        <a class="btn btn-primary" href="{{ route('contrats.edit',$contrat->id) }}">Editer</a>

                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Supprimer</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
