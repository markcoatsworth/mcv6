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
            <th><?= __('Photo') ?></th>
            <td><?= h($photo->title) ?></td>
        </tr>
        <tr>
            <th><?= __('Image') ?></th>
            <td><?= h($photo->filename) ?></td>
        </tr>
        <tr>
            <th><?= __('Description') ?></th>
            <td><?= h($photo->description) ?></td>
        </tr>
        <tr>
            <th><?= __('Slug') ?></th>
            <td><?= h($photo->slug) ?></td>
        </tr>
        <tr>
            <th><?= __('Gallery') ?></th>
            <td><?= h($photo->gallery_id) ?></td>
        </tr>
        <tr>
            <th><?= __('Gallery Order') ?></th>
            <td><?= h($photo->gallery_order) ?></td>
        </tr>
        <tr>
            <th><?= __('Published') ?></th>
            <td><?= h($photo->published) ?></td>
        </tr>
    </table>
</div>