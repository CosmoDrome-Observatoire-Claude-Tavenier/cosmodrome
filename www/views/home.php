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
    <header class="hero">
        <div class="hero--container">
            <div class="hero--titles">
                <h2 class="hero--subtitle">Observatoire Claude Tavenier</h2>
                <h1 class="hero--title">CosmoDrôme</h1>
            </div>
            <p class="hero--content">Notre but est de promouvoir et développer l'activité astronomique avec pour
                principale ambition la
                vulgarisation de cette discipline. Notre volonté est de rendre accessible à tous la possibilité de
                découvrir
                et de pratiquer l'astronomie, quel que soit le niveau de connaissances de chacun.</p>
            <div class="hero--buttons">
                <a class="hero--button">Découvrir</a>
                <a class="hero--button">Réserver</a>
            </div>
        </div>
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
            <?php elseif ($component['type'] == 'link') : ?>
                <?php
                    // Cleaning the link
                    $cleaned_link = str_replace('https://', '', $component['value']);
                    $cleaned_link = str_replace('http://', '', $cleaned_link);
                    $cleaned_link = explode('/', $cleaned_link)[0];
                ?>

                <a href="<?= $component['value'] ?>" target="__blank"><?= $cleaned_link ?></a>
            <?php elseif ($component['type'] == 'price') : ?>
                <?php $component['value'] = explode('|*|', $component['value']); ?>
                <table>
                    <thead>
                        <tr>
                            <th>Tranche d'âge</th>
                            <th>Prix</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?=  $component['value'][1] ?></td>
                            <?php if ($component['value'][0] == 0) : ?>
                                <td>Gratuit</td>
                            <?php else : ?>
                                <td><?= $component['value'][0] ?>€ TTC</td>
                            <?php endif; ?>
                        </tr>
                        <tr>
                            <td><?=  $component['value'][3] ?></td>
                            <?php if ($component['value'][2] == 0) : ?>
                                <td>Gratuit</td>
                            <?php else : ?>
                                <td><?= $component['value'][2] ?>€ TTC</td>
                            <?php endif; ?>
                        </tr>
                    </tbody>
                </table>
            <?php elseif ($component['type'] == 'picture') : ?>
                <img src="./medias/<?= $component['value'] ?>" alt="<?= $component['type'] ?>">
            <?php elseif ($component['type'] == 'map') : ?>
                <iframe src="<?= $component['value'] ?>" allowfullscreen loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <?php endif; ?>
        <?php endforeach; ?>
    </main>
</body>

</html>