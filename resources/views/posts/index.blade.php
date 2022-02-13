@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Posts.Index View Görüntülendi</h1>
    </div>
    @if (count($posts) > 1)



        <div class="container mt-3">
            <ul class="list-group">
                @foreach ($posts as $post)
                    <div class="well">
                        <h3>{{$post->title}}</h3>
                        <small>Written On {{$post->created_at}}</small>
                    </div>
                @endforeach            
            </ul>            
        </div>

    @else
        <p class="text-danger display-3">Herhangi bir şey gönderilmedi</p>
    @endif
@endsection