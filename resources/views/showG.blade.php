@extends('templates.template')

@section('content')
<h1 class="text-center">View</h1> <hr>

<div class="col-8 m-auto">
Name: {{$gender->name}}<br>
</div>

<a href="{{url("genders/")}}"><button class="btn btn-info">Back to list</button></a>
@endsection