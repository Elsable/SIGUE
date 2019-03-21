<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Resource $resource
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $resource->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $resource->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Resources'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="col-md-12 container jumbotron">
    <?= $this->Form->create($resource) ?>
    <fieldset>
        <legend><?= __('Editar recursos') ?></legend>
        <?php
            echo $this->Form->control('name',array('label' => 'Nombre','placeholder'=>'Ingrese un nombre'));
            echo $this->Form->control('description',array('label' => 'Descripción','placeholder'=>'Ingrese una descripción'));
            echo $this->Form->control('observations',array('label' => 'Observación','placeholder'=>'Ingrese una observación'));
            echo $this->Form->control('active',array('label' => 'activo'));
        ?>
    </fieldset>
    <?= $this->Form->button(__('Enviar'),array('class'=>'btn btn-primary')) ?>
    <?= $this->Form->end() ?>
</div>
