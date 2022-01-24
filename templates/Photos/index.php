<div class="photos form">
    <h2><?= __('Photos') ?></h2>
    <?= $this->Html->link(__('New Photo'), ['action' => 'add'], ['class' => 'button']) ?>
    <table class="index">
        <thead>
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th>Image</th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($photos as $photo): ?>
            <tr>
                <td><?= h($photo->title) ?></td>
                <td><?= h($photo->description) ?></td>
                <td><?= h($photo->filename) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $photo->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $photo->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $photo->id], ['confirm' => __('Are you sure you want to delete photo {0}?', $photo->title)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>