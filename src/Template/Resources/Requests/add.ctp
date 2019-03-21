<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Request $request
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Requests'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Academics'), ['controller' => 'Academics', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Academic'), ['controller' => 'Academics', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="requests form large-9 medium-8 columns content">
    <?= $this->Form->create($request) ?>
    <fieldset>
        <legend><?= __('Add Request') ?></legend>
        <?php
            echo $this->Form->control('academic_id', ['options' => $academics]);
            echo $this->Form->control('event');
            echo $this->Form->control('period');
            echo $this->Form->control('type');
            echo $this->Form->control('start_date');
            echo $this->Form->control('end_date');
            echo $this->Form->control('start_hour');
            echo $this->Form->control('end_hour');
            echo $this->Form->control('observations');
            echo $this->Form->control('monday');
            echo $this->Form->control('tuesday');
            echo $this->Form->control('wednesday');
            echo $this->Form->control('thursday');
            echo $this->Form->control('friday');
            echo $this->Form->control('saturday');
            echo $this->Form->control('space_id');
            echo $this->Form->control('vobo');
            echo $this->Form->control('vobo_register');
            echo $this->Form->control('vobo_attendant_id');
            echo $this->Form->control('vobo_observations');
            echo $this->Form->control('aproved');
            echo $this->Form->control('aproved_register');
            echo $this->Form->control('aproved_attendant_id');
            echo $this->Form->control('aproved_observations');
            echo $this->Form->control('cancelled');
            echo $this->Form->control('cancelled_register');
            echo $this->Form->control('cancelled_attendant_id');
            echo $this->Form->control('cancelled_observations');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
