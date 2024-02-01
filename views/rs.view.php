<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Soundboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;0,700;1,500&display=swap" rel="stylesheet">
    <style>
        html, body {
            font-family: 'Poppins', sans-serif;
        }

        .card {
            background-color: #FAFAFA;
            border: 1px solid #E7E7E7;
        }

        button {
            background: none;
            color: inherit;
            border: none;
            padding: 0;
            font: inherit;
            outline: inherit;
        }
    </style>
</head>
<body>
<div class="container">
    <h1 class="pt-5 pb-3 fw-bold">RS Soundboard</h1>

    <div class="card rounded-4 mb-4">
        <div class="card-body">
            <div class="d-flex align-items-center" style="gap: 24px">
                <div class="px-2">
                    <button onclick="togglePlayPause(0)">
                        <i class="bi bi-play-fill" id="sound-icon-0" style="font-size: 2.4rem;"></i>
                    </button>
                </div>
                <div>
                    <h4 class="card-title mb-0">Audi RS6 Modded</h4>
                    <div class="card-text">Pops and bangs</div>
                </div>
            </div>
        </div>
    </div>

    <div class="card rounded-4 mb-4">
        <div class="card-body">
            <div class="d-flex align-items-center" style="gap: 24px">
                <div class="px-2">
                    <button onclick="togglePlayPause(1)">
                        <i class="bi bi-play-fill" id="sound-icon-1" style="font-size: 2.4rem;"></i>
                    </button>
                </div>
                <div>
                    <h4 class="card-title mb-0">Audi RSQ8</h4>
                    <div class="card-text">Launchcontrol</div>
                </div>
            </div>
        </div>
    </div>

    <div class="card rounded-4 mb-4">
        <div class="card-body">
            <div class="d-flex align-items-center" style="gap: 24px">
                <div class="px-2">
                    <button onclick="togglePlayPause(2)">
                        <i class="bi bi-play-fill" id="sound-icon-2" style="font-size: 2.4rem;"></i>
                    </button>
                </div>
                <div>
                    <h4 class="card-title mb-0">Audi Themesong</h4>
                    <div class="card-text">Song</div>
                </div>
            </div>
        </div>
    </div>

</div>
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-138942259-1"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
<script>

    let audioElements = [];
    let playPauseButtons = [];

    for (let i = 0; i < 3; i++) {
        let audio = new Audio('resources/sounds/' + (i + 1) + '.mp3');
        audioElements.push(audio);
    }

    function togglePlayPause(index) {
        let audio = audioElements[index];
        let button = playPauseButtons[index];
        let icon = document.getElementById("sound-icon-" + index);

        if (audio.paused) {
            audio.play();
            icon.classList.remove("bi-play-fill");
            icon.classList.add("bi-pause-fill");
        } else {
            audio.pause();
            icon.classList.remove("bi-pause-fill");
            icon.classList.add("bi-play-fill");
        }

        audio.onended = function() {
            icon.classList.remove("bi-pause-fill");
            icon.classList.add("bi-play-fill");
        }
    }
</script>
</body>
</html>
