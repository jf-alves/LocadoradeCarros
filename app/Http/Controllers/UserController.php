<?php

namespace App\Http\Controllers;
use App\Carro;
use Illuminate\Http\Request;

class UserController extends Controller
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

      return view('user.inicio', compact("carros"));
    }


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $carros = Carro::all();

      return view('user.dados', compact("carros"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      Usuario::create($request->all());

      return redirect()->route('users.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Carro  $carro
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      /*
        $carro = Carro::where('id', '=' , $id)->first();
        return view('carro.show',compact('carro'));
        */
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Carro  $carro
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      /*
        $carro = Carro::where('id', '=' , $id)->first();
        return view('carro.edit',compact('carro'));
        */
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Carro  $carro
     * @return \Illuminate\Http\Response
     */
    public function cadastro($id)
    {
      
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Carro  $carro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      /*
        $carro = Carro::where('id', '=' , $id)->first();
        $carro->marca = $request->get('marca');
        $carro->modelo = $request->get('modelo');
        $carro->cor = $request->get('cor');
        $carro->qtPorta = $request->get('qtPorta');
        $carro->ano = $request->get('ano');
        $carro->qtCarro = $request->get('qtCarro');

        $carro->save();

        return redirect()->route('carros.index');
        */
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Carro  $carro
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      /*
        $carro = Carro::where('id', '=' , $id)->first();
        $carro->delete();
        return redirect()->route('carros.index');
        */
    }
}

