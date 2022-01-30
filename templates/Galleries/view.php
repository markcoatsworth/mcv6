<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="galleries form">
    <h2>Gallery: <?= $gallery->name ?></h2>
    <?= $this->Html->link(__('Back to Galleries List'), ['action' => 'index'], ['class' => 'button back']) ?>
    <table>
        <tr>
            <td class="label"><label>Name</label></td>
            <td><?= h($gallery->name) ?></td>
        </tr>
        <tr>
            <td class="label"><label>Slug</label></td>
            <td><?= h($gallery->slug) ?></td>
        </tr>
        <tr>
            <td class="label"><label>Photos</label></td>
            <td>
                <ul class="photos">
                    <?php foreach ($gallery->photos as $photo): ?>
                        <li>
                            <table>
                                <tr>
                                    <td class="tnail"><?= $this->Html->image('/photos/tnails/'.$photo->filename); ?></td>
                                    <td class="title"><?= $photo->title ?></td>
                                </tr>
                            </table>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </td>
        </tr>
    </table>
</div>

