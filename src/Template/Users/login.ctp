
<div class="row" style="text-align: center; padding-top:80px;">
<div class="col-md-12">

<div class="jumbotron container">
<h1>Iniciar sesión</h1>
<?= $this->Form->create() ?>
<?= $this->Form->control('username', array('label' => 'usuario','placeholder'=>'Ingrese su usuario')) ?>
<?= $this->Form->control('password', array('label' => 'contraseña','placeholder'=>'Ingrese su contraseña')) ?>
<?= $this->Form->button('Iniciar sesión',array('class'=>'btn btn-primary')) ?>
<?= $this->Form->end() ?>

</div>
</div>
</div>