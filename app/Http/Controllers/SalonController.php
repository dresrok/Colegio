<?php

namespace Colegio\Http\Controllers;

use Illuminate\Http\Request;

use Colegio\Http\Requests;
use Colegio\Http\Controllers\Controller;
use Colegio\Http\Requests\SalonRequest;

use Colegio\Entities\Salon;

use Session;
use Redirect;
use Response;

class SalonController extends Controller
{
    public function __construct(Request $request)
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $salones = Salon::where('estado', 1)->paginate(15);
        return view('salon.index', compact('salones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $modal = array(
            'title' => 'Mensaje de confirmación',
            'body' => '¿Está seguro de guardar el registro del salón?'
        );
        return view('salon.crear', compact('modal'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SalonRequest $request)
    {
        $salon = Salon::create([
            'nombre' => $request['nombre'],
            'numero' => $request['numero'],
            ]);

        Session::flash('message', "El registro del salón " . $salon->nombre . " se ha creado correctamente.");

        return Redirect::to('salon');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $salon = Salon::find($id);
        return view('salon.ver', compact('salon'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $modal = array(
            'title' => 'Mensaje de confirmación',
            'body' => '¿Está seguro de actualizar el registro del salón?'
        );
        $salon = Salon::find($id);
        return view('salon.editar', compact('salon', 'modal'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SalonRequest $request, $id)
    {
        $salon = Salon::find($request['id_salon']);
        $salon->nombre = $request['nombre'];
        $salon->numero = $request['numero'];
        $salon->save();

        Session::flash('message', "El registro del salón " . $salon->nombre . " se ha actualizado correctamente.");

        return Redirect::to('salon');
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
