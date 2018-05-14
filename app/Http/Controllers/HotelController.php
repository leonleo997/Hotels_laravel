<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hotel;
use Couchbase\SearchQuery;


class HotelController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $hoteles = Hotel::All();
        if(is_null($request->title)==false){
            
            $hoteles=$hoteles->filter(function($hotel) use ($request){
                return str_contains(camel_case($hotel->nombre),camel_case($request->title)) || str_contains(camel_case($hotel->ciudad),camel_case($request->title));
            });
            
            if($hoteles->isempty()){
                $hoteles = Hotel::All();
            }
        }
        $hoteles = $hoteles -> map(function($hotel){
            $calificacion=0;
            $acumulado =0;
            $cantidad =0;
            $comentarios=$hotel->comentarios;
            foreach ($comentarios as $comentario) {
                $acumulado+=$comentario->calificacion;
                $cantidad++;
            }
            if($cantidad!==0){
                $calificacion=$acumulado/$cantidad;
            }
            return [
                'id'=> $hotel->id,
                'nombre'=> $hotel->nombre,
                'promedio'=> $calificacion,
                'ciudad'=> $hotel->ciudad,
                'hotel'=>$hotel              
            ];
        });
        $hoteles= $hoteles;
        //dd($hoteles);
        return view('hotel.mostrar', ['hoteles'=>$hoteles]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('hotel.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre'=>'required',
            'costo'=>'required',
            'direccion'=>'required',
            'estrellas'=>'required',
            'ciudad'=>'required',
            
        ]);
        Hotel::create($request->all());
        return view('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $hotelsito = Hotel::find($id);
        return view('hotel.ver')->with('hotel',$hotelsito);
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

    public function buscar(Request $request)
    {
        dd('entra');
        // Gets the query string from our form submission 
        $query = Request::input('search');
        // Returns an array of articles that have the query string located somewhere within 
        // our articles titles. Paginates them so we can break up lots of search results.
        $hoteles = DB::table('hotels')->where('name', 'LIKE', '%' . $query . '%')->paginate(10);
        dd($hoteles);
         return view('hotel.mostrar', compact('hoteles'));
   
    }
}
