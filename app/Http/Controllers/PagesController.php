<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'Welcome to Laravel';
        return view('pages.index')->with('title', $title);
    }

    public function about(){
        $title = 'About';
        return view('pages.about')->with('title', $title);
    }

    public function services(){
        $data = [
            'title' => 'Lsapp Services',
            'services' => ['Wed Design', 'Programming', 'S.E.O']
        ];
        return view('pages.services')->with($data);
    }
}
