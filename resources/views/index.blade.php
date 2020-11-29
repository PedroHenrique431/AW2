@extends('templates.template')

@section('content')
<h1 class="text-center">Books</h1> <hr>

<div class="text-center"><a href="{{url("books/create")}}"><button class="btn btn-success">Create</button></a><div>
<br>
<div class="col-8 m-auto">
@csrf
<table class="table text-center">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Title</th>
      <th scope="col">Pages</th>
      <th scope="col">Gender</th>
      <th scope="col">Price</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    
@foreach ($book as $books)
    <tr>
      <td>{{$books->title}}</td>
      <td>{{$books->pages}}</td>
      <td>{{$books->relGenders->name}}</td>
      <td>{{$books->price}}</td>
      <td>
      <a href="{{url("books/$books->id")}}"><button class="btn btn-dark">View</button></a>
      <a href="{{url("books/$books->id/edit")}}"><button class="btn btn-info">Edit</button></a>
      <a href="{{url("books/$books->id")}}" class="js-del"><button class="btn btn-danger">Delete</button></a>
      </td>
    </tr>
@endforeach

  </tbody>
</table>
</div>
@endsection