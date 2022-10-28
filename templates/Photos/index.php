<div class="photos form">
    <h2><?= __('Photo Manager') ?></h2>
    <table class="menu">
        <tbody>
            <tr>
                <td class="new"><?= $this->Html->link(__('New Photo'), ['action' => 'add'], ['class' => 'button']) ?></td>
                <td class="filter">
                    <form id="gallery-filter" method="GET">
                        <label>Filter by gallery:</label>
                        <select name="gallery" class="gallery">
                            <option name="all" value="all">--</option>
                            <?php foreach($galleries as $gallery) : ?>
                                <?php $selected = ($gallery['slug'] == $selectedGallery) ? "selected" : ""; ?>
                                <option name="<?= $gallery['slug'] ?>" value="<?= $gallery['slug'] ?>" <?= $selected ?>><?= $gallery['name'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </form>
                </td>
            </tr>
        </tbody>
    </table>
    <table class="index">
        <thead>
            <tr>
                <th class="name">Name</th>
                <th class="description">Description</th>
                <th class="image">Image</th>
                <th class="gallery">Gallery</th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($photos as $photo): ?>
            <tr>
                <td><?= h($photo->title) ?></td>
                <td><?= h($photo->description) ?></td>
                <td><?php echo $this->Html->image('/img/tnails/'.$photo->filename); ?></td>
                <td><?= h($photo->gallery['name']) ?></td>
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