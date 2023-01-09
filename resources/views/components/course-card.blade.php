@props(['course'])


<article class="overflow-hidden bg-white rounded shadow-lg">
    <img  class="object-cover w-full h-36" src="{{ Storage::url($course->image->url) }}" alt="">

    <div class="px-6 py-4">
        <h1 class="mb-2 text-xl leading-6 text-gray-700" >{{Str::limit($course->title,40)}}</h1>

        <div class="flex">


             <p class="ml-auto text-sm text-gray-500">
                <i class="fas fa-users"></i>
                ({{ $course->students_count }})
             </p>

        </div>

        <a  href={{ route('courses.show',$course) }} class="block w-full px-4 py-2 mt-4 font-bold text-center text-white bg-orange-500 rounded hover:bg-orange-700">
            Más informacion
        </a>


    </div>




</article>
