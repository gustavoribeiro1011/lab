<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class TaskController extends Controller
{
    /**
     * Lista todas as tarefas
     *
     * @return void
     */
    public function index(): View
    {
        return view('task.site.home');
    }

    /**
     * Exibi a tela de cadastro de tarefa
     *
     * @return void
     */
    public function create(Request $request)
    {
        return view('task.site.create');
    }

    /**
     * Cria uma nova tarefa no BD
     *
     * @param Request $request
     * @return void
     */
    public function store(Request $request)
    {
        $dados = $request->except('_token');

        Task::create($dados);

        return redirect('/task');
    }

    /**
     * Mostra uma tarefa específica
     *
     * @param integer $id
     * @return View
     */
    public function show(int $id): View
    {
        $task = Task::find($id);

        return view('task.site.edit', [
            'task' => $task
        ]);
    }

    /**
     * Mostra o formulário para edição
     *
     * @param [type] $id
     * @return void
     */
    public function edit(): View
    {
        return view('task.site.edit');
    }

    /**
     * Atualiza a tarefa no banco de dados
     *
     * @param integer $id
     * @param Request $request
     * @return RedirectResponse
     */
    public function update(int $id, Request $request): RedirectResponse
    {
        $task = Task::find($id);

        $task->update([
            'title' => $request->title,
            'description' => $request->description,
        ]);

        return redirect('/task');
    }

    /**
     * Apaga uma tarefa no BD
     *
     * @param integer $id
     * @return void
     */
    public function destroy(int $id): RedirectResponse
    {
        $task = Task::find($id);

        $task->delete();

        return redirect('/task');
    }
}
