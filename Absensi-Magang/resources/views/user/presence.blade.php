<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Absensi</title>
</head>

<body>

    <div class="container position-absolute top-50 start-50 translate-middle">
        <div class="card">
            <div class="card-header d-flex justify-content-around">
                <img src="assets/images/presence.jpg" alt="" style="width: 200px; height: 200px;">
                <div class="text d-flex align-items-center gap-5">
                    <div class="left">
                        <h4>{{ Auth::user()->name }}</h4>
                        <p>Tempat Magang</p>
                    </div>
                    <div class="right">
                        <p>Tanggal</p>
                        <p>Durasi</p>
                    </div>
                </div>

                <div class="button-presence d-flex align-items-center gap-2">
                    <form action="/getpresence" method="POST">
                        @csrf
                        <select name="status" class="form-select" aria-label="Default select example">
                            <option selected>Status</option>
                            <option value="WFH">WFH</option>
                            <option value="WFO">WFO</option>
                        </select>

                        <button class="btn btn-success btn-lg" type="submit">Submit</button>
                    </form>
                </div>
            </div>
            <div class="card-content">

            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
    <script src="/assets/js/bootstrap.js"></script>
    <script src="/assets/js/app.js"></script>
    <script src="/assets/extensions/apexcharts/apexcharts.min.js"></script>
    <script src="/assets/js/pages/dashboard.js"></script>
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
    <script src="https://kit.fontawesome.com/06b851ab81.js" crossorigin="anonymous"></script>

</body>

</html>
