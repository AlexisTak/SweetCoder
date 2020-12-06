@extends('layouts.app')

@section('content')
    <h1 class="text-2xl font-bold"> Bienvenue sur le Dashboard {{ Auth::user()->name}}
@endsection