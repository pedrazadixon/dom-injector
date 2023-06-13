<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $element
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Element'), ['action' => 'edit', $element->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Element'), ['action' => 'delete', $element->id], ['confirm' => __('Are you sure you want to delete # {0}?', $element->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Elements'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Element'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="elements view large-9 medium-8 columns content">
    <h3><?= h($element->title) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Title') ?></th>
            <td><?= h($element->title) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($element->id) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Html') ?></h4>
        <?= $this->Text->autoParagraph(h($element->html)); ?>
    </div>
    <div class="row">
        <h4><?= __('Css') ?></h4>
        <?= $this->Text->autoParagraph(h($element->css)); ?>
    </div>
    <div class="row">
        <h4><?= __('Js') ?></h4>
        <?= $this->Text->autoParagraph(h($element->js)); ?>
    </div>
</div>
