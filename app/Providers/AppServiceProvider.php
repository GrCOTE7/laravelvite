<?php

/**
 * (ɔ) Online FORMAPRO - GrCOTE7 - 2022.
 */

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
	public function register()
	{
		$this->app->bind(
			'App\Repositories\PhotosRepositoryInterface',
			'App\Repositories\PhotosRepository'
		);
	}

	public function boot()
	{
	}
}
