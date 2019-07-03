<?php

namespace App\Http\Controllers;

use App\color;

class PagesController extends Controller
{
    public function home()
    {
        return view('contact', [
            'foo' => 'bar'
        ]);
    }

    public function about()
    {
        $projects = color::all();
        
        return view('about', compact('projects'));
    }

    public function survey()
    {
        $projects = color::all();
        
        return view('survey', compact('projects'));
    }

    public function store()
    {        
        $projects = new color();

        $projects->name = request('name');

        $projects->save();


        return redirect('/about');
    }
}
