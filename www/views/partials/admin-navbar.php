<nav class="navbar">
    <div class="navbar--right">
        <a href="<?= $base_url ?>" class="navbar--brand">CosmoDrôme</a>
    </div>
    <div class="navbar--right">
        <div class="search">
            <input type="text" class="search--input" placeholder="Rechercher">
            <button class="search--button"><i class="fas fa-search"></i></button>
        </div>
        <div class="account">
            <div class="account--icon" onclick="toggleAccountActions()"><i class="fas fa-user"></i></div>
            <div class="account--actions">
                <div class="account--name">
                    👋
                    <?= $_SESSION['username'] ?>
                </div>
                <a href="<?= $base_url ?>/change-password" class="account--change-password">Changer mot de passe</a>
                <a href="<?= $base_url ?>/logout" class="account--logout">Déconnexion</a>
            </div>
        </div>
    </div>
</nav>

<div class="sidebar">
<div class="search search--sidebar">
            <input type="text" class="search--input" placeholder="Rechercher">
            <button class="search--button"><i class="fas fa-search"></i></button>
        </div>

    <a class="sidebar--item <?= $url == '/' ? 'sidebar--item__active' : '' ?>" href="<?= $base_url ?>/">
        <i class="fas fa-home"></i>
        <span>Accueil</span>
    </a>

    <a class="sidebar--item <?= $url == '/pages' ? 'sidebar--item__active' : '' ?>" href="<?= $base_url ?>/pages">
        <i class="fas fa-file-alt"></i>
        <span>Pages</span>
    </a>

    <a class="sidebar--item <?= $url == '/medias' ? 'sidebar--item__active' : '' ?>" href="<?= $base_url ?>/medias">
        <i class="fas fa-images"></i>
        <span>Médias</span>
    </a>

    <a class="sidebar--item <?= $url == '/users' ? 'sidebar--item__active' : '' ?>" href="<?= $base_url ?>/users">
        <i class="fas fa-users"></i>
        <span>Utilisateurs</span>
    </a>
</div>