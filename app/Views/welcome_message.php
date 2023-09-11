<?= $this->extend('layout/page_layout') ?>

<?= $this->section('content') ?>

	<div class="container">
		<div class="alert alert-info">
			<h5 class="h5">What is this program?</h5>
			<p>
			The example user of this program is Food Expo, that cater the registration of Exhibitor and Visitor that will organize the event.<br>
			This is also sample program to showcase my skillset in using CodeIgniter 4.
			</p>
		</div>

		<div class="row">
			<div class="col-md-12 my-2 card">
				<div class="card-body">
					<h5 class="h5">Visitors</h5>
					<p>This the CRUD modules that manage & display all visitors from the Food Expo.</p>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12 my-2 card">
				<div class="card-body">
					<h5 class="h5">Exhibitor</h5>
					<p>This the CRUD modules that manage & display all exhibitor from the Food Expo.</p>
				</div>
			</div>
		</div>

	</div>

<?= $this->endSection() ?>
