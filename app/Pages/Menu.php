<div class="container-full container-top bg-blue">
    <div class="container">
        <div class="grid-2">
            <span>
            	<img src="<?= asset('img/logo.png') ?>" class="image-responsive">
            </span>
        </div>
        <div class="grid-10 no-padding align-center">
            <ul class="nav">
                <li>
                    <a href="<?= route('/salas') ?>">Salas</a>
                </li>
                <li>
                    <a href="<?= route('/blocos') ?>">Blocos</a>
                </li>
                <li>
                    <a href="<?= route('/colaboradores') ?>">Colaboradores</a>
                </li>
                <li>
                    <a href="<?= route('/categorias') ?>">Categorias</a>
                </li>
                <li>
                    <a href="<?= route('/dispositivos') ?>">Dispositivos</a>
                </li>
                <li>
                    <a href="<?= route('/cursos') ?>">Cursos</a>
                </li>
                <li>
                    <a href="<?= route('/') ?>">
                        <i class="fas fa-sign-out-alt"></i> 
                        Sair
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>