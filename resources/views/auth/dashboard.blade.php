<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="shortcut icon" href="{{ asset('assets/new_logo.png') }}" type="image/x-icon">
    <title>Dashboard | Smart Garden</title>
</head>
<body>
    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-sm navbar-light sticky-top" style="background-color: #183d3d;" id="home">
        <div class="container-fluid">
            <a href="{{ route('home') }}" style="text-decoration: none">
                <img src="{{ asset('assets/new_logo.png') }}" alt="smart garden" class="navbar-brand ms-2 mt-0" style="width: 45px;">
            </a>
            <label class="navbar-brand fw-semibold" style="font-family: sans-serif;"><a href="{{ route('home') }}" style="text-decoration: none; color: #93b1a6;">Smart Garden</a></label>
          <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId"
              aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="collapsibleNavId">
              <img src="{{ asset('assets/nav2.png') }}" alt="..." class="navbar-brand">
              <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                  <li class="nav-item">
                      <a href="{{ route('home') }}" class="nav-link ms-3" style="color: #93b1a6; font-size: 18px;">Home</a>
                  </li>
                  <li class="nav-item">
                      <a href="{{ route('home') }}#about" class="nav-link ms-3" style="color: #93b1a6; font-size: 18px;">About</a>
                  </li>
                  <li class="nav-item">
                      <a href="{{ route('dashboard') }}" class="nav-link active fw-semibold ms-3" style="color: #fcfcfc; font-size: 18px; filter: drop-shadow(0px 0px 6px #ffffff);">Dashboard</a>
                  </li>
              </ul>
              <form class="d-flex my-2 my-lg-0">
                  <a href="{{ route('logout') }}" class="btn btn-danger me-3 fw-bold px-4" style="color: #ffffff; border-radius: 100px;" type="button">Logout</a>
              </form>
          </div>
    </div>
  </nav>
    <!-- Navbar End -->

    <!-- content start -->

    <div class="container mt-4">
        <div class="row">
            <div class="col-12 col-md-12 col-sm-12">
                <!-- esp card start -->
                <div class="card border-0 mb-5" style="background-color: #d9d9d9; box-shadow: 2px 2px 5px 0px rgba(0,0,0,0.45);">
                    <div class="card-body">
                        <div class="row">
                            <div class="col d-flex align-items-center">
                                <img src="{{ asset('assets/espcam.png') }}" alt="..." class="img-fluid me-2" style="width: 30px; height: 30px;">
                                <h4 class="card-title fw-bold pt-1">ESP CAM</h4>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col d-flex justify-content-center mt-2">
                                <img src="http://172.16.21.43:81/stream" alt="Cam is Offline" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- esp card end -->
            </div>
            <div class="col">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <!-- ph sensor start -->
                        <div class="card border-0 mb-5" style="background-color: #d9d9d9; box-shadow: 2px 2px 5px 0px rgba(0,0,0,0.45);">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col d-flex align-items-center">
                                        <img src="{{ asset('assets/waterTemperature.png') }}" alt="..." class="img-fluid me-2" style="width: 30px; height: 30px;">
                                        <h4 class="card-title fw-bold pt-1">WATER TEMPERATURE</h4>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col d-flex justify-content-center">
                                        <p style="font-size: 90px;" class="me-3" id="air">
                                            0
                                        </p>
                                        <p style="font-size: 90px;">°C</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ph sensor end -->
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <!-- tds card start -->
                        <div class="card border-0 mb-5" style="background-color: #d9d9d9; box-shadow: 2px 2px 5px 0px rgba(0,0,0,0.45);">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col d-flex align-items-center">
                                        <img src="{{ asset('assets/tdsSensor.png') }}" alt="..." class="img-fluid me-2" style="width: 30px; height: 30px;">
                                        <h4 class="card-title fw-bold pt-1">TOTAL DISSOLVED SOLIDS</h4>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col d-flex justify-content-center">
                                        <p style="font-size: 90px;" class="me-3" id="tds" onchange="ubahTds()"></p>
                                        <p style="font-size: 90px" id="ppm">ppm</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- tds card end -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <!-- ph sensor start -->
                        <div class="card border-0 mb-5" style="background-color: #d9d9d9; box-shadow: 2px 2px 5px 0px rgba(0,0,0,0.45);">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col d-flex align-items-center">
                                        <img src="{{ asset('assets/phSensor.png') }}" alt="..." class="img-fluid me-2" style="width: 30px; height: 30px;">
                                        <h4 class="card-title fw-bold pt-1">PH SENSOR</h4>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col d-flex justify-content-center">
                                        <p style="font-size: 90px;" class="me-3" id="ph">0</p>
                                        {{-- <p style="font-size: 90px;"></p> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ph sensor end -->
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <!-- turbidity water start -->
                        <div class="card border-0 mb-5" style="background-color: #d9d9d9; box-shadow: 2px 2px 5px 0px rgba(0,0,0,0.45);">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col d-flex align-items-center">
                                        <img src="{{ asset('assets/airTemperature2.png') }}" alt="..." class="img-fluid me-2" style="width: 30px; height: 30px;">
                                        <h4 class="card-title fw-bold pt-1">AIR HUMIDITY</h4>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col d-flex justify-content-center">
                                        <p style="font-size: 90px;" id="airHumidity">0</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- turbidity water end -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <!-- UV card start -->
                        <div class="card border-0 mb-5" style="background-color: #d9d9d9; box-shadow: 2px 2px 5px 0px rgba(0,0,0,0.45);">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col d-flex align-items-center">
                                        <img src="{{ asset('assets/UV.png') }}" alt="..." class="img-fluid me-2" style="width: 30px; height: 30px;">
                                        <h4 class="card-title fw-bold pt-1">ULTRAVIOLET (UV)</h4>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col d-flex justify-content-center">
                                        <p style="font-size: 90px;" id="uv">0</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- UV card end -->
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <!-- air humidity start -->
                        <div class="card border-0 mb-5" style="background-color: #d9d9d9; box-shadow: 2px 2px 5px 0px rgba(0,0,0,0.45);">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col d-flex align-items-center">
                                        <img src="{{ asset('assets/humidityAir.png') }}" alt="..." class="img-fluid me-2" style="width: 30px; height: 30px;">
                                        <h4 class="card-title fw-bold pt-1">AIR TEMPERATURE</h4>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col d-flex justify-content-center">
                                        <p style="font-size: 90px;" id="airTemperature">0</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- air humidity end -->
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-2">
            <div class="col-md-12 mb-3">
                <h1 class="text-center fw-bold">PH</h1>
            </div>
            <div class="col-md-12 col-sm-5">
                <div id="ph-diagram" style="width: 100%; height: fit-content;" class="overflow-x-auto"></div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-12 mb-3">
                <h1 class="text-center fw-bold">TOTAL DISSOLVED SOLIDS</h1>
            </div>
            <div class="col-md-12 col-sm-5">
                <div id="tds-diagram" style="width: 100%; height: fit-content;" class="overflow-x-auto"></div>
            </div>
        </div>

    </div>

    <!-- content end -->

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
                    <a href="https://www.facebook.com/RPL.neskar/photos/" target="_blank">
                        <img src="{{ asset('assets/icon_fb.png') }}" alt="..." class="img-fluid me-2">
                    </a>
                    <img src="{{ asset('assets/icon_github.png') }}" alt="..." class="img-fluid me-2">
                    <a href="https://instagram.com/pplg_neskar?igshid=MzRlODBiNWFlZA==" target="_blank">
                        <img src="{{ asset('assets/icon_ig.png') }}" alt="..." class="img-fluid ms-1">
                    </a>
                    <a href="https://www.youtube.com/@pplgsmkn1karawang313" target="_blank">
                        <img src="{{ asset('assets/icon_yt.png') }}" alt="..." class="img-fluid ms-3">
                    </a>
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

    <!-- Modal -->
    <div class="modal fade" id="alertModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <img src="{{ asset('assets/new_logo.png') }}" alt="..." style="width: 40px" class="modal-title me-2">
                    <h1 class="modal-title fs-5 fw-bold" style="font-family: sans-serif; color: #367881;" id="exampleModalLabel">Smart Garden</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p id="alertMessage"></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    {{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> --}}
    <script src="{{ asset('js/plotly-2.26.0.min.js') }}"></script>
    <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.js') }}"></script>
    <script>
        PH_DIAGRAM = document.getElementById('ph-diagram');
        TDS_DIAGRAM = document.getElementById('tds-diagram');
        let tds = document.getElementById('tds')
        let ppm = document.getElementById('ppm')
        var d = [{ Spalte: tds}];
        var modalAlreadyShown = false;

        // ubahTds = () => {
        //     let tdsValue = parseInt(d[0].Spalte.textContent.trim(), 10);

        //     if(!modalAlreadyShown) {
        //         if(tdsValue < 1050) {
        //             tds.style.color = "red";
        //             ppm.style.color = "red";
        //             document.getElementById('alertMessage').innerText = "Your TDS figure is outside normal limits";
        //             $('#alertModal').modal('show');
        //             modalAlreadyShown = true
        //         } else if(tdsValue > 1400) {
        //             tds.style.color = "red";
        //             ppm.style.color = "red";
        //             document.getElementById('alertMessage').innerText = "Your TDS figure is outside normal limits";
        //             $('#alertModal').modal('show');
        //             modalAlreadyShown = true
        //         } else {
        //             tds.style.color = "green";
        //             ppm.style.color = "green";
        //             modalAlreadyShown = false
        //         }
        //     }
        //     console.log(tdsValue)
        // }
        // setInterval(ubahTds, 1000);
        ubahTds = () => {
            let tdsValue = parseInt(d[0].Spalte.textContent.trim(), 10);

            if(tdsValue < 1050) {
                tds.style.color = "red";
                ppm.style.color = "red";
                if(!modalAlreadyShown) {
                    document.getElementById('alertMessage').innerText = "TDS is too low!";
                    $('#alertModal').modal('show');
                    modalAlreadyShown = true
                }
            } else if(tdsValue > 1400) {
                tds.style.color = "red";
                ppm.style.color = "red";
                if(!modalAlreadyShown) {
                    document.getElementById('alertMessage').innerText = "TDS is too high!";
                    $('#alertModal').modal('show');
                    modalAlreadyShown = true
                }
            } else {
                tds.style.color = "green";
                ppm.style.color = "green";
                modalAlreadyShown = false
            }
        }
        setInterval(ubahTds, 1000)

        Plotly.newPlot( PH_DIAGRAM, [{
        x: ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'],
        y: [1, 2, 10, 5, 5, 14, 3], }], {
        margin: { t: 0 } } );
        function loadData() {
            $.get("{{ url('simpan-tds') }}", function (data) {
                var xData = data.map(function (entry) {
                    return new Date(entry.created_at);
                });

                var yData = data.map(function (entry) {
                    return entry.data_tds;
                });

                var trace = {
                    x: xData,
                    y: yData,
                    mode: 'lines+markers',
                    type: 'scatter'
                };

                var layout = {
                    xaxis: {
                        title: 'Time',
                        showgrid: true
                    },
                    yaxis: {
                        title: 'Data Value',
                        showgrid: true
                    }
                };
                Plotly.newPlot(TDS_DIAGRAM, [trace], layout);
            });
        }

        $(document).ready(function () {
            loadData();
            setInterval(loadData, 1000);
        });

        $(document).ready( function() {
            setInterval(() => {
                $('#air').load("{{ url('air') }}")
                $('#tds').load("{{ url('tds') }}")
                $('#ph').load("{{ url('ph') }}")
                $('#turbidity').load("{{ url('turbidity') }}")
                $('#uv').load("{{ url('uv') }}")
                $('#airTemperature').load("{{ url('airTemperature') }}")
                $('#airHumidity').load("{{ url('airHumidity') }}")
            }, 5000);
        })
        </script>
</body>
</html>
