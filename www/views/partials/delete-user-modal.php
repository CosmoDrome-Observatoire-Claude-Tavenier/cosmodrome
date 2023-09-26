<div class="modal--container">
    <div class="modal">
        <h3 class="modal--title">Supprimer un utilisateur</h3>
        <p class="modal--text">Êtes-vous sûr de vouloir supprimer cet utilisateur ?</p>
        <div class="modal--actions">
            <a href="<?= $base_url ?>/users" class="button button--primary">Annuler</a>
            <a href="<?= $base_url ?>/users/delete-user/<?= $user['id'] ?>/confirm" class="button">Supprimer</a>
        </div>
    </div>
</div>