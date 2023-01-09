<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">
        <link rel="stylesheet" href="{{asset('vendor/fontawesome-free/css/all.css')}}">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles
    </head>
    <body class="font-sans antialiased">
        <x-jet-banner />

        <div class="min-h-screen bg-gray-100">
            @livewire('navigation-menu')


            <!-- Page Content -->
            <div class="container grid grid-cols-5 py-8 gap-6 ">
                <aside>
                    <h1 class="mb-2">Edicion del curso</h1>
                    <ul class="mb-4 text-sm text-gray-600 mb-8">
                        <li class="mb-4 leading-7 mb-1 border-l-4  @routeIs('instructor.courses.edit',$course) border-indigo-400 @else border-transparent @endif pl-2 ">
                            <a href="{{ route('instructor.courses.edit',$course) }}" >Informacion del curso</a>
                        </li>
                        <li class="mb-4 leading-7 mb-1 border-l-4 @routeIs('instructor.courses.curriculum',$course) border-indigo-400 @else border-transparent @endif pl-2">
                            <a href="{{ route('instructor.courses.curriculum',$course) }}">Lecciones del curso</a>
                        </li>
                        <li class="leading-7 mb-1 border-l-4  @routeIs('instructor.courses.goals',$course) border-indigo-400 @else border-transparent @endif pl-2">
                            <a href="{{ route('instructor.courses.goals',$course) }}">Metas del curso</a>
                        </li>
                    </ul>

                    @switch($course->status)
                        @case(1)
                            <form action="{{route('instructor.courses.status',$course) }}" method="POST">
                                @csrf
                            <button class="btn btn-danger" type="submit">Solicitar Revision</button>
                            </form>
                            
                            @break
                        @case(2)
                            <div class="card text-gray-500">
                                <div class="card-body">
                                    Este curso se encuentra en revisión
                                </div>
                            </div>
                            @break

                        @case(3)
                        <div class="card text-gray-500">
                                <div class="card-body">
                                    Este curso se encuentra publicado
                                </div>
                            </div>
                            @break

                        @default
                    
                    @endswitch
                

                </aside>

                <main class="col-span-4 card">
                    <div class="text-gray-600 card-body ">
                     {{ $slot }}
                    </div>
                </main>

            </div>
        </div>

        @stack('modals')

        @livewireScripts

        @isset($js)
        {{ $js }}

        @endisset


    </body>
</html>
