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
            <form action="/getpresence" method="POST" content-type="multipart/form-data">
                @csrf
                <div class="card-header d-flex justify-content-around">
                    {{-- <img src="assets/images/presence.jpg" alt="" style="width: 200px; height: 200px;"> --}}
                    <div class="video d-flex align-items-center gap-2">
                        <video id="video" width="300" height="300" autoplay name=""></video>
                        <input type="text" name="photo" id="photo-input" hidden></input>
                        <button type="btn" class="btn btn-primary btn-sm" onclick="takePhoto()">Ambil gambar</button>
                        <img id="photo-preview" width="320" height="240">
                    </div>
                    
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
                    <div class="button-presence d-flex align-items-center gap-3">
                            <select name="status" class="form-select" aria-label="Default select example" name="status">
                                <option selected>Status</option>
                                <option value="WFH">WFH</option>
                                <option value="WFO">WFO</option>
                            </select>
                            <button class="btn btn-success btn-lg" type="submit">Submit</button>
                    </div>
            </form>  
        </div>    
    </div>
    

    <script>
        var video = document.querySelector("#video");
        var canvas = document.createElement("canvas");
        var context = canvas.getContext("2d");

        if (navigator.mediaDevices.getUserMedia) {
            navigator.mediaDevices.getUserMedia({ video: true })
                .then(function (stream) {
                    video.srcObject = stream;
                })
                .catch(function (error) {
                    console.log("Something went wrong: " + error);
                });
        }

        function takePhoto() {
            canvas.width = video.videoWidth;
            canvas.height = video.videoHeight;
            context.drawImage(video, 0, 0, canvas.width, canvas.height);

            var photo = canvas.toDataURL("image/png");
            document.querySelector("#photo-preview").src = photo;
            document.querySelector("#photo-input").value = photo;
        }
    </script>


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
