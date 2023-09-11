<?= $this->extend('layout/page_layout') ?>

<?= $this->section('content') ?>

	<div class="container">
		<div class="row">
			<div class="col-md-12 my-2">
				<div class="container-fluid">
					<h5 class="h5">Visitors</h5>

					<?php if (!empty($visitor)): ?>
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="<?= base_url('/') ?>">Home</a></li>
							<li class="breadcrumb-item"><a href="<?= base_url('visitor/lists') ?>">Visitors</a></li>
							<li class="breadcrumb-item active" aria-current="page">View <?=$visitor["regno"]?></li>
						</ol>
					</nav>

                    <table class="table table-bordered">
						<tr>
							<td><b>Date</b></td>
							<td><?=$visitor["regdate"]?></td>
							<td><b>Firstname</b></td>
							<td><?=$visitor["firstname"]?></td>
							<td><b>Lastname</b></td>
							<td><?=$visitor["lastname"]?></td>
							<td><b>Email</b></td>
							<td><?=$visitor["email"]?></td>
						</tr>
					</table>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>

<?= $this->endSection() ?>
