@extends('layouts.default')

@section('title', 'References')

@section('content')
<a class="btn btn-primary" href="{{ route('references.create') }}">Create</a>
@if ($references->isEmpty())
<h2 class="text-center">Aucune références</h2>
@else
<table class="table">
    <thead>
        <tr>
            <th>Description</th>
            <th>URL</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($references as $ref)
            <tr>
                <td>{{ $ref->description }}</td>
                <td><a href="{{ $ref->url }}">{{ $ref->url }}</a></td>
                <td><a class="btn btn-secondary" href="{{ route('references.show',$ref->id) }}">Details</a></td>
            </tr>
        @endforeach
    </tbody>
</table>
@endif

@endsection