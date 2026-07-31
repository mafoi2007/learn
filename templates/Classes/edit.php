<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $class
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $class->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $class->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Classes'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="classes form content">
            <?= $this->Form->create($class) ?>
            <fieldset>
                <legend><?= __('Edit Class') ?></legend>
                <?php
                    echo $this->Form->control('nom');
                    echo $this->Form->control('code');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
