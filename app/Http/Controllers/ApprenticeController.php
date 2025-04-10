<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApprenticeController extends Controller
{
    public function index()
{
    return view('apprentice.apprentice');
}

}
