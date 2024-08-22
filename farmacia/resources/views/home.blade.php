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
                        <h5></h5>
                        <p></p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="https://drogal.vtexassets.com/assets/vtex.file-manager-graphql/images/9b178a1e-2a7a-4f96-a0f8-d055635f9ac2___d1d6d4d42761311893bf9b209532530c.webp" class="d-block w-100" alt="Imagem 2">
                    <div class="carousel-caption d-none d-md-block">
                        <h5></h5>
                        <p></p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="https://drogal.vtexassets.com/assets/vtex.file-manager-graphql/images/a3944cb5-1c6c-4206-9b85-c02fccd02f64___2f03b7e2e77975832808ed995f4ac69b.png" class="d-block w-100" alt="Imagem 3">
                    <div class="carousel-caption d-none d-md-block">
                        <h5></h5>
                        <p></p>
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
        <h2 class="section-title">Nossas Redes</h2>
        <div class="image-row d-flex justify-content-center">
            <div class="image-container mx-2">
                <img src="https://i.pinimg.com/564x/c4/d0/4e/c4d04ee6ccf9428f1109cd6b19ff8fd6.jpg" alt="Membro da Equipe" class="rounded-circle">
                <p>WhatsApp</p>
            </div>
            <div class="image-container mx-2">
                <img src="https://i.pinimg.com/564x/4b/a6/d2/4ba6d21d360ca5f9b6145f5b0a51bcc5.jpg" alt="Membro da Equipe" class="rounded-circle">
                <p>Instagram</p>
            </div>
            <div class="image-container mx-2">
                <img src="https://i.pinimg.com/564x/67/b0/e4/67b0e41a844b5013ddaade0a7ac8f794.jpg" alt="Membro da Equipe" class="rounded-circle">
                <p>Facebook</p>
            </div>
            <div class="image-container mx-2">
                <img src="https://i.pinimg.com/564x/a7/8a/d5/a78ad5fb5b797572e0ed8685af84826a.jpg" alt="Membro da Equipe" class="rounded-circle">
                <p>Produtos</p>
            </div>
            <div class="image-container mx-2">
                <img src="https://i.pinimg.com/564x/ea/8f/7b/ea8f7b9719aebad5c0ef3974c981d426.jpg" alt="Membro da Equipe" class="rounded-circle">
                <p>Formas de Pagamento</p>
            </div>
            <div class="image-container mx-2">
                <img src="https://i.pinimg.com/564x/3b/67/a1/3b67a1025a729200196d5fb9d763a480.jpg" alt="Membro da Equipe" class="rounded-circle">
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
                        <img src="https://i.pinimg.com/564x/05/6f/af/056fafb8952d579db4f4869f13996215.jpg"" class="card-img-top" alt="Cliente">
                        <div class="card-body">
                            <h5 class="card-title">Nome do Cliente</h5>
                            <p class="card-text">Detalhes do Cliente.</p>
                            <a href="{{ route('clients.index') }}" class="btn btn-primary">Ver todos</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4">
                        <img src="https://i.pinimg.com/564x/1b/c3/95/1bc395b66817dc5db1c5624b20a1664a.jpg" class="card-img-top" alt="Cliente">
                        <div class="card-body">
                            <h5 class="card-title">Nome do Cliente</h5>
                            <p class="card-text">Detalhes do Cliente.</p>
                            <a href="{{ route('clients.index') }}" class="btn btn-primary">Ver todos</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4">
                        <img src="https://i.pinimg.com/736x/89/d3/06/89d306b353256ab89501554bfb7a1a01.jpg" class="card-img-top" alt="Cliente">
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
                        <img src="https://drogal.vtexassets.com/arquivos/ids/231713-300-300?v=638580911462100000&width=300&height=300&aspect=true" class="card-img-top" alt="Produto">
                        <div class="card-body">
                            <h5 class="card-title">DorFlex Uno</h5>
                            <p class="card-text">Analgésico Dorflex Uno Enxaqueca 1g 20 Comprimidos</p>
                            <a href="{{ route('products.index') }}" class="btn btn-primary">21,30</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4">
                        <img src="https://drogal.vtexassets.com/arquivos/ids/231586-300-300?v=638580906272200000&width=300&height=300&aspect=true" class="card-img-top" alt="Produto">
                        <div class="card-body">
                            <h5 class="card-title">Novalgina</h5>
                            <p class="card-text">Analgésico e Antitérmico Novalgina 1g 10 Comprimidos</p>
                            <a href="{{ route('products.index') }}" class="btn btn-primary">18,39</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4">
                        <img src="https://drogal.vtexassets.com/arquivos/ids/208666-300-300?v=638446548885600000&width=300&height=300&aspect=true" class="card-img-top" alt="Produto">
                        <div class="card-body">
                            <h5 class="card-title">Loratamed</h5>
                            <p class="card-text">Loratamed 10mg 12 Comprimidos</p>
                            <a href="{{ route('products.index') }}" class="btn btn-primary">5,09</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4">
                        <img src="https://drogal.vtexassets.com/arquivos/ids/208994-300-300?v=638542521670200000&width=300&height=300&aspect=true" class="card-img-top" alt="Produto">
                        <div class="card-body">
                            <h5 class="card-title">Dipirona</h5>
                            <p class="card-text">Dipirona Monoidratada 500mg EMS 10 Comprimidos</p>
                            <a href="{{ route('products.index') }}" class="btn btn-primary">3,49</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4">
                        <img src="https://drogal.vtexassets.com/arquivos/ids/221977-300-300?v=638528147253100000&width=300&height=300&aspect=true" class="card-img-top" alt="Produto">
                        <div class="card-body">
                            <h5 class="card-title">Feminis</h5>
                            <p class="card-text">Suplemento Alimentar Feminis 30 Cápsulas Gelatinosas Moles</p>
                            <a href="{{ route('products.index') }}" class="btn btn-primary">122,79</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4">
                        <img src="https://drogal.vtexassets.com/arquivos/ids/186073-300-300?v=638575153166430000&width=300&height=300&aspect=true" class="card-img-top" alt="Produto">
                        <div class="card-body">
                            <h5 class="card-title">Esomeprazol</h5>
                            <p class="card-text">Esomeprazol Magnésico Tri-Hidratado 40mg EMS - 28 Comprimidos Revestidos</p>
                            <a href="{{ route('products.index') }}" class="btn btn-primary">66,69</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4">
                        <img src="https://drogal.vtexassets.com/arquivos/ids/208625-300-300?v=638446342573070000&width=300&height=300&aspect=true" class="card-img-top" alt="Produto">
                        <div class="card-body">
                            <h5 class="card-title">Nevralgex </h5>
                            <p class="card-text">Nevralgex 30 Comprimidos</p>
                            <a href="{{ route('products.index') }}" class="btn btn-primary">10,59</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4">
                        <img src="https://drogal.vtexassets.com/arquivos/ids/209059-300-300?v=638446556890670000&width=300&height=300&aspect=true" class="card-img-top" alt="Produto">
                        <div class="card-body">
                            <h5 class="card-title">Miorrelax</h5>
                            <p class="card-text">Miorrelax 30 Comprimidos Relaxante Muscular</p>
                            <a href="{{ route('products.index') }}" class="btn btn-primary">12,59</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4">
                        <img src="https://drogal.vtexassets.com/arquivos/ids/189911-800-600?v=638387874747630000&width=800&height=600&aspect=true" class="card-img-top" alt="Produto">
                        <div class="card-body">
                            <h5 class="card-title">Nervocalm</h5>
                            <p class="card-text">Nervocalm 250mg 60 Comprimidos</p>
                            <a href="{{ route('products.index') }}" class="btn btn-primary">73,29</a>
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
                        <img src="https://i.pinimg.com/564x/b6/53/e2/b653e272f882e1771cea7b7c547ffd54.jpg" class="card-img-top" alt="Venda">
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
                        <img src="https://i.pinimg.com/564x/1b/c3/95/1bc395b66817dc5db1c5624b20a1664a.jpg" class="card-img-top" alt="Venda">
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
