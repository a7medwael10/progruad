<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContactRequest;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contacts = Contact::latest()->paginate(6);
        return view('admin.contacts.contacts-table',compact('contacts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.contacts.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreContactRequest $request)
    {
        $data = $request->validated();
        $contact = [
            'region' => [
                'ar' => $data['region-ar'],
                'en' => $data['region-en']
            ],
            'number' => $data['number']
        ];
        Contact::create($contact);

        return to_route('admin.contacts.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contact $contact)
    {
        return view('admin.contacts.edit', compact('contact'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreContactRequest $request, Contact $contact)
    {
        $data = $request->validated();
        $contactUpdated = [
            'region' => [
                'ar' => $data['region-ar'],
                'en' => $data['region-en']
            ],
            'number' => $data['number']
        ];
        $contact->update($contactUpdated);
        return to_route('admin.contacts.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contact $contact)
    {
        if(auth()->check()){
            $contact->delete();
            return to_route('admin.contacts.index');
        }
    }
}
