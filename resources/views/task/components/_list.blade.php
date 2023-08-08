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
                    <a href="{{ route('task.destroy') }}" class="btn btn-danger">Remover</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>