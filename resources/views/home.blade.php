@extends('templates.template')

@section('content')



<center>
  <h5>Welcome, {{ Auth::user()->name }}!</h5><hr>
  <div class="card text-center border-dark mb-3 w-50">
    <h5 class="card-header bg-transparent">Nossa Equipe</h5>
    <div class="card-body">
      <h5 class="card-title">Integrantes</h5>
      <p class="card-text">Jéssica Assis</p>
      <p class="card-text">Mateus Ângelo</p>
      <p class="card-text">Pedro Henrique</p>
      <p class="card-text">Raquel DellaGatta</p>
    </div>
  </div>
</center>

@endsection