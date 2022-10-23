<?php

/**
 * (ɔ) Online FORMAPRO - GrCOTE7 - 2022.
 */

namespace App\Http\Controllers;


class EmailController extends Controller
{
	public function index()
	{
        var_dump($_GET);
        
		$action = ($_GET['send'] ?? null) ? 'Oui' : 'Non';

		if ('Oui' == $action) {
			$action       = 'Mail envoyé';
			$_GET['send'] = null;
		}
        return view('pages.email')->withAction($action);

	}
}
