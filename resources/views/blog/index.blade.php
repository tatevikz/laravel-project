@extends('app')
@section('content')
	<section class="vh-100 gradient-custom">
		<a href="/auth/logout" class="btn btn-dark" style="float: right;">Log Out</a>
		<header>
		  <div id="intro-example" class="p-5 text-center bg-image" >
			<div class="mask" style="background-color: rgba(0, 0, 0, 0.7);">
			  <div class="d-flex justify-content-center align-items-center h-100">
				<div class="text-white">
					<h1 class="mb-3">Welcome to our blog!</h1>
					<h5 class="mb-4">Enjoy reading our posts. Click on a post to read!</h5>
					<h5 class="mb-4">Also you can add your post by simply clicking <a href="/blog/create-post" class="btn btn-primary btn-sm">Add Post Button</a></h5>
				</div>
			  </div>
			</div>
		  </div>
		</header>		
        <div class="row">
            <div class="col-12 pt-2">               
                @forelse($posts as $post)
					<div class="list-group">
					  <a href="/blog/{{ $post->id }}" class="list-group-item list-group-item-action active" aria-current="true">
						<div class="d-flex w-100 justify-content-between">
						  <h5 class="mb-1">{{ ucfirst($post->title) }}</h5>
						  <small>{{ ucfirst($post->created_at) }}</small>
						</div>
						<p class="mb-1"> {{ ucfirst($post->body) }} </p>
					  </a>
					</div>
					<br>
                @empty
                    <p class="text-warning">No blog Posts available</p>
                @endforelse
            </div>
        </div>
    </section>
@endsection