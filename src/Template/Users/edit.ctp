<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $user->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="col-md-12 container jumbotron">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Edit User') ?></legend>
        <?php
            echo $this->Form->control('username',array('label' => 'Usuario','placeholder'=>'Ingrese un usuario'));
            echo $this->Form->control('firstname',array('label' => 'Nombre','placeholder'=>'Ingrese un nombre'));
            echo $this->Form->control('lastname',array('label' => 'Apellido Paterno','placeholder'=>'Ingrese un apellido'));
            echo $this->Form->control('motherlastname',array('label' => 'Apellido Materno','placeholder'=>'Ingrese un apellido'));
            echo $this->Form->control('email',array('label' => 'Correo electronico','placeholder'=>'Ingrese un correo electronico'));
            echo $this->Form->control('telephone',array('label' => 'Telefono','placeholder'=>'Ingrese un telefono'));   
            echo $this->Form->control('active',array('label' => 'Activo'));
            //echo $this->Form->control('password');
            //echo $this->Form->control('fullname');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Enviar'),array('class'=>'btn btn-primary')) ?>
    <?= $this->Form->end() ?>
</div>
