<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Add User') ?></legend>
        <?php
            echo $this->Form->control('username');
            echo $this->Form->control('password');
            echo $this->Form->control('role', [
                'options' => [
                    'admin' => 'Admin',
                    'managing-director' => 'Managing Director',
                    'marketing-director' => 'Marketing Director',
                    'eng-personnel' => 'Engineering Personnel',
                    'eng-manager' => 'Engineering Manager',
                    'eng-officer' => 'Engineering Officer',
                    'head-dept' => 'Head of Dept.',
                    'draft-man' => 'Draft Man',
                    'consultant' => 'Consultant',
                    'proc-manager' => 'Procurement Manager'
                ]
            ]);
            echo $this->Form->control('name');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
