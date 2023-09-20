<nav class="navbar <?= $is_home ? '' : 'navbar--page' ?>">
    <h1 class="navbar--brand">CosmoDrôme</h1>
    <div class="navbar--buttons">
        <a class="navbar--button">Contact</a>
        <button class="navbar--button" onclick="toggleNavbar()"><i class="fas fa-bars"></i></button>
    </div>
</nav>
<div class="navbar--deployed navbar--deployed__inactive">   
    <button class="navbar--deployed--close" onclick="toggleNavbar()"><i class="fas fa-times"></i></button>
    <div class="navbar--deployed--links">
        <?php foreach ($sorted_pages as $sorted_page) { ?>
            <?php if (count($sorted_page['children']) == 0) { ?>
                <div class="navbar--deployed--link--container">
                    <a href="<?= $base_url . $sorted_page['url_path'] ?>" class="navbar--deployed--link <?= $url == $sorted_page['url_path'] ? 'navbar--deployed--link__active' : '' ?>"><?= $sorted_page['title'] ?></a>
                </div>
            <?php } else { ?>
                <div class="navbar--deployed--link--container navbar--dropdown--interaction">
                    <a href="<?= $base_url . $sorted_page['url_path'] ?>" class="navbar--deployed--link <?= $url == $sorted_page['url_path'] ? 'navbar--deployed--link__active' : '' ?>"><?= $sorted_page['title'] ?> <i class="fas fa-caret-down"></i></a>
                    <div class="navbar--deployed--dropdown">
                        <?php foreach ($sorted_page['children'] as $child) { ?>
                            <div class="navbar--deployed--link--container">
                                <a href="<?= $base_url . $child['url_path'] ?>" class="navbar--deployed--link navbar--deployed--dropdown--link <?= $url == $child['url_path'] ? 'navbar--deployed--link__active' : '' ?>"><?= $child['title'] ?></a>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            <?php } ?>
        <?php } ?>
</div>
</div>