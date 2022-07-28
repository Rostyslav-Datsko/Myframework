<h1>Hi from Main/index</h1>

<?php if (!empty($names)): ?>
    <?php foreach ($names as $name ): ?>
        <div>
            <?= $name->id ?> <?= $name->name ?>
        </div>
    <?php endforeach; ?>
<?php endif; ?>
