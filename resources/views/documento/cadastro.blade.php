@extends('layouts.main')
@section('title', 'Cadastro')

@section('content')
    <form method="post" action="{{!empty($documento) ? "/documento/$documento->id" : "/documento/cadastro"}}">
        @csrf
        @method(!empty($documento) ? 'PATCH' : 'POST')
        <input style="display: none" name="id" value="{{$documento['id'] ?? ''}}">
        <div class="form-group mt-3">
            <label for="title">Titulo:</label>
            <input class="form-control" type="text" name="title" id="title" value="{{$documento['title'] ?? ''}}">
        </div>

        <div class="form-group">
            <label for="describe">Descrição:</label>
            <textarea class="form-control" name="describe" id="describe">{{$documento['describe'] ?? ''}}</textarea>
        </div>

        <div class="form-group">
            <label for="type">Tipo:</label>
            <select class="form-control" name="type" id="type">
                <option {{ empty($documento['type']) ? 'selected' : '' }} disabled> Selecione tipo de documento</option>
                <option {{ !empty($documento) && $documento['type'] == 1 ? 'selected' : '' }} value="1">Ata</option>
                <option {{ !empty($documento) && $documento['type'] == 2 ? 'selected' : '' }} value="2">Nota Fiscal</option>
            </select>
        </div>

        <a href="/" class="btn btn-dark">Voltar</a>
        <button class="btn btn-success" type="submit">Salvar</button>
    </form>

@stop
