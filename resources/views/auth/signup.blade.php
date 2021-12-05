@extends('app')

@section('content')
<section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-dark text-white" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <div class="mb-md-5 mt-md-4 pb-5">

				<h2 class="fw-bold mb-2 text-uppercase">Register</h2>
				<form method="POST" action="{{ route('user.registration') }}">
					@csrf
					<div class="form-outline form-white mb-4">
						<input type="text" name="name" id="name" class="form-control form-control-lg"/>
						<label class="form-label" for="email">Name</label>
						@if ($errors->has('name'))
						<span class="text-danger">{{ $errors->first('name') }}</span>
						@endif					
					</div>
					<div class="form-outline form-white mb-4">
						<input type="email" name="email" id="email" class="form-control form-control-lg"/>
						<label class="form-label" for="email">Email</label>
						@if ($errors->has('email'))
						<span class="text-danger">{{ $errors->first('email') }}</span>
						@endif					
					</div>
					<div class="form-outline form-white mb-4">
						<input type="password"  name="password" id="password" class="form-control form-control-lg" />
						<label class="form-label" for="password">Password</label>
                        @if ($errors->has('password'))
                        <span class="text-danger">{{ $errors->first('password') }}</span>
                        @endif
					</div>	
					<div class="form-outline form-white mb-4">					
						<div class="checkbox">
							<label>
								<input type="checkbox" name="remember">Remember
							</label>
						</div>
					</div>
				<button class="btn btn-outline-light btn-lg px-5" type="submit">Register</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection