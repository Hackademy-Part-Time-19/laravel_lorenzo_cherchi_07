<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function homepage()
    {

        $titolo = 'Homepage';

        return view('home', ['titolo' => $titolo]);
    }

    public function contacts()
    {
        return view('contacts/contacts');
    }
}
