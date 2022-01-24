<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Gallery $user
 */
?>
<div class="photos form">
    <h2>Add New Photo</h2>
    <?= $this->Form->create($photo) ?>
    <?= $this->Html->link(__('Back to Photos List'), ['action' => 'index'], ['class' => 'button back']) ?>
    <fieldset>
        <table class="photo">
            <tr>
                <td><label>Title</label></td>
                <td><?= $this->Form->control('title', ['label' => false]) ?></td>
            </tr>
            <tr>
                <td><label>Slug</label></td>
                <td><?= $this->Form->control('slug', ['label' => false]) ?></td>
            </tr>
            <tr>
                <td><label>Description</label></td>
                <td><?= $this->Form->control('description', ['label' => false]) ?></td>
            </tr>
            <tr>
                <td><label>Filename</label></td>
                <td><?= $this->Form->control('filename', ['label' => false]) ?></td>
            </tr>
            <tr>
                <td><label>Gallery</label></td>
                <td><?= $this->Form->control('gallery_id', ['label' => false]) ?></td>
            </tr>
            <tr>
                <td><label>Gallery Order</label></td>
                <td><?= $this->Form->control('gallery_order', ['label' => false]) ?></td>
            </tr>
            <tr>
                <td><label>Published</label></td>
                <td><?= $this->Form->control('published', ['label' => false]) ?></td>
            </tr>
        </table>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>