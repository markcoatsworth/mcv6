<?= $this->Flash->render() ?>
<div class="users form">
    <fieldset>
        <h2>Login</h2>
        <?= $this->Form->create(); ?>
        <table class="users form">
            <tr>
                <td class="label"><label>Username</label></td>
                <td><?= $this->Form->control('username', ['required' => true, 'label' => false]) ?></td>
            </tr>
            <tr>
                <td class="label"><label>Password</label></td>
                <td><?= $this->Form->control('password', ['required' => true, 'label' => false]) ?></td>
            </tr>
        </table>
    </fieldset>
    <?= $this->Form->submit(__('Login')); ?>
    <?= $this->Form->end() ?>
</div>