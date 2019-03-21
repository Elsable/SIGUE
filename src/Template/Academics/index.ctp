<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Academic[]|\Cake\Collection\CollectionInterface $academics
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Academic'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Departments'), ['controller' => 'Departments', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Department'), ['controller' => 'Departments', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="table-responsive-md">
    <h3><?= __('Academics') ?></h3>
    <table class="table table-hover table-responsive ">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('rfc_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('adscription_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($academics as $academic): ?>
            <tr>
                <td><?= $this->Number->format($academic->id) ?></td>
                <td><?= $academic->has('user') ? $this->Html->link($academic->user->fullname, ['controller' => 'Users', 'action' => 'view', $academic->user->id]) : '' ?></td>
                <td><?= $academic->has('department') ? $this->Html->link($academic->department->name, ['controller' => 'Departments', 'action' => 'view', $academic->department->id]) : '' ?></td>
                <td><?= h($academic->created) ?></td>
                <td><?= h($academic->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $academic->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $academic->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $academic->id], ['confirm' => __('Are you sure you want to delete # {0}?', $academic->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
