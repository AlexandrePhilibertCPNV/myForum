@extends('layouts.default')

@section('title', 'Edit')

@section('content')
<h1>Créer une référence</h1>

<form class="form" action="{{ route('references.store') }}" method="POST">
    @csrf
    <div class="my-4">
        <input class="form-control" type="text" name="description" placeholder="Description">
    </div>
    <div class="mb-4">
        <input class="form-control" type="text" name="url" placeholder="Url">
    </div>
    <input class="btn btn-primary" type="submit" value="Créer">
</form>
@endsection