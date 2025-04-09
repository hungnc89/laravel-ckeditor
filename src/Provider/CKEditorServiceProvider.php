<?php

namespace Hungnc89\LaravelCkeditor\Provider;

class CKEditorServiceProvider extends ServiceProvider
{
	public function boot()
	{
		$this->publishes([
			__DIR__.'/../config/ckeditor.php' => config_path('ckeditor.php'),
		]);
	}

	public function register()
	{

	}
}