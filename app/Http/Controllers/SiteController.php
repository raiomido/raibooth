<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index() {
        return view('index', [
            'pageTitle' => 'Jambo Africa',
            'pageDescription' => 'Jambo Africa',
        ]);
    }

    public function about() {
        return view('about');
    }
}
