<?php

	namespace App\Http\Controllers;

	use App\Eloquent\Services;
	use Illuminate\Http\Request;
	use Illuminate\Support\Facades\Auth;

	class HomeController extends Controller
	{
		/**
		 * Show the application dashboard.
		 *
		 * @return \Illuminate\Contracts\Support\Renderable
		 */
		public function index()
		{
			$promociones = Services::all()->where('promocion',1)->
			where('estado','A')->take(5)->toArray();

			return view('gest.home',compact("promociones"));
		}

		public function about()
		{
			return view('gest.about');
		}

		public function services()
		{
			$services = Services::all()->where('promocion',null)->where('estado','A')->toArray();
			return view('gest.services',compact('services'));
		}
	}
