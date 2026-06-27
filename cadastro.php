<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CopaGear | Cadastro de Cliente</title>
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

        /* CONTAINER DE CADASTRO */
        .register-container {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 40px 20px;
        }

        .register-card {
            background-color: #111827;
            border: 1px solid #1f2937;
            border-radius: 10px;
            width: 100%;
            max-width: 450px;
            padding: 40px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.5);
        }

        .register-card h2 {
            font-size: 28px;
            text-transform: uppercase;
            text-align: center;
            margin-bottom: 10px;
        }

        .register-card h2 span {
            color: #eab308;
        }

        .register-card p {
            color: #9ca3af;
            text-align: center;
            font-size: 14px;
            margin-bottom: 30px;
        }

        /* FORMULÁRIO */
        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            font-size: 14px;
            color: #d1d5db;
            margin-bottom: 8px;
            font-weight: 500;
        }

        .form-group input {
            width: 100%;
            padding: 12px 16px;
            background-color: #1f2937;
            border: 1px solid #374151;
            border-radius: 6px;
            color: #ffffff;
            font-size: 15px;
            outline: none;
            transition: border-color 0.3s;
        }

        .form-group input:focus {
            border-color: #eab308;
        }

        /* TERMOS E POLÍTICAS */
        .terms {
            display: flex;
            align-items: flex-start;
            gap: 10px;
            margin-bottom: 25px;
            cursor: pointer;
        }

        .terms input {
            accent-color: #eab308;
            margin-top: 3px;
        }

        .terms span {
            font-size: 13px;
            color: #9ca3af;
            line-height: 1.4;
        }

        /* BOTÃO */
        .btn-register {
            width: 100%;
            background-color: #eab308;
            color: #0b0f19;
            border: none;
            padding: 14px;
            font-size: 16px;
            font-weight: bold;
            border-radius: 6px;
            text-transform: uppercase;
            cursor: pointer;
            transition: background 0.3s, transform 0.2s;
        }

        .btn-register:hover {
            background-color: #ca8a04;
        }

        .btn-register:active {
            transform: scale(0.98);
        }

        /* LINK DE LOGIN */
        .login-link {
            text-align: center;
            margin-top: 25px;
            font-size: 14px;
            color: #9ca3af;
        }

        .login-link a {
            color: #eab308;
            text-decoration: none;
            font-weight: bold;
        }

        .login-link a:hover {
            text-decoration: underline;
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

        /* RESPONSIVIDADE */
        @media (max-width: 480px) {
            .register-card {
                padding: 25px 20px;
            }
            .navbar {
                flex-direction: column;
                gap: 15px;
            }
        }
    </style>
</head>
<body>

    <!-- CABEÇALHO -->
    <header class="navbar">
        <a href="index.html" class="logo">Copa<span>Gear</span></a>
        <nav class="menu">
            <a href="index.html">Início</a>
            <a href="index.html#produtos">Seleções</a>
            <a href="#">Contato</a>
        </nav>
    </header>

    <!-- ÁREA DE CADASTRO -->
    <div class="register-container">
        <div class="register-card">
            <h2>Criar <span>Conta</span></h2>
            <p>Cadastre-se para acompanhar seus pedidos de mantos.</p>

            <form id="formCadastro">
                <!-- Campo Nome -->
                <div class="form-group">
                    <label for="name">Nome Completo</label>
                    <input type="text" id="name" placeholder="Digite seu nome" required>
                </div>

                <!-- Campo E-mail -->
                <div class="form-group">
                    <label for="email">E-mail</label>
                    <input type="email" id="email" placeholder="seu@email.com" required>
                </div>

                <!-- Campo Senha -->
                <div class="form-group">
                    <label for="password">Senha</label>
                    <input type="password" id="password" placeholder="Crie uma senha forte" required>
                </div>

                <!-- Campo Confirmar Senha -->
                <div class="form-group">
                    <label for="confirm-password">Confirmar Senha</label>
                    <input type="password" id="confirm-password" placeholder="Repita a senha" required>
                </div>

                <!-- Termos de Uso -->
                <label class="terms">
                    <input type="checkbox" required>
                    <span>Aceito os Termos de Serviço e as Políticas de Privacidade da loja.</span>
                </label>

                <!-- Botão de Envio -->
                <button type="submit" class="btn-register">Finalizar Cadastro</button>
            </form>

            <!-- Link Alternativo -->
            <div class="login-link">
                Já tem uma conta? <a href="#">Fazer Login</a>
            </div>
        </div>
    </div>

    <!-- RODAPÉ -->
    <footer>
        <p>&copy; 2026 CopaGear - Todos os direitos reservados.</p>
    </footer>

    <script>
        // Validação simples de senhas iguais antes do envio
        document.getElementById('formCadastro').addEventListener('submit', function(event) {
            const password = document.getElementById('password').value;
            const confirmPassword = document.getElementById('confirm-password').value;

            if (password !== confirmPassword) {
                event.preventDefault();
                alert('As senhas não coincidem! Por favor, digite a mesma senha nos dois campos.');
            }
        });
    </script>

</body>
</html>
