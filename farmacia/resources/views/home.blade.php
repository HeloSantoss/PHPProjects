<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Farmácia - Página Inicial</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            padding-top: 56px;
        }
        .navbar {
            background-color: #3271b4;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .navbar-brand img {
            height: 40px;
            margin-right: 10px;
        }
        .navbar-light .navbar-nav .nav-link {
            color: #fff;
        }
        .navbar-light .navbar-nav .nav-link:hover {
            color: #f9faf8;
        }
        .jumbotron {
            background: url('https://source.unsplash.com/1600x900/?pharmacy') no-repeat center center;
            background-size: cover;
            color: #aa0707;
            text-shadow: 0 1px 3px rgba(0, 0, 0, 0.5);
            padding: 4rem 2rem;
        }
        .jumbotron h1, .jumbotron p {
            margin-bottom: 1rem;
        }
        .btn-primary {
            background-color: #1ba4a2;
            border-color: #1ba4a2;
        }
        .btn-primary:hover {
            background-color: #1a8d8a;
            border-color: #1a8d8a;
        }
        .section-title {
            margin-top: 40px;
            margin-bottom: 20px;
            font-weight: bold;
            color: #3271b4;
            border-bottom: 2px solid #3271b4;
            padding-bottom: 10px;
        }
        .card {
            border: none;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }
        .card img {
            max-height: 150px;
            object-fit: cover;
        }
        .card-body {
            padding: 2rem;
        }
        .footer {
            background-color: #3271b4;
            color: #adb5bd;
            padding: 2rem 0;
        }
        .footer a {
            color: #85b3e1;
        }
        .footer a:hover {
            color: #3ae7b3;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="https://via.placeholder.com/40x40" alt="Farmácia Drogal">
                Farmácia Drogal
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#clients">
                            <i class="fas fa-users"></i> Clientes
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#products">
                            <i class="fas fa-pills"></i> Produtos
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#sales">
                            <i class="fas fa-shopping-cart"></i> Vendas
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Jumbotron -->
    <header class="jumbotron text-center">
        <div class="container">
            <h1 class="display-4">Bem-vindo a Farmácia Drogal</h1>
            <p class="lead">Gerencie seus clientes, produtos e vendas de forma fácil e eficiente.</p>
            <a href="#clients" class="btn btn-primary btn-lg">Conheça nossos clientes</a>
        </div>
    </header>

    <!-- Seção de Clientes -->
    <section id="clients" class="py-5">
        <div class="container">
            <h2 class="section-title">Clientes</h2>
            <div class="row">
                <!-- Exemplo de Cliente -->
                <div class="col-md-4">
                    <div class="card mb-4">
                        <img src="https://via.placeholder.com/350x150" class="card-img-top" alt="Cliente">
                        <div class="card-body">
                            <h5 class="card-title">Nome do Cliente</h5>
                            <p class="card-text">Detalhes do Cliente.</p>
                            <a href="{{ route('clients.index') }}" class="btn btn-primary">Ver todos</a>
                        </div>
                    </div>
                </div>
                <!-- Repita para mais clientes -->
            </div>
        </div>
    </section>

    <!-- Seção de Produtos -->
    <section id="products" class="py-5 bg-light">
        <div class="container">
            <h2 class="section-title">Produtos</h2>
            <div class="row">
                <!-- Exemplo de Produto -->
                <div class="col-md-4">
                    <div class="card mb-4">
                        <img src="https://via.placeholder.com/350x150" class="card-img-top" alt="Produto">
                        <div class="card-body">
                            <h5 class="card-title">Nome do Produto</h5>
                            <p class="card-text">Descrição do Produto.</p>
                            <a href="{{ route('products.index') }}" class="btn btn-primary">Ver todos</a>
                        </div>
                    </div>
                </div>
                <!-- Repita para mais produtos -->
            </div>
        </div>
    </section>

    <!-- Seção de Vendas -->
    <section id="sales" class="py-5">
        <div class="container">
            <h2 class="section-title">Vendas</h2>
            <div class="row">
                <!-- Exemplo de Venda -->
                <div class="col-md-4">
                    <div class="card mb-4">
                        <img src="https://via.placeholder.com/350x150" class="card-img-top" alt="Venda">
                        <div class="card-body">
                            <h5 class="card-title">Detalhes da última Venda</h5>
                            <p class="card-text">Cliente: Nome do Cliente</p>
                            <p class="card-text">Produto: Nome do Produto</p>
                            <a href="{{ route('sales.index') }}" class="btn btn-primary">Ver todas as vendas</a>
                        </div>
                    </div>
                </div>
                <!-- Repita para mais vendas -->
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container text-center">
            <small>&copy; 2024 Farmácia Drogal. Todos os direitos reservados.</small>
            <br>
            <a href="#">Política de Privacidade</a> | <a href="#">Termos de Serviço</a>
        </div>
    </footer>

    <!-- JavaScript do Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
