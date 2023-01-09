<x-app-layout>
    <section class="px-8 py-12 mb-8 bg-slate-200">
        <div class="container grid grid-cols-2 gap-10 lg:grid-cols-2">
            <figure>
                <img class="h-80 w-120" src="{{ Storage::url($course->image->url) }}" alt="">
            </figure>
            <div class="py-2 text-black">
                <h1 class="text-4xl font-bold">{{ $course->title }}</h1>
                <!--<h2 class="mb-3 text-xl">{{ $course->subtitle }}</h2>-->
                <!--<p class="mb-2 "> <i class="fas fa-chart-line"></i>  Nivel:{{ $course->level->name }}</p>-->
                <p class="mb-2 text-lg "> <i class="py-4 fas fa-file-alt"></i>  Categoria: {{ $course->category->name }}</p>
                <p class="mb-2 text-lg"> <i class="fas fa-users"></i>  Usuarios: {{ $course->students_count }}</p>
                <!--<p> <i class="far fa-star"></i> Calificacion:{{ $course->rating  }}</p>-->
            </div>

        </div>
    </section>
    <div class="container grid grid-cols-1 gap-6 lg:grid-cols-3">

        <div class="order-2 lg:col-span-2 lg-order-1">
            <section class="mb-12 card">
                <div class="card-body">
                    <h1 class="mb-2 text-2xl font-bold">Loque aprenderas</h1>
                    <ul class="grid grid-cols-1 md:grid-cols-2 gap-x-6">
                        @foreach ($course->goals as $item)
                            <li class="text-base text-gray-700"><i class="mr-2 text-gray-600 fas fa-check"></i>{{ $item->name }}</li>
                        @endforeach
                    </ul>
                </div>
            </section>

            <section>
                <h1 class="mb-2 text-3xl font-bold">Temario</h1>
                @foreach ($course->sections as $section)
                    <article class="mb-4 shadow"
                    @if($loop->first)
                        x-data="{open:true}"
                        @else
                        x-data="{open:false}"

                    @endif>


                        <header class="px-4 py-2 bg-gray-200 border border-gray-200 cursor-pointer" x-on:click="open = !open">
                            <h1 class="text-lg font-bold text-gray-600">{{ $section->name }}</h1>
                        </header>
                        <div class="px-4 py-2 bg-white" x-show="open">
                            <ul class="grid grid-cols-1 gap-2">

                                @foreach ($section->lessons as $lesson)
                                <li class="text-base text-gray-700 "><i class="mr-2 text-gray-600 fas fa-play-circle"></i>{{ $lesson->name }}</li>
                            @endforeach

                            </ul>

                        </div>
                    </article>
                @endforeach

            </section>

            <section class="mb-8">
                <h1 class="text-3xl font-bold">Requisitos</h1>
                    <ul class="list-disc list-inside">
                        @foreach ($course->requirements as $requirement)
                            <li class="text-base text-gray-700">
                                {{ $requirement->name }}
                            </li>

                        @endforeach
                    </ul>

                </h1>
            </section>
            <section class="">
                <h1 class="text-3xl font-bold">Description</h1>
                <div class="pb-8 text-gray-700">
                    {!!$course->description!!}
                </div>
            </section>


        </div>

        <div class="order-1 lg:order-2">
            <section class="mb-4 card">
                <div class="card-body">
                    <!--<div class="flex items-center">
                        <img class="object-cover w-12 h-12 rounded-full shadow-lg"" src="{{ $course->teacher->profile_photo_url }}" alt="{{ $course->teacher->name }}">
                        <div class="ml-4">
                            <h1 class="text-lg font-bold text-gray-500">Prof.{{ $course->teacher->name }}</h1>
                            <a class="text-sm font-bold text-blue-400" href="">{{'@'.Str::slug($course->teacher->name,'') }}</a>
                        </div
                    </div>-->

                    @can('enrolled',$course)
                        <a href="{{ route('courses.status',$course) }}"  class="mt-4 btn btn-danger btn-block" >Continuar Curso</a>
                    @else

                    <form action="{{route('courses.enrolled',$course) }}" method="post" >
                        @csrf
                        <button type="submit" class="mt-4 text-lg text-white bg-orange-400 btn btn-block">Llevar este curso</button>
                    </form>

                    @endcan



                </div>
            </section>



        </div>

    </div>

</x-app-layout>
