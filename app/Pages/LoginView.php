<div class="container-login">
    <div class="space-lg"></div>
    <div class="container">
        <div class="grid-12">
            <img src="<?= asset('img/logo.png') ?>" class="image-responsive image-center">
        </div>
        <div class="grid-6 push-3">
            <div class="grid-12 login-box">
                <div class="grid-12 padding-sm align-center">
                    <h2>Área Restrita</h2>
                    Acesse sua conta:
                </div>
                <form action="" method="post">
                    <div class="grid-12 padding-sm">
                        <input class="form-field form-field-off" placeholder="E-mail" name="email">
                    </div>
                    <div class="grid-12 padding-sm">
                        <input class="form-field form-field-off" type="password" placeholder="Senha" name="senha"">
                    </div>
                    <div class="grid-12 padding-sm align-center">
                        <button class="button button-order">
                                <i class="fas fa-sign-in-alt"></i> 
                                Entrar
                        </button>
                    </div>
                </form>
                <div style="text-align: center">
                    <?= (empty($mensagem) ? '' : $mensagem) ?>
                </div>
            </div>
        </div>
    </div>
</div>