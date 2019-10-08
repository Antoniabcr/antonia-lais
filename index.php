<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Lanches do Terceirão</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

  <!-- Custom styles for this template -->
  <link href="css/agency.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">Lanches do Terceirão</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav text-uppercase ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#services">Cardápio</a>
          </li>
          <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#form">Cadastrar</a>
            </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#team">Sobre</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Header -->
  <header class="masthead">
    <div class="container">
      <div class="intro-text">
        <div class="intro-lead-in">Seja Bem Vindo(a)!</div>
        <div class="intro-heading text-uppercase">Olá, Cadastre-se e garanta seu lanche.</div>
        <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#form">Cadastre-se</a>
      </div>
    </div>
  </header>

  <!-- Services -->
  <section class="page-section" id="services">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Cardápio</h2>
          <h3 class="section-subheading text-muted">Lanches por apenas R$3,50 e ainda acompanha um copo de suco de 250ml.</h3>
        </div>
      </div>
      <div class="row text-center">
        <div class="col-md-4">
            <img class="mx-auto rounded-circle" src="img/lanches/01.jpg" alt="">
          <h4 class="service-heading">Calabresa e Queijo</h4>
          <p class="text-muted">Imagem ilustrativa<br>Calabresa<br>Quijo<br>Tomate<br>Orégano</p>
        </div>
        <div class="col-md-4">
            <img class="mx-auto rounded-circle" src="img/lanches/02.jpg" alt="">
          <h4 class="service-heading">Frango com Catupiry</h4>
          <p class="text-muted">Imagem ilustrativa<br>Frango<br>Catupiry<br>Milho<br>Ervilha</p>
        </div>
        <div class="col-md-4">
            <img class="mx-auto rounded-circle" src="img/lanches/03.jpg" alt="">
          <h4 class="service-heading">Presunto e Mussarela</h4>
          <p class="text-muted">Imagem ilustrativa<br>Presunto<br>Mussarela<br>Tomate<br>Orégano</p>
        </div>
      </div>
    </div>
  </section>

<!-- Formulário -->
  <section id="form" class="bg-transparent rounded">
    <h1 id="h1" >Insira seus dados</h1>
    
<form method="post" action="tratar.php">
<div class="form-group">
    <label for="nome">Nome</label>
    <input type="text" class="form-control" id="nome"  placeholder="Entre com seu nome" name="nome" required>
</div>
<div class="form-group">
    <label for="sobrenome">Sobrenome</label>
    <input type="text" class="form-control" id="sobrenome"  placeholder="Entre com seu sobrenome" name="sobrenome">
</div>       
<div class="form-group">
    <label for="data_nascimento">Data de Nascimento</label>
    <input type="date" class="form-control" id="data_nascimento"  name="data_nascimento">
</div>         
<div class="form-group">
    <label for="cpf">CPF</label>
    <input type="text" class="form-control" id="cpf" placeholder="12345678900" name="cpf" size="11" maxlength="11">
</div>
<div class="form-group">
    <label for="genero">Gênero</label>
    <select class="form-control" id="genero" name="genero" required>
        <option value="1">Feminino</option>
        <option value="2">Masculino</option>
        <option value="3" selected>Não identificado</option>
    </select>
</div>        
<div class="form-group">
    <label for="telefone">Telefone</label>
    <input type="tel" class="form-control" id="telefone"  placeholder="63988880000" name="telefone" size="11" maxlength="11">
</div>    
<div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" id="email"  placeholder="fulano@email.com" name="email">
</div>
<button type="submit" class="btn btn-primary">Enviar</button>
</form>
</section>

  <!-- Team -->
  <section class="page-section" id="team">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading">Desenvolvedoras</h2>
          <h3 class="section-subheading text-muted">Olá, somos alunas do 3° ano B de informática do Instituto Federal do Tocantins.</h3>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-4">
          <div class="team-member">
            <img class="mx-auto rounded-circle" src="img/team/1.jpg" alt="">
            <h4>Laís Lopes</h4>
            <p class="text-muted">Designer</p>
            <ul class="list-inline social-buttons">
              
              <li class="list-inline-item">
                <a href="https://www.facebook.com/lais.lopes.12979">
                  <i class="fab fa-facebook-f"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="https://www.instagram.com/lais_lopesf/">
                  <i class="fab fa-instagram"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="team-member">
            <img class="mx-auto rounded-circle" src="img/team/2.jpg" alt="">
            <h4>Marcos Dias</h4>
            <p class="text-muted">Professor orientador.</p>
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="https://twitter.com/timarcosdias?fbclid=IwAR25PRW1Fx7KqlFt1YOM-py6OvSVXLjosfwfJn36CDiGZ-EhkJBgTNCFvC4">
                  <i class="fab fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="https://www.facebook.com/ti.marcosdias?__tn__=%2CdlC-R-R&eid=ARCh0rAhpCfw_pfYDPXFyI6VCLvWvklwJKVsIwP2XgrJSqoZQ1NRTWAge2xHuPwH3IPvMe9QsAIDr-GP&hc_ref=ARQC8gknkXPM9twKrcONozTjsVJd125KEjTSTpf_frDMvliHtZXQgoA7zCf2ImIVjnI">
                  <i class="fab fa-facebook-f"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="https://www.instagram.com/timarcosdias/">
                  <i class="fab fa-instagram"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="https://t.co/PQsjgSjFXx">
                  <i class="fab fa-github"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="team-member">
            <img class="mx-auto rounded-circle" src="img/team/3.jpg" alt="">
            <h4>Antônia Beatriz</h4>
            <p class="text-muted">Desenvolvedora.</p>
            <ul class="list-inline social-buttons">
              </li>
              <li class="list-inline-item">
                <a href="https://www.facebook.com/murilo.carvalho.79">
                  <i class="fab fa-facebook-f"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="https://www.instagram.com/antoniabeatriz30/">
                  <i class="fab fa-instagram"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-8 mx-auto text-center">
          <p class="large text-muted">O dinheiro arrecadado das vendas dos lanches será destinado para o caixa,
              que custeara as despesas da formatura, das terceiras series dos cursos técnico médio integrado de Informática e Agropecuária do IFTO (Instituto Federal do Tocantins) Campus Dianópolis.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="footer">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-12">
          <span class="copyright">Copyright &copy; Todos os direitos reservados 2019</span>
        </div>
      </div>
    </div>
  </footer>

 

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/agency.min.js"></script>

</body>

</html>
