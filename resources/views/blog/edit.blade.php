@extends('app')

@section('content')

    <section class="vh-100 gradient-custom">
        <div class="row">
            <div class="col-8 pt-2">
                <a href="/blog/index" class="btn btn-light" data-mdb-ripple-color="dark">Go back</a>
                <div class="border rounded mt-5 pl-4 pr-4 pt-4 pb-4">
					<div class="text-white">
						<h1 class="display-4">Edit Post</h1>
						<p>Edit and submit this form to update a post</p>
					</div>
                    <hr>

                    <form action="{{ route('update', $post->id )}}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row text-white">
                            <div class="control-group col-12">
                                <label for="title">Post Title</label>
                                <input type="text" id="title" class="form-control" name="title"
                                       placeholder="Enter Post Title" value="{{ $post->title }}" required>
                            </div>
                            <div class="control-group col-12 mt-2">
                                <label for="body">Post Body</label>
                                <textarea id="body" class="form-control" name="body" placeholder="Enter Post Body"
                                          rows="5" required>{{ $post->body }}</textarea>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="control-group col-12 text-center">
                                <button id="btn-submit" class="btn btn-primary">
                                    Update Post
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </section>

@endsection