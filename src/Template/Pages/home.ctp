<div class="row">
	<div class="col-md-6 col-md-offset-3">
		<div class="page-header">
			<h1>Bienvenido <?= $current_user['fullname'] ?></h1>

			<?= $this->Html->link(__('Ir a recursos'), ['controller' => 'resources', 'action' => 'index']) ?>


		</div>
	</div>
</div>