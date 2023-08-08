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

        $tasks = Task::get();
        return view('task.site.home', [
            'tasks' => $tasks
        ]);
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
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
