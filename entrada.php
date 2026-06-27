<?php













?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CopaGear | Identificação</title>
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
            display: flex;
            flex-direction: column;
            min-height: 100vh;
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
            width: 100%;
        }

        .logo {
            font-size: 24px;
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: 1px;
            text-decoration: none;
            color: #ffffff;
        }

        .logo span {
            color: #eab308; /* Dourado Copa */
        }

        /* CONTAINER CENTRAL */
        .gateway-container {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 40px 20px;
        }

        .gateway-card {
            background-color: #111827;
            border: 1px solid #1f2937;
            border-radius: 10px;
            width: 100%;
            max-width: 450px;
            padding: 40px;
            text-align: center;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.5);
        }

        .gateway-card h2 {
            font-size: 26px;
            text-transform: uppercase;
            margin-bottom: 10px;
        }

        .gateway-card h2 span {
            color: #eab308;
        }

        .gateway-card p {
            color: #9ca3af;
            font-size: 15px;
            margin-bottom: 35px;
            line-height: 1.5;
        }

        /* BOTÕES DE DIRECIONAMENTO */
        .btn-group {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .btn-choice {
            display: block;
            width: 100%;
            padding: 15px;
            font-size: 16px;
            font-weight: bold;
            text-transform: uppercase;
            text-decoration: none;
            border-radius: 6px;
            transition: all 0.3s ease;
            text-align: center;
        }

        /* Botão Login (Destaque Principal) */
        .btn-login {
            background-color: #eab308;
            color: #0b0f19;
            border: none;
        }

        .btn-login:hover {
            background-color: #ca8a04;
            transform: translateY(-2px);
        }

        /* Botão Cadastro (Destaque Secundário) */
        .btn-register {
            background-color: transparent;
            color: #eab308;
            border: 2px solid #eab308;
        }

        .btn-register:hover {
            background-color: rgba(234, 179, 8, 0.1);
            transform: translateY(-2px);
        }

        /* LINK DE RETORNO */
        .back-link {
            display: inline-block;
            margin-top: 30px;
            color: #6b7280;
            text-decoration: none;
            font-size: 14px;
            transition: color 0.3s;
        }

        .back-link:hover {
            color: #eab308;
        }

        /* RODAPÉ */
        footer {
            text-align: center;
            padding: 25px 20px;
            background-color: #111827;
            border-top: 1px solid #1f2937;
            color: #6b7280;
            font-size: 14px;
        }
    </style>
</head>
<body>

    <!-- CABEÇALHO SIMPLIFICADO -->
    <header class="navbar">
        <a href="index.html" class="logo">Copa<span>Gear</span></a>
    </header>

    <!-- ÁREA DE ESCOLHA -->
    <div class="gateway-container">
        <div class="gateway-card">
            <h2>Bem-vindo ao <span>Mundo da Copa</span></h2>
            <p>Para gerenciar seus mantos, acompanhar envios e finalizar compras mais rápido, escolha uma das opções abaixo:</p>

            <div class="btn-group">
                <!-- Direciona para a tela de Login -->
                <a href="login.php" class="btn-choice btn-login">Já tenho conta (Login)</a>
                
                <!-- Direciona para a tela de Cadastro -->
                <a href="cadastro.php" class="btn-choice btn-register">Quero me cadastrar</a>
            </div>

            <!-- Link para voltar à vitrine -->
            <a href="index.html" class="back-link">← Voltar para a loja</a>
        </div>
    </div>

    <!-- RODAPÉ -->
    <footer>
        <p>&copy; 2026 CopaGear - Todos os direitos reservados.</p>
    </footer>

</body>
</html>

