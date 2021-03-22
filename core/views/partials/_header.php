<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://fonts.googleapis.com/css?family=Oswald:200,400|Quattrocento|Quattrocento+Sans|Roboto" rel="stylesheet">
    <link type="text/css" href="../public/assets/css/style.css" rel="stylesheet">

    <!-- Mailchimp -->
    <!-- <link href="//cdn-images.mailchimp.com/embedcode/slim-10_7.css" rel="stylesheet" type="text/css"> -->

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">

    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">

    <title>Blog - Alex Medeiros</title>
</head>

<body>
    <header class="header">
        <!-- Header-->
        <div class="header-box">
            <div class="row row-box">
                <div class="col search">
                    <i class="fas fa-search"></i>
                </div>
                <a class="logo col" href="?a=Home" title="Alex Medeiros">
                    <img src="../public/assets/images/logo-topo.svg" alt="Logo Topo" width="60px">
                </a>
                <div class="col toggle">
                    <i class="fas fa-bars menu"></i>
                </div>
            </div>
            <div class="box-search">
                <div class="row">
                    <label class="search-label">Pesquisar</label>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="O que você procura?" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="button">Buscar</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="nav">
                <!-- Nav -->
                <ul class="nav-list">
                    <li class="nav-item"><a href="?a=article" title="Artigos">Artigos</a></li>
                    <li class="nav-item"><a href="?a=newsletter" title="Newsletter">Newsletter</a></li>
                    <li class="nav-item"><a href="?a=work" title="Trabalhos">Trabalhos</a></li>
                    <li class="nav-item"><a href="?a=about" title="Sobre">Sobre</a></li>
                    <li class="nav-item"><a href="?a=contact" title="Contato">Contato</a></li>
                    <li class="nav-item"><a href="#" title="Search"><i class="fas fa-search"></i></a></li>
                </ul>
            </div><!-- Fim Nav-->

        </div>


    </header><!-- Fim Header-->
    <div class="section">
        <div class="main">



            <div class="sidebar">
                <div class="owner_img">
                    <img src="../public/assets/images/owner.jpg" alt="Image do usuário" class="rounded-circle img-thumbnail">
                </div>
                <ul class="sidebar_list">
                    <li class="sidebar-item"><a href="https://github.com/alexmeddeiros" title="Github"><i class="fab fa-github"></i> Github</a></li>
                    <li class="sidebar-item"><a href="#" title="Linkedin"><i class="fab fa-linkedin-in"></i> Linkedin</a></li>
                    <li class="sidebar-item"><a href="https://twitter.com/alexmeddeiros" title="Twitter"><i class="fab fa-twitter-square"></i> Twitter</a></li>
                    <li class="sidebar-item"><a href="https://www.instagram.com/medeiros_alx/" title="Instagram"><i class="fab fa-instagram"></i> Instagram</a></li>
                </ul>

                <div class="form-group sidebar-select">
                    <h5>Seleciona uma categoria:</h5>
                    <select class="form" id="sideSelect">
                        <option class="option">Selecione</option>
                        <option>Programação</option>
                        <option>Dev</option>
                        <option>Produtividade</option>
                        <option>PHP</option>
                        <option>Mysql</option>
                    </select>
                </div>
            </div>