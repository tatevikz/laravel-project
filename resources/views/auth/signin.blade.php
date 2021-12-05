@extends('app')

@section('content')
<section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-dark text-white" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <div class="mb-md-5 mt-md-4 pb-5">

				<h2 class="fw-bold mb-2 text-uppercase">Login</h2>
				<p class="text-white-50 mb-5">Please enter your login and password!</p>
				<form method="POST" action="{{ route('signin.custom') }}">
					@csrf
					<div class="form-outline form-white mb-4">
						<input type="email" name="email" id="email" class="form-control form-control-lg" required autofocus />
						<label class="form-label" for="email">Email</label>
						@if ($errors->has('email'))
						<span class="text-danger">{{ $errors->first('email') }}</span>
						@endif					
					</div>
					<div class="form-outline form-white mb-4">
						<input type="password"  name="password" id="password" class="form-control form-control-lg" required />
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
				<button class="btn btn-outline-light btn-lg px-5" type="submit">Login</button>
            </div>

            <div>
              <p class="mb-0">Don't have an account yet? <a href="{{ route('register') }}" class="text-white-50 fw-bold">Register</a></p>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection