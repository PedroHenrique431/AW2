@extends('templates.template')

@section('content')
<h1 class="text-center">View</h1> <hr>

<div class="col-8 m-auto">
Title: {{$book->title}}<br>
Pages: {{$book->pages}}<br>
Gender: {{$book->relGenders->name}}<br>
Price: {{$book->price}}<br>
</div>

<a href="{{url("books/")}}"><button class="btn btn-info">Back to list</button></a>
@endsection