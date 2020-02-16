@if(count($errors) > 0)
    <div class="alert alert-danger">
        <strong>Что-то пошло не так :(</strong>
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </div>
@endif
