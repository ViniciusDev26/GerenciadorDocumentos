@extends('layouts.main')
@section('title', 'Listagem')

@section('content')
    <h2>Lista de documentos cadastrados</h2>
    @if(session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
    <table class="table table-dark">
        <thead>
            <tr>
                <th>#</th>
                <th>Titulo</th>
                <th>Descrição</th>
                <th>Tipo</th>
                <th>Ações:</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        @foreach($documentos ?? [] as $documento)
                <tr>
                    <td>{{$documento['id']}}</td>
                    <td>{{$documento['title']}}</td>
                    <td>{{$documento['describe']}}</td>
                    <td>{{['Ata', 'Nota fiscal'][$documento['type'] - 1]}}</td>
                    <td></td>
                    <td>
                        <a href="/documento/edit/{{$documento['id']}}" class="btn btn-primary btn-sm">
                            alterar
                        </a>
                    </td>
                    <td>
                        <form method="post" action="/documento/{{ $documento['id'] }}"
                              onsubmit="return confirm('Tem certeza que deseja remover {{ addslashes($documento['title']) }}?')">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm">
                                Excluir
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@stop
