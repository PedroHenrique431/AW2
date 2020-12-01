@extends('templates.template')

@section('content')
<h1 class="text-center">@if(isset($book))Edit @else Create @endif</h1> <hr>

<div class="col-8 m-auto">

@if(isset($book))
    <form name="formEdit" id="formEdit" method="post" action="{{url("books/$book->id")}}">
    @method ('PUT')

  @else 
    <form name="formCad" id="formCad" method="post" action="{{url("books/")}}">
@endif

@csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Title</label>
    <input type="text" class="form-control" name="title" id="title" value="{{$book->title ?? ''}}" placeholder="Title" required>    
  </div>

  <label for="exampleInputEmail1">Genre</label>
  <select class="form-control" name="id_gender" id="id_gender" required>
  
  @foreach ($genders as $gender)
  <option value="{{$gender->id}}">{{$gender->name}}</option>
  @endforeach
  </select>

  <div class="form-group">
    <label for="exampleInputEmail1">Pages</label>
    <input type="number" class="form-control" name="pages" id="pages" value="{{$book->pages ?? ''}}" placeholder="Pages" required>    
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Price</label>
    <input type="number" class="form-control" name="price" id="price" value="{{$book->price ?? ''}}" placeholder="Price" required>    
  </div>
  <button type="submit" class="btn btn-primary">@if(isset($book))Save @else Create @endif</button>
</form>



<a href="{{url("books")}}"><button class="btn btn-info">Back to list</button></a>
</div>
@endsection