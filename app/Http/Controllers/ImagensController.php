<?php

namespace App\Http\Controllers;

use App\Models\Imagem;
use Illuminate\Http\Request;

class imagensController extends Controller
{
    //função que abre tela de listagem de imagens
    public function index()
    {
        $images = Imagem::orderBy('name', 'ASC')->get();

        return view('imagens.index', ['imgs' => $images, 'pagina' => 'imagens']);
    }

    //função que abre tela de exibição de imagem
    public function show(Imagem $img)
    {
        return view('imagens.show', ['img' => $img, 'pagina' => 'imagens']);
    }

    //função que abre formulario de criação de imagem
    public function create()
    {
        return view('imagens.create', ['pagina' => 'imagens']);
    }

    //função que salva imagem no banco e no disco
    public function insert(Request $form)
    {
        $img = new Imagem();

        $imagemCaminho = $form->file('imagem')->store('', 'imagens');
        $img->name = $form->name;
        $img->description = $form->description;
        $img->imagem = $imagemCaminho;
        $img->save();

        return redirect()->route('imagens');
    }

    //função que abre formulario de edição de imagem
    public function edit(imagem $img)
    {
        return view('imagens.edit', ['img' => $img, 'pagina' => 'imagens']);
    }

    //função que atualiza imagem no banco e no disco
    public function update(Request $form, imagem $img)
    {
        $imagemCaminho = $form->file('imagem') ? $form->file('imagem')->store('', 'imagens') : $img->imagem;
        $img->name = $form->name;
        $img->description = $form->description;
        $img->imagem = $imagemCaminho;
        $img->save();

        return redirect()->route('imagens');
    }

    //função que abre tela de exclusão de imagem
    public function remove(imagem $img)
    {
        return view('imagens.remove', ['img' => $img, 'pagina' => 'imagens']);
    }

    //função que remove imagem do banco
    public function delete(imagem $img)
    {
        $img->delete();

        return redirect()->route('imagens');
    }

}
