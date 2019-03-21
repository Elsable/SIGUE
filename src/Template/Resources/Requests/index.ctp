<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Request[]|\Cake\Collection\CollectionInterface $requests
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Request'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Academics'), ['controller' => 'Academics', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Academic'), ['controller' => 'Academics', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="requests index large-9 medium-8 columns content">
    <h3><?= __('Requests') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('academic_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('event') ?></th>
                <th scope="col"><?= $this->Paginator->sort('period') ?></th>
                <th scope="col"><?= $this->Paginator->sort('type') ?></th>
                <th scope="col"><?= $this->Paginator->sort('start_date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('end_date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('start_hour') ?></th>
                <th scope="col"><?= $this->Paginator->sort('end_hour') ?></th>
                <th scope="col"><?= $this->Paginator->sort('monday') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tuesday') ?></th>
                <th scope="col"><?= $this->Paginator->sort('wednesday') ?></th>
                <th scope="col"><?= $this->Paginator->sort('thursday') ?></th>
                <th scope="col"><?= $this->Paginator->sort('friday') ?></th>
                <th scope="col"><?= $this->Paginator->sort('saturday') ?></th>
                <th scope="col"><?= $this->Paginator->sort('space_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('vobo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('vobo_register') ?></th>
                <th scope="col"><?= $this->Paginator->sort('vobo_attendant_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('aproved') ?></th>
                <th scope="col"><?= $this->Paginator->sort('aproved_register') ?></th>
                <th scope="col"><?= $this->Paginator->sort('aproved_attendant_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cancelled') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cancelled_register') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cancelled_attendant_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($requests as $request): ?>
            <tr>
                <td><?= $this->Number->format($request->id) ?></td>
                <td><?= $request->has('academic') ? $this->Html->link($request->academic->id, ['controller' => 'Academics', 'action' => 'view', $request->academic->id]) : '' ?></td>
                <td><?= h($request->event) ?></td>
                <td><?= h($request->period) ?></td>
                <td><?= h($request->type) ?></td>
                <td><?= h($request->start_date) ?></td>
                <td><?= h($request->end_date) ?></td>
                <td><?= h($request->start_hour) ?></td>
                <td><?= h($request->end_hour) ?></td>
                <td><?= h($request->monday) ?></td>
                <td><?= h($request->tuesday) ?></td>
                <td><?= h($request->wednesday) ?></td>
                <td><?= h($request->thursday) ?></td>
                <td><?= h($request->friday) ?></td>
                <td><?= h($request->saturday) ?></td>
                <td><?= $this->Number->format($request->space_id) ?></td>
                <td><?= h($request->vobo) ?></td>
                <td><?= h($request->vobo_register) ?></td>
                <td><?= $this->Number->format($request->vobo_attendant_id) ?></td>
                <td><?= h($request->aproved) ?></td>
                <td><?= h($request->aproved_register) ?></td>
                <td><?= $this->Number->format($request->aproved_attendant_id) ?></td>
                <td><?= h($request->cancelled) ?></td>
                <td><?= h($request->cancelled_register) ?></td>
                <td><?= $this->Number->format($request->cancelled_attendant_id) ?></td>
                <td><?= h($request->created) ?></td>
                <td><?= h($request->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $request->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $request->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $request->id], ['confirm' => __('Are you sure you want to delete # {0}?', $request->id)]) ?>
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
