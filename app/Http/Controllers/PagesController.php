<?php

namespace App\Http\Controllers;

use App\color;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller {

    public function survey() {

        $colors = [
            'red-ish',
            'green-ish',
            'blue-ish',
            'orange-ish',
            'yellow-ish',
            'pink-ish',
            'purple-ish',
            'brown-ish',
            'grey-ish'
        ];
            
        return view('survey', [
            'colors' => $colors
        ]);
        
    }

    public function about() {

        $entries = color::all();
        
        return view('about', compact('entries'));
    }

    public function ajaxRequestPost(Request $request) {

        $entry = new color();
        $entry->uid = $request->uid;
        $entry->label = $request->label;
        $entry->r = $request->r;
        $entry->g = $request->g;
        $entry->b = $request->b;
        $entry->save();

        return response()->json(['success'=>'Yes!']);

    }

}
