<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/admin.css">
    <link rel="stylesheet" href="../css/fonts.css">
    <title>CosmoDrôme</title>
</head>

<body>
    <div class="login--container">
        <h1>Connexion</h1>
        <form class="login--form" action="<?= $base_url ?>/login" method="post">
            <label for="username">Nom d'utilisateur</label>
            <input type="text" name="username" placeholder="Ex: Jean Dupont">
            <label for="password">Mot de passe</label>
            <input type="password" name="password" placeholder="Ex: 123Soleil">
            <input type="submit" value="Se connecter">
        </form>
    </div>
</body>

</html>