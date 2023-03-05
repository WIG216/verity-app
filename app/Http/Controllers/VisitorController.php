<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VisitorController extends Controller
{
    public function index() {
        return view('visitor.index');
    }

    // Show Create Form
    public function create() {
        return view('visitor.create');
    }
}
