<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class CourseController extends Controller
{
    public function show(): View
    {
        return view('pages.courses.show');
    }


    public function create(Request $request): View
    {
        return view('pages.courses.create');
    }


    public function store(): string
    {
        return redirect(route('cursos.index'));
    }


    public function update(): string
    {
        return redirect(route('cursos.index'));
    }


    public function delete(): string
    {
        return redirect(route('cursos.index'));
    }


    public function index(): View
    {
        return view('pages.courses.index');
    }
}
