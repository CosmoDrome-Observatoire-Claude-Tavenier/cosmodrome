<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/0fefb6d925.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/script.js" defer></script>
    <title>CosmoDrôme</title>
</head>

<body>
    <header class="page--header">
        <h1 class="page--title"><?= $page['title'] ?></h1>
    </header>

    <main class="page--container">
        <?php foreach ($page['components'] as $component) : ?>
            <?php if ($component['type'] == 'title') : ?>
                <h1><?= $component['value'] ?></h1>
            <?php elseif ($component['type'] == 'subtitle') : ?>
                <h2><?= $component['value'] ?></h2>
            <?php elseif ($component['type'] == 'text') : ?>
                <p><?= $component['value'] ?></p>
            <?php elseif ($component['type'] == 'note') : ?>
                <em><?= $component['value'] ?></em>
            <?php elseif ($component['type'] == 'picture') : ?>
                <img src="./medias/<?= $component['value'] ?>" alt="<?= $component['type'] ?>">
            <?php elseif ($component['type'] == 'map') : ?>
                <iframe src="<?= $component['value'] ?>" allowfullscreen loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <?php endif; ?>
        <?php endforeach; ?>
    </main>
</body>

</html>