@extends('layouts.app')

@section('content')
<div class="container">
    @foreach($posts as $post)
        <div class="row">
            <div class="col-6 offset-3">
                <a href="/profile/{{ $post->user }}">
                    <img src="/storage/{{ $post->image  ?? 'profile/EvNzAq3TN6kA46D7WAHfG4lsscTtF7JVuNwqIaJ0.png'  }}" class="w-100">
                </a>
            </div>
        </div>
        <div class="row pt-2 pb-4">
            <div class="col-6 offset-3">
                <div>
                    <p>
                    <span class="font-weight-bold">
                        <a href="/profile/{{$post->User_id}}">
                            <span class="text-dark">{{ $post->user}}</span>
                        </a>
                    </span> {{ $post->caption }}
                    </p>
                </div>
            </div>
        </div>
    @endforeach

        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                
            </div>
        </div>
</div>
@endsection