<?php

namespace App\Http\Controllers;

class LibraryController extends Controller
{
    public function index()
    {
        return view('admin.pages.library.index');
    }
}
