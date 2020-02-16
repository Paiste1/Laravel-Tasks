# создаем папку для работы
composer create-project --prefer-dist laravel/laravel название_папки

# подключаем артисан
php artisan

# создал базу данных firstapp и поменял название в фале .env (настроил доступы к базе лог/пасс)

# создаем миграцию и таблицу с названием tasts
php artisan make:migration create_tasks_table --create=tasks

# после редактирования полей в миграции .php делаем миграцию с базой
php artisan migrate

# создаем task модель
php artisan make:model Task

# в роутинге (routes/web.php) делаем страницу tasks

# далее в папке (resourses/views) создаем данную страницу tasks и создаем основную страницу layouts/app
# в основной странице подключаем css.bootstrap
# подключаем контент @yield('content')

# подключаем шаблон на странице tasks @extends('layouts.app') - название папки и файл
# создаем @section('content') и @endsection
# подключаем файл ошибок @include('errors') из папки views/errors.blade.php

# добавляем маршруты в web.php (маршрут для списка, для добавления, для удаления) use Illuminate\Http\Request;

# работаем с файлом errors.blade.php


