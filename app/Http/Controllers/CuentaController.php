<?php

namespace Colegio\Http\Controllers;

use Illuminate\Http\Request;

use Colegio\Http\Requests;
use Colegio\Http\Controllers\Controller;
use Colegio\Http\Requests\LoginRequest;
use Auth;
use Session;
use Redirect;
use Colegio\Entities\User;

class CuentaController extends Controller
{
    public function __construct(Request $request)
    {
        # code...
        $this->middleware('guest', ['only'=>['logIn']]);        
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LoginRequest $request)
    {
        if (Auth::attempt( ['email'=>$request['email'], 'password'=>$request['password']] )) {
            return Redirect::to('profesor');
        } else {
            $message['errors'] = 'Email o contraseña incorrectos';
            return redirect('/')
                    ->withErrors($message)
                    ->withInput();
        }
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

    public function logIn(){
        return view('cuenta.login');
    }

    public function logOut(){
        Auth::logout();
        return Redirect::to('/');
    }
}
