@extends('layout.app')


@section('body')

<br>
<div class="text-center">
    <a href="todo/create" class= "btn btn-primary">Add  </a>
  


        <h1>Todo Lists </h1>
        <ul class="list-group">
        <!-- foreach  because loop runs through each element and display it one by one  -->
         @foreach($todos as $todo)
          <li class="list-group-item">
             <!-- todo not todos cause  it display one by one not entire array at time -->
            {{$todo->body}}
          <span>{{$todo->created_at->diffForHumans()}}</span>
          </li>
        @endforeach
        </ul>
    </div>
@endsection
