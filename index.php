<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CopaGear | Mantos da Copa</title>
    <style>
        /* RESET DE ESTILOS */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background-color: #0b0f19;
            color: #ffffff;
        }

        /* NAVBAR */
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 5%;
            background-color: #111827;
            border-bottom: 2px solid #1f2937;
            position: sticky;
            top: 0;
            z-index: 100;
        }

        .logo {
            font-size: 24px;
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .logo span {
            color: #eab308; /* Dourado Copa */
        }

        .menu a {
            color: #9ca3af;
            text-decoration: none;
            margin: 0 15px;
            font-weight: 500;
            transition: color 0.3s;
        }

        .menu a:hover {
            color: #eab308;
        }

        .cart-icon {
            font-size: 20px;
            cursor: pointer;
            position: relative;
        }

        .cart-count {
            background-color: #ef4444;
            color: white;
            font-size: 12px;
            padding: 2px 6px;
            border-radius: 50%;
            position: absolute;
            top: -8px;
            right: -10px;
        }

        /* HERO BANNER */
        .hero {
            background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(11, 15, 25, 1)), 
                        url('https://unsplash.com') no-repeat center center/cover;
            height: 60vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            padding: 0 20px;
        }

        .hero-content h2 {
            font-size: 42px;
            margin-bottom: 15px;
            text-transform: uppercase;
        }

        .hero-content p {
            font-size: 18px;
            color: #d1d5db;
            margin-bottom: 30px;
        }

        .btn-hero {
            background-color: #eab308;
            color: #0b0f19;
            padding: 12px 30px;
            text-decoration: none;
            font-weight: bold;
            border-radius: 5px;
            text-transform: uppercase;
            transition: transform 0.3s, background 0.3s;
        }

        .btn-hero:hover {
            background-color: #ca8a04;
            transform: scale(1.05);
        }

        /* PRODUTOS */
        .container {
            max-width: 1200px;
            margin: 60px auto;
            padding: 0 20px;
        }

        .section-title {
            font-size: 28px;
            margin-bottom: 40px;
            text-align: center;
            text-transform: uppercase;
            border-bottom: 2px solid #eab308;
            display: inline-block;
            padding-bottom: 5px;
        }

        .products-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
        }

        .product-card {
            background-color: #111827;
            border-radius: 10px;
            overflow: hidden;
            border: 1px solid #1f2937;
            position: relative;
            transition: transform 0.3s;
        }

        .product-card:hover {
            transform: translateY(-5px);
        }

        .product-badge {
            position: absolute;
            top: 10px;
            left: 10px;
            background-color: #10b981;
            color: white;
            font-size: 12px;
            padding: 4px 8px;
            border-radius: 3px;
            font-weight: bold;
        }

        .product-img-placeholder {
            width: 100%;
            height: 250px;
            background: #1b4d3e; /* Cor provisória para o Brasil */
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            font-size: 18px;
            color: rgba(255,255,255,0.7);
        }

        .product-info {
            padding: 20px;
        }

        .product-info h4 {
            font-size: 18px;
            margin-bottom: 10px;
            color: #f3f4f6;
        }

        .price {
            font-size: 22px;
            color: #eab308;
            font-weight: bold;
            margin-bottom: 15px;
        }

        .btn-buy {
            width: 100%;
            background-color: transparent;
            color: #eab308;
            border: 2px solid #eab308;
            padding: 10px;
            font-weight: bold;
            border-radius: 5px;
            cursor: pointer;
            transition: background 0.3s, color 0.3s;
        }

        .btn-buy:hover {
            background-color: #eab308;
            color: #0b0f19;
        }

        /* RODAPÉ */
        footer {
            text-align: center;
            padding: 40px 20px;
            background-color: #111827;
            border-top: 1px solid #1f2937;
            color: #6b7280;
            margin-top: 80px;
        }

        /* RESPONSIVIDADE (CELULARES) */
        @media (max-width: 768px) {
            .navbar {
                flex-direction: column;
                gap: 15px;
            }
            .hero-content h2 {
                font-size: 32px;
            }
        }
    </style>
</head>
<body>

    <!-- CABEÇALHO -->
    <header class="navbar">
        <div class="logo">Copa<span>Gear</span></div>
        <nav class="menu">
            <a href="#">Início</a>
            <a href="#">Seleções</a>
            <a href="#">Lançamentos</a>
            <a href="#">Contato</a>
        </nav>
        <div class="cart-icon">
            🛒 <span class="cart-count">0</span>
        </div>
    </header>

    <!-- BANNER PRINCIPAL -->
    <section class="hero">
        <div class="hero-content">
            <h2>Veste o Manto da Copa</h2>
            <p>As camisas oficiais das maiores seleções do mundo com frete grátis.</p>
            <a href="#produtos" class="btn-hero">Garantir a Minha</a>
        </div>
    </section>

    <!-- SEÇÃO DE PRODUTOS -->
    <main class="container" id="produtos">
        <h3 class="section-title">Camisas em Destaque</h3>
        
        <div class="products-grid">
            <!-- Produto 1 -->
            <div class="product-card">
                <div class="product-badge">Oficial</div>
                <div class="product-img-placeholder">👕 BRASIL HOME</div>
                <div class="product-info">
                    <h4>Camisa Seleção Brasil I</h4>
                    <p class="price">R$ 349,90</p>
                    <button class="btn-buy">Adicionar ao Carrinho</button>
                </div>
            </div>

            <!-- Produto 2 -->
            <div class="product-card">
                <div class="product-badge">Oficial</div>
                <div class="product-img-placeholder" style="background: #2b394a;">👕 ARGENTINA HOME</div>
                <div class="product-info">
                    <h4>Camisa Seleção Argentina I</h4>
                    <p class="price">R$ 349,90</p>
                    <button class="btn-buy">Adicionar ao Carrinho</button>
                </div>
            </div>

            <!-- Produto 3 -->
            <div class="product-card">
                <div class="product-badge">Oficial</div>
                <div class="product-img-placeholder" style="background: #3c2424;">👕 ALEMANHA HOME</div>
                <div class="product-info">
                    <h4>Camisa Seleção Alemanha I</h4>
                    <p class="price">R$ 349,90</p>
                    <button class="btn-buy">Adicionar ao Carrinho</button>
                </div>
            </div>

            <!-- Produto 4 -->
            <div class="product-card">
                <div class="product-badge">Oficial</div>
                <div class="product-img-placeholder" style="background: #1f274a;">👕 FRANÇA HOME</div>
                <div class="product-info">
                    <h4>Camisa Seleção França I</h4>
                    <p class="price">R$ 349,90</p>
                    <button class="btn-buy">Adicionar ao Carrinho</button>
                </div>
            </div>
        </div>
    </main>

    <!-- RODAPÉ -->
    <footer>
        <p>&copy; 2026 CopaGear - Todos os direitos reservados.</p>
    </footer>

</body>
</html>
