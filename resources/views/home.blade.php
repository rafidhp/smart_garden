<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="shortcut icon" href="{{ asset('assets/new_logo.png') }}" type="image/x-icon">
    <title>Smart Garden</title>
</head>
<body>
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
                      <a href="{{ route('home') }}" class="nav-link active fw-semibold ms-3" style="color: #fcfcfc; font-size: 18px; filter: drop-shadow(0px 0px 6px #ffffff);">Home</a>
                  </li>
                  <li class="nav-item">
                      <a href="{{ route('home') }}#about" class="nav-link ms-3" style="color: #93b1a6; font-size: 18px;">About</a>
                  </li>
                  <li class="nav-item">
                      <a href="{{ route('dashboard') }}" class="nav-link ms-3" style="color: #93b1a6; font-size: 18px;">Dashboard</a>
                  </li>
              </ul>
              <form class="d-flex my-2 my-lg-0">
                @if (Auth::check())
                    <a href="{{ route('logout') }}" class="btn btn-danger me-3 fw-bold px-4" style="color: #ffffff; border-radius: 100px;" type="button">Logout</a>
                @else
                    <a href="{{ route('login') }}" class="btn me-3 fw-bold px-4" style="background-color: #5C8374; color: #ffffff; border-radius: 100px;" type="button">Login</a>
                @endif
              </form>
          </div>
    </div>
  </nav>
    <!-- Navbar End -->

    <!-- Content Start -->
    <!-- Background Img Start -->
    <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="{{ asset('assets/home.png') }}" class="d-block w-100" alt="..." style="height: 573px;">
            <div class="carousel-caption d-none d-md-block">
              <h1 style="font-size: 50px;">Smart Garden</h1>
              <p class=" fs-5 text-center mb-5">Smart garden is an intelligent system that utilizes technology to optimize the care of plants and the utilization of resources in your garden or backyard.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="{{ asset('assets/home2.png') }}" class="d-block w-100" alt="..." style="height: 573px;">
            <div class="carousel-caption d-none d-md-block">
                <h1 style="font-size: 50px;">Smart Garden</h1>
                <p class=" fs-5 text-center mb-5">Smartgarden hydroponics is a plant farming system that doesn't use soil as a growth medium but instead utilizes nutrient-rich water to cultivate plants.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="{{ asset('assets/home4.png') }}" class="d-block w-100" alt="..." style="height: 573px;">
            <div class="carousel-caption d-none d-md-block">
                <h1 style="font-size: 50px;">Smart Garden</h1>
                <p class=" fs-5 text-center mb-5">The main advantages of smartgarden hydroponics are better control over plant growth conditions, more efficient water usage, and faster plant growth. This makes it an attractive choice for modern agriculture, especially in areas with limited water resources or less than ideal soil conditions.</p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev" >
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    <!-- Background Img Start -->

    <!-- Content Start -->
    <div class="container mt-4">
        <!-- Text Content Start -->
        <div class="row mb-3">
            <div class="col-4 fw-bold fs-5" style="color: #285A43;">
                <p>Welcome to the Future of Gardening: Smart, Sustainable, and Simple</p>
            </div>
            <div class="col-8 d-flex text-wrap ps-5">
                Smart garden hydroponics is a modern solution that helps us address future agricultural challenges, such as the shortage of fertile land and the decreasing water resources. By harnessing smart technology, we can produce food that is healthier, more efficient, and more sustainable
            </div>
        </div>
        <!-- Text Content End -->

        <!-- Sannin Start -->

        <div class="row d-flex justify-content-center mt-4 mb-5">
            <!-- Card 1 Start -->
            <div class=" mb-3 col-md-3 col-sm-5 card mx-3" style="background-color: #183d3d;">
                <div class="card-body text-start d-flex flex-column pt-4" style="margin-top: 10px;">
                    <img src="{{ asset('assets/Outdoor_Plant.png') }}" alt="plant" class="img-fluid" style="width: 75px;">
                    <p class="fw-bold fs-5" style="color: #ffffff;">Better Nutrient Control</p>
                    <p style="color: #ffffff;">In hydroponics, you have better control over the nutrients provided to your plants. You can measure and adjust nutrient levels precisely for each growth stage.</p>
                </div>
            </div>
            <!-- Card 1 End -->

            <!-- Card 2 Start -->
            <div class="mb-3 col-md-4 col-sm-5 card mx-3" style="background-color: #183d3d;">
                <div class="card-body text-start d-flex flex-column pt-5">
                    <img src="{{ asset('assets/icon-water.png') }}" alt="water" class="img-fluid mb-2" style="width: 50px;">
                    <p class="fw-bold fs-5" style="color: #ffffff;">More Efficient Water Usage</p>
                    <p style="color: #ffffff;">Hydroponics uses water more efficiently compared to conventional farming because water can be recycled within the hydroponic system. This reduces water wastage, which is crucial in addressing water scarcity issues.</p>
                </div>
            </div>
            <!-- Card 2 End -->

            <!-- Card 3 Start -->
            <div class="mb-3 col-md-3 col-sm-5 card mx-3" style="background-color: #183d3d;">
                <div class="card-body text-start d-flex flex-column pt-5" style="margin-top: 5px;">
                    <img src="{{ asset('assets/semprotan.png') }}" alt="spray" class="img-fluid mb-2" style="width: 45px;">
                    <p class="fw-bold fs-5" style="color: #ffffff;">Less Pesticide Use</p>
                    <p style="color: #ffffff;">Since hydroponic plants are often grown in controlled environments, the risk of pest infestations and diseases can be reduced, meaning you need fewer pesticides.</p>
                </div>
            </div>
            <!-- Card 3 End -->
        </div>
    </div>

    <!-- Sannin End -->

    <!-- Section 3 Start -->
    <div class="row container-xxl ps-0 pe-0 mb-3">
        <div class="col-md-6 col-sm-5 pe-0">
            <img src="{{ asset('assets/dashboard2.png') }}" alt="..." class="img-fluid">
        </div>
        <div class="col-md-6 col-sm-5 pe-0">
            <div class="row d-flex" style="height: 50%;">
                <div class="col-6 px-0" style="background-color: #fcfcfc;">
                    <div class="container d-flex flex-column mt-4 ps-3">
                        <img src="{{ asset('assets/hydroponics1.png') }}" alt="..." style="width: 60px;">
                        <h5 class="fw-semibold mt-3" style="color: #285a43;">Faster Plant Growth</h5>
                        <p style="color: #121212;">Plants in hydroponic systems tend to grow faster because they have direct access to the nutrients they need. Plants don't need to expend energy searching for nutrients in the soil.</p>
                    </div>
                </div>
                <div class="col-6 px-0" style="background-color: #f8f8f8;">
                    <div class="container mt-3 ps-3">
                        <img src="{{ asset('assets/hydroponics2.png') }}" alt="..." style="width: 85px;">
                        <h5 class="fw-semibold" style="color: #285A43; margin-top: 1px;">Space-Efficient</h5>
                        <p style="color: #121212;">Hydroponics can be done in vertical systems or racks, enabling highly efficient use of space. This is particularly suitable for urban environments with limited land.</p>
                    </div>
                </div>
            </div>
            <div class="row d-flex" style="height: 50%;">
                <div class="col-6 px-0" style="background-color: #f8f8f8;">
                    <div class="container mt-1 ps-0">
                        <img src="{{ asset('assets/hydroponics3.png') }}" alt="..." style="width: 90px;">
                        <h5 class="fw-semibold ps-3" style="color: #285A43;">Better Environmental Control</h5>
                        <p class="ps-3" style="color: #121212;">Smart gardens with hydroponics are often equipped with environmental control technology, such as temperature, humidity, and lighting control.</p>
                    </div>
                </div>
                <div class="col-6 px-0" style="background-color: #fcfcfc;">
                    <div class="container mt-2 ps-3">
                        <img src="{{ asset('assets/hydroponics5.png') }}" alt="..." style="width: 90px;">
                        <h5 class="fw-semibold mt-1" style="color: #285A43;">Automatic Monitoring and Control</h5>
                        <p style="color: #121212;">Smart gardens with hydroponics are connected to device that enable automatic monitoring and control of plants from your device.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Section 3 End -->

    <!-- Our Gallery View Start -->
    <div class="container-xxl mb-4">
        <div class="d-flex justify-content-center align-items-center">
            <h2 class="mt-5 mb-3 fw-semibold px-4 py-2 rounded-3" style="color: #181820; font-family: 'lora'; background-color: #d9d9d9;">Our Gallery View</h2>
        </div>
        <div class="row">
            <div class="col-5 px-0">
                <img src="{{ asset('assets/gallery_view(3).png') }}" alt="..." class="img-fluid" width="560px">
            </div>
            <div class="col-7">
                <div class="row mb-3">
                    <div class="col">
                        <img src="{{ asset('assets/gallery_view2.png') }}" alt="..." class="img-fluid">
                    </div>
                    <div class="col px-0">
                        <img src="{{ asset('assets/gallery_view3.png') }}" alt="..." class="img-fluid">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <img src="{{ asset('assets/gallery_view4.png') }}" alt="..." class="img-fluid text-start">
                    </div>
                    <div class="col px-0">
                        <img src="{{ asset('assets/gallery_view5.png') }}" alt="..." class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Our Gallery View End -->

    <!-- About Us Start -->
    <div class="d-flex justify-content-center align-items-center" id="about">
        <h2 class="text-center fw-semibold mt-5 mb-3 px-4 py-2 rounded-3" style="color: #181820; font-family: 'lora'; background-color: #d9d9d9;">About Us</h2>
    </div>
    <div style="background-color: #183D3D;" class="py-5 mb-5">
        <div class="container d-flex justify-content-center align-items-center my-3">
            <div class="row">
                <div class="col-md-6 col-sm-5">
                    <div class="row d-flex flex-column justify-content-center align-items-center">
                        <div class="col mt-3">
                            <p style="color: white; font-size: 18px;" class="mb-5">Smart Garden Hydroponics is a leading innovation hub in the world of modern hydroponics-based agriculture. We specialize in developing smart and eco-friendly hydroponic systems, enabling individuals and communities to cultivate remarkable crops without the need for extensive land or hazardous pesticides.</p>
                        </div>
                        <div class="col mb-2">
                            <p style="color: white; font-size: 18px;">We invite you to join us in our journey towards smarter, cleaner, and more sustainable farming, while committing to continuous innovation and knowledge sharing within our community. Together, we can create a greener, more sustainable, and hopeful future.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-5 d-flex align-items-center justify-content-center">
                    <img src="{{ asset('assets/about2.png') }}" alt="..." style="width: 500px;" class="img-fluid text-center">
                </div>
            </div>
        </div>
    </div>
    <!-- About Us End -->

    <!-- our team start -->
    <div class="d-flex justify-content-center align-items-center">
        <h2 class="text-center fw-semibold mt-1 mb-2 px-4 py-2 rounded-3" style="color: #181820; font-family: 'lora'; background-color: #d9d9d9;">Our Team</h2>
    </div>
    <section id="tim">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="row">
                        <p style="color: #000000; font-family: poppins; font-style: italic;" class="fs-6 text-center">Technology in Growth: We Are the SmartGarden Team.</p>
                        <div class="col d-flex flex-column align-items-center" style="line-height: 13px;">
                            <img src="{{ asset('./assets/rafi.png') }}" alt="..." class="img-fluid mb-4 rounded-5" style="width: 200px;">
                            <p class="fw-semibold fs-5" style="color: #000000; line-height: normal;">Rafi Islami Pasha DHP</p>
                            <p class="fs-6" style="color: #000000;">Web Developer</p>
                        </div>
                        <div class="col d-flex flex-column align-items-center" style="line-height: 13px;">
                            <img src="{{ asset('./assets/pa_gunawan.png') }}" alt="..." class="img-fluid mb-4 rounded-5" style="width: 200px;">
                            <p class="fw-semibold fs-5" style="color: #000000; line-height: normal;">Gunawan Busyaeri S.pd</p>
                            <p class="fs-6" style="color: #000000;">Mentor</p>
                        </div>
                        <div class="col d-flex flex-column align-items-center" style="line-height: 13px;">
                            <img src="{{ asset('./assets/bagas.png') }}" alt="..." class="img-fluid mb-4 rounded-5" style="width: 200px;">
                            <p class="fw-semibold fs-5" style="color: #000000; line-height: normal;">Bagas Aris Prasetyo</p>
                            <p class="fs-6" style="color: #000000;">System and User Analyst</p>
                        </div>
                    </div>
                    <div class="row d-flex mb-5 mt-3">
                        <div class="col d-flex flex-column align-items-center" style="line-height: 13px;">
                            <img src="{{ asset('./assets/moreno.png') }}" alt="..." class="img-fluid mb-4 rounded-5" style="width: 200px;">
                            <p class="fw-semibold fs-5" style="color: #000000; line-height: normal;">Moreno Dwi Putra</p>
                            <p class="fs-6" style="color: #000000;">IoT Developer</p>
                        </div>
                        <div class="col d-flex flex-column align-items-center" style="line-height: 13px;">
                            <img src="{{ asset('./assets/sultan.png') }}" alt="..." class="img-fluid mb-4 rounded-5" style="width: 200px;">
                            <p class="fw-semibold fs-5" style="color: #000000; line-height: normal;">Sultan Badra Maulana</p>
                            <p class="fs-6" style="color: #000000;">UI/UX Designer</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- our team end -->

    <!-- Content End -->

    <!-- Footer Start -->
    <footer style="background-color: #183d3d;">
        <div class="footer container" style="width: 100%;">
            <div class="row">
                <div class="col d-flex justify-content-center align-items-center">
                    <img src="{{ asset('assets/codeCraft.png') }}" alt="..."  class="img-fluid my-4 pt-2" style="width: 160px;">
                </div>
            </div>
            <div class="row">
                <div class="col mb-4 d-flex justify-content-center align-items-center">
                    <a href="{{ route('home') }}" class="text-decoration-none me-4" style="color: #ffffff;">Home</a>
                    <a href="{{ route('home') }}#about" class="text-decoration-none mx-2" style="color: #ffffff;">About</a>
                    <a href="{{ route('dashboard') }}" class="text-decoration-none ms-4" style="color: #ffffff;">Dashboard</a>
                </div>
            </div>
            <div class="row">
                <div class="col mb-3 d-flex justify-content-center align-items-center">
                    <img src="{{ asset('assets/icon_fb.png') }}" alt="..." class="img-fluid me-2">
                    <img src="{{ asset('assets/icon_github.png') }}" alt="..." class="img-fluid me-2">
                    <img src="{{ asset('assets/icon_ig.png') }}" alt="..." class="img-fluid ms-1">
                    <img src="{{ asset('assets/icon_yt.png') }}" alt="..." class="img-fluid ms-3">
                </div>
            </div>
            <hr style="height: 3px; background-color: #76AEFF;">
            <div class="row">
                <div class="col d-flex justify-content-center align-items-center">
                    <p style="color: #ffffff;">&copy; copyright CodeCraft</p>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer End -->

    <!-- ! Content End -->

    <script src="{{ asset('js/bootstrap.bundle.js') }}"></script>
</body>
</html>
