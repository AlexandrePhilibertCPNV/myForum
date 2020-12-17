@extends('layouts.default')

@section('title', 'Home')

@section('content')
<table class="table">
    <tbody>
        @foreach ($themes as $theme)
            <tr>
                <td><a href="{{ route('themes.show', $theme->id) }}">{{$theme->name}}</a></td>
                <td>{{ $theme->topics->count() }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection