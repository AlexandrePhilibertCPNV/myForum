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
        @if($opinion->references->count() > 0)
            <div id="accordion{{ $opinion->id }}" class="small grey-text">
                <div data-toggle="collapse" data-target="#collapse{{ $opinion->id }}" aria-expanded="true" aria-controls="collapse{{ $opinion->id }}">
                    Références
                </div>
                <div id="collapse{{ $opinion->id }}" class="collapse" data-parent="#accordion{{ $opinion->id }}">
                    @foreach ($opinion->references as $reference)
                        <div class="bg-light p-1"><a href="{{ $reference->url }}">{{ $reference->description}}</a></div>
                    @endforeach
                </div>
            </div>
        @endif
        @if($opinion->comments->count() > 0)
            <div class="small ml-3">
                <div>
                    @foreach ($opinion->comments as $comment)
                        <div class="p-1">{{ $comment->pseudo }}: {{ $comment->pivot->comment }}, {{ $comment->pivot->points }}pts</div>
                    @endforeach
                </div>
            </div>
        @endif
    @endforeach
</div>
@endsection