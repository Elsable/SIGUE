<?php
/*

<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Salir'), ['controller'=>'users','action' => 'logout']) ?></li>
    </ul>
</nav>
*/?></div>
<div class="table-responsive-md">
    <h3><?= __('Users, hola '). h($current_user['fullname']) ?></h3>
    <table class="table table-hover table-responsive ">
        <thead>
            <tr>
                <th scope="row"><?= $this->Paginator->sort('id') ?></th>
                <th scope="row"><?= $this->Paginator->sort('username') ?></th>
                <th scope="row"><?= $this->Paginator->sort('firstname') ?></th>
                <th scope="row"><?= $this->Paginator->sort('lastname') ?></th>
                <th scope="row"><?= $this->Paginator->sort('motherlastname') ?></th>
                <th scope="row"><?= $this->Paginator->sort('email') ?></th>
                <th scope="row"><?= $this->Paginator->sort('telephone') ?></th>
                <th scope="row"><?= $this->Paginator->sort('active') ?></th>
                <th scope="row"><?= $this->Paginator->sort('password') ?></th>
                <th scope="row"><?= $this->Paginator->sort('fullname') ?></th>
                <th scope="row"><?= $this->Paginator->sort('created') ?></th>
                <th scope="row"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="row" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
            <tr>
                <td><?= $this->Number->format($user->id) ?></td>
                <td><?= h($user->username) ?></td>
                <td><?= h($user->firstname) ?></td>
                <td><?= h($user->lastname) ?></td>
                <td><?= h($user->motherlastname) ?></td>
                <td><?= h($user->email) ?></td>
                <td><?= h($user->telephone) ?></td>
                <td><?= h($user->active) ?></td>
                <td><?= h($user->password) ?></td>
                <td><?= h($user->fullname) ?></td>
                <td><?= h($user->created) ?></td>
                <td><?= h($user->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $user->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $user->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?>
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
