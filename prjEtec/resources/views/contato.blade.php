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
        <style>
        .top-bar {
            background-color: rgb(119, 0, 0);
            height: 40px;
        }
        .nav-bar {
            background-color: white;
            padding: 20px 0;
        }
        .form-container {
            max-width: 600px;
            margin: 50px auto;
            background:rgb(255, 255, 255);
            padding: 30px;
            
        }
        .btn-vinho {
            background-color: rgb(119, 0, 0);
            color: white;
        }
        .btn-vinho:hover {
            background-color: rgb(100, 0, 0);
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

<div class="container">
    <div class="form-container">
        <h2 class="text-center">Contato</h2>
        <form action="{{ route('contato') }}" method="get">
            <div class="mb-3">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite seu nome" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email"name="email" placeholder="Digite seu email" required>
            </div>
            <div class="mb-3">
                <label for="assunto" class="form-label">Assunto</label>
                <input type="text" class="form-control" id="assunto" name="assunto" placeholder="Digite o assunto" required>
            </div>
            <div class="mb-3">
                <label for="mensagem" class="form-label">Mensagem</label>
                <textarea class="form-control" id="mensagem" rows="5" name="mensagem" placeholder="Digite sua mensagem" required></textarea>
            </div>
            <button type="submit" class="btn btn-vinho w-100">Enviar</button>
        </form>
    </div>
</div>

<br><br><br><br>

<footer class="footer text-white py-4" style="background-color:  rgb(119, 0, 0);">
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
