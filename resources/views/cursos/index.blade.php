@extends('adminlte::page')

@section('content')
<div class="container">


@if(Session::has('mensaje'))
    <div class="alert alert-success alert-dismissible" role="alert">
        {{Session::get('mensaje')}}
        
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif

    <br>
    <h2>CURSO</h2>
    <br>

<a href="{{url('suministro/create')}}" class="btn btn-success">Registrar Nuevo Curso</a>
    <br>
    <br>


<table class="table table-light">
        <thead>
            <tr>
                <td>#</td>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Stock</th>
                <th>Precio Unitario</th>
                <th>Tipo Suministro</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($suministro as $ma)
            <tr>
                <td>{{$ma->id}}</td>
                <td>{{$ma->Nombre_suministro}}</td>
                <td>{{$ma->Descripcion_suministro}}</td>
                <td>{{$ma->Stock_suministro}}</td>
                <td>{{$ma->Precio_unitario_suministro}}</td>
                <td>{{$ma->id_tipo_suministro }}</td>
     
                <td> 
                    <a href="{{url('/suministro/'.$ma->id.'/edit')}}" class="btn btn-warning">
                        Editar 
                    </a> 
                    |
                    <form action="{{url('/suministro/'.$ma->id)}}" method="post" class="d-inline">
                        @csrf
                        {{method_field('DELETE')}}
                        <input class="btn btn-danger" type="submit" onclick="return confirm('Quieres borrar')" value="Borrar">
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    {{ $suministro->links(); }}

</div>

@endsection
