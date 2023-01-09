<div>
    <div class="card">

        <div class="card-header">
            <input wire:keydown="limpiar_page" wire:model="search" class="form-control w-100" placeholder="Escriba un nombre ...">
        </div>
        @if ($users->count())

        <div class="card-body">
            <table class="table text-center table-striped">

                <thead>
                    <tr>
                        <th>id</th>
                        <th>Nombre</th>
                        <th>Email</th>
                        <th>Sede</th>
                        <th>Ubicación física</th>
                        <th>Puesto</th>

                        <th></th>
                    </tr>



                </thead>

                <tbody>
                    @foreach ($users as $user )
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->sede }}</td>
                            <td>{{ $user->area }}</td>
                            <td>{{ $user->puesto }}</td>
                            <td width="10px">
                                <a class="btn btn-info" href="{{ route('admin.users.edit',$user) }}">+Rol</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>


            </table>
        </div>

        <div class="card-footer">
            {{ $users->links() }}
        </div>

        @else
         <div class="card-body">
            <strong>No hay registros</strong>
         </div>

        @endif


    </div>


</div>
