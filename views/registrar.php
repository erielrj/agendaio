<?php if(isset($_SESSION['msg'])) : ?>
<div class="alert alert-success" role="alert">
    <?= $_SESSION['msg'] ?>
</div>
<?php 
    unset($_SESSION['msg']);
    endif; 
?>


<form action="./controllers/database-controllers/efetuar_cadastro.php" method="post" class="form-registro">

    <fieldset>
        <legend>Registre-se:</legend>
        <div class="form-group">
            <div class="container">
                <section class="row">
                    <div class="col-md-3">
                        <input type="text" name="nome" class="form-control" placeholder="Nome">
                    </div>
                    <div class="col-md-3">
                        <input type="text" name="sobrenome" class="form-control" placeholder="Sobrenome"><br>
                    </div>
                    <div class="col-md-6"></div>
                </section>
                <section class="row">
                    <div class="col-md-6">
                        <input type="email" name="email" class="form-control" placeholder="E-mail">
                        <input type="password" name="senha" class="form-control mt-2" placeholder="Senha">
                    </div>
                    <div class="col-md-6"></div>
                </section>
                <section class="row">
                    <div class="col-md-6">
                        <label for="nascimento" class="mt-4 d-block">Data de Nascimento:</label>
                        <input type="text" name="nascimento" id="nascimento" class="form-control mt-2" placeholder="Ex.: 30/06/1996">
                    </div>
                    <div class="col-md-6"></div>
                </section>
                <section class="row">
                    <div class="col-md-6">
                        <span class="mt-4 d-block">Sexo:</span>
                        <div class="form-check d-inline-block">
                            <input class="form-check-input" type="radio" name="sexo" id="feminino" value="Feminino" checked>
                            <label class="form-check-label" for="feminino">
                                Feminino
                            </label>
                        </div>
                        <div class="form-check d-inline-block ml-2">
                            <input class="form-check-input" type="radio" name="sexo" id="masculino" value="Masculino">
                            <label class="form-check-label" for="masculino">
                                Masculino
                            </label>
                        </div>
                    </div>
                </section>

                
                <section class="row mt-4">
                    <div class="col-md-6">
                        <button type="submit" class="btn btn-success w-100">Cadastrar</button>
                    </div>
                </section>
            </div>
        </div>

    </fieldset>
</form>