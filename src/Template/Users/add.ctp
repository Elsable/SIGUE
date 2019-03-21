<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="  jumbotron container users form large-9 medium-8 columns content">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Agregar Usuario') ?></legend>
        <?php
            echo $this->Form->control('username',array('label' => 'Usuario','placeholder'=>'Ingrese un usuario'));
            echo $this->Form->control('firstname',array('label' => 'Nombre','placeholder'=>'Ingrese un nombre'));
            echo $this->Form->control('lastname',array('label' => 'Apellido paterno','placeholder'=>'Ingrese un apellido paterno'));
            echo $this->Form->control('motherlastname',array('label' => 'Nombre materno','placeholder'=>'Ingrese un nombre materno'));
            echo $this->Form->control('email',array('label' => 'Correo Electronico','placeholder'=>'Ingrese un correo Electronico'));
            echo $this->Form->control('telephone',array('label' => 'Telefono','placeholder'=>'Ingrese un telefono'));
            //echo $this->Form->control('active');
            echo $this->Form->control('password',array('label' => 'Contraseña','placeholder'=>'Ingrese una contraseña'));
            //echo $this->Form->control('fullname');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit'),array('class'=>'btn btn-primary')) ?>
    <?= $this->Form->end() ?>
</div>
