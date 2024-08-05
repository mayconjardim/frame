<div class="col-xl-4 col-md-6 mx-auto p-5">
    <div class="card">
        <div class="card-header">
            Cadastre-se
        </div>
        <div class="card-body">
            <p class="card-text"><small class="text-muted">Preecha o formulário abaixo para fazer seu cadastro</small></p>

            <form name="register" method="POST" action="<?= URL ?>/users/register" class="mt-4">
                <div class="form-group">
                    <label for="name">Nome: <sup class="text-danger">*</sup></label>
                    <input type="text" name="name" id="name" value="<?=$data['name']?>" class="form-control <?= $data['name_erro'] ? 'is-invalid' : '' ?>">
                    <div class="invalid-feedback">
                        <?= $data['name_erro'] ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="email">E-mail: <sup class="text-danger">*</sup></label>
                    <input type="email" name="email" id="email" value="<?=$data['email']?>" class="form-control <?= $data['email_erro'] ? 'is-invalid' : '' ?>">
                    <div class="invalid-feedback">
                        <?= $data['email_erro'] ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="password">Senha: <sup class="text-danger">*</sup></label>
                    <input type="password" name="password" id="password" value="<?=$data['password']?>" class="form-control  <?= $data['password_erro'] ? 'is-invalid' : '' ?>">
                    <div class="invalid-feedback">
                        <?= $data['password_erro'] ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="confirm_password">Confirme a Senha: <sup class="text-danger">*</sup></label>
                    <input type="password" name="confirm_password" id="confirm_password" value="<?=$data['confirm_password']?>"class="form-control <?= $data['confirm_password_erro'] ? 'is-invalid' : '' ?>">
                    <div class="invalid-feedback">
                        <?= $data['confirm_password_erro'] ?>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <input type="submit" value="Cadastrar" class="btn btn-info btn-block">
                    </div>
                    <div class="col">
                        <a href="#">Você tem uma conta? Faça login</a>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>