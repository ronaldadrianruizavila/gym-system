<?php

	namespace App\Http\Controllers\Admin;

	use App\Http\Controllers\Controller;
	use App\Eloquent\Services;
	use Illuminate\Http\Request;

	class ServicesController extends Controller
	{
		protected $link = 'admin.services';

		public function index(Request $request)
		{
			$estado = $request->get('estado');

			$services = Services::orderBy('name')->state($estado)->paginate(5);

			return view("$this->link.index", compact('services','estado'));

		}

		/*
		 * @return \Illuminate\Http\Response
		 */
		public function create()
		{
			return view("$this->link.create");
		}

		/**
		 * @param Request $request
		 * @return \Illuminate\Http\RedirectResponse
		 * @throws \Illuminate\Validation\ValidationException
		 */
		public function store(Request $request)
		{
			$this->validate($request, [
					'name' => 'required',
					'description' => 'required',
					'price' => 'required',
			]);

			$nombre = $request->input("name");
			$description = $request->input("description");
			$price = $request->input("price");
			$image = $request->input("image");
			$promocion = (boolean)$request->input("promocion");

			$services = new Services();

			$services->name = $nombre;
			$services->description = $description;
			$services->promocion = $promocion;
			$services->price = $price;
			$services->estado = 'A';
			$services->save();

			return redirect()->route("servicio.index")->with([
					'message' => 'Se creo el nuevo servicio'
			]);
		}

		/**
		 * @param Services $service
		 * @return \Illuminate\Http\RedirectResponse
		 * @throws \Exception
		 */
		public function destroy(Services $servicio)
		{
			$servicio->estado = 'I';
			$servicio->update();
			return redirect()->route("servicio.index");
		}

		public function edit(Services $servicio)
		{
			return view("$this->link.edit", compact('servicio'));
		}

		public function update(Request $request, Services $servicio)
		{
			$this->validate($request, [
					'name' => 'required',
					'description' => 'required',
					'price' => 'required',
					'estado' => 'required',
			]);

			$nombre = $request->input("name");
			$description = $request->input("description");
			$price = $request->input("price");
			$image = $request->input("image");
			$promocion = (boolean)$request->input("promocion");
			$estado = $request->input("estado");


			$servicio->name = $nombre;
			$servicio->description = $description;
			$servicio->promocion = $promocion;
			$servicio->price = $price;
			$servicio->estado = $estado;
			$servicio->update();

			return redirect()->route("servicio.index");
		}
	}
