<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8" />
</head>
<body>
<form method="post" action="action.php">
    <fieldset>
        <legend>Création de votre compte</legend>
        <label for="name">Nom d'utilisateur</label>
        <p class="help-text">
            Le nom d'un utilisateur ne peut contenir plus de 20 caractères et ne doit  contenir que des lettres.
        </p>
        <input type="text" name="name" id="name" required placeholder="Saisissez votre nom">
        <label for="email">Adresse e-mail</label>
        <p class="help-text">Il doit s'agir d'un e-mail valide</p>
        <input type="text" name="email" id="email" required placeholder="Saisissez votre email">
        <label for="password">Votre mot de passe</label>
        <p class="help-text">
            Le mot de passe ne peut contenir que des chiffres et des lettres. Il doit disposer d'au moins 6 caractères.
        </p>
        <input type="password" name="password" id="password" required placeholder="Saisissez votre mot de passe">
        <label for="birthDate">Votre date de naissance</label>
        <p class="help-text">
            L'utilisateur doit être une personne majeure
        </p>
        <input type="date" name="birthDate" id="birthDate" required placeholder="Saisissez votre date de naissance">
        <label for="comment">Commentaire</label>
        <p class="help-text">
            Le commentaire ne peut excéder plus de 200 caractères
        </p>
        <textarea name="comment" id="comment" cols="30" rows="10"></textarea>
        <button type="submit">Soumettre le formulaire</button>
    </fieldset>
</form>
</body>
  <style>
    /**
      Attention, ce CSS est là uniquement pour rendre le formulaire "agréable" à la lecture sans que vous n'ayez
      à récupérer deux fichiers distincts.
      Dans un cas d'usage "réel", ces éléments doivent être externalisés
        */
    body {
        font-family: Calibri, serif;
    }
    form {
        max-width: 50%;
    }
    form label {
        display: block;
        font-weight: bold;
        margin-bottom: 10px;
    }
    fieldset {
        border: 1px solid lightgray;
        background-color: rgba(225, 233, 255, 0.25);
    }
    legend {
        font-style: italic;
        font-size: 1.1em;
        padding: 5px;
    }
    form input, form textarea {
        display: inline-block;
        margin-bottom: 10px;
        padding: 10px;
        width: 80%;
    }
    button[type=submit] {
        padding: 10px;
        margin-top: 15px;
        width: auto;
    }
    .help-text {
        color: #2b2b2b;
        font-size: 12px;
    }
  </style>
</html>

