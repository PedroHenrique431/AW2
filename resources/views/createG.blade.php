@extends('templates.template')

@section('content')
<h1 class="text-center">@if(isset($gender))Edit @else Create @endif</h1> <hr>

<div class="col-8 m-auto">

@if(isset($gender))
    <form name="formEdit" id="formEdit" method="post" action="{{url("genders/$gender->id")}}">
    @method ('PUT')

  @else 
    <form name="formCad" id="formCad" method="post" action="{{url("genders/")}}">
@endif

@csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" class="form-control" name="name" id="name" value="{{$gender->name ?? ''}}" placeholder="Name" required>    
  </div>
  <button type="submit" class="btn btn-primary">@if(isset($gender))Save @else Create @endif</button>
</form>



<a href="{{url("genders")}}"><button class="btn btn-info">Back to list</button></a>
</div>
@endsection