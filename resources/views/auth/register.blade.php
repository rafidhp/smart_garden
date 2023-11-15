<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="shortcut icon" href="{{ asset('assets/new_logo.png') }}" type="image/x-icon">
    <title>@if (Request::segment(2) == 'id')
        Daftar
    @else
        Register
    @endif | Smart Garden</title>
</head>
<body style="background-size: auto; background-image: url('{{ asset('assets/SmartGarden3.png') }}'); height: 100%;">
    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-sm navbar-light fixed-top" style="background-color: #183d3d;" id="home">
        <div class="container-fluid">
            <a href="@if (Request::segment(2) == 'id')
            {{ route('home.id') }}
          @else
            {{ route('home') }}
          @endif">
          <img src="{{ asset('assets/new_logo.png') }}" alt="Smart Garden" class="navbar-brand ms-2 mt-0" style="width: 45px;">
        </a>
          <label class="navbar-brand fw-semibold" style="font-family: sans-serif; color: #93b1a6;"><a href="@if (Request::segment(2) == 'id')
            {{ route('home.id') }}
          @else
            {{ route('home') }}
          @endif" class="text-decoration-none" style="color: #93b1a6;">Smart Garden</a></label>
          <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId"
              aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="collapsibleNavId">
              <img src="{{ asset('assets/nav2.png') }}" alt="..." class="navbar-brand">
              <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                  <li class="nav-item">
                    <a href="@if (Request::segment(2) == 'id')
                        {{ route('home.id') }}
                    @else
                        {{ route('home') }}
                    @endif" class="nav-link ms-3" style="color: #93b1a6; font-size: 18px;">
                        @if (Request::segment(2) == 'id')
                            Beranda
                        @else
                            Home
                        @endif
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="@if (Request::segment(2) == 'id')
                        {{ route('home.id') }}#about
                    @else
                        {{ route('home') }}#about
                    @endif" class="nav-link ms-3" style="color: #93b1a6; font-size: 18px;">
                        @if (Request::segment(2) == 'id')
                            Tentang Kami
                        @else
                            About
                        @endif
                    </a>
                  </li>
                  <li class="nav-item">
                      <a href="@if (Request::segment(2) == 'id')
                        {{ route('dashboard.id') }}
                    @else
                        {{ route('dashboard') }}
                    @endif" class="nav-link ms-3" style="color: #93b1a6; font-size: 18px;">Dashboard</a>
                  </li>
              </ul>
              <form class="d-flex my-2 my-lg-0">
                <div class="dropdown">
                    <button class="btn px-3 fw-bold" type="button" data-bs-toggle="dropdown" aria-expanded="false" style="background-color: #5C8374; color: #ffffff; border-radius: 100px;">
                      <img src="@if (Request::segment(2) == 'id')
                      {{ asset('assets/id.png') }}
                  @else
                      {{ asset('assets/en.png') }}
                  @endif" alt="en" style="width: 20px" class="me-1">
                      @if (Request::segment(2) == 'id')
                          Bahasa
                      @else
                          Language
                      @endif
                    </button>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="@if (Request::segment(2) == 'id')
                          {{ route('register') }}
                      @else
                          {{ route('register.id') }}
                      @endif">
                          @if (Request::segment(2) == 'id')
                          <img src="{{ asset('assets/en.png') }}" alt="..." style="width: 20px" class="me-1">
                          Language
                          @else
                          <img src="{{ asset('assets/id.png') }}" alt="..." style="width: 20px" class="me-1">
                              Bahasa
                          @endif
                      </a></li>
                    </ul>
                </div>
                    <a href="@if (Request::segment(2) == 'id')
                        {{ route('login.id') }}
                    @else
                        {{ route('login') }}
                    @endif" class="btn mx-3 fw-bold px-4" style="background-color: #5C8374; color: #ffffff; border-radius: 100px;" type="button">
                        @if (Request::segment(2) == 'id')
                            Masuk
                        @else
                            Login
                        @endif
                    </a>
              </form>
          </div>
    </div>
  </nav>
    <!-- Navbar End -->

    <!-- Card Register Start -->
    <div class="container d-flex justify-content-center align-items-center pt-5" style="height: 100vh">
        <div class="card col-lg-5 col-md-8 col-sm-10 mb-5 mt-3" style="box-shadow: 1px 2px 5px 6px rgba(0,0,0,0.54);">
            <div class="card-body d-flex flex-column" style="background-color: #d9d9d9;">
                <h3 class="card-title fs-3 fw-bold text-center mt-3">
                    @if (Request::segment(2) == 'id')
                        Daftar
                    @else
                        Register
                    @endif
                </h3>
                {{-- <form action="{{ route('register.store') }}" method="POST" class="card-body py-4 needs-validate">
                    @csrf
                    <div class="row mt-2">
                        <div class="col mb-3">
                            <label for="username" class="form-label fw-semibold">
                                Username
                            </label>
                            <input type="text" name="username" class="form-control @error('username')
                                is-invalid
                            @enderror" id="username" placeholder="enter username" required>
                        </div>
                        @error('username')
                            <div class="alert alert-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="row">
                        <div class="col mb-3">
                            <label for="email" class="form-label fw-semibold">
                                Email
                            </label>
                            <input type="email" name="email" class="form-control @error('email')
                                is-invalid
                            @enderror" id="email" placeholder="enter email" required>
                        </div>
                        @error('email')
                            <div class="alert alert-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="row">
                        <div class="col mb-3">
                            <label for="password" class="form-label fw-semibold">
                                Password
                            </label>
                            <input type="password" name="password" class="form-control @error('password')
                                is-invalid
                            @enderror" id="password" placeholder="enter password" required>
                        </div>
                        @error('password')
                            <div class="alert alert-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="row">
                        <div class="col mb-3">
                            <label for="password_confirmation" class="form-label fw-semibold">
                                Confirm Password
                            </label>
                            <input type="password" name="password_confirmation" class="form-control @error('password_confirmation')
                                is-invalid
                            @enderror" id="password_confirmation" placeholder="confirm password" required>
                        </div>
                        @error('password_confirmation')
                            <div class="alert alert-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                </form> --}}
                <div class="row mt-2">
                    <div class="col mb-3 d-flex justify-content-center">
                        <a href="@if (Request::segment(2) == 'id')
                        https://wa.me/6289604690937?text=Halo+tim+Code+Craft!+Saya+tertarik+untuk+bergabung.+apakah+ada+cara+untuk+mendaftar?+
                        @else
                        https://wa.me/6289604690937?text=Hello+Code+Craft+Team!+I'm+interested+in+joining.+Is+there+a+way+to+register?+
                        @endif
                        " class="btn fw-bold mt-3 px-5" style="background-color: #657B00; color: #ffffff; font-family: 'poppins"><img src="{{ asset('assets/whatsapp.png') }}" alt="..." class="me-3">
                            @if (Request::segment(2) == 'id')
                                Daftar melalui Whatsapp
                            @else
                                Register via Whatsapp
                            @endif
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col d-flex flex-column justify-content-center align-items-center">
                        {{-- <button type="submit" class="btn fw-semibold mt-3 mb-1" style="background-color: #657b00; color: #ffffff; width: 100%; border-radius: 20px;">Register</button> --}}
                        <p class="mt-2">
                            @if (Request::segment(2) == 'id')
                                Sudah punya akun?
                            @else
                                Already have an account?
                            @endif
                        <a href="@if (Request::segment(2) == 'id')
                            {{ route('login.id') }}
                        @else
                            {{ route('login') }}
                        @endif" style="text-decoration: none; color: #0037fc;">
                            @if (Request::segment(2) == 'id')
                                Masuk
                            @else
                                Login
                            @endif
                        </a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Card Register End -->

    <script src="{{ asset('js/bootstrap.bundle.js') }}"></script>
</body>
</html>
