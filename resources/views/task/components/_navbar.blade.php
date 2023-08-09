<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('task.index') }}">Task</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('task.index') }}">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Tarefas
                    </a>
                    @php
                        $itensMenu = [
                            [
                                'descricao' => 'Nova tarefa',
                                'link' => route('task.create'),
                            ],
                            [
                                'descricao' => 'Ver todas',
                                'link' => route('task.index'),
                            ],
                        ];
                    @endphp
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        @foreach ($itensMenu as $item)
                            <li><a class="dropdown-item" href="{{ $item['link']}}">{{ $item['descricao'] }}</a></li>
                        @endforeach
                    </ul>
                </li>

            </ul>
        </div>
    </div>
</nav>
