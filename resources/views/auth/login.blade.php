@guest

<div class="container">

    <link rel="stylesheet" href="{{ asset('assets/auth/css/sb-admin-2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/auth/css/sb-admin-2.css') }}">
    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-xl-10 col-lg-12 col-md-9">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                        <div class="col-lg-6">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">BEM VINDO AO FEM STOCK!</h1>
                                    <img src="{{ asset('assets/auth/img/logo FEM.jpg') }}" alt="Logo da Minha Empresa" style="width: 80%; margin-right: 40px;">
                                </div>
                                <hr>
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
            
                                    <div class=" mb-3">
                                        <label for="email" class="">Email</label>
            
                                        <div class="form-group">
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
            
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
            
                                    <div class=" mb-3">
                                        <label for="password" class="">{{ __('Password') }}</label>
            
                                        <div class="form-group">
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
            
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
            
                                    
            
                                    <div class=" mb-0">
                                        <div class="">
                                            <button type="submit" class="btn btn-primary">
                                                {{ __('Login') }}
                                            </button>
{{--             
                                            @if (Route::has('password.request'))
                                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                                    {{ __('Forgot Your Password?') }}
                                                </a>
                                            @endif --}}
                                        </div>
                                    </div>
                                </form>
                                <hr>
                                
                                <div class="text-right">
                                    <a class="small" href="{{ route('register') }}">Criar conta!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>
@endguest