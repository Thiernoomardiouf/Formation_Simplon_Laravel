<!doctype html>
<html lang="fr">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formations!</title>
    <!-- ********************************************* -->
    <!-- Comment link tags  under Usage 2 if you use bootstrap on local -->
    <!-- Comment link tags  under Usage 1 if you use bootstrap with cdn -->
    <!-- ********************************************* -->

    <!-- ============Usage 1: Local bootstrap CSS ressource file!============= -->
    <!-- <link rel="stylesheet" href="./node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./node_modules/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./formations/css/style.css"> -->
    <!-- ============Usage 2: Online  bootstrap CSS ressource file!============= -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/style.css">
    
</head>

<body>
    <!-- header -->
    <header>
        <nav class="navbar navbar-expand-lg bg-white fw-bold">
            <div class="container-fluid">
                <a class="navbar-brand" href="#" title="Logo Simplon">
                    <img src="/images/simplonSN.png" alt="Logo Simplon" width="150" class=" d-inline-block align-text-top">
                </a>
                <button class="navbar-toggler border  border-2 border-black" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <!-- <span class="navbar-toggler-icon sp-red"></span> -->
                    <i class="bi bi-menu-app-fill text-danger"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                        <li class="nav-item mx-2">
                            <a class="nav-link " aria-current="page" href="index.html">Accueil</a>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="nav-link" href="Fabrique/fabrique.html">Fabrique</a>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="nav-link active" href="formation.html">Formations</a>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="nav-link " href="partenariat.html">Partenariat</a>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="nav-link " href="Partie_Espace/index.html">Espaces</a>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="nav-link " href="entité.html">Entites</a>
                        </li>
                    </ul>
                    <form class="d-flex flex-column flex-lg-row align-items-lg-center" action="{{ route('formations.research') }}">
                        <label for="search"
                            class="align-items-center d-flex justify-content-center mt-lg-0 mt-3 order-1 order-lg-0 rounded rounded-pill">
                            <input class="border-0 mw-100" id="search" type="search" placeholder="Search"
                                aria-label="Search" name="search">
                            <i class="bi bi-search " aria-hidden="true"></i>
                        </label>
                        <div class="dropdown mx-sm-0 mx-sm-1 nav-item ">
                            <!-- <a class="nav-link dropdown-toggle text-black" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                EN
                            </a> -->
                            <a class="nav-link d-flex sp-dropdown-toggle text-black" href="#">
                                EN
                                <i class=" bi bi-caret-down-fill text-danger"></i>
                            </a>
                            <ul class="dropdown-menu mw-5 " aria-labelledby="navbarDropdown">
                                <li>
                                    <a class="dropdown-item sp-hover-red" href="#">EN</a>
                                </li>
                                <li>
                                    <a class="dropdown-item sp-hover-red" href="#">FR</a>
                                </li>
                            </ul>
                        </div>
                        <a href="" class="sm px-3 py-2 sp-rounded-link  sp-btn-danger">Contact</a>
                    </form>
                </div>
            </div>
        </nav>
    </header>
    <!-- End header -->

    @yield('content');

   
    <!-- Section footer -->
    <footer class="sp-footer ">
    <div class="row pt-5 mt-5 text-white d-inline-block row-cols-1 row-cols-sm-2 row-cols-lg-4 d-sm-flex justfy-sm-content-around w-100 gap-0 gap-sm-0 ps-5">
        <div class="logo-icons col col ps-md-0 px-lg-0  my-2 d-lg-flex text-sm-start">
            <img src="/images/logoWhiteSimplon.svg"  class="mx-lg-auto mx-auto mx-sm-0" alt="Logo simplon format blanc" width="150">
            <div class="icons my-5 mx-0 mx-auto mx-sm-0 mx-lg-auto">
                <i class="bi bi-facebook  facebook-color"></i>
                <i class="bi bi-twitter twitter-color"></i>
                <i class="bi bi-youtube youtube-color"></i>
                <i class="bi bi-instagram instagram-color"></i>
            </div>
        </div>
        <div class="col px-ms-0 my-2 my-lg-0 text-sm-start">
            <p>
                <a href="" class="d-block sp-link-light fs-4">Voir plus</a>
            </p>
            <p>
                <a href="" class="d-block sp-link-light my-2">Conditions d'utilisation</a>
                <a href="" class="d-block sp-link-light my-2">Notre Histoire</a>
                <a href="" class="d-block sp-link-light my-2">Politique de confidentialite</a>
                <a href="" class="d-block sp-link-light my-2">FAQ</a>
            </p>
        </div>
        <div class="col px-lg-0 my-2 my-lg-0 text-center text-sm-start">
            <p class="d-block sp-link-light fs-4">Cordonnees</p>
            <p class="d-block sp-link-light ">Cite Keur Goor Gui ,<br> Sicap Liberte 6,<br> Dakar Senegal</p>
            <p>
                <a href="" class="d-block sp-link-light my-2">simplon@gmail.com</a>
                <a href="" class="d-block sp-link-light my-2">simplon@contactgmail.com</a>
            </p>
            <p class="d-block ">(+221) 33 234 43 32 <br> (+221) 88 348 98 43 32</p>
        </div>
        <div class="col px-lg-0 my-2 my-lg-0 text-center text-sm-start ">
            <p class="d-block sp-link-light fs-4">Notre Newsletter</p>
            <p id="newsletter-text">Souscrivez vous à notre newsletter pour ne pas manquer aucune de nos acticites
            </p>
            <p class="sp-input-group">
                <input type="email" placeholder="email@gmail.com" id="email">
                <input type="button" value="S'abonner" class="sp-btn-danger" id="btn-submit">
            </p>
        </div>
    </div>
    <div
        class="copyright text-white p-3 d-flex align-items-center flex-column flex-sm-row justify-content-between">
        <span>© 2021 Simplon. All rights reserved.</span>
        <span class=" ">made with <i class="bi bi-suit-heart-fill text-black"></i> <strong> by
                SimplonP4</strong></span>
    </div>
    </footer>
    <!-- End Section footer -->
    <script src="/js/script.js"></script>
</body>

</html>