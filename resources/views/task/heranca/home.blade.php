@extends('task.heranca.layout')

@section('titulo-pagina', 'Home - Sistema Task')
@section('titulo-secao', 'Nova tarefa')

@section('conteudo-principal')

    <form method="POST" action="{{ route('task.store') }}">
        @csrf
        <div class="mb-3">
            <div class="col">
                <label for="title" class="form-label">Título</label>
                <input type="text" class="form-control" id="title" name="title"
                    placeholder="Dê um título para a tarefa">
            </div>
            <div class="col">
                <label for="description" class="form-label">Descrição</label>
                <textarea class="form-control" id="description" name="description" placeholder="Escreva uma descrição"></textarea>
            </div>

        </div>
        <button type="submit" class="btn btn-success">Cadastrar tarefa</button>
    </form>

    <table class="table mt-3">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Título</th>
                <th scope="col">Descrição</th>
                <th scope="col">Status</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tasks as $task)
                <tr>
                    <th scope="row">{{ $task['id'] }}</th>
                    <td>{{ $task['title'] }}</td>
                    <td>{{ $task['description'] }}</td>
                    <td>Pendente</td>
                    <td>
                        <a href="#" class="btn btn-danger">Remover</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
