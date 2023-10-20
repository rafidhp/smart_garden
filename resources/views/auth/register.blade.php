<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="shortcut icon" href="{{ asset('assets/new_logo.png') }}" type="image/x-icon">
    <title>Register | Smart Garden</title>
</head>
<body style="background-image: url('{{ asset('assets/SmartGarden3.png') }}'); height: 100%;">
    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-sm navbar-light" style="background-color: #183d3d;" id="home">
        <div class="container-fluid">
          <img src="{{ asset('assets/new_logo.png') }}" alt="smart garden" class="navbar-brand ms-2 mt-0" style="width: 45px;">
          <label class="navbar-brand fw-semibold" style="font-family: sans-serif; color: #93b1a6;">Smart Garden</label>
          <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId"
              aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="collapsibleNavId">
              <img src="{{ asset('assets/nav2.png') }}" alt="..." class="navbar-brand">
              <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                  <li class="nav-item">
                      <a href="{{ route('home') }}" class="nav-link fw-semibold ms-3" style="color: #93b1a6; font-size: 18px;">Home</a>
                  </li>
                  <li class="nav-item">
                      <a href="{{ route('home') }}#about" class="nav-link ms-3" style="color: #93b1a6; font-size: 18px;">About</a>
                  </li>
                  <li class="nav-item">
                      <a href="{{ route('dashboard') }}" class="nav-link ms-3" style="color: #93b1a6; font-size: 18px;">Dashboard</a>
                  </li>
              </ul>
              <form class="d-flex my-2 my-lg-0">
                  <a href="{{ route('login') }}" class="btn me-3 fw-bold px-4" style="background-color: #5C8374; color: #ffffff; border-radius: 100px;" type="button">Login</a>
              </form>
          </div>
    </div>
  </nav>
    <!-- Navbar End -->

    <!-- Card Register Start -->
    <div class="container d-flex justify-content-center align-items-center mt-5">
        <div class="card col-lg-5 col-md-8 col-sm-10 mb-5 mt-3" style="box-shadow: 1px 2px 5px 6px rgba(0,0,0,0.54);">
            <div class="card-body d-flex flex-column" style="background-color: #d9d9d9;">
                <h3 class="card-title fs-3 fw-bold text-center mt-3">Register</h3>
                <form action="{{ route('register.store') }}" method="POST" class="card-body py-4 needs-validate">
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
                    <div class="row">
                        <div class="col d-flex flex-column justify-content-center align-items-center">
                            <button type="submit" class="btn fw-semibold mt-3 mb-1" style="background-color: #657b00; color: #ffffff; width: 100%; border-radius: 20px;">Register</button>
                            <p>Already have an account? <a href="{{ route('login') }}" style="text-decoration: none; color: #0037fc;">Login</a></p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Card Register End -->

    <script src="js/bootstrap.bundle.js"></script>
</body>
</html>
