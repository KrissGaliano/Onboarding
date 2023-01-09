@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Crear Role</h1>
@stop

@section('content')

<div class="flex p-2 m2">
    <a href="{{ route('admin.roles.index') }}"
    class="px-4 py-2 bg-indigo-500 rounded-lg hover:bg-indigo-700" >Ver todos los roles</a>
</div>
   <div class="card">
        <div class="card-body">
            {!! Form::open(['route' => 'admin.roles.store']) !!}

            @include('admin.roles.partials.form')

             @error('permissions')
             <span class="text-danger">
                 <strong>{{ $message }}</strong>
             </span>
             <br>
         @enderror

             {!! Form::submit('Crear Role', ['class' => 'btn btn-primary mt-2']) !!}

            {!! Form::close() !!}
        </div>
   </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
