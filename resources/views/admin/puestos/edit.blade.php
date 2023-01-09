@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Editar Puesto</h1>
@stop

@section('content')
<div class="py-12">
    <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">

        <div class="card-header">
            <a href="{{ route('admin.puestos.index') }}">Ver todos los puestos</a>
    </div>

<div class="p-2 m-2 rounded bg-slate-100">
      <div class="w-1/2 mt-10 space-y-8 divide-y divide-gray-200">
                <form method="POST" action="{{ route('admin.puestos.update',$puesto->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="sm:col-span-6">
                        <label for="name" class="block text-sm font-medium text-gray-700"> Name </label>
                        <div class="mt-1">
                            <input type="text" id="name" name="name" value="{{ $puesto->name }}"
                                class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('name') @enderror" />
                        </div>

                    </div>


                    <div class="p-4 mt-6">

                    <button type="submit" class="px-4 py-2 text-red">Actualizar</button>
                    </div>

                </form>
            </div>

</div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
