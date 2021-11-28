@extends('layouts.admin')
@section('content')
    <div class="container my-4">
    <h3 class="text-center">{{$subHeading}}</h3>
    <div class="row d-flex justify-content-center">
        <div class="col-md-4">
            <div class="border border-2 rounded border-primary p-4 ">
                @include('utils.alert.success')
                <form method="post" action="{{$action}}">
                    <div class="mb-3">
                        <label for="name" class="form-label">Постановщик</label>
                        <input type="text" class="form-control" id="name" aria-describedby="creatorHelp" name="creator" value={{$task->creator}}>
                        <div id="nameHelp" class="form-text">Укажите кто ставит задачу</div>
                    </div>
                    <div class="mb-3">
                        <label for="code" class="form-label">Описание</label>
                        <input type="text" class="form-control" id="code" aria-describedby="descriptionHelp" name="description" value={{$task->description}}>
                        <div id="codeHelp" class="form-text">Опишите задачу</div>
                    </div>
                    <div class="mb-3">
                        <label for="code" class="form-label">Срок выполнение</label>
                        <input type="text" class="form-control" id="code" aria-describedby="complete_toHelp" name="complete_to" value={{$task->complete_to}}>
                        <div id="codeHelp" class="form-text">Укажите срок выполнения задачи, в формате Y-M-D</div>
                    </div>
                    <div class="mb-3">
                        <select name="status" class="form-select" aria-label="Default select example">
                            <option value="1">Ожидает</option>
                            <option value="2">Выполнена</option>
                            <option value="3">Просрочена</option>
                        </select>
                    </div>
                    @method('PATCH')
                    @csrf
                    <button type="submit" class="btn btn-primary">Обновить</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection('content')