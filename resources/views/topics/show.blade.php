@extends('layouts.default')

@section('title', 'Topics')

@section('content')
<div class="mb-4">
    <h1>Discussion autour du sujet "{{$topic->description}}" dans le cadre du thème {{$topic->theme->name}}:</h1>
    <h2 class="fs-5 fw-bold">Proposé par {{$topic->user->pseudo}}</h2>
</div>

<div class="container">
    @forelse ($topic->opinions as $opinion)
        <div class="p-2 ml-2">
            ({{ $opinion->user->first_name }})
            {{ $opinion->description }}
            @if($opinion->references->count() > 0)
                <div id="accordion{{ $opinion->id }}" class="small grey-text">
                    <div data-toggle="collapse" data-target="#collapse{{ $opinion->id }}" aria-expanded="true" aria-controls="collapse{{ $opinion->id }}">
                        Références
                    </div>
                    <div id="collapse{{ $opinion->id }}" class="collapse" data-parent="#accordion{{ $opinion->id }}">
                        @foreach ($opinion->references as $reference)
                            <div class="bg-light p-1"><a href="{{ $reference->url }}">{{ $reference->description }}</a></div>
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
            @if (Auth::user()->can('comment',\App\Models\Opinion::class) || Auth::user()->can('commentOpinion',$opinion,\App\Models\Opinion::class))
                <div id="accordionnew{{ $opinion->id }}">
                    <button class="btn btn-sm btn-outline-secondary ml-3 px-2 py-1" data-toggle="collapse" data-target="#collapsenew{{ $opinion->id }}" aria-expanded="true" aria-controls="collapsenew{{ $opinion->id }}">
                        +
                    </button>
                    <div id="collapsenew{{ $opinion->id }}" class="collapse" data-parent="#accordionnew{{ $opinion->id }}">
                        <form action="{{ route('opinions.comment') }}" method="post">
                            @csrf
                            <div class="row">
                                <label class="col-2 border-0">Commentaire</label>
                                <textarea class="form-control col-10" name="newcomm"></textarea><br>
                            </div>
                            <div class="row">
                                <label class="col-2 border-0">Points</label>
                                <input class="form-control col-1" type="number" max="1" min="-1" name="points">
                            </div>
                            <div class="row">
                                <div class="col-10">
                                    <button class="btn btn-success btn-sm" type="submit">Envoyer</button>
                                </div>
                            </div>
                            <input type="hidden" name="opinion" value="{{ $opinion->id }}">
                        </form>
                    </div>
                </div>
            @endif
        </div>
    @empty
    <p>(Aucune opinion n'a été soumise pour l'instant sur ce sujet)</p>
@endforelse
</div>
@endsection