@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 " style="padding: 20px;">
            <img src="/storage/{{ $user->profile->image ?? 'profile/EvNzAq3TN6kA46D7WAHfG4lsscTtF7JVuNwqIaJ0.png' }}"  style="width: 200px;" class="rounded-circle">
        </div>
   
    <div class="col-9" style="padding-top: 10px;">
        <div class="d-flex justify-content-between align-items-baseline">
         <div class="d-flex align-items-center" style="padding-bottom: 20px">
            <div class="h4">{{ $user->username}}</div class="h4">
            <follow-button user-id="{{ $user->id }}" follows="{{ $follows }}"></follow-button>
         </div>
            @can('update',$user->profile)
            <a href="/p/create" >add new post</a>
           @endcan
        </div>
        @can('update',$user->profile)
         <a href="/profile/{{ $user->id }}/edit" >edit profile</a>   
        @endcan
        
        <div class="d-flex" >
            <div style="padding-right: 40px;" class="pr-3"><strong>{{ $postcount }}</strong> posts</div>
            <div style="padding-right: 40px;"class="pr-3"><strong>{{$user->profile->follwers->count()}}</strong> followers</div>
            <div style="padding-right: 40px;" class=""><strong>{{$user->following->count()}}</strong> following</div>
        </div>
        <div style="margin-top: 20px;"><strong>{{$user->profile->title}}</strong></div>
        <div >{{$user->profile->description }} </div>
        <div ><a href="#">{{$user->profile->url  }}</a></div>
        
    </div>
    
 </div>
 <div class="row" style="padding-top: 40px;">
    @foreach($user->posts as $post)
    <div class="col-4" style="padding-bottom: 40px;">
    <a href="/p/{{ $post->id }}">
    <img src="/storage/{{ $post->image }}" style="width: 400px;">
    </a>
</div>
    @endforeach
    
 </div>
</div>
@endsection
