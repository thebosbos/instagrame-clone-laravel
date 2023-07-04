@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-8">
        <img src="/storage/{{$post->image}}"style="width: 800px;">
        </div>
        <div class="col-4">
            <div class="d-flex align-items-center">
                <div style="padding-right: 3px">
                    <img src="/storage/{{ $user->profile->image ?? 'profile/EvNzAq3TN6kA46D7WAHfG4lsscTtF7JVuNwqIaJ0.png' }}" style="width: 40px;" class="rounded-circle">
                </div>
                <div>
                    <div ><strong><a href="/profile/{{$user->id}}"><span class="text-dark">{{$user->username}}</span></a></strong><strong> <a href="#" style="padding-left: 10px">Follow</a></strong> </div>
                  
                </div>
            </div>
            <hr>
            <p><span ><strong><a href="/profile/{{$user->id}}"><span class="text-dark">{{$user->username}}</a></strong></span> {{$post->caption}}</p>
        </div>
    </div>
</div>
@endsection