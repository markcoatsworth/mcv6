<h2><?php print(str_replace("-", " ", $slug)); ?></h2>

<div class="gallery">
    <ul class="photos">
    <?php foreach ($photos->photos as $photo): ?>
        <li>
            <img src="/img/photos/<?= $photo->filename ?>" />
            <p class="title"><?= $photo->title ?></p>
            <p class="description"><?= $photo->description ?></p>
        </li>
    <?php endforeach; ?>
    </ul>
</div>
