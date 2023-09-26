<div class="modal--container">
    <div class="modal">
        <h3 class="modal--title">Modifier un utilisateur</h3>
        <form action="<?= $base_url ?>/users/modify-user/<?= $user['id'] ?>/confirm" method="POST">
            <label for="username" class="modal--label">Nom d'utilisateur</label>
            <input type="text" name="username" class="modal--input" value="<?= $user['username'] ?>" required>
            <label for="password" class="modal--label">Mot de passe</label>
            <input type="password" name="password" class="modal--input" placeholder="Nouveau mot de passe" required>
            <div class="modal--actions">
                <input type="submit" class="button button--primary" value="Valider la modification"> 
                <a href="<?= $base_url ?>/users" class="button button--danger">Annuler</a>
            </div>
        </form>
    </div>
</div>