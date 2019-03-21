<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Resource $resource
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Resources'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="Container Jumbotron col-md-12">
    <?= $this->Form->create($resource) ?>
    <fieldset >
        <legend><?= __('Agregar recurso') ?></legend>
        <?php
            echo $this->Form->control('name',array('label' => 'Nombre','placeholder'=>'Ingrese un nombre'));
            echo $this->Form->control('description',array('label' => 'Descripción','placeholder'=>'Ingrese una descripción'));
            echo $this->Form->control('observations',array('label' => 'Observación','placeholder'=>'Ingrese una observación'));
            //echo $this->Form->control('active');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Enviar'),array('class'=>'btn btn-primary')) ?>
    <?= $this->Form->end() ?>
</div>
