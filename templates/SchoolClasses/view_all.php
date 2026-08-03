<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\SchoolClass $schoolClass
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit School Class'), ['action' => 'edit', $schoolClass->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete School Class'), ['action' => 'delete', $schoolClass->id], ['confirm' => __('Are you sure you want to delete # {0}?', $schoolClass->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List School Classes'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Student List'), ['action' => 'view-all', $schoolClass->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New School Class'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="schoolClasses view content">
            <h3><?= h($schoolClass->nom) ?></h3>
            <table>
                <tr>
                    <th>N°</th>
                    <th>Noms et Prénoms</th>
                    <th>Sexe</th>
                    <th>Email</th>
                </tr>
                <?php $i=1; foreach ($schoolClass->students as $student): ?>
                <tr>
                    <td><?= $i ?></td>
                    <td><?= h($student->nom).' '.h($student->prenom) ?></td>
                    <td><?= h($student->sexe) ?></td>
                    <td><?= h($student->email) ?></td>
                </tr>
                 <?php $i++; endforeach; ?>
            </table> 
           
           
        </div>
    </div>
</div>