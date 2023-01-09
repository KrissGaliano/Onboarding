<div>
    

    <h1 class="text-2xl font-bold">Lecciones del curso</h1>

    <hr class="mt-2 mb-6">


    @foreach ($course->sections as $item )
        <article class="mb-6 card">
            <div class="card-body bg-bray-100">
                @if($section->id == $item->id)

                    <form wire:submit.prevent="update">
                        <input wire:model="section.name" class="w-full form-input" placeholder="Ingrese el nombre de la sección">

                        @error('section.name')
                            <span class="text-xs text-red-500">{{ $message }}</span>

                        @enderror

                    </form>

                @else

                <header class="flex items-center justify-between">


                    <h1 class="cursos-pointer"><strong>Seccion:</strong>{{ $item->name }}</h1>
                    <div>
                        <i class="text-blue-500 cursor-pointer fas fa-edit" wire:clikc="edit({{ $item }})"></i>
                        <i class="text-red-500 cursor-pointer fas fa-eraser" wire:click="destroy({{ $item }})"></i>
                    </div>



                </header>

                <div>
                    @livewire('instructor.courses-lesson',['section'=> $item],key($item->id))
                </div>

                @endif

            </div>
        </article>


    @endforeach

    <div x-data="{open:false}">
        <a x-show="!open" x-on:click="open = true"  class="flex items-center cursor-pointer">
            <i class="mr-2 text-2xl text-red-500 far fa-plus-square"></i>
            Agregar nueva sección
        </a>

        <article class="card"x-show="open">
            <div class="bg-gray-100 card-body">
                <h1 class="mb-4 text-xl font-blod">Agreagr nueva Seccion</h1>
            <div class="mb-4">
                <input wire:model="name" class="w-full form-input" placeholder="Escriba el nombre de la seccion">
                @error('name')
                    <span class="text-xs text-red-500">{{ $message }}</span>
                @enderror

            </div>
            <div class="flex justify-end">
                <button class="btn btn-danger" x-on:click="open = false">Cancelar</button>
                <button class="ml-2 btn btn-primary" wire:click="store">Agregar</button>
            </div>

            </div>

        </article>
    </div>

</div>
