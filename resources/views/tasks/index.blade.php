@extends('layouts.admin')
@section('content')
    <h3 class="text-center">{{$subHeading}}</h3>
    @include('utils.alert.success')
        <div class="row">
            @foreach($tasks as $task)
            <ul class="list-group list-group-horizontal">
                <li class="list-group-item" style="background-color:{{$task->getStatusColor($task->status)}}">{{$task->created_at}}</li>
                <li class="list-group-item" style="background-color:{{$task->getStatusColor($task->status)}}">{{$task->creator}}</li>
                <li class="list-group-item" style="background-color:{{$task->getStatusColor($task->status)}}">{{$task->description}}</li>
                <li class="list-group-item" style="background-color:{{$task->getStatusColor($task->status)}}">{{$task->complete_to}}</li>
                <li class="list-group-item" style="background-color:{{$task->getStatusColor($task->status)}}">{{$task->getStatus($task->status)}}</li>
                <li class="list-group-item">
                    <form method="GET" action="{{$task->getActionEdit()}}">
                    <button class="btn btn-primary">Редактировать</button>
                    </form>
                </li>
                <li class="list-group-item">
                    <form method="POST" action="{{$task->getActionDelete()}}">
                    @method('DELETE')
                    @csrf 
                    <button class="btn btn-primary">Удалить</button>
                    </form>
                </li>
            </ul>
            @endforeach
            <a class="btn btn-primary" href="{{$action}}" style="width: 200px; margin-top: 25px">Добавить задачу</a>
        </div>
@endsection('content')