<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home() {
        return view('welcome')->with([
            'tasks' => [
                'Go to the store',
                'Go to the market',
                'Go to work',
                'Go to school'
            ]]);
    }
    public function contact() {
        return view('contact');
    }

    public function about() {
        return view('about');
    }
}
