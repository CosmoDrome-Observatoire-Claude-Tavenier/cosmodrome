<div class="modal--container">
    <div class="modal">
        <h3 class="modal--title">Ajouter un utilisateur</h3>
        <form action="<?= $base_url ?>/users/add/confirm" method="POST">
            <label for="username" class="modal--label">Nom d'utilisateur</label>
            <input type="text" name="username" class="modal--input" placeholder="Nom d'utilisateur">
            <label for="password" class="modal--label">Mot de passe</label>
            <input type="password" name="password" class="modal--input" placeholder="Mot de passe">
            <div class="modal--actions">
                <input type="submit" class="button button--primary" value="Ajouter"> 
                <a href="<?= $base_url ?>/users" class="button button--danger">Annuler</a>
            </div>
        </form>
    </div>
</div>