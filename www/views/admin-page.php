<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/0fefb6d925.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/admin.css">
    <link rel="stylesheet" href="../css/fonts.css">
    <script src="../js/admin.js" defer></script>
    <link rel="stylesheet" href="../../css/admin.css">
    <link rel="stylesheet" href="../../css/fonts.css">
    <script src="../../js/admin.js" defer></script>
    <link rel="stylesheet" href="../../../css/admin.css">
    <link rel="stylesheet" href="../../../css/fonts.css">
    <script src="../../js/admin.js" defer></script>
    <title>CosmoDrôme</title>
</head>
<body>
    <main class="page--container">
        <div class="page--top">
            <h1 class="page--title"><?= $page_title ?></h1>
            <?php if ($url == '/users'): ?>
                <div class="page--actions">
                    <a href="<?= $base_url ?>/users/add" class="button button--primary">Ajouter un utilisateur</a>
                </div>
            <?php elseif ($url == '/pages'): ?>
                <div class="page--actions">
                    <a href="#" class="button button--primary">Créer une page</a>
                </div>
            <?php elseif ($url == '/medias'): ?>
                <div class="page--actions">
                    <a href="#" class="button button--primary">Envoyer un média</a>
                </div>
            <?php endif; ?>
        </div>

        <?php if ($url == '/users'): ?>
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nom d'utilisateur</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($users as $user): ?>
                            <tr>
                                <td><?= $user['id'] ?></td>
                                <td><?= $user['username'] ?></td>
                                <td>
                                    <a href="<?= $base_url ?>/users/modify-user/<?= $user['id'] ?>" class="button button--primary">Modifier</a>
                                    <a href="<?= $base_url ?>/users/delete-user/<?= $user['id'] ?>" class="button button--danger">Supprimer</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            <?php endif; ?>

    </main>
</body>
</html>