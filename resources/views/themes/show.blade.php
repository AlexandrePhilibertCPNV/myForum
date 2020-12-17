@extends('layouts.default')

@section('title', $theme->name)

@section('content')
    <p>Les sujets du thème {{$theme->name}}</p>
    <table class="table">
        <tbody>
            @foreach ($theme->topics as $topic)
                <tr>
                    <td><a href="{{ route('topics.show',$topic->id) }}">{{$topic->description}}</a></td>
                    <td>{{$topic->opinions->count()}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a class="btn btn-primary" href="{{ route('themes.create') }}">Ajouter un sujet</a>
@endsection