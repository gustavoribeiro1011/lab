<?php

namespace App\View\Components\Task;

use App\Models\Task;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\Component;

class Edit extends Component
{
  public int $id;
  

  /**
   * Create a new component instance.
   *
   * @return void
   */
  public function __construct(int $id)
  {
    $this->id = $id;
  }

  /**
   * Get the view / contents that represent the component.
   *
   * @return \Illuminate\Contracts\View\View|\Closure|string
   */
  public function render()
  {
    $task = Task::find($this->id);
    return view('task.components._edit', [
      'task' => $task
    ]);
  }
}
