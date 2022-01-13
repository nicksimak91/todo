@extends('layouts.admin')
@section('content')
<div class="container my-4">
    <h3 class="text-center">{{$subHeading}}</h3>
    <div class="row d-flex justify-content-center">
        <div class="col-md-4">
            <div class="border border-2 rounded border-primary p-4 ">
                @include('utils.alert.success')
                <form method="post" action="{{$action}}">
                    <x-input-text heading="Постановщик" text="Укажите кто ставит задачу" name="creator" :value="$task->creator">
                    </x-input-text>

                    <x-input-text heading="Описание" text="Опишите задачу" name="description" :value="$task->description">
                    </x-input-text>

                    <x-input-text heading="Срок выполнение" text="Укажите срок выполнения задачи, в формате Y-M-D" name="complete_to" :value="$task->complete_to">
                    </x-input-text>

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
                    <a href="/tasks" class="btn btn-primary">Вернуться на главную</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection('content')