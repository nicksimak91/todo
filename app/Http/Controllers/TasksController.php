<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TasksController extends Controller
{

    public function index()
    {
        return view('tasks.index', [
            'tasks' => Task::all()->sortBy('id'),
            'subHeading' => 'Список задач',
            'action' => route('tasks.create'),
        ]);
    }

    public function create()
    {
        return view('lists.create', [
            'subHeading' => 'Добавить задачу',
            'action' => route('tasks.store'),
        ]);
    }

    public function store(Request $request)
    {
        $task = new Task;

        if ($task->create($request->all())) {
            return redirect()
                ->back()
                ->with('success', 'Задача добавлена');
        }
    }

    public function edit($id)
    {
        return view('tasks.edit', [
            'task' => Task::find($id),
            'action' => route('tasks.update', $id),
            'subHeading' => 'Редактирование задачи',
        ]);
    }

    public function update(Request $request, $id)
    {
        $isSuccess = Task::find($id)->update(
            $request->all(),
        );

        if ($isSuccess) {
            return redirect()
                ->back()
                ->with('success', 'Задача обновлена');
        }
    }

    public function destroy($id)
    {
        $task = Task::find($id);

        if ($task->delete($id)) {
            return redirect()
                ->back()
                ->with('success', sprintf(
                    'Задача %s успешно удалена',
                    $task->id
                ));
        }
    }
}
