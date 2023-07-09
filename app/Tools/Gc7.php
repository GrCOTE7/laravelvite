<?php

/**
 * (ɔ) Online FORMAPRO - GrCOTE7 - 2022.
 */

namespace App\Tools;

use Illuminate\Support\Str;

$GLOBALS['ROOT_DOCUMENT'] = realpath($_SERVER['DOCUMENT_ROOT']);

class Gc7
{
	public static function aff($var, $txt = null)
	{
		$aff = self::affR($var, $txt);
		echo $aff;
	}

	public static function affR($var, $txt = null)
	{
		$aff = '<a title=' . debug_backtrace()[1]['file'] . '&nbsp;-&nbsp;Line&nbsp;' . debug_backtrace()[1]['line'] . '><pre>' . (($txt) ? $txt . ' : ' : '');
		$aff .= print_r($var, 1);
		$aff .= '</pre></a>';
		// echo $aff;

		return $aff;
	}

	/**
	 * Affiche les 3 clés utiles de notre session.
	 */
	public static function affSession($out = 0)
	{
		$infos = ['page', 'todo', 'errors'];
		foreach ($infos as $info) {
			$str[] = self::affR($_SESSION['data'][$info] ?? 'Nothing', $info);
		}

		return implode($str);
	}

	public static function sql(object $query): void
	{
		self::aff(Str::replaceArray('?', $query->getBindings(), $query->toSql()));
	}
}
// aff(debug_backtrace());

if (!function_exists('getUri')) {
	function getUri(): string
	{
		return explode('?', $_SERVER['REQUEST_URI'])[0];
	}
}