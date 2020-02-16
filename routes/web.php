<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use Illuminate\Http\Request;

Route::get('/', function () {
    $tasks = \App\Task::orderBy('created_at', 'asc')->get(); // достаем таски по фильтру
    return view('tasks', [
        'tasks' => $tasks
    ]);
});

Route::post('/task', function (Request $request) { // проверка пост на добавление записи с помощью метода request
    $validator = Validator::make($request->all(), [ // добавляем валидатор
        'name' => 'required|max:255', // поле name ставим обязательным и ставим максимум 255 символов
    ]);

    if($validator->fails()){ // если находим ошибки то отправляемся на главную страницу с показом ошибок
        return redirect('/')
            ->withInput()
            ->withErrors($validator);
    }

    $task = new \App\Task();
    $task->name = $request->name;
    $task->save();

    return redirect('/'); // создаем модель, берем имя из поста и записываем. переходим на главную
});

Route::delete('/task/{task}', function (\App\Task $task) {
    $task->delete();
    return redirect('/');
});
