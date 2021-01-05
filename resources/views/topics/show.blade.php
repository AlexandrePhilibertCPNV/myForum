@extends('layouts.default')

@section('title', 'Topics')

@section('content')
<div class="mb-4">
    <h1>Discussion autour du sujet "{{$topic->description}}" dans le cadre du thème {{$topic->theme->name}}:</h1>
    <h2 class="fs-5 fw-bold">Proposé par {{$topic->user->pseudo}}</h2>
</div>

<div class="container">
    @foreach ($topic->opinions as $opinion)
    <h3>({{$opinion->user->first_name}}) {{$opinion->description}}</h3>
    <a class="text-decoration-none text-secondary" href="">Références</a>
    @endforeach
</div>
@endsection