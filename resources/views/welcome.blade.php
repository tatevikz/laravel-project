@extends('app')
@section('content')
    <section class="vh-100 gradient-custom">
		<header>
		  <div id="intro-example" class="p-5 text-center bg-image" >
			<div class="mask" style="background-color: rgba(0, 0, 0, 0.7);">
			  <div class="d-flex justify-content-center align-items-center h-100">
				<div class="text-white">
					<h1 class="mb-3">Welcome to my first blog project</h1>
					<h5 class="mb-4">This blog has many articles</h5>
					<h5 class="mb-4">Please Log in or Register to view all the posts</h5>	
					<div class="row justify-content-center">
						<div class="col-4">
							<a href="{{ route('register') }}" class="btn btn-light" data-mdb-ripple-color="dark">Register</a>
						</div>
						<div class="col-4">
							<a href="{{ route('login') }}" class="btn btn-light" data-mdb-ripple-color="dark">Login</a>
						</div>
					</div>			
					<h5 class="mb-4">Once you are logged in you can create you own posts as well!</h5>			
				</div>
			  </div>
			</div>
		  </div>
		</header>
    </section>
@endsection