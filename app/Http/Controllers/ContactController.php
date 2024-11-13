<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    public function create()
    {
        return view('welcome');
    }

    public function store(ContactRequest $request)
    {
        $contactData = $request->validated();
        Contact::create($contactData);
        return redirect()->route('contact.create')->with('success', 'Message sent.');
    }
}
