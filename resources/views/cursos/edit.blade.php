
@extends('adminlte::page')

@section('content')

<div class="container">

    <form action="{{ url('/curso/'.$curso->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        {{ method_field('PATCH') }}    
        @include('curso.form',['modo'=>'Editar'])
    </form>

</div>
@endsection