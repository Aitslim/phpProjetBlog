<form method="POST" action="index.php">
    <fieldset>
        <legend>Connectez-vous à votre compte</legend>
        <div class="form-group mb-2">
            <label for="pseudo">Pseudonyme</label>
            <input type="text" name="login" class="form-control" id="pseudo" aria-describedby="pseudo" placeholder="Entrez votre pseudo">
        </div>
        <div class="form-group mb-2">
            <label for="password">Mot de passe</label>
            <input type="password" name="password" class="form-control" id="password" aria-describedby="mot de passe" placeholder="Entrez votre mot de passe">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </fieldset>
</form>