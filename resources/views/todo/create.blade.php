@extends('layout.app')


@section('body')




<br>
<div class="text-center">
    <a href="/todo" class="btn btn-info">Back</a>
  <h1> Create New item </h1>

  <form class="form-group" method="post" action="/todo">
  {{csrf_field()}}   
    <label for="exampleFormControlTextarea1"> Textarea</label>
    <textarea class="form-control" name="body" id="exampleFormControlTextarea1" rows="3"></textarea>
    <button type="submit" class="btn btn-success">Submit</button>
  </form>
  <!-- <a href="/todo"> </a>-->

  
  @if(count($errors)>0)
  <div class="alert alert-danger">
  @foreach($errors->all() as $error)
  {{$error}}
  @endforeach
  </div>
  @endif
</div>


@endsection