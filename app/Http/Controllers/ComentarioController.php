<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comentario;
use Illuminate\Support\Facades\DB;


class ComentarioController extends Controller
{
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
    public function store(Request $request)
    {
        //
        $request->validate([
            'descripcion'=>'required'            
        ]);
        Comentario::create([
            'descripcion'=>$request->descripcion,
            'calificacion'=>$request->calificacion,
            'user_id'=>$request->user_id,
            'hotel_id'=>$request->hotel_id
        ]);
        $hotel_id=$request->hotel_id;
        return redirect()->route('hoteles.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $comentarios = Comentario::All();
        //dd($comentarios);
        $comentarios = $comentarios -> filter(function($comentario) use($id){
            return $comentario->hotel_id==$id;
        });      
        $id_hotel=$id;
        return view('comentario.mostrar', compact('comentarios','id_hotel'));
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
