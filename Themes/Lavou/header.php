<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-lavoublue">
        <div class="container">
            <h1 class="d-none">Lavou - A revolução da lavagem</h1>
            <a href="<?= $base; ?>" class="navbar-brand">
                <img class="img-100" src="<?= $path_img; ?>/lavou-a-revolucao-da-lavagem.png" alt="Lavou - A revolução da lavagem" title="Lavou - A revolução da lavagem">
            </a>

            <button class="navbar-toggler" data-toggle="collapse" data-target="#nav-menu-login">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse nav_menu" id="nav-menu-login">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link" href="<?= $base; ?>">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="##">Empresa</a></li>
                    <li class="nav-item"><a class="nav-link" href="##">Contato</a></li>
                </ul>
                <!-- <div class="menu_divisor"></div> -->
                <!-- <a href="<?= $base; ?>login">
                    <div class="icon_menu_login icon-user icon-notext"></div>
                    <p>Olá, faça seu <strong>login</strong><br> <span>ou <strong>cadastre-se</strong></span></p>
                </a> -->
                <a class="btn btn-outline-light btn-lg login" href="<?= $base; ?>login">                    
                    Fazer <strong>login</strong> <span>ou <strong>cadastre-se</strong></span>
                </a>
                <!-- <span class="icon_menu_login icon-user icon-notext"></span>                
                <p>Olá, faça seu <a href="<?= $base; ?>login">login</a><br> <span>ou <a href="<?= $base; ?>cadastro">cadastre-se</a></span></p> -->
            </div>
        </div>
    </nav>
</header>