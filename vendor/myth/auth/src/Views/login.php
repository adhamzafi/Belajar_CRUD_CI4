<?= $this->extend($config->viewLayout) ?>
<?= $this->section('main') ?>
<style>
	body {
		background-color: #f8f9fa;
	}

	.container {
		margin-top: 50px;
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

	.form-check-label {
		font-weight: normal;
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
				<h2 class="card-header"><?= lang('Auth.loginTitle') ?></h2>
				<div class="card-body">

					<?= view('Myth\Auth\Views\_message_block') ?>

					<form action="<?= url_to('login') ?>" method="post">
						<?= csrf_field() ?>

						<?php if ($config->validFields === ['email']) : ?>
							<div class="form-group">
								<label for="login"><?= lang('Auth.email') ?></label>
								<input type="email" class="form-control <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>" name="login" placeholder="<?= lang('Auth.email') ?>">
								<div class="invalid-feedback">
									<?= session('errors.login') ?>
								</div>
							</div>
						<?php else : ?>
							<div class="form-group">
								<label for="login"><?= lang('Auth.emailOrUsername') ?></label>
								<input type="text" class="form-control <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>" name="login" placeholder="<?= lang('Auth.emailOrUsername') ?>">
								<div class="invalid-feedback">
									<?= session('errors.login') ?>
								</div>
							</div>
						<?php endif; ?>

						<div class="form-group">
							<label for="password"><?= lang('Auth.password') ?></label>
							<input type="password" name="password" class="form-control  <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" placeholder="<?= lang('Auth.password') ?>">
							<div class="invalid-feedback">
								<?= session('errors.password') ?>
							</div>
						</div>

						<?php if ($config->allowRemembering) : ?>
							<div class="form-check">
								<label class="form-check-label">
									<input type="checkbox" name="remember" class="form-check-input" <?php if (old('remember')) : ?> checked <?php endif ?>>
									<?= lang('Auth.rememberMe') ?>
								</label>
							</div>
						<?php endif; ?>

						<br>

						<button type="submit" class="btn btn-primary btn-block"><?= lang('Auth.loginAction') ?></button>
					</form>

					<hr>

					<?php if ($config->allowRegistration) : ?>
						<p><a href="<?= url_to('register') ?>"><?= lang('Auth.needAnAccount') ?></a></p>
					<?php endif; ?>
					<?php if ($config->activeResetter) : ?>
						<p><a href="<?= url_to('forgot') ?>"><?= lang('Auth.forgotYourPassword') ?></a></p>
					<?php endif; ?>
				</div>
			</div>

		</div>
	</div>
</div>

<?= $this->endSection() ?>