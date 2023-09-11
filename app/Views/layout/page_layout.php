<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?=getenv("app.application_title")?></title>

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="<?= base_url('libraries/bootstrap/css/bootstrap.min.css') ?>" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha512-+L4yy6FRcDGbXJ9mPG8MT/3UCDzwR9gPeyFNMCtInsol++5m3bk2bXWKdZjvybmohrAsn3Ua5x8gfLnbE1YkOg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<div class="container">
			<a class="navbar-brand" href="<?= base_url() ?>">Home</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link" href="<?= base_url('visitor/lists') ?>">Visitor/</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?= base_url('exhibitor/lists') ?>">Exhibitor/</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?= base_url('/logout') ?>" onclick="return confirm('Are you sure to logout session?')"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>


    <?php if (url_is("/")): ?>
	<header class="jumbotron jumbotron-fluid">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1 class="h1"><?=getenv("app.application_title")?></h1>
				</div>
			</div>
		</div>
    </header>
    <?php endif; ?>

    <?= $this->renderSection('content') ?>

	<footer class="jumbotron jumbotron-fluid mt-5 mb-0">
		<div class="container text-center">Copyright &copy <?= Date('Y') ?> www.jbarola.net</div>
	</footer>

	<!-- Jquery dan Bootsrap JS -->
	<script src="<?= base_url('libraries/jquery-3.7.1.min.js') ?>"></script>
	<script src="<?= base_url('libraries/bootstrap/js/bootstrap.min.js') ?>"></script>

</body>

</html>
