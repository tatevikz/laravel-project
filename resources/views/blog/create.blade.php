@extends('app')

@section('content')

    <section class="vh-100 gradient-custom">
        <div class="row">
            <div class="col-8 pt-2">
                <a href="/blog/index" class="btn btn-light" data-mdb-ripple-color="dark">Go back</a>
                <div class="border rounded mt-5 pl-4 pr-4 pt-4 pb-4">
					<div class="text-white">
						<h1 class="display-4">Create a New Post</h1>
						<h3>Fill and submit this form to create a post</h3>
                    <hr>
					</div>
                    <form action="{{ route('blog.store') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="control-group col-8">
                                <label for="title" class="text-white">Post Title</label>
                                <input type="text" id="title" class="form-control" name="title" placeholder="Enter Post Title" required>
                            </div>
                            <div class="control-group col-8 mt-2">
                                <label for="body" class="text-white">Post Body</label>
                                <textarea id="body" class="form-control" name="body" placeholder="Enter Post Body" rows="4" required></textarea>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="control-group col-12 text-center">
                                <button id="btn-submit" class="btn btn-light" data-mdb-ripple-color="dark">
                                    Create Post
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </section>

@endsection