<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

        <div class="row">
            <div class="col-lg-12">
                <nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#">Navbar</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link active" href="index.php?halaman=welcome">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="index.php?halaman=hari1">hari1</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="index.php?halaman=hari2">hari2</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="index.php?halaman=hari3">hari3</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="index.php?halaman=hari4">hari4</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="index.php?halaman=hari5">hari5</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="index.php?halaman=hari6">hari6</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="index.php?halaman=hari7">hari7</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="index.php?halaman=hari8">hari8</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>

    <?php 

        if(isset($_GET['halaman'])){
            switch ($_GET['halaman']){
                case "hari1":
                    include "hari pertama/index.php";
                    break;

                case "hari2":
                    include "hari kedua/index.php";
                    break;

                case "hari3":
                    include "hari ketiga/index.php";
                    include "hari ketiga/balok.php";
                    include "hari ketiga/kondisi.php";
                    include "hari ketiga/segitiga.php";
                    break;

                case "hari4":
                    include "hari keempat/index.php";
                    include "hari keempat/nilai.php";
                    include "hari keempat/IMT.php";
                    break;

                case "hari5":
                    include "hari kelima/index.php";
                    include "hari kelima/kabisat.php";
                    break;

                case "hari6":
                    include "hari keenam/index.php";
                    break;

                case "hari7":
                    include "hari ketujuh/index.php";
                    include "hari ketujuh/ulang.php";
                    include "hari ketujuh/kabisat.php";
                    include "hari ketujuh/prima.php";
                    include "hari ketujuh/nestedloop.php";
                    break;

                case "hari8":
                    include "hari kedelapan/index.php";
                    break;
                
                case "link1";
                    include "hari kedelapan/link1.php";
                    break;

                case "link2";
                    include "hari kedelapan/link2.php";
                    break;

            default:
            include "welcome.php";

            }
            
        }
        else{
            include "welcome.php";
        }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>