<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
 ?>
<div class="photos form">
    <h2>Photo: <?= $photo->title ?></h2>
    <?= $this->Html->link(__('Back to Photos List'), ['action' => 'index'], ['class' => 'button']) ?>
    <table>
        <tr>
            <td class="label"><label>Photo</label></td>
            <td><?= $photo->title ?></td>
        </tr>
        <tr>
            <td class="label"><label>Image</label></td>
            <td><?php echo $this->Html->image('/img/photos/'.$photo->filename); ?></td>
        </tr>
        <tr>
            <td class="label"><label>Description</label></td>
            <td><?= $photo->description ?></td>
        </tr>
        <tr>
            <td class="label"><label>Slug</label></td>
            <td><?= $photo->slug ?></td>
        </tr>
        <tr>
            <td class="label"><label>Gallery</label></td>
            <td><?= $photo->gallery->name ?></td>
        </tr>
        <tr>
            <td class="label"><label>Gallery order</label></td>
            <td><?= $photo->gallery_order ?></td>
        </tr>
        <tr>
            <td class="label"><label>Published</label></td>
            <td><?= $photo->published ?></td>
        </tr>
    </table>
</div>