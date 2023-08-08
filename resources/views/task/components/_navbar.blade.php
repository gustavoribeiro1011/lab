    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="/task">Task</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/task">Home</a>
                    </li>
                </ul>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Tarefas
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        @php
                            $itensMenu = [
                                [
                                    'descricao' => 'Nova tarefa',
                                    'link' => route('task.site.create'),
                                ],
                            ];
                        @endphp

                        <li><a class="dropdown-item" href="#">Nova tarefa</a></li>

                        <li><a class="dropdown-item" href="#">Ver todas</a></li>
                    </ul>
                </li>
            </div>
        </div>
    </nav>
