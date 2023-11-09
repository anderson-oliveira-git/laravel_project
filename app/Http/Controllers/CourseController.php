<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function show()
    {
        return view('pages.courses.show');
    }

    public function create()
    {
        return view('pages.courses.create');
    }

    public function store(Request $request)
    {
        Course::create([
            'name' => $request->name
        ]);

        return redirect()->route('cursos.index')
            ->with('success', 'curso cadastrado com sucesso.');
    }

    public function update()
    {
        return redirect(route('cursos.index'));
    }

    public function delete()
    {
        return redirect(route('cursos.index'));
    }

    public function index()
    {
        $cursos = Course::orderBy('id', 'desc')->paginate(10);

        return view('pages.courses.index', compact('cursos'));
    }
}
