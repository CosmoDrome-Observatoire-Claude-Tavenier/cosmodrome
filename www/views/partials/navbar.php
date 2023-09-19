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
        <div class="navbar--deployed--link--container">
            <a href="#" class="navbar--deployed--link navbar--deployed--link__active">Actif</a>
        </div>
        <div class="navbar--deployed--link--container navbar--dropdown--interaction">
            <a href="#" class="navbar--deployed--link">Dropdown <i class="fas fa-caret-down"></i></a>
            <div class="navbar--deployed--dropdown">
                <div class="navbar--deployed--link--container">
                    <a href="#" class="navbar--deployed--link navbar--deployed--dropdown--link">Simple</a>
                </div>
                <div class="navbar--deployed--link--container">
                    <a href="#" class="navbar--deployed--link navbar--deployed--dropdown--link">Simple</a>
                </div>
                <div class="navbar--deployed--link--container">
                    <a href="#" class="navbar--deployed--link navbar--deployed--dropdown--link">Simple</a>
                </div>
                <div class="navbar--deployed--link--container">
                    <a href="#" class="navbar--deployed--link navbar--deployed--dropdown--link">Simple</a>
                </div>
            </div>
        </div>
        <div class="navbar--deployed--link--container navbar--dropdown--interaction">
            <a href="#" class="navbar--deployed--link">Dropdown <i class="fas fa-caret-down"></i></a>
            <div class="navbar--deployed--dropdown">
                <div class="navbar--deployed--link--container navbar--dropdown--interaction">
                    <a href="#" class="navbar--deployed--link navbar--deployed--dropdown--link">Dropdown <i class="fas fa-caret-down"></i></a>
                    <div class="navbar--deployed--dropdown">
                        <div class="navbar--deployed--link--container">
                            <a href="#" class="navbar--deployed--link navbar--deployed--dropdown--link">Simple</a>
                        </div>
                        <div class="navbar--deployed--link--container">
                            <a href="#" class="navbar--deployed--link navbar--deployed--dropdown--link">Simple</a>
                        </div>
                        <div class="navbar--deployed--link--container">
                            <a href="#" class="navbar--deployed--link navbar--deployed--dropdown--link">Simple</a>
                        </div>
                    </div>
                    <a href="#" class="navbar--deployed--link navbar--deployed--dropdown--link">Simple</a>
                    <a href="#" class="navbar--deployed--link navbar--deployed--dropdown--link">Simple</a>
                    <a href="#" class="navbar--deployed--link navbar--deployed--dropdown--link">Simple</a>
                </div>
            </div>
        </div>
        <div class="navbar--deployed--link--container">
            <a href="#" class="navbar--deployed--link">Simple</a>
        </div>
        <div class="navbar--deployed--link--container">
            <a href="#" class="navbar--deployed--link">Simple</a>
        </div>
        <div class="navbar--deployed--link--container">
            <a href="#" class="navbar--deployed--link">Simple</a>
        </div>
        <div class="navbar--deployed--link--container">
            <a href="#" class="navbar--deployed--link">Simple</a>
        </div>
    </div>
</div>