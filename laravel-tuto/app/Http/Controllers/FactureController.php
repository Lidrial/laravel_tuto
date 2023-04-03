<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class FactureController extends Controller
{
    //
    public function show($n): View
    {
        return view('facture')->withNumero($n);
    }
}
