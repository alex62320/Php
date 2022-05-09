<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form post</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Form post</h1>
                <form action="/form-validate.php" method="post">

                    <!-- version avec php -->
                    <div class="mb-3">
                        <label for="test" class="form-label">Test php</label>
                        <input id="test" class="form-control 
                        <?php if ($post && empty($errors['test'])): ?>
                        is-valid
                        <?php endif ?>
                        <?php if ($post && !empty($errors['test'])): ?>
                        is-invalid
                        <?php endif ?>
                        " type="text" name="test" value="" placeholder="foo bar baz">
                        <div class="form-text">Texte d'aide pour remplir le champs</div>
                        <?php if ($post && empty($errors['test'])): ?>
                        <div class="valid-feedback">
                            Le champ est correctement rempli.
                        </div>
                        <?php endif ?>
                        <?php if ($post && !empty($errors['test'])): ?>
                            <div class="invalid-feedback">
                                <?= $errors['test'] ?>
                            </div>
                        <?php endif ?>
                    </div>
                    <!-- version formulaire vierge -->
                    < class="mb-3">
                        <label for="test" class="form-label">Test</label>
                        <input id="test" class="form-control 
                        " type="text" name="test" value="" placeholder="foo bar baz">
                        <div class="form-text">Texte d'aide pour remplir le champs</div>
                    <!-- version formulaire correct -->
                    <div class="mb-3">
                        <label for="test" class="form-label">Test</label>
                        <input id="test" class="form-control is-valid" type="text" name="test" value="" placeholder="foo bar baz">
                        <div class="form-text">Texte d'aide pour remplir le champs</div>
                        <div class="valid-feedback">
                            Le champ est correctement rempli.
                        </div>
                    </div>
                    <!-- version formulaire erreur -->
                    <div class="mb-3">
                        <label for="test" class="form-label">Test</label>
                        <input id="test" class="form-control is-invalid" type="text" name="test" value="" placeholder="foo bar baz">
                        <div class="form-text">Texte d'aide pour remplir le champs</div>
                        <div class="invalid-feedback">
                            Le champ n'est pas correctement rempli.
                        </div>
                    </div>


                    <div class="mb-3">
                        <input class="form-control" type="text" name="login" id="login" placeholder="votre login" required>
                    </div>
                    <div class="mb-3">
                        <input class="form-control" type="password" name="password" id="password" placeholder="votre mot de passe" required>
                    </div>
                    <div class="mb-3">
                        <p>Choissisez votre fruits préféré</p>
                        <div class="form-check">
                            <input type="radio" name="fruit" id="fruit_1" value="ananas">
                            <label class="form-check-label" for="fruit_1">Ananas</label>
                        </div>
                        <div class="form-check">
                            <input type="radio" name="fruit" id="fruit_1" value="pomme">
                            <label class="form-check-label" for="fruit_1">pomme</label>
                        </div>
                        <div class="form-check">
                            <input type="radio" name="fruit" id="fruit_2" value="banane">
                            <label class="form-check-label" for="fruit_2">banane</label>
                        </div>
                        <div class="form-check">
                            <input type="radio" name="fruit" id="fruit_3" value="cerise">
                            <label class="form-check-label" for="fruit_3">cerise</label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <p>Vos plat préféré :</p>
                        <div class="from-check">
                            <input type="checkbox" class="form-check-input" name="plat[]" id="plat_1" value="lasagne">
                            <label for="plat_1" class="form-check-label">lasagne</label>
                        </div>
                        <div class="from-check">
                            <input type="checkbox" class="form-check-input" name="plat[]" id="plat_2" value="ramen">
                            <label for="plat_2" class="form-check-label">ramen</label>
                        </div>
                        <div class="from-check">
                            <input type="checkbox" class="form-check-input" name="plat[]" id="plat_3" value="entrecote">
                            <label for="plat_3" class="form-check-label">entrecôte</label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <p>Votre film préféré :</p>
                        <!-- l'attribute size permet de choisir le nombre d'éléments affichés en même temps -->
                        <!-- <select name="film" id="film" size="2"> -->
                        <select name="film" id="film">
                            <option value="interstellar">Interstellar</option>
                            <option value="fight club">Fight Club</option>
                            <!-- l'attribut selected permet de choisir le nombre d'élément est sélectionné par défaut un choix par defaut -->
                            <option value="shining">Shining</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <p>Vos chanteur préférés :</p>
                        <!-- pour que le champs soit vraiment à sélection multiple,
                         il faut ajouter les crochets "[]" dans le name et l'attribut "multiple" -->
                        <select name="singers[]" id="singers" size="2" multiple>
                            <option id="singers_1" value="céline dion">Céline Dion</option>
                            <option id="singers_2" value="likin park">Likin Park</option>
                            <option id="singers_3" value="jean-jacques goldman">Jean-jacques Goldman</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <button class =" btn btn-primary" type="submit">Valider</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>