<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Space $space
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $space->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $space->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Spaces'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="spaces form large-9 medium-8 columns content">
    <?= $this->Form->create($space) ?>
    <fieldset>
        <legend><?= __('Edit Space') ?></legend>
        <?php
            echo $this->Form->control('type',['options'=>['juntas'=>'Sala de juntas','salon'=>'Salón de clases','computo'=>'Laboratorio de cómputo']]);
            echo $this->Form->control('name');
            echo $this->Form->control('capacity',['placehoder'=>'Ingrese un número entre 1 y 100']);
            echo $this->Form->control('location',['placeholder'=>'Especifique el edificio, piso y nomenclatura de la sala']);
            echo $this->Form->control('observations');
            echo $this->Form->control('internet');
            echo $this->Form->control('board');
            echo $this->Form->control('projector');
            echo $this->Form->control('blind');
            echo $this->Form->control('speakers');            
            echo $this->Form->control('active');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
