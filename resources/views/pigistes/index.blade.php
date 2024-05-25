@extends('pigistes.layout')
@section('content')
    <div class="row">
        <div class="col-lg-10">
            <div class="pull-left">
                <h2>Gestion des pigistes</h2>
            </div>
        </div>
    </div>


    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
  
    <div class="row justify-content-center">
        <div class="col-lg-40">
            <table class="table table-bordered">
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>Mail</th>
                    <th>Contrat Cadre</th>
                    <th width="255px">Actions 
                        <div class="pull-right">
                            <a class="btn btn-success" href="{{ route('pigistes.create') }}">
                                <i class='fa fa-plus-circle'> </i> Ajouter un pigiste
                            </a>
                        </div>
                    </th>
                </tr>
                @foreach($pigistes as $pigiste)
                    <tr>
                        <td>{{$pigiste['id']}}</td>
                        <td>{{$pigiste['nom']}}</td>
                        <td>{{$pigiste['prenom']}}</td>
                        <td>{{$pigiste['mail']}}</td>
                        <td>{{$pigiste['contratcadre']}}</td>
                        <td class="text-center">
                        <div class="btn-group" role="group" aria-label="Actions">
                            <form action="{{ route('pigistes.destroy',$pigiste->id) }}" method="POST">
                                <a class="btn btn-info" href="{{ route('pigistes.show',$pigiste->id) }}">Détails</a>
                                <a class="btn btn-primary" href="{{ route('pigistes.edit',$pigiste->id) }}">Editer</a>

                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Supprimer</button>
                            </form>
                        </div>
                        </td>
                    </tr>
                @endforeach
            </table>
       </div>
    </div>
@endsection

