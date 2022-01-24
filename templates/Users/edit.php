<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="users form">
    <h2>Edit User: <?= $user->username ?></h2>
    <?= $this->Html->link(__('Back to Users List'), ['action' => 'index'], ['class' => 'button back']) ?>
    <?= $this->Form->create($user) ?>
    <fieldset>
        <table class="user">
            <tr>
                <td class="label"><label>Username</label></td>
                <td><?= $this->Form->control('username', ['label' => false]) ?></td>
            </tr>
            <tr>
                <td class="label"><label>Password</label></td>
                <td><?= $this->Form->control('password', ['type' => 'password', 'label' => false]) ?></td>
            </tr>
            <tr>
                <td class="label"><label>First name</label></td>
                <td><?= $this->Form->control('first_name', ['label' => false]) ?></td>
            </tr>
            <tr>
                <td class="label"><label>Last name</label></td>
                <td><?= $this->Form->control('last_name', ['label' => false]) ?></td>
            </tr>
            <tr>
                <td class="label"><label>Email</label></td>
                <td><?= $this->Form->control('email', ['label' => false]) ?></td>
            </tr>
        </table>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>