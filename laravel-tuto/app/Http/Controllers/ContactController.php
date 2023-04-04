<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ContactController extends Controller
{
    //
    public function create(): View
    {
        return view('contact');
    }
    public function store(ContactRequest $request): View
    {
        return view('confirm');
    }
}
