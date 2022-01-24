<div class="galleries form">
    <h2><?= __('Galleries') ?></h2>
    <?= $this->Html->link(__('New Gallery'), ['action' => 'add'], ['class' => 'button']) ?>
    <table class="index">
        <thead>
            <tr>
                <th>Name</th>
                <th>Slug</th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($galleries as $gallery): ?>
            <tr>
                <td><?= h($gallery->name) ?></td>
                <td><?= h($gallery->slug) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $gallery->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $gallery->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $gallery->id], ['confirm' => __('Are you sure you want to delete gallery {0}?', $gallery->name)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>