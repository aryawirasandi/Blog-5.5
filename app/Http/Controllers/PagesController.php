<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        $title = "Welcome to the laracode";
        // return view('pages.index', compact('title'));
        return view('pages.index')->with('title', $title);
    }

    public function about()
    {
        $about = "About Us";
        return view('pages.about')->with('about', $about);
    }

    public function services()
    {
        $data = [
            'title' => 'Our Services',
            'text' => 'this is our services',
            'services' => [
                'Web Development',
                'Programming',
                'SEO'
            ]
            ];
        return view('pages.services')->with($data);
    }
}
