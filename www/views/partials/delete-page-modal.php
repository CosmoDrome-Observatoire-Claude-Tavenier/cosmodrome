<div class="modal--container">
    <div class="modal">
        <h3 class="modal--title">Supprimer une page</h3>
        <p class="modal--text">Êtes-vous sûr de vouloir supprimer cette page ?</p>
        <div class="modal--actions">
            <a href="<?= $base_url ?>/pages" class="button button--primary">Annuler</a>
            <a href="<?= $base_url ?>/pages/delete-page/<?= $page['id'] ?>/confirm" class="button">Supprimer</a>
        </div>
    </div>
</div>