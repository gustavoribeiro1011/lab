@extends('app')

@section('titulo','Lista de Cliente')

@section('conteudo')

<h1>Lista de Clientes</h1>
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nome</th>
      <th scope="col">Endereço</th>
      <th scope="col">Ações</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($clients as $client)
    <tr>
      <th scope="row">{{ $client->id }}</th>
      <td><a href="{{ route('clients.show', $client) }}">{{ $client->nome }}</a></td>
      <td>{{ $client->endereco }}</td>
      <td><a class="btn btn-primary" href="{{ route('clients.edit', $client) }}">Atualizar</a>
        <form action="{{ route('clients.destroy', $client) }}" method="POST" style="display:inline">
          @method('DELETE')
          @csrf
          <button type="submit" class="btn btn-danger">Apagar</button>
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>

<a href="{{ route('clients.create') }}" class="btn btn-success">Novo cliente</a>
@endsection