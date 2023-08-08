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
                    <form action="{{ route('task.destroy', $task) }}" method="POST" style="display:inline">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-danger"
                            onclick="return confirm('Tem certeza que deseja apagar?')">Apagar</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
