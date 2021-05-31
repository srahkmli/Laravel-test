@extends('layouts.temp')



@section('content')




<h4>{{$post->city}} , {{$post->street}} , {{$post->alley}}</h4>

<a class="btn btn-info" href="{{route('posts.edit', $post->id)}}" role="button">Edit</a>



@endsection

