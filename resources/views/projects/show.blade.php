@extends('app')

@section('titulo', 'Detalhes do projeto')

@section('conteudo')
    <div class="card">
        <div class="card-header">
            Detalhes do projeto {{ $project->nome }}
        </div>
        <div class="card-body">
            <p><strong>ID: </strong> {{ $project->id }}</p>
            <p><strong>Nome: </strong> {{ $project->nome }}</p>
            <p><strong>Cliente: </strong> {{ $project->client->nome }}</p>            
        </div>
    </div>

    <div class="card mt-2">
        <div class="card-header">
            Funcionários que trabalham no projeto
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nome</th>
                        {{-- <th scope="col">Ações</th> --}}
                    </tr>
                </thead>
                <tbody>
                    @foreach ($project->employees as $employee)
                        <tr>
                            <th scope="row">{{ $employee->id }}</th>
                            <td>{{ $employee->nome }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <a href="{{ route('projects.index') }}" class="btn btn-success">Voltar para a lista</a>
@endsection
