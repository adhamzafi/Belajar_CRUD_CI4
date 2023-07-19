<?= $this->extend($config->viewLayout) ?>
<?= $this->section('main') ?>

<style>
    body {
        background-color: #f8f9fa;
    }

    .container {
        margin-top: 20px;
    }

    .card {
        border-radius: 10px;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
    }

    .card-header {
        background-color: #343a40;
        color: white;
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;
        padding: 10px;
        text-align: center;
    }

    .card-body {
        padding: 20px;
    }

    .form-group label {
        font-weight: bold;
        color: #555;
    }

    .form-control {
        margin-bottom: 15px;
    }

    .is-invalid {
        border-color: #dc3545;
    }

    .btn-primary {
        margin-top: 15px;
    }

    hr {
        margin-top: 20px;
        margin-bottom: 20px;
    }

    p {
        margin-bottom: 0;
    }
</style>

<div class="container">
    <div class="row">
        <div class="col-sm-6 offset-sm-3">

            <div class="card">
                <h2 class="card-header"><?= lang('Auth.register') ?></h2>
                <div class="card-body">

                    <?= view('Myth\Auth\Views\_message_block') ?>

                    <form action="<?= url_to('register') ?>" method="post">
                        <?= csrf_field() ?>

                        <div class="form-group">
                            <label for="email"><?= lang('Auth.email') ?></label>
                            <input type="email" class="form-control <?php if (session('errors.email')) : ?>is-invalid<?php endif ?>" name="email" aria-describedby="emailHelp" placeholder="<?= lang('Auth.email') ?>" value="<?= old('email') ?>">
                            <small id="emailHelp" class="form-text text-muted"><?= lang('Auth.weNeverShare') ?></small>
                        </div>

                        <div class="form-group">
                            <label for="username"><?= lang('Auth.username') ?></label>
                            <input type="text" class="form-control <?php if (session('errors.username')) : ?>is-invalid<?php endif ?>" name="username" placeholder="<?= lang('Auth.username') ?>" value="<?= old('username') ?>">
                        </div>

                        <div class="form-group">
                            <label for="password"><?= lang('Auth.password') ?></label>
                            <input type="password" name="password" class="form-control <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" placeholder="<?= lang('Auth.password') ?>" autocomplete="off">
                        </div>

                        <div class="form-group">
                            <label for="pass_confirm"><?= lang('Auth.repeatPassword') ?></label>
                            <input type="password" name="pass_confirm" class="form-control <?php if (session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>" placeholder="<?= lang('Auth.repeatPassword') ?>" autocomplete="off">
                        </div>

                        <br>

                        <button type="submit" class="btn btn-primary btn-block"><?= lang('Auth.register') ?></button>
                    </form>


                    <hr>

                    <p><?= lang('Auth.alreadyRegistered') ?> <a href="<?= url_to('login') ?>"><?= lang('Auth.signIn') ?></a></p>
                </div>
            </div>

        </div>
    </div>
</div>

<?= $this->endSection() ?>