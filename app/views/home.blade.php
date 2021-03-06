@extends('templates.default')


@section('title')
Home
@stop

@section('content')

	@if($posts->count())
		@foreach($posts as $post)
			<article>
			<h2><a href="{{URL::action('post-show',$post->slug)}}">{{$post->title}}</a></h2>
			<p>{{Markdown::parse(Str::limit($post->body,300))}}</p> 
			<small>Published on {{$post->created_at->format('l jS \\of F Y')}}</small><br>
			<a href="{{URL::action('post-show',$post->slug)}}">Read more &rarr;</a>

			</article>
		@endforeach
	@endif
	
	
	
@stop

