@extends('layouts.default')

@section('title', 'Edit')

@section('content')
<h1 class="text-center">{{ $reference->description }}</h1>

<form class="form" action="{{ route('references.update', $reference->id) }}" method="POST">
    @method('PUT')
    @csrf
    <div class="my-4">
        <input class="form-control" type="text" name="description" value="{{ $reference->description }}">
    </div>
    <div class="mb-4">
        <input class="form-control" type="text" name="url" value="{{ $reference->url }}">
    </div>
    <input class="btn btn-primary" type="submit" value="Modifier">
</form>
@endsection