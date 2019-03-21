<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Space[]|\Cake\Collection\CollectionInterface $spaces
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Nuevo espacio'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="table-responsive-md">
    <h3><?= __('Espacio') ?></h3>
    <table class="table table-hover table-responsive ">
        <thead>
            <tr>
                <!--
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                -->

                <th scope="col"><?= $this->Paginator->sort('Tipo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nombre') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Capacidad') ?></th>
                <th scope="col"><?= $this->Paginator->sort('internet') ?></th>
                <th scope="col"><?= $this->Paginator->sort('board') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Proyector') ?></th>
                <th scope="col"><?= $this->Paginator->sort('blind') ?></th>
                <th scope="col"><?= $this->Paginator->sort('speakers') ?></th>
                <th scope="col"><?= $this->Paginator->sort('activo') ?></th>
                <!--
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                -->
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($spaces as $space): ?>
            <tr>
                <!--
                <td><?= $this->Number->format($space->id) ?></td>
                -->
                <td><?= h($space->type) ?></td>
                <td><?= h($space->name) ?></td>
                <td><?= $this->Number->format($space->capacity) ?></td>
                <td><?= h($space->internet) ?></td>
                <td><?= h($space->board) ?></td>
                <td><?= h($space->projector) ?></td>
                <td><?= h($space->blind) ?></td>
                <td><?= h($space->speakers) ?></td>
                <td><?= h($space->active) ?></td>
                <!--
                <td><?= h($space->created) ?></td>
                <td><?= h($space->modified) ?></td>
                -->
                <td class="actions">
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $space->id]) ?>
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
