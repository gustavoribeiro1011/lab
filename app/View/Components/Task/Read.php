<?php

namespace App\View\Components\Task;

use App\Models\Task;
use Illuminate\View\Component;

class Read extends Component
{

  /**
   * Create a new component instance.
   *
   * @return void
   */
  public function __construct()
  {
  }

  /**
   * Get the view / contents that represent the component.
   *
   * @return \Illuminate\Contracts\View\View|\Closure|string
   */
  public function render()
  {
    $tasks = Task::get();
    return view('task.components._list', [
      'tasks' => $tasks
    ]);
  }
}
