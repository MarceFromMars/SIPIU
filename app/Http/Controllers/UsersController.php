<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

use App\Division;

class UsersController extends Controller
{

    function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role:1',['only' => ['create','destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(auth()->user()->tipo === 1 || auth()->user()->tipo === 2)
        {
            $users = User::all();
            return view('users.index', compact('users'));
        }
        else{
            return redirect('/home');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $division = Division::all();

        return view('users.create',compact('division'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        User::create([
            'nombre' => $request->nombre,
            'apellido_p' => $request->apellido_p,
            'apellido_m' => $request->apellido_m,
            'fecha_nac' => $request->fecha_nac,
            'tipo' => $request->tipo,
            'password' => bcrypt($request->password),
            'username'=> $request->username,
            'id_div'=> $request->id_div, 
        ]);

        return redirect()->route('users.create')->with('info','usuario agregado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::findOrFail($id);

        return view('users.show',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);

        $division = Division::all();

        return view('users.edit',compact('user','division'));
    }

    public function edicion()
    {
        $users = User::all();

        $division = Division::all();

        return view('users.edicion',compact('users','division'));
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
        if(auth()->user()->tipo === 1){
        User::findOrFail($id)->update([
            'nombre' => $request->nombre,
            'apellido_p' => $request->apellido_p,
            'apellido_m' => $request->apellido_m,
            'fecha_nac' => $request->fecha_nac,
            'tipo' => $request->tipo,
            'password' => bcrypt($request->password),
            'username'=> $request->username, 
            'id_div'=> $request->id_div, 
        ]);
    }
    else{
        User::findOrFail($id)->update([
            'nombre' => $request->nombre,
            'apellido_p' => $request->apellido_p,
            'apellido_m' => $request->apellido_m,
            'fecha_nac' => $request->fecha_nac,
            'password' => bcrypt($request->password),
            'username'=> $request->username, 
        ]);   
    }


        return redirect()->route('home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::findOrFail($id)->delete();

        return redirect()->route('users.index');
    }
}
