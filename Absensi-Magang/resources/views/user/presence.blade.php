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

<body style="background: #373B44; background: linear-gradient(90deg, #373B44 0%, #4286f4 75%);">
    <div class="container position-absolute top-50 start-50 translate-middle">
        <div class="card">
            <form action="/getpresence" method="POST" content-type="multipart/form-data">
                @csrf
                <div class="card-content">
                    <div class="card-body">
                        <div class="video d-flex flex-column align-items-center gap-3">
                            <video id="video" width="320" height="240" autoplay></video>
                            <input type="text" name="photo" id="photo-input" hidden></input>
                            <img id="photo-preview" width="320" height="240">
                            <button type="button" id="takePhoto" class="btn btn-primary"><i class="fa-solid fa-camera"></i> Take Photo</button>
                        </div>
                        <div class="text d-flex justify-content-between mt-4">
                            <div class="text-left">
                                <h4>{{ Auth::user()->name }}</h4>
                                <p style="font-size: 15px">{{ Auth::user()->email }}</p>
                            </div>
                            <div class="text-right">
                                <p>{{ now()->format('d-m-Y') }}</p>
                            </div>
                        </div>
                        <div class="button-presence d-flex flex-column gap-2">
                                <select name="status" class="form-select" aria-label="Default select example" name="status">
                                    <option selected>Status</option>
                                    <option value="WFH">WFH</option>
                                    <option value="WFO">WFO</option>
                                </select>
                                <button class="btn btn-success btn-lg" type="submit">Submit</button>
                        </div>
                    </div>
                </div>
            </form>  
        </div>    
    </div>
    

    <script>
        document.getElementById("takePhoto").addEventListener("click", function(event){
            event.preventDefault();
            canvas.width = video.videoWidth;
            canvas.height = video.videoHeight;
            context.drawImage(video, 0, 0, canvas.width, canvas.height);

            var photo = canvas.toDataURL("image/png");
            console.log(photo);
            document.querySelector("#photo-preview").src = photo;
            document.querySelector("#photo-input").value = photo;
        });

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
