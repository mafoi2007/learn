<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\SchoolClass> $schoolClasses
 */
?>
<div class="schoolClasses index content">
    <?= $this->Html->link(__('New School Class'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('School Classes') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('N°') ?></th>
                    <th><?= $this->Paginator->sort('nom') ?></th>
                    <th><?= $this->Paginator->sort('code') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; foreach ($schoolClasses as $schoolClass): ?>
                <tr>
                    <td><?= $i ?></td>
                    <td><?= h($schoolClass->nom) ?></td>
                    <td><?= h($schoolClass->code) ?></td>
                    <td><?= h($schoolClass->created) ?></td>
                    <td><?= h($schoolClass->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $schoolClass->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $schoolClass->id]) ?>
                        <?= $this->Form->postLink(
                            __('Delete'),
                            ['action' => 'delete', $schoolClass->id],
                            [
                                'method' => 'delete',
                                'confirm' => __('Are you sure you want to delete # {0}?', $schoolClass->id),
                            ]
                        ) ?>
                        <?= $this->Html->link(__('View Students'), ['action' => 'viewAll', $schoolClass->id]) ?>
                    </td>
                </tr>
                <?php $i++; endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>