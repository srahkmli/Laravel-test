@extends('layouts.temp')



@section('content')


@foreach ($posts as $post)

<ul>
<li>{{$post->city}}</li>
<li>{{$post->street}}</li>
<li>{{$post->alley}}</li>


<div class="modal-footer">
<a class="btn btn-info" href="{{route('posts.show', $post->id)}}" role="button">Show</a>
</ul>


@endforeach
<a class="btn btn-primary" href="{{route('posts.create')}}" role="button">create</a>
</div>



@endsection

