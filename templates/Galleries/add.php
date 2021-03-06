<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Gallery $user
 */
?>
<div class="galleries form">
    <h2>Add New Gallery</h2>
    <?= $this->Html->link(__('Back to Galleries List'), ['action' => 'index'], ['class' => 'button back']) ?>
    <?= $this->Form->create($gallery); ?>
    <fieldset>
        <table class="gallery">
            <tr>
                <td class="label"><label>Name</label></td>
                <td><?= $this->Form->control('name', ['label' => false]) ?></td>
            </tr>
            <tr>
                <td class="label"><label>Slug</label></td>
                <td><?= $this->Form->control('slug', ['label' => false]) ?></td>
            </tr>
        </table>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
