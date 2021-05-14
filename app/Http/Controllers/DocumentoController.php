<?php

namespace App\Http\Controllers;

use App\Models\Documento;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class DocumentoController extends Controller
{
    public function cadastro()
    {
        return view('documento.cadastro');
    }

    public function index()
    {
        $documentos = Documento::all();

        return view('documento.list', compact('documentos', $documentos));
    }

    public function formUpdate(Request $request)
    {
        $documento = Documento::find($request->id);

        return view('documento.cadastro', compact('documento', $documento));
    }

    public function store(Request $request)
    {
        $doc = $request->only('title', 'describe', 'type');

        $documento = new Documento();

        $documento->title = $doc['title'];
        $documento->describe = $doc['describe'];
        $documento->type = $doc['type'];

        $documento->save();

        return redirect()->route('list')->with('message', 'Documento cadastrado com sucesso');
    }

    public function delete(Request $request)
    {
        documento::destroy($request->id);

        return redirect()->route('list')->with(['message' => 'Excluido com sucesso']);
    }

    public function update(Request $request)
    {
        $doc = $request->only('id', 'title', 'describe', 'type');

        $documento = Documento::findOrFail($doc['id']);

        $documento->title = $doc['title'];
        $documento->describe = $doc['describe'];
        $documento->type = $doc['type'];

        $documento->save();

        return redirect()->route('list')->with(['message' => 'Alterado com sucesso']);
    }
}
