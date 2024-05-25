@extends('magazines.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Gestion des magazines</h2>
            </div>
        </div>
    </div>


    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif


    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>Date Bouclage</th>
            <th>Date Sortie</th>
            <th>Date Paiement</th>
            <th>Budget</th>
            <th width="255px">Actions <div class="pull-right"><a class="btn btn-success" href="{{ route('magazines.create') }}"><i class='fa fa-plus-circle'></i> Ajouter un magazine</a></div></th>
        </tr>
        @foreach($magazines as $magazine)
            <tr>
                <td>{{$magazine['id']}}</td>
                <td>{{$magazine['bouclage']}}</td>
                <td>{{$magazine['sortie']}}</td>
                <td>{{$magazine['paiement']}}</td>
                <td>{{$magazine['budget']}}</td>
                <td>
                    <form action="{{ route('magazines.destroy',$magazine->id) }}" method="POST">
                        <a class="btn btn-info" href="{{ route('magazines.show',$magazine->id) }}">Détails</a>
                        <a class="btn btn-primary" href="{{ route('magazines.edit',$magazine->id) }}">Editer</a>

                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Supprimer</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
