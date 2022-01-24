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
            <td><label>Name</label></td>
            <td><?= h($gallery->name) ?></td>
        </tr>
        <tr>
            <td><label>Slug</label></td>
            <td><?= h($gallery->slug) ?></td>
        </tr>
    </table>
</div>

