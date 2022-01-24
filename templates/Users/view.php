<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="users form">
    <h2>User: <?= $user->username ?></h2>
    <?= $this->Html->link(__('Back to Users List'), ['action' => 'index'], ['class' => 'button back']) ?>
    <fieldset>
        <table class="user">
            <tr>
                <td><label>Username</label></td>
                <td><?= h($user->username) ?></td>
            </tr>
            <tr>
                <td><label>Email</label></td>
                <td><?= h($user->email) ?></td>
            </tr>
            <tr>
                <td><label>First name</label></td>
                <td><?= h($user->first_name) ?></td>
            </tr>
            <tr>
                <td><label>Last name</label></td>
                <td><?= h($user->last_name) ?></td>
            </tr>
        </table>
    </fieldset>
</div>

