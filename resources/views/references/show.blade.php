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
                <a class="btn btn-secondary" href="{{ route('references.edit', $reference->id) }}">Edit</a>
                <button class="btn btn-primary" data-toggle="modal" data-target="#deleteModal">Delete</button>
            </td>
        </tr>
    </tbody>
</table>
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="deleteModalLabel">Confirmation de suppression</h5>
          <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p>Êtes-vous certains de vouloir supprimer cette référence ?</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <form action="{{ route('references.destroy',$reference->id) }}" method="post">
                @csrf
                @method('DELETE')
                <button class="btn btn-primary">Delete</button>
            </form>
        </div>
      </div>
    </div>
  </div>
@endsection