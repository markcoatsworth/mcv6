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
                <td class="label"><label>Name</label></td>
                <td><?= $this->Form->control('name', ['label' => false]) ?></td>
            </tr>
            <tr>
                <td class="label"><label>Slug</label></td>
                <td><?= $this->Form->control('slug', ['label' => false]) ?></td>
            </tr>
            <tr>
                <td class="label"><label>Photos</label></td>
                <td>
                    <ul class="photos draggable">
                        <?php for ($pos = 0; $pos < count($gallery->photos); $pos++ ): ?>
                            <li draggable="true">
                                <?= $this->Form->control('photos.'.$pos.'.id', ['label' => false]); ?>
                                <?= $this->Form->control('photos.'.$pos.'.gallery_order', ['label' => false]); ?>
                                <table>
                                    <tr>
                                        <td class="tnail"><?= $this->Html->image('/photos/tnails/'.$gallery->photos[$pos]->filename); ?></td>
                                        <td class="title"><?= $gallery->photos[$pos]->title ?></td>
                                    </tr>
                                </table>
                            </li>
                        <?php endfor; ?>
                    </ul>
                </td>
            </tr>
        </table>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>