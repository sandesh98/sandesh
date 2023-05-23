<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Soundboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
<!--    <link rel="preconnect" href="https://fonts.googleapis.com">-->
<!--    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>-->
<!--    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">-->
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
            cursor: pointer;
            outline: inherit;
        }
    </style>
</head>
<body>
<div class="container">
    <h1 class="pt-5 pb-3">RS Soundboard</h1>

    <div class="card rounded-4">
        <div class="card-body">
            <div class="d-flex align-items-center" style="gap: 24px">
                <div class="px-2">
                    <button onclick="playSound('sound1')">
                        <i class="bi bi-play-fill" style="font-size: 2.4rem;"></i>
                    </button>
                </div>
                <div>
                    <h4 class="card-title mb-0">Audi RS6</h4>
                    <div class="card-text">Pops and bangs</div>
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
    function playSound(sound) {
        console.log(sound);
        // setAnimation();
        let sound1 = 'resources/sounds/piraat.mp3';
        let sound2 = 'resources/sounds/piraat.mp3';
        let sound3 = 'resources/sounds/piraat.mp3';

        let audio = new Audio();

        switch (sound) {
            case 'sound1':
                audio.src = sound1;
                break;
            case 'sound2':
                audio.src = sound2;
                break;
            case 'sound3':
                audio.src = sound3;
                break;
            default:
                console.log('Ongeldige geluidsnaam');
                return;
        }

        audio.play();

    }

    function setAnimation() {
        // console.log('animation');
    }
</script>
</body>
</html>
