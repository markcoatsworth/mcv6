<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Gallery $gallery
 */
?>
<div class="galleries form">
    <h2>Edit Gallery: <?= $gallery->name ?></h2>
    <?= $this->Html->link(__('Back to Galleries List'), ['action' => 'index'], ['class' => 'button back']) ?>
    <?= $this->Form->create($gallery); ?>
    <fieldset>
        <table class="gallery">
            <tr>
                <td><label>Name</label></td>
                <td><?= $this->Form->control('name', ['label' => false]) ?></td>
            </tr>
            <tr>
                <td><label>Slug</label></td>
                <td><?= $this->Form->control('slug', ['label' => false]) ?></td>
            </tr>
        </table>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>