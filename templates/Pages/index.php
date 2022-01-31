<div class="pages form">
    <h2><?= __('Page Manager') ?></h2>
    <?= $this->Html->link(__('New Page'), ['action' => 'add'], ['class' => 'button']) ?>
    <table class="index">
        <thead>
            <tr>
                <th>Name</th>
                <th>Slug</th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($pages as $page): ?>
            <tr>
                <td><?= h($page->name) ?></td>
                <td><?= h($page->slug) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $page->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $page->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $page->id], ['confirm' => __('Are you sure you want to delete page {0}?', $page->name)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>