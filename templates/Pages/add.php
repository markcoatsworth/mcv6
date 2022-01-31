<?php
/**
 * @var \App\View\AppView $this
 */
?>
<div class="pages form">
    <h2>Add New Page</h2>
    <?= $this->Html->link(__('Back to Pages List'), ['action' => 'index'], ['class' => 'button back']) ?>
    <?= $this->Form->create($page); ?>
    <fieldset>
        <table class="page">
            <tr>
                <td class="label"><label>Name</label></td>
                <td><?= $this->Form->control('name', ['label' => false]) ?></td>
            </tr>
            <tr>
                <td class="label"><label>Slug</label></td>
                <td><?= $this->Form->control('slug', ['label' => false]) ?></td>
            </tr>
            <tr>
                <td class="label"><label>Content</label></td>
                <td><?= $this->Form->control('content', ['label' => false]) ?></td>
            </tr>
        </table>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
