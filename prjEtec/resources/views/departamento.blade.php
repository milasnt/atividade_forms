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

<div class="container py-5">
    <h2 class="text-center mb-4">Departamentos</h2>
    <div class="row g-4">
        <div class="col-md-4">
            <div class="card course-card p-3">
                <div class="card-body">
                    <h5 class="card-title">Secretaria Acadêmica</h5>
                    <p class="card-text">Responsável por registros escolares, históricos, matrículas e documentação acadêmica.</p>
                    <a href="#" class="btn btn-vinho">Ir</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card course-card p-3">
                <div class="card-body">
                    <h5 class="card-title">Coordenação de Cursos</h5>
                    <p class="card-text">Acompanha o desempenho dos cursos, alunos e professores, garantindo a qualidade do ensino.</p>
                    <a href="#" class="btn btn-vinho">Ir</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card course-card p-3">
                <div class="card-body">
                    <h5 class="card-title">Direção</h5>
                    <p class="card-text">Administra a unidade escolar e coordena todos os setores para garantir o bom funcionamento.</p>
                    <a href="#" class="btn btn-vinho">Ir</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card course-card p-3">
                <div class="card-body">
                    <h5 class="card-title">Coordenação Pedagógica</h5>
                    <p class="card-text">Planeja, orienta e acompanha práticas pedagógicas em conjunto com docentes e alunos.</p>
                    <a href="#" class="btn btn-vinho">Ir</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card course-card p-3">
                <div class="card-body">
                    <h5 class="card-title">APM</h5>
                    <p class="card-text">A Associação de Pais e Mestres (APM) apoia a escola na melhoria do ensino e da infraestrutura. Promove a integração entre família e escola, além de colaborar com atividades pedagógicas e culturais. Atua de forma participativa e sem fins lucrativos.</p>
                    <a href="#" class="btn btn-vinho">Ir</a>
                </div>
            </div>
        </div>
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
