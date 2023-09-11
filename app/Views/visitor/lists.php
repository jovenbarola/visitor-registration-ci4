<?= $this->extend('layout/page_layout') ?>

<?= $this->section('content') ?>

	<div class="container">
		<div class="row">
			<div class="col-md-12 my-2">
				<div class="container-fluid">
					<h5 class="h5">Visitors</h5>

					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="/">Home</a></li>
							<li class="breadcrumb-item"><a href="#">Visitors</a></li>
							<li class="breadcrumb-item active" aria-current="page">Listing</li>
						</ol>
					</nav>

					<a href="<?=base_url("visitor/create")?>" class="btn btn-success"><i class="fa fa-plus"></i> New</a>
                    <table class="table table-bordered">
						<tr>
							<td>Date</td>
							<td>Firstname</td>
							<td>Lastname</td>
							<td>Email</td>
							<td>Action</td>
						</tr>
						<?php if (empty($visitors)): ?>
							<tr><td colspan="10">No records.</td></tr>
						<?php else: ?>
						<?php foreach ($visitors as $visitor): ?>
						<tr>
							<td><?=$visitor["regdate"]?></td>
							<td><?=$visitor["firstname"]?></td>
							<td><?=$visitor["lastname"]?></td>
							<td><?=$visitor["email"]?></td>
							<td>
								<a href="view/<?=$visitor["id"]?>" class="btn btn-primary" >View</a>
								<a href="edit/<?=$visitor["id"]?>" class="btn btn-warning" >Edit</a>
								<a href="delete/<?=$visitor["id"]?>" class="btn btn-danger" onclick="return confirm('Remove this item?')">Delete</a>
							</td>
						</tr>
						<?php endforeach; ?>
						<?php endif; ?>
					</table>
				</div>
			</div>
		</div>
	</div>

<?= $this->endSection() ?>
