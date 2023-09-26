<div class="modal--container">
    <div class="modal">
        <h3 class="modal--title">Modifier une page</h3>
        <form action="<?= $base_url ?>/pages/modify-page/<?= $page['id'] ?>/confirm" method="POST">
            <label for="title" class="modal--label">Titre de la page</label>
            <input type="text" name="title" class="modal--input" placeholder="Titre de la page" value="<?= $page['title'] ?>" required>
            <label for="url_path" class="modal--label">Chemin de la page</label>
            <input type="text" name="url_path" class="modal--input" placeholder="Chemin de la page. Ex: /about" value="<?= $page['url_path'] ?>" required>
            <label for="position" class="modal--label">Position de la page</label>
            <input type="number" name="position" class="modal--input" placeholder="Position de la page" value="<?= $page['position'] ?>">
            <label for="parent_id" class="modal--label">Page parente</label>
            <input type="number" name="parent_id" class="modal--input" placeholder="Page parente" value="<?= $page['parent_id'] ?>">
            <div class="modal--actions">
                <input type="submit" class="button button--primary" value="Valider la modification"> 
                <a href="<?= $base_url ?>/pages" class="button button--danger">Annuler</a>
            </div>
        </form>
    </div>
</div>