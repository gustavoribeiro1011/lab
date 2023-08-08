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

