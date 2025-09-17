<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/css.css">
    <style>
        .top-bar {
            background-color:rgb(119, 0, 0);
            height: 40px;
        }
        .nav-bar {
            background-color: white;
            padding: 20px 0;
        }
        .logo img {
            height: 80px;
            margin-left:150px;
            margin-right: 120px;
        }
        .nav-container {
            display: flex;
            align-items: center;
            gap: 100px; 
        }
        .logo {
            flex-shrink: 0;
        }
        nav {
            flex-grow: 1;
        }
        .nav ul {
            font-size: 40px;
            display: flex;
            gap: 15px;
            justify-content: flex-start;
        }
        .nav-link {
            color: #000;
            font-weight: 500;
        }
        .nav-link:hover {
            color: rgb(119, 0, 0);
        }
        .wave-section {
            position: relative;
            background-color: rgb(119, 0, 0);
            color: white;
            padding: 100px 0;
        }
        .wave-section::after {
            content: "";
            position: absolute;
            bottom: -50px;
            left: 0;
            width: 100%;
            height: 100px;
            background: url('https://www.svgrepo.com/show/208086/wave.svg') repeat-x;
            background-size: cover;
        }
        .content-section {
            background-color: white;
            padding: 100px 0;
        }
        .carousel-container {
            max-width: 1000px; 
            margin: 0 auto; 
        }
        .carousel-inner img {
            height: 550px; 
            object-fit: cover;
        }
        .gray-image 
        {
            filter: grayscale(70%) brightness(50%);
        }


.custom-caption {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    right: 10%;
    z-index: 2;
    text-align: left;
    color: white;
    max-width: 500px;
}

.custom-caption h3 {
    font-size: 2.5rem;
    font-weight: bold;
}

.custom-caption p {
    font-size: 1.25rem;
}

    </style>
</head>
<body>

<div class="top-bar"></div>
<header class="nav-bar">
    <div class="container nav-container">
        <a href="={{ route('home') }}" class="logo">
            <img src="{{ asset('img/etec_zona_leste.png') }}">
        </a>
        <nav>
            <ul class="nav">
                <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('cursos') }}">Cursos</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('departamento') }}">Departamento</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('contato') }}">Contato</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>
            </ul>
        </nav>
    </div>
</header>
<div class="carousel-container">
    <div id="carouselExample" class="carousel slide" data-bs-ride="carousel" data-bs-interval="9000">
        <div class="carousel-inner">
            <!-- Slide 1 -->
            <div class="carousel-item active position-relative">
                <img src="{{ asset('img/carrossel1.png') }}" class="d-block w-100 gray-image" alt="Slide 1">
                <div class="carousel-overlay"></div>
                <div class="carousel-caption custom-caption">
                    <h3>Conheça os nossos cursos</h3>
                    <a href="{{ route('cursos') }}" class="btn btn-danger mt-3">Visitar</a>
                </div>
            </div>

            <div class="carousel-item position-relative">
                <img src="{{ asset('img/carrossel2.png') }}" class="d-block w-100 gray-image" alt="Slide 2">
                <div class="carousel-overlay"></div>
                <div class="carousel-caption custom-caption">
                    <h3>Conheça os nossos departamentos</h3>
                    <a href="{{ route('departamento') }}" class="btn btn-danger mt-3">Visitar</a>
                </div>
            </div>
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>


<br><br><br>

<footer class="footer text-white py-4" style="background-color: rgb(119, 0, 0);">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-3">
                <h5>Endereço</h5>
                <p>Avenida Águia de Haia, 2.633 - Cidade AE Carvalho - São Paulo/SP - CEP: 03694-000</p>
            </div>
            <div class="col-md-3">
                <h5>Telefone</h5>
                <p>(11) 2045-4000 / 2045-4016</p>
            </div>
            <div class="col-md-3">
                <h5>Horário</h5>
                <p><i class="bi bi-clock"></i> Seg. a Sex. das 09h às 21h</p>
            </div>
            <div class="col-md-3 text-end">
                <img src="{{ asset('img/sp.png') }}" class="footer-img">
            </div>
        </div>
    </div>
</footer>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
