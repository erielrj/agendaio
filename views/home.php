<section class="jumbotron bg-secondary text-light text-center jb-shadow">
        <article class="row">
            <div class="col-12 h-100">
                <?php if(!isset($_SESSION["usuario"])) : ?>
                <h1>Agenda.io</h1>
                <h3>Todos os seus contatos em um só lugar</h3><br>
                <a href="template.php?p=registrar" class="btn btn-primary"><i class="fas fa-pen"></i> Registrar-se</a>
                <a href="template.php?p=login" class="btn btn-success btn-login"><i class="fas fa-sign-in-alt"></i> Entrar</a>
                <?php else : ?>
                <h1>Agenda.io</h1>
                <h3>Em manutenção, volte no futuro.</h3><br>
                
                <?php endif; ?>
            </div>
        </article>
</section>