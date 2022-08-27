@extends('layouts.main')

@section('container')
<h1>Haloo My About</h1>
<h2>{{$nama}}</h2>
<img src="img/{{$pic}}" alt="{{$nama}}" class="img-thumbnail rounded-circle">
@endsection