<?php

namespace App\Http\Controllers;

use App\Models\Recado;
use Illuminate\Http\Request;

class RecadosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
        $recados = Recado::orderBy('created_at', 'desc')->get();

        return view('recados.index', ['recados' => $recados, 'pagina' => 'recados']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        return view('recados.create', ['pagina' => 'recados']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $form)
    {
        $recado = new Recado();
        $recado->nome = $form->nome;
        $recado->comentario = $form->comentario;

        $recado->save();

        return redirect()->route('recados');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show(Recado $recado)
    {
        return view('recados.show', ['recado' => $recado, 'pagina' => 'recados']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function edit(Recado $recado)
    {
        return view('recados.edit', ['recado' => $recado, 'pagina' => 'recados']);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function update(Request $form, Recado $recado)
    {
        $recado->nome = $form->nome;
        $recado->comentario = $form->comentario;

        $recado->save();

        return redirect()->route('recados');
    }

    public function remove(Recado $recado)
    {
        return view('recados.remove', ['recado' => $recado, 'pagina' => 'recados']);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy(Recado $recado)
    {
        $recado->delete();
        return redirect()->route('recados');
    }
}
