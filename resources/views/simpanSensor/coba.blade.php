<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div id="ppp"></div>
    <div id="tow"></div>
    <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('js/plotly-2.26.0.min.js') }}"></script>
    <script>
    TOW_DIAGRAM = document.getElementById('tow')
    $(document).ready( function() {
        setInterval(() => {
            $('#ppp').load("{{ url('simpan-tds') }}")
        }, 1000);
    })
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

            Plotly.newPlot(TOW_DIAGRAM, [trace], layout);
        });
    }

    $(document).ready(function () {
        loadData();
        setInterval(loadData, 1000);
    });

    // const dataTraces = [];

// function updateTDSData() {
//     const currentDate = new Date();
//     const currentSecond = currentDate.getSeconds();

//     // Check if the current time is at the start of a new minute (detik ke-00)
//     if (currentSecond === 0) {
//         // Fetch data from the server
//         $.ajax({
//             url: '/simpan-tds',
//             method: 'GET',
//             success: function (response) {
//                 const newData = response.map(data => data.data_tds); // Ambil data TDS dari respons

//                 const currentDateTime = currentDate.toLocaleString(); // Format tanggal dan waktu

//                 const trace = {
//                     x: [currentDateTime],
//                     y: newData,
//                     type: 'line',
//                     mode: 'lines+markers',
//                     line: { shape: 'spline' },
//                     name: currentDateTime,
//                 };

//                 dataTraces.push(trace);

//                 if (dataTraces.length > 24) {
//                     dataTraces.shift();
//                 }

//                 const layout = {
//                     margin: { t: 0 },
//                     xaxis: {
//                         type: 'category',
//                         categoryorder: 'array',
//                         categoryarray: dataTraces.map(trace => trace.x[0]),
//                     },
//                 };

//                 Plotly.newPlot(TDS_DIAGRAM, dataTraces, layout);
//             },
//             error: function (error) {
//                 console.log('Error:', error);
//             }
//         });
//     }
// }

// $(document).ready(function () {
//     // Update the TDS data immediately
//     updateTDSData();

//     // Schedule the function to run every second
//     setInterval(updateTDSData, 1000);
// });
    </script>
</body>
</html>
