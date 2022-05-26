<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jugador;

class JugadorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $jugadors = Jugador::all();
      return view("buscarFutbolistes")->with('jugadors', $jugadors);  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("afegirFutbolistes");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $jugadors = new Jugador();

        $jugadors->nom = $request->get('nom');
        $jugadors->posicio = $request->get('posicio');
        $jugadors->edat = $request->get('edat');
        $jugadors->save();

        return view('correcte');  
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        if($request->get('forma')== "Nom"){
            $nom = "%" . $request->get('nom') . "%";
            $jugadors = Jugador::where('nom', 'like', $nom)->get();
        }else if($request->get('forma')== "Edat"){
            $jugadors = Jugador::where('edat', $request->get('edat'))->get();
        }else if($request->get('forma')== "Posicio"){
            $jugadors = Jugador::where('posicio', $request->get('posicio'))->get();
        } else{
            $jugadors = Jugador::all();
        }

        return view("buscarFutbolistes")->with('jugadors', $jugadors);
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
