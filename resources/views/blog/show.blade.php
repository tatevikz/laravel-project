@extends('app')

@section('content')
    <section class="vh-100 gradient-custom">
        <div class="row">
            <div class="col-8 pt-2">
                <a href="/blog/index" class="btn btn-light" data-mdb-ripple-color="dark">Go back</a>
                <div class="border rounded mt-5 pl-4 pr-4 pt-4 pb-4">
					<div class="text-white">
					    <h4>Post created by {{ ucfirst($blog_username) }} </h4>
						<h1 class="display-4">{{ ucfirst($post->title) }}</h1>
						<hr>
						<p>{!! $post->body !!}</p> 
					</div>
                </div>
				@if (  ucfirst($user_id)  ==  ucfirst($post->user_id)  )
					<br><br>
					<a href="/blog/{{ $post->id }}/edit" class="btn btn-primary custom">Edit Post</a>
					<br><br>					
					<form id="delete-frm" class="" action="{{ route('destroy', $post->id ),  $post->id}}" method="POST">
						@method('DELETE')
						@csrf
						<button class="btn btn-danger custom">Delete Post</button>
					</form>
				@endif 
            </div>
        </div>
    </section>
@endsection