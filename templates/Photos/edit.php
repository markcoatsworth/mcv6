<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Gallery $gallery
 */
?>
<div class="photos form">
    <h2>Edit Photo: <?= $photo->title ?></h2>
    <?= $this->Form->create($photo, ['type' => 'file']) ?>
    <?= $this->Html->link(__('Back to Photos List'), ['action' => 'index'], ['class' => 'button back']) ?>
    <fieldset>
        <table class="photo">
            <tr>
                <td class="label"><label>Title</label></td>
                <td><?= $this->Form->control('title', ['label' => false]) ?></td>
            </tr>
            <tr>
                <td class="label"><label>Description</label></td>
                <td><?= $this->Form->control('description', ['label' => false]) ?></td>
            </tr>
            <tr>
                <td class="label"><label>Image</label></td>
                <td>
                    <?= $photo->filename ?><?= $this->Form->control('filename', ['type' => 'file', 'label' => false]) ?>
                    <?php echo $this->Html->image('/photos/'.$photo->filename); ?>
                </td>
            </tr>
            <tr>
                <td class="label"><label>Gallery</label></td>
                <td><?= $this->Form->control('gallery_id', ['options' => $galleries, 'label' => false]) ?></td>
            </tr>
            <tr>
                <td class="label"><label>Gallery Order</label></td>
                <td><?= $this->Form->control('gallery_order', ['label' => false]) ?></td>
            </tr>
            <tr>
                <td class="label"><label>Slug</label></td>
                <td><?= $this->Form->control('slug', ['label' => false]) ?></td>
            </tr>
            <tr>
                <td class="label"><label>Published</label></td>
                <td><?= $this->Form->control('published', ['label' => false]) ?></td>
            </tr>
        </table>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>