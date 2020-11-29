@extends('templates.template')

@section('content')
<h1 class="text-center">Genders</h1> <hr>

<div class="text-center"><a href="{{url("genders/create")}}"><button class="btn btn-success">Create</button></a><div>
<br>
<div class="col-8 m-auto">
@csrf
<table class="table text-center">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    
@foreach ($gender as $genders)
    <tr>
      <td>{{$genders->name}}</td>
      <td>
      <a href="{{url("genders/$genders->id")}}"><button class="btn btn-dark">View</button></a>
      <a href="{{url("genders/$genders->id/edit")}}"><button class="btn btn-info">Edit</button></a>
      <a href="{{url("genders/$genders->id")}}" class="js-del"><button class="btn btn-danger">Delete</button></a>
      </td>
    </tr>
@endforeach

  </tbody>
</table>
</div>
@endsection