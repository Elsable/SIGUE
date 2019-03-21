<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Request $request
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Request'), ['action' => 'edit', $request->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Request'), ['action' => 'delete', $request->id], ['confirm' => __('Are you sure you want to delete # {0}?', $request->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Requests'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Request'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Academics'), ['controller' => 'Academics', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Academic'), ['controller' => 'Academics', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="requests view large-9 medium-8 columns content">
    <h3><?= h($request->event) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Academic') ?></th>
            <td><?= $request->has('academic') ? $this->Html->link($request->academic->id, ['controller' => 'Academics', 'action' => 'view', $request->academic->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Event') ?></th>
            <td><?= h($request->event) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Period') ?></th>
            <td><?= h($request->period) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Type') ?></th>
            <td><?= h($request->type) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($request->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Space Id') ?></th>
            <td><?= $this->Number->format($request->space_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Vobo Attendant Id') ?></th>
            <td><?= $this->Number->format($request->vobo_attendant_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Aproved Attendant Id') ?></th>
            <td><?= $this->Number->format($request->aproved_attendant_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cancelled Attendant Id') ?></th>
            <td><?= $this->Number->format($request->cancelled_attendant_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Start Date') ?></th>
            <td><?= h($request->start_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('End Date') ?></th>
            <td><?= h($request->end_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Start Hour') ?></th>
            <td><?= h($request->start_hour) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('End Hour') ?></th>
            <td><?= h($request->end_hour) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Vobo Register') ?></th>
            <td><?= h($request->vobo_register) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Aproved Register') ?></th>
            <td><?= h($request->aproved_register) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cancelled Register') ?></th>
            <td><?= h($request->cancelled_register) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($request->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($request->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Monday') ?></th>
            <td><?= $request->monday ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tuesday') ?></th>
            <td><?= $request->tuesday ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Wednesday') ?></th>
            <td><?= $request->wednesday ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Thursday') ?></th>
            <td><?= $request->thursday ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Friday') ?></th>
            <td><?= $request->friday ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Saturday') ?></th>
            <td><?= $request->saturday ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Vobo') ?></th>
            <td><?= $request->vobo ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Aproved') ?></th>
            <td><?= $request->aproved ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cancelled') ?></th>
            <td><?= $request->cancelled ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Observations') ?></h4>
        <?= $this->Text->autoParagraph(h($request->observations)); ?>
    </div>
    <div class="row">
        <h4><?= __('Vobo Observations') ?></h4>
        <?= $this->Text->autoParagraph(h($request->vobo_observations)); ?>
    </div>
    <div class="row">
        <h4><?= __('Aproved Observations') ?></h4>
        <?= $this->Text->autoParagraph(h($request->aproved_observations)); ?>
    </div>
    <div class="row">
        <h4><?= __('Cancelled Observations') ?></h4>
        <?= $this->Text->autoParagraph(h($request->cancelled_observations)); ?>
    </div>
</div>
