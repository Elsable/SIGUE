<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Estas seguro que deseas eliminar el usuario # {0}?', $user->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="row ">
<div class="container">
<div class="col-md-12">
    <div class="row">
    
    <div class="card border-info col-md-12 jumbotron" >
  



        <div class="card-header list-group-item d-flex justify-content-between align-items-center"><h3> <?= h($user->firstname),' ',h($user->lastname  ),' ', h($user->motherlastname), ' (',  h($user->username),')' ?></h3>
        <div>
        <?= $this->Html->link(__('Editar usuario'), ['action' => 'edit', $user->id],array('value'=>'s','name'=>'s','class'=>'btn btn-warning')) ?>
        <?= $this->Form->postLink(__('Deshabilitar usuario'), ['action' => 'delete', $user->id],array('class'=>'btn btn-danger'), ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?> </div>
        </div>
        <div class="card-body">
         <h4 class="card-title"> <?= h($user->firstname),' ',h($user->lastname  ),' ', h($user->motherlastname)?></h4>
    <p class="card-text">
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($user->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Telephone') ?></th>
            <td><?= h($user->telephone) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fullname') ?></th>
            <td><?= h($user->fullname) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($user->id) ?></td>
        </tr>
        
        <tr>
            <th scope="row"><?= __('Active') ?></th>
            <td><?= $user->active ? __('Yes') : __('No'); ?></td>
        </tr>
    </table></p>
  </div>
 
</div> 
    </div>
</div>

  
</div>
</div>