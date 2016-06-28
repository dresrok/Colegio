<?php

namespace Colegio\Http\Controllers;

use Illuminate\Http\Request;

use Colegio\Http\Requests;
use Colegio\Http\Controllers\Controller;
use Colegio\Http\Requests\ProfesorRequest;

use Colegio\Entities\Profesor;
use Colegio\Entities\ProfesorSalon;
use Colegio\Entities\Salon;

use Session;
use Redirect;
use Response;

class ProfesorController extends Controller
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
        $profesores = Profesor::where('estado', 1)->paginate(15);
        $salones = Salon::all();
        return view('profesor.index', compact('profesores', 'salones'));
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
            'body' => '¿Está seguro de guardar el registro del profesor?'
        );
        return view('profesor.crear', compact('modal'));
    }

    /**
     * Check if an email exist.
     *
     * @return \Illuminate\Http\Response
     */
    public function checkEmail(Request $request)
    {
        if( isset($request['id']) ) {
            $id = $request['id'];
            $email = $request['email'];
            $profesor = Profesor::find($id);
            if( $email == $profesor->email ) {
                return response()->json(TRUE);
            } else {
                $profesor = Profesor::where('email', $email)->get();
                if($profesor->isEmpty()) {
                    return response()->json(TRUE);
                }
                return response()->json(FALSE);
            }
            
        } else {
            $email = $request['email'];
            $profesor = Profesor::where('email', $email)->get();
            if($profesor->isEmpty()) {
                return response()->json(TRUE);
            }
            return response()->json(FALSE);
        }            
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProfesorRequest $request)
    {
        $profesor = Profesor::create([
            'nombre' => $request['nombre'],
            'email' => $request['email'],
            'telefono' => $request['telefono'],
            ]);

        Session::flash('message', "El registro del profesor " . $profesor->nombre . " se ha creado correctamente.");

        return Redirect::to('profesor');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {        
        $profesor = Profesor::find($id);
        $salones_id = array();
        foreach ($profesor->salones as $detalle) {
            array_push($salones_id, $detalle->salon_id);
        }
        $salones = \DB::table('salones')
                    ->whereIn('id', $salones_id)
                    ->get();
        return view('profesor.ver', compact('profesor', 'salones'));
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
            'body' => '¿Está seguro de actualizar el registro del profesor?'
        );
        $profesor = Profesor::find($id);
        return view('profesor.editar', compact('profesor', 'modal'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProfesorRequest $request, $id)
    {
        $id_prof = $request['id_profesor'];
        $profesor = Profesor::where('id', $id_prof);
        $profesor->nombre = $request['nombre'];
        $profesor->email = $request['email'];
        $profesor->telefono = $request['telefono'];
        $profesor->save();

        Session::flash('message', "El registro del profesor " . $profesor->nombre . " se ha actualizado correctamente.");

        return Redirect::to('profesor');

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

    /**
     * Associate classroom to teacher.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function associate($id_profesor)
    {
        $profesor = Profesor::find($id_profesor);
        $modal = array(
            'title' => 'Mensaje de confirmación',
            'body' => '¿Está seguro de asociar el/los salon(es) al profesor?'
        );
        $salones_id = array();
        foreach ($profesor->salones as $detalle) {
            array_push($salones_id, $detalle->salon_id);
        }
        $salones = \DB::table('salones')
                    ->whereNotIn('id', $salones_id)
                    ->get();
        return view('profesor.asociar', compact('profesor', 'salones', 'modal'));        
    }

    /**
     * Association classroom to teacher.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function association(Request $request)
    {
        $profesor = Profesor::find($request['id_profesor']);
        foreach ($request['salon'] as $value) {
            ProfesorSalon::create([
                'profesor_id' => $profesor->id,
                'salon_id' => $value
            ]);
        }

        Session::flash('message', "Al profesor " . $profesor->nombre . " se han asociado los salones correctamente.");

        return Redirect::to('profesor');
    }

    /**
     * Associations classroom to teacher.
     *
     * @return \Illuminate\Http\Response
     *
     */
    public function associations()
    {
        $profesores = Profesor::all();
        $salones = Salon::all();
        $asociaciones = ProfesorSalon::all();

        return view('profesor.asociaciones',compact('profesores', 'salones', 'asociaciones'));
    }


}
