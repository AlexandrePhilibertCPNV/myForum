@extends('layouts.default')

@section('title', $reference->description)

@section('content')
<h1 class="text-center">{{$reference->description}}</h1>
<table class="table">
    <thead>
        <tr>
            <th>Description</th>
            <th>URL</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>{{ $reference->description }}</td>
            <td>{{ $reference->url }}</td>
            <td>
                <a class="btn btn-secondary" href="/references/{{ $reference->id }}/edit">Edit</a>
                <a class="btn btn-primary" href="/references/{{ $reference->id }}" data-confirm="Êtes-vous certains de vouloir supprimer cette référence ?">Delete</a>
            </td>
        </tr>
    </tbody>
</table>
@endsection