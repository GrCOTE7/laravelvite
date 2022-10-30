<?php

/**
 * (ɔ) Online FORMAPRO - GrCOTE7 - 2022.
 */

namespace App\Http\Controllers;

use App\Models\Test;
use App\Models\User;
use Illuminate\Http\Request;

class TestController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{

        $us = User::all();

        $data = 'Le premier user est : ' . $us->first()->name;
        // dd($us);

        // NB: possible in CLI: php artisan tinker

        $u=new User;
        $u->name = 'Dupont';
        $u->email = 'Dupont@chezlui.fr';
        $u->password = '123';
        // $u->save();

        // $u->delete();
        $u=new User;
        $u->name = 'Durand';
        $u->email = 'Durand@chezlui.fr';
        $u->password = '123';
        // $u->save();

        // User::create(['name' => 'Lionel', 'email' => 'lionel@chezlui.fr', 'password' => 'pass']);

        // (new User)->deleteId(4);
		return view('pages/test')->with('data', $data);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request)
	{
	}

	/**
	 * Display the specified resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function show(Test $test)
	{
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function edit(Test $test)
	{
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, Test $test)
	{
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(Test $test)
	{
	}
}
