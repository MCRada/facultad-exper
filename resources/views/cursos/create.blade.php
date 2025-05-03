@extends('adminlte::page')

@section('content')

<div class="container">

    <form action="{{url('/curso')}}" method="post" encrype="multipart/form-data">
        @csrf
        @include('curso.form', ['modo'=>'Crear']);
    </form>

</div>
@endsection