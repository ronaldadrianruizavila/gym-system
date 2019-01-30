<?php

namespace App\Http\Controllers\Admin;

use App\Eloquent\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserAdminController extends Controller
{
	protected $link = 'Admin.users';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
	    return view("$this->link.index");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    	$roles = DB::table('role')->pluck('name','id');
        return view("$this->link.create",compact('roles'));
    }

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request $request
	 * @return \Illuminate\Http\Response
	 * @throws \Illuminate\Validation\ValidationException
	 */
    public function store(Request $request)
    {
		$this->validate($request,[
			'name'=>'required',
			'surname'=>'required',
			'cedula'=>'required|unique:users',
			'email'=>'required|unique:users',
			'role'=>'required',
			'password'=>'required|confirmed'
		]);

		$user = new User();
		$user->cedula = $request->input('cedula');
		$user->name = $request->input('name');
		$user->surname = $request->input('surname');
		$user->tipo = $request->input('role');
		$user->menu = 1;
		$user->email = $request->input('email');
		$user->password = Hash::make($request->input('password'));
		$user->save();

		return redirect()->route('registro.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
