<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Academic $academic
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Academic'), ['action' => 'edit', $academic->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Academic'), ['action' => 'delete', $academic->id], ['confirm' => __('Are you sure you want to delete # {0}?', $academic->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Academics'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Academic'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Departments'), ['controller' => 'Departments', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Department'), ['controller' => 'Departments', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="academics view large-9 medium-8 columns content">
    <h3><?= h($academic->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $academic->has('user') ? $this->Html->link($academic->user->fullname, ['controller' => 'Users', 'action' => 'view', $academic->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Department') ?></th>
            <td><?= $academic->has('department') ? $this->Html->link($academic->department->name, ['controller' => 'Departments', 'action' => 'view', $academic->department->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($academic->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($academic->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($academic->modified) ?></td>
        </tr>
    </table>
</div>
