<?php

namespace App\Http\Controllers\Instructor;

use App\Models\Level;
use App\Models\Price;
use App\Models\Course;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class CourseController extends Controller
{
    /**
     * Mostrar una lista del recurso.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('can:Leer cursos')->only('index');
        $this->middleware('can:Crear cursos')->only('create','store');
        $this->middleware('can:Actualizar cursos')->only('edit','update','goals');
        $this->middleware('can:Eliminar cursos')->only('destroy');

    }

    public function index()
    {
        return view('instructor.courses.index');
    }

    /**
     * Muestra el formulario para crear un nuevo recurso.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $categories = Category::pluck('name','id');
        $levels = Level::pluck('name','id');
        $prices = Price::pluck('name','id');
        return view('instructor.courses.create',compact('categories','levels','prices'));
    }

    /**
     * Almacene un recurso recién creado en el almacenamiento.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request ,Course $course)
    {
        $request->validate([
            'title' => 'required',
            'slug' => 'required|unique:courses',
            'subtitle' => 'required',
            'description' => 'required',
            'category_id' => 'required',
            /**'level_id' => 'required',*/
            /**'price_id' => 'required',*/
            'file' => 'image'


        ]);

       $course = Course::create($request->all());
       // return redirect()->route('instructor.courses.edit',$course);

       if($request->file('file')){
           $url =  Storage::put('public/courses',$request->file('file'));
        $course->image()->create([
            'url' => $url
        ]);
    }
        return redirect()->route('instructor.courses.edit',$course);


    }

    /**
     * Muestra el recurso especificado.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Course $course)
    {
        return view('instructor.courses.show',compact('course'));
    }

    /**
     * Muestra el formulario para editar el recurso especificado.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Course $course)
    {
        $this->authorize('dicatated',$course);

        $categories = Category::pluck('name','id');
        $levels = Level::pluck('name','id');
        $prices = Price::pluck('name','id');
        return view('instructor.courses.edit',compact('course','categories','levels','prices'));
    }

    /**
     * Actualice el recurso especificado en el almacenamiento.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Course $course)
    {
        $this->authorize('dicatated',$course);

        $request->validate([
            'title' => 'required',
            'slug' => 'required|unique:courses,slug,' . $course->id,
            'subtitle' => 'required',
            'description' => 'required',
            'category_id' => 'required',
            'level_id' => 'required',
            //'price_id' => 'required',
            'file' => 'image'

        ]);

       $course->update($request->all());
        if($request->file('file')){
            $url = Storage::put('public/courses',$request->file('file'));
            if($course->image){
                Storage::delete($course->image->url);
                $course->image->update([
                    'url' => $url
                ]);
            }else{
                $course->image()->create([
                    'url' => $url
                ]);
            }
        }



        return redirect()->route('instructor.courses.edit',compact('course'));

    }

    /**
     * Elimina el recurso especificado del almacenamiento.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Course $course)
    {
        //
    }

    public function goals(Course $course){
        $this->authorize('dicatated',$course);
        return view('instructor.courses.goals', compact('course'));
    }

    public function status(Course $course){
        $course->status = 2;
        $course->save();

        return back();
    }

}
