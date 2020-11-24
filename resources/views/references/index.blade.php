@extends('layouts.default')

@section('title', 'References')

@section('content')
<a class="btn btn-primary" href="/references/new'">Create</a>
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
                <td>{{ $ref->url }}</td>
            <td><a class="btn btn-secondary" href="/references/{{ $ref->id }}/show">Details</a></td>
            </tr>
        @endforeach
    </tbody>
</table>
@endif

@endsection