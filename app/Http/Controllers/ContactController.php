<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Contact;
use App\Http\Requests\StoreContactRequest;
use App\Http\Requests\UpdateContactRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\welcomeMail;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $cities = City::all();
        $contacts = Contact::query()
        ->when($request->filter_name, function($query) use($request){
            $term = strtolower($request->filter_name);
            $query->whereRaw('lower(name) like (?) ', ["%{$term}%"]);
        })
        ->when($request->city_id, function($query) use($request){
            $query->where('city_id', '=', $request->city_id);
        })
        ->paginate(10);
        return view('contacts.index', compact('cities', 'contacts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cities = City::all();
        return view('contacts.create', ['cities' => $cities]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreContactRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        dd($request);
        $image_path = "/storage" . $request->file('profile_image')->store('profile-image');
        $image_path = preg_replace("/profile-image/", '', $image_path);

        $new_contact = Contact::create(['name' => $request->name,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'city_id' => $request->city_id,
            'profile_image' => $image_path]);
            Mail::to('lukaradulovic1998@gmail.com')->send(new welcomeMail());
        return redirect('/contacts/'.$new_contact->id);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
        return view('contacts.show', ['contact' => $contact]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateContactRequest  $request
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateContactRequest $request, Contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact)
    {
        //
    }
}
