<?php

namespace App\Http\Controllers;

use App\Carro;
use Illuminate\Http\Request;

class CarroController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $carros = Carro::all();

      return view('carro.index', compact("carros"));
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('carro.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Carro::create($request->all());

        return redirect()->route('carros.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Carro  $carro
     * @return \Illuminate\Http\Response
     */
    public function show(Carro  $carro)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Carro  $carro
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //$carro = Carro::find($id)
        //return view('carro.edit',compact('carro'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Carro  $carro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Carro $carro)
    {
        Carro::update($request->all());

        return redirect()->route('carros.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Carro  $carro
     * @return \Illuminate\Http\Response
     */
    public function destroy(Corretor $corretor)
    {
        //
    }
}

