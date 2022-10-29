<?php

/**
 * (ɔ) Online FORMAPRO - GrCOTE7 - 2022.
 */

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Mail\Contact;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		return view('pages.contact');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function store(ContactRequest $request)
	{

        // Nécessite $fillable dans Controller
		// \App\Models\Contact::create([
            // 	'nom'     => $request->nom,
            // 	'email'   => $request->email,
            // 	'message' => $request->message,
        // ]);
        // dd(\App\Models\Contact::create ($request->all ()));

		$contact          = new \App\Models\Contact();
		$contact->nom     = $request->nom;
		$contact->email   = $request->email;
		$contact->message = $request->message;
		$contact->save();

		Mail::to('administrateur@chezmoi.com')
			->send(new Contact($request->except('_token')));

		return view('pages.confirm');
	}
}
