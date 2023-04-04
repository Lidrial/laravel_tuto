<?php

namespace App\Http\Controllers;

use App\Models\Contacts;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ContactsController extends Controller
{
    //
    public function create(): View
    {
        return view('contacts');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'email' => 'bail|required|email',
            'message' => 'bail|required|max:500'
        ]);

        \App\Models\Contacts::create([
            'email' => $request->email,
            'message' => $request->message,
        ]);



        return "C'est bien enregistré !";
    }
}
