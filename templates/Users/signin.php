<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $user
 */
?>

<div>
    <?= $this->Form->create( null,['url' => [
        'controller' => 'Users',
        'action' => 'login'
    ]]) ?>
    <fieldset>
        <legend><?= __('Signin User') ?></legend>
        <?php
            echo $this->Form->control('account_name', ['required' => true]);
            echo $this->Form->control('password', ['required' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
