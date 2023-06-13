<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $element
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $element->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $element->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Elements'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="elements form large-9 medium-8 columns content">
    <?= $this->Form->create($element) ?>
    <fieldset>
        <legend><?= __('Edit Element') ?></legend>
        <?php
            echo $this->Form->control('title');
            echo $this->Form->control('html');
            echo $this->Form->control('css');
            echo $this->Form->control('js');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
