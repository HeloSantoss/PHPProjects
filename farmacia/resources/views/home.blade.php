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
            background-color: #f7f3dd;
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
        .image-row {
    display: flex;
    justify-content: center;
    align-items: center;
}

.image-container {
    text-align: center;
}

.image-container img {
    width: 150px;
    height: 150px;
    object-fit: cover;
    border-radius: 50%;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease;
}

.image-container img:hover {
    transform: scale(1.1);
}

.image-container p {
    margin-top: 10px;
    font-weight: bold;
    color: #3271b4;
}
#circular-images {
    background-color: #54a7ec; /* Exemplo de cor de fundo */
}


    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="https://drogal.vtexassets.com/assets/vtex.file-manager-graphql/images/33ca501c-59e1-4303-84c1-22e888a20fd2___dab900e693b1bd611be04cf94abe4c65.svg" alt="Farmácia Drogal">
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
    <header class="jumbotron text-center">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://drogal.vtexassets.com/assets/vtex.file-manager-graphql/images/a81563d6-453d-46fc-8b97-efcd5c53fc54___8f03442dbc43c3b352199391c40b43e0.png" class="d-block w-100" alt="Imagem 1">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Bem-vindo à Farmácia Drogal</h5>
                        <p>Gerencie seus clientes, produtos e vendas de forma fácil e eficiente.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="https://drogal.vtexassets.com/assets/vtex.file-manager-graphql/images/9b178a1e-2a7a-4f96-a0f8-d055635f9ac2___d1d6d4d42761311893bf9b209532530c.webp" class="d-block w-100" alt="Imagem 2">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Conheça nossos clientes</h5>
                        <p>Veja como estamos ajudando nossos clientes a melhorar sua saúde.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="https://drogal.vtexassets.com/assets/vtex.file-manager-graphql/images/a3944cb5-1c6c-4206-9b85-c02fccd02f64___2f03b7e2e77975832808ed995f4ac69b.png" class="d-block w-100" alt="Imagem 3">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Nossos Produtos</h5>
                        <p>Produtos de qualidade para atender às suas necessidades.</p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Anterior</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Próximo</span>
            </a>
        </div>
    </header>
    

    <!-- Seção de Imagens Circulares -->
<section id="circular-images" class="py-5 text-center">
    <div class="container">
        <h2 class="section-title">Nossa Equipe</h2>
        <div class="image-row d-flex justify-content-center">
            <div class="image-container mx-2">
                <img src="https://i.pinimg.com/564x/d2/10/13/d210133be013456c6fc2819440141f6a.jpg" alt="Membro da Equipe" class="rounded-circle">
                <p>Nome 1</p>
            </div>
            <div class="image-container mx-2">
                <img src="https://i.pinimg.com/564x/1b/9d/9c/1b9d9cb414f8b355728fa9c45fc16be2.jpg" alt="Membro da Equipe" class="rounded-circle">
                <p>Nome 2</p>
            </div>
            <div class="image-container mx-2">
                <img src="https://i.pinimg.com/564x/37/f5/a5/37f5a53401f9cdcd719c210068fdad8c.jpg" alt="Membro da Equipe" class="rounded-circle">
                <p>Nome 3</p>
            </div>
            <div class="image-container mx-2">
                <img src="https://i.pinimg.com/564x/37/f5/a5/37f5a53401f9cdcd719c210068fdad8c.jpg" alt="Membro da Equipe" class="rounded-circle">
                <p>Nome 3</p>
            </div>
            <div class="image-container mx-2">
                <img src="https://i.pinimg.com/564x/37/f5/a5/37f5a53401f9cdcd719c210068fdad8c.jpg" alt="Membro da Equipe" class="rounded-circle">
                <p>Nome 3</p>
            </div>
            <div class="image-container mx-2">
                <img src="https://i.pinimg.com/564x/37/f5/a5/37f5a53401f9cdcd719c210068fdad8c.jpg" alt="Membro da Equipe" class="rounded-circle">
                <p>Nome 3</p>
            </div>
        </div>
    </div>
</section>

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
                            <h5 class="card-title">Realizar Venda</h5>
                            <p class="card-text">Cliente: Nome do Cliente</p>
                            <p class="card-text">Produto: Nome do Produto</p>
                            <a href="{{ route('sales.index') }}" class="btn btn-primary">Ver todas as vendas</a>
                        </div>
                    </div>
                </div>
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
