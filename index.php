<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SEIWEB - Sistema de Gestão Escolar 100% SAAS</title>
    
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- CSS Customizado -->
    <style>
        :root {
            --primary-color: #3498db;
            --secondary-color: #2c3e50;
            --accent-color: #e74c3c;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            overflow-x: hidden;
        }
        
        .navbar {
            background-color: var(--secondary-color) !important;
            padding: 15px 0;
            transition: all 0.3s;
        }
        
        .navbar.scrolled {
            padding: 10px 0;
            box-shadow: 0 5px 10px rgba(0,0,0,0.1);
        }
        
        .hero-section {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: white;
            padding: 100px 0;
            position: relative;
            overflow: hidden;
        }
        
        .hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('https://images.unsplash.com/photo-1588072432836-e10032774350?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80') no-repeat center center/cover;
            opacity: 0.2;
            z-index: 0;
        }
        
        .hero-content {
            position: relative;
            z-index: 1;
        }
        
        .btn-primary {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
            padding: 10px 25px;
            border-radius: 30px;
            font-weight: 600;
        }
        
        .btn-primary:hover {
            background-color: #2980b9;
            border-color: #2980b9;
        }
        
        .feature-icon {
            font-size: 2.5rem;
            color: var(--primary-color);
            margin-bottom: 20px;
        }
        
        .service-card {
            border: none;
            border-radius: 10px;
            overflow: hidden;
            transition: all 0.3s;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            margin-bottom: 30px;
        }
        
        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.2);
        }
        
        .testimonial-card {
            background-color: #f8f9fa;
            border-radius: 10px;
            padding: 30px;
            margin-bottom: 30px;
        }
        
        .testimonial-img {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            object-fit: cover;
            border: 3px solid var(--primary-color);
        }
        
        .contact-section {
            background-color: var(--secondary-color);
            color: white;
            padding: 80px 0;
        }
        
        .contact-form .form-control {
            background-color: rgba(255,255,255,0.1);
            border: none;
            color: white;
            padding: 15px;
            margin-bottom: 20px;
            border-radius: 5px;
        }
        
        .contact-form .form-control::placeholder {
            color: rgba(255,255,255,0.7);
        }
        
        footer {
            background-color: #1a252f;
            color: white;
            padding: 30px 0;
        }
        
        .social-icon {
            color: white;
            font-size: 1.5rem;
            margin: 0 10px;
            transition: all 0.3s;
        }
        
        .social-icon:hover {
            color: var(--primary-color);
            transform: translateY(-5px);
        }
        
        /* Botão flutuante do WhatsApp */
        .whatsapp-float {
            position: fixed;
            bottom: 30px;
            right: 30px;
            width: 60px;
            height: 60px;
            background-color: #25D366;
            color: #FFF;
            border-radius: 50%;
            text-align: center;
            font-size: 30px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.3);
            z-index: 100;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s;
            animation: pulse 2s infinite;
        }
        
        .whatsapp-float:hover {
            background-color: #128C7E;
            transform: scale(1.1);
            text-decoration: none;
            color: #FFF;
        }
        
        @keyframes pulse {
            0% {
                box-shadow: 0 0 0 0 rgba(37, 211, 102, 0.7);
            }
            70% {
                box-shadow: 0 0 0 15px rgba(37, 211, 102, 0);
            }
            100% {
                box-shadow: 0 0 0 0 rgba(37, 211, 102, 0);
            }
        }
        
        /* Badge SAAS */
        .saas-badge {
            position: absolute;
            top: 20px;
            right: 20px;
            background-color: #e74c3c;
            color: white;
            padding: 5px 15px;
            border-radius: 30px;
            font-weight: bold;
            font-size: 14px;
            box-shadow: 0 3px 10px rgba(0,0,0,0.2);
        }
        
        /* Seção SAAS */
        .saas-section {
            background-color: #f8f9fa;
            padding: 80px 0;
        }
        
        .saas-icon {
            font-size: 3rem;
            color: var(--primary-color);
            margin-bottom: 20px;
        }

        /* CAPTCHA Styles */
        .captcha-container {
            background-color: #f8f9fa;
            padding: 15px;
            border-radius: 5px;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .captcha-code {
            font-size: 24px;
            font-weight: bold;
            letter-spacing: 5px;
            color: var(--secondary-color);
            background: #e9ecef;
            padding: 5px 15px;
            border-radius: 5px;
            user-select: none;
        }

        .captcha-refresh {
            cursor: pointer;
            color: var(--primary-color);
            transition: all 0.3s;
        }

        .captcha-refresh:hover {
            transform: rotate(90deg);
        }

        .captcha-input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ced4da;
            border-radius: 5px;
            margin-bottom: 15px;
        }
    </style>
</head>
<body data-bs-spy="scroll" data-bs-target=".navbar">
    <!-- Botão Flutuante WhatsApp -->
    <a href="https://api.whatsapp.com/send?phone=5511999999999&text=Olá,%20gostaria%20de%20saber%20mais%20sobre%20o%20SEIWEB" class="whatsapp-float" target="_blank">
        <i class="fab fa-whatsapp"></i>
    </a>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <i class="fas fa-graduation-cap me-2"></i>SEIWEB
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#home">Início</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#saas">100% SAAS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#servicos">Serviços</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#depoimentos">Depoimentos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contato">Contato</a>
                    </li>
                </ul>
                <a href="#contato" class="btn btn-primary ms-lg-3">Demonstração</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="hero-section">
        <div class="container hero-content">
            <div class="position-relative">
                <span class="saas-badge animate__animated animate__pulse animate__infinite">SISTEMA 100% SAAS</span>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-6 animate__animated animate__fadeInLeft">
                    <h1 class="display-4 fw-bold mb-4">Transforme sua escola com o SEIWEB</h1>
                    <p class="lead mb-4">O sistema de gestão escolar mais completo do mercado, com todas as ferramentas necessárias para administrar sua instituição de ensino com eficiência e transparência.</p>
                    <div class="d-flex gap-3">
                        <a href="#servicos" class="btn btn-primary btn-lg">Conheça nossos serviços</a>
                        <a href="#contato" class="btn btn-outline-light btn-lg">Solicitar demonstração</a>
                    </div>
                </div>
                <!--<div class="col-lg-6 animate__animated animate__fadeInRight">
                    <img src="https://images.unsplash.com/photo-1588072432836-e10032774350?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Dashboard SEIWEB" class="img-fluid rounded shadow">
                </div>-->
            </div>
        </div>
    </section>

    <!-- SAAS Section -->
    <section id="saas" class="saas-section">
        <div class="container">
            <div class="row text-center mb-5">
                <div class="col-12">
                    <h2 class="fw-bold">Sistema 100% SAAS</h2>
                    <p class="text-muted">Todas as vantagens da tecnologia em nuvem para sua escola</p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-md-4 animate__animated animate__fadeInUp">
                    <div class="text-center p-4">
                        <div class="saas-icon">
                            <i class="fas fa-cloud"></i>
                        </div>
                        <h4>Acesso em Qualquer Lugar</h4>
                        <p class="text-muted">Acesse o sistema de qualquer dispositivo com internet, sem necessidade de instalação ou servidores locais.</p>
                    </div>
                </div>
                <div class="col-md-4 animate__animated animate__fadeInUp" data-wow-delay="0.1s">
                    <div class="text-center p-4">
                        <div class="saas-icon">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <h4>Segurança de Dados</h4>
                        <p class="text-muted">Seus dados protegidos em servidores de alta disponibilidade com backups automáticos e criptografia.</p>
                    </div>
                </div>
                <div class="col-md-4 animate__animated animate__fadeInUp" data-wow-delay="0.2s">
                    <div class="text-center p-4">
                        <div class="saas-icon">
                            <i class="fas fa-sync-alt"></i>
                        </div>
                        <h4>Atualizações Automáticas</h4>
                        <p class="text-muted">Sempre com a versão mais recente do sistema, sem custos adicionais ou necessidade de intervenção.</p>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-12 text-center">
                    <div class="p-4 bg-white rounded shadow-sm">
                        <h4 class="fw-bold">Por que escolher um sistema SAAS?</h4>
                        <p class="mb-0">O SEIWEB como serviço (SAAS) elimina a necessidade de investimentos em infraestrutura de TI, reduz custos operacionais e garante que sua escola sempre tenha acesso às funcionalidades mais modernas do mercado, com toda a segurança e disponibilidade que você precisa.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row text-center mb-5">
                <div class="col-12">
                    <h2 class="fw-bold">Por que escolher o SEIWEB?</h2>
                    <p class="text-muted">Tudo o que sua escola precisa em um único sistema</p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-md-4 animate__animated animate__fadeInUp" data-wow-delay="0.1s">
                    <div class="text-center p-4">
                        <div class="feature-icon">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <h4>Gestão Acadêmica</h4>
                        <p class="text-muted">Controle completo de matrículas, turmas, notas e frequência dos alunos.</p>
                    </div>
                </div>
                <div class="col-md-4 animate__animated animate__fadeInUp" data-wow-delay="0.2s">
                    <div class="text-center p-4">
                        <div class="feature-icon">
                            <i class="fas fa-dollar-sign"></i>
                        </div>
                        <h4>Financeiro Integrado</h4>
                        <p class="text-muted">Emissão de boletos, controle de recebimentos e relatórios financeiros.</p>
                    </div>
                </div>
                <div class="col-md-4 animate__animated animate__fadeInUp" data-wow-delay="0.3s">
                    <div class="text-center p-4">
                        <div class="feature-icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <h4>Portal do Aluno</h4>
                        <p class="text-muted">Acesso online para alunos e responsáveis com notas, boletos e comunicados.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Serviços Section -->
    <section id="servicos" class="py-5">
        <div class="container">
            <div class="row text-center mb-5">
                <div class="col-12">
                    <h2 class="fw-bold">Nossos Serviços</h2>
                    <p class="text-muted">Soluções completas para sua instituição de ensino</p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 animate__animated animate__fadeIn">
                    <div class="service-card card h-100">
                        <img src="https://images.unsplash.com/photo-1523050854058-8df90110c9f1?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" class="card-img-top" alt="Gestão Acadêmica">
                        <div class="card-body">
                            <h5 class="card-title">Gestão Acadêmica</h5>
                            <p class="card-text">Controle completo do dia a dia escolar com cadastro de alunos, professores, turmas, disciplinas, horários e muito mais.</p>
                            <ul class="list-unstyled">
                                <li><i class="fas fa-check text-success me-2"></i> Controle de matrículas</li>
                                <li><i class="fas fa-check text-success me-2"></i> Diário de classe digital</li>
                                <li><i class="fas fa-check text-success me-2"></i> Histórico escolar</li>
                                <li><i class="fas fa-check text-success me-2"></i> Correção eletrônica de provas</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 animate__animated animate__fadeIn" data-wow-delay="0.1s">
                    <div class="service-card card h-100">
                        <img src="https://images.unsplash.com/photo-1450101499163-c8848c66ca85?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" class="card-img-top" alt="Gestão Financeira">
                        <div class="card-body">
                            <h5 class="card-title">Gestão Financeira</h5>
                            <p class="card-text">Sistema completo para administrar todas as movimentações financeiras da sua instituição de ensino.</p>
                            <ul class="list-unstyled">
                                <li><i class="fas fa-check text-success me-2"></i> Emissão de boletos</li>
                                <li><i class="fas fa-check text-success me-2"></i> Controle de recebimentos</li>
                                <li><i class="fas fa-check text-success me-2"></i> Relatórios financeiros</li>
                                <li><i class="fas fa-check text-success me-2"></i> Integração com bancos</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 animate__animated animate__fadeIn" data-wow-delay="0.2s">
                    <div class="service-card card h-100">
                        <img src="https://images.unsplash.com/photo-1521791136064-7986c2920216?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" class="card-img-top" alt="Portal do Aluno">
                        <div class="card-body">
                            <h5 class="card-title">Tecnologia e Integração</h5>
                            <p class="card-text">Soluções tecnológicas avançadas para modernizar sua instituição de ensino.</p>
                            <ul class="list-unstyled">
                                <li><i class="fas fa-check text-success me-2"></i> Integração com catracas</li>
                                <li><i class="fas fa-check text-success me-2"></i> Importação para o Educacenso</li>
                                <li><i class="fas fa-check text-success me-2"></i> Biometria facial</li>
                                <li><i class="fas fa-check text-success me-2"></i> APP para pais e alunos</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Depoimentos Section -->
    <section id="depoimentos" class="py-5 bg-light">
        <div class="container">
            <div class="row text-center mb-5">
                <div class="col-12">
                    <h2 class="fw-bold">Depoimentos</h2>
                    <p class="text-muted">O que nossos clientes dizem sobre o SEIWEB</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 animate__animated animate__fadeIn">
                    <div class="testimonial-card">
                        <div class="d-flex align-items-center mb-4">
                            <img src="https://randomuser.me/api/portraits/women/32.jpg" alt="Depoimento 1" class="testimonial-img me-3">
                            <div>
                                <h5 class="mb-0">Maria Silva</h5>
                                <p class="text-muted mb-0">Diretora - Colégio Santa Maria</p>
                            </div>
                        </div>
                        <p class="mb-0">"O SEIWEB transformou completamente a gestão da nossa escola. Agora temos tudo organizado em um único sistema, com relatórios precisos e acesso fácil para toda a equipe."</p>
                        <div class="mt-3 text-warning">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 animate__animated animate__fadeIn" data-wow-delay="0.1s">
                    <div class="testimonial-card">
                        <div class="d-flex align-items-center mb-4">
                            <img src="https://randomuser.me/api/portraits/men/45.jpg" alt="Depoimento 2" class="testimonial-img me-3">
                            <div>
                                <h5 class="mb-0">Carlos Oliveira</h5>
                                <p class="text-muted mb-0">Coordenador - Escola Técnica ABC</p>
                            </div>
                        </div>
                        <p class="mb-0">"A implantação do SEIWEB foi simples e o suporte excelente. O sistema atende todas as nossas necessidades e ainda descobrimos funcionalidades que nem sabíamos que precisávamos!"</p>
                        <div class="mt-3 text-warning">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 animate__animated animate__fadeIn" data-wow-delay="0.2s">
                    <div class="testimonial-card">
                        <div class="d-flex align-items-center mb-4">
                            <img src="https://randomuser.me/api/portraits/women/68.jpg" alt="Depoimento 3" class="testimonial-img me-3">
                            <div>
                                <h5 class="mb-0">Ana Paula Santos</h5>
                                <p class="text-muted mb-0">Secretária - Instituto Educar</p>
                            </div>
                        </div>
                        <p class="mb-0">"O módulo de correção eletrônica de provas reduziu nosso tempo de trabalho pela metade. E a integração com o Educacenso é perfeita - exportamos todos os dados com um clique!"</p>
                        <div class="mt-3 text-warning">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contato Section -->
    <section id="contato" class="contact-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 animate__animated animate__fadeInLeft">
                    <h2 class="fw-bold mb-4">Entre em contato</h2>
                    <p class="mb-5">Solicite uma demonstração ou tire suas dúvidas sobre o SEIWEB. Nossa equipe está pronta para ajudar!</p>
                    
                    <div class="mb-4">
                        <h5><i class="fas fa-map-marker-alt me-3"></i> Endereço</h5>
                        <p>Av. Paulista, 1000 - São Paulo/SP</p>
                    </div>
                    
                    <div class="mb-4">
                        <h5><i class="fas fa-phone me-3"></i> Telefone</h5>
                        <p>(11) 1234-5678</p>
                    </div>
                    
                    <div class="mb-4">
                        <h5><i class="fas fa-envelope me-3"></i> Email</h5>
                        <p>contato@seiweb.com.br</p>
                    </div>
                    
                    <div class="mb-4">
                        <h5><i class="fas fa-clock me-3"></i> Horário de atendimento</h5>
                        <p>Segunda a Sexta: 8h às 18h</p>
                    </div>
                </div>
                <div class="col-lg-6 animate__animated animate__fadeInRight">
                    <form class="contact-form" id="newsletterForm">
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" class="form-control" placeholder="Seu nome" required>
                            </div>
                            <div class="col-md-6">
                                <input type="email" class="form-control" placeholder="Seu email" required>
                            </div>
                        </div>
                        <input type="text" class="form-control" placeholder="Assunto">
                        <textarea class="form-control" rows="5" placeholder="Sua mensagem" required></textarea>
                        
                        <!-- CAPTCHA Section -->
                        <div class="captcha-container mt-3">
                            <div class="captcha-code" id="captchaText"></div>
                            <div class="captcha-refresh" onclick="generateCaptcha()">
                                <i class="fas fa-sync-alt"></i>
                            </div>
                        </div>
                        <input type="text" class="captcha-input form-control" id="captchaInput" placeholder="Digite o código acima" required>
                        
                        <button type="submit" class="btn btn-primary w-100">Enviar mensagem</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="text-center">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <a href="#" class="navbar-brand mb-3 d-inline-block">
                        <i class="fas fa-graduation-cap me-2"></i>SEIWEB
                    </a>
                    <p class="mb-4">O sistema de gestão escolar mais completo do mercado</p>
                    
                    <div class="mb-4">
                        <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-youtube"></i></a>
                    </div>
                    
                    <p class="mb-0">&copy; 2023 SEIWEB. Todos os direitos reservados.</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap 5 JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Custom JS -->
    <script>
        // Navbar scroll effect
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });
        
        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
        
        // Animation on scroll
        function animateOnScroll() {
            const elements = document.querySelectorAll('.animate__animated');
            
            elements.forEach(element => {
                const elementPosition = element.getBoundingClientRect().top;
                const screenPosition = window.innerHeight / 1.3;
                
                if (elementPosition < screenPosition) {
                    const animationClass = element.classList[1];
                    element.classList.add(animationClass);
                }
            });
        }
        
        // CAPTCHA Functionality
        function generateCaptcha() {
            // Generate a random 5-digit number
            const captcha = Math.floor(10000 + Math.random() * 90000);
            document.getElementById('captchaText').textContent = captcha;
            return captcha;
        }

        // Initialize CAPTCHA on page load
        let currentCaptcha = generateCaptcha();

        // Form validation with CAPTCHA
        document.getElementById('newsletterForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            const userInput = document.getElementById('captchaInput').value;
            
            if(userInput == currentCaptcha) {
                // CAPTCHA is correct - proceed with form submission
                alert('Formulário enviado com sucesso!');
                this.reset();
                currentCaptcha = generateCaptcha(); // Generate new CAPTCHA after submission
            } else {
                // CAPTCHA is incorrect
                alert('Código CAPTCHA incorreto. Por favor, tente novamente.');
                document.getElementById('captchaInput').value = '';
                currentCaptcha = generateCaptcha(); // Generate new CAPTCHA on failure
            }
        });

        window.addEventListener('scroll', animateOnScroll);
        window.addEventListener('load', animateOnScroll);
    </script>
</body>
</html>