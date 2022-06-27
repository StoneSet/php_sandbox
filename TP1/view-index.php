<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <title>Formulaire d'inscription</title>
    <script>
        $(document).ready(function() {
            $('select').formSelect();
        });

        $(document).ready(function() {
            $('.datepicker').datepicker();
        });
    </script>

    <nav class="deep-purple darken-4">
        <div class="nav-wrapper">
            <a href="#" class="brand-logo"><img class="logo" src="iia_logo.png" alt=""></a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a style="font-size:larger;" href="#">Formulaire d'inscription</a></li>
            </ul>
        </div>
    </nav>
</head>

<body>
    <?php
    if (isset($errors)) {
        foreach ($errors as $msg) {
            echo '<p class="error">', $msg, '</p>';
        }
    }
    function restore_text($element)
    {
        if (isset($_POST[$element])) {
            echo htmlspecialchars($_POST[$element]);
        }
    }
    function restoreRadio($element, $option)
    {
        if (isset($_POST[$element]) && $_POST[$element] == $option) {
            echo 'checked="checked"';
        }
    }
    function restoreVille($ville)
    {
        if (isset($_POST["ville"]) && ($_POST["ville"]) == $ville) {
            echo "selected";
        }
    }

    function restoreCheckBox($element)
    {
        if (isset($_POST[$element])) {
            echo htmlspecialchars($_POST[$element]);
        }
    }
    ?>
    <div class="container container-form">
        <div class="row">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="col s12">
                    <div class="row">
                        <div class="input-field col s6">
                            <input id="first_name" type="text" class="validate" name="prenom" value="<?php restore_text('prenom') ?>">
                            <label for="first_name">Prénom</label>
                        </div>
                        <div class="input-field col s6">
                            <input id="last_name" type="text" class="validate" name="nom" value="<?php restore_text('nom') ?>">
                            <label for="last_name">Nom</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s6">
                            <input id="password1" type="password" class="validate" name="password1">
                            <label for="password1">Password</label>
                        </div>
                        <div class="input-field col s6">
                            <input id="password2" type="password" class="validate" name="password2">
                            <label for="password2">Password confirmation</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input type=text name="bdate" id="bdate" class="datepicker " format="dd, m, yyyy'" showClearBtn="true">
                            <label for="bdate">Votre date d'anniversaire</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="email" type="email" class="validate" name="mail" value="<?php if (isset($_POST['mail']) == true) {
                                                                                                    echo $_POST['mail'];
                                                                                                } ?>">
                            <label for="email">Email</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field row col s12">
                            <select name="ville" id="ville-selected">
                                <option disabled selected>Selectionner votre ville</option>
                                <option value="1"<?php restoreVille("1"); ?>>Beaumont-en-Verdunois</option>
                                <option value="2"<?php restoreVille("2"); ?>>Bezonvaux</option>
                                <option value="3"<?php restoreVille("3"); ?>>Cumières-le-Mort-Homme</option>
                                <option value="4"<?php restoreVille("4"); ?>>Fleury-devant-Douaumont</option>
                                <option value="5"<?php restoreVille("5"); ?>>Haumont-près-Samogneux</option>
                                <option value="6"<?php restoreVille("6"); ?>>Louvemont-Côte-du-Poivre</option>
                            </select>
                            <label>Votre ville</label>
                        </div>
                    </div>
                    <div>
                        <div class="row">
                            <div class="row col s12">
                                <p>Civilité</p>

                                <label>
                                    <input id="e4_1" class="with-gap" name="civilite" type="radio" value="1" <?php restoreRadio('civilite', '1'); ?> />
                                    <span>Homme</span>
                                </label>
                                <label>
                                    <input id="e4_2" class="with-gap" name="civilite" type="radio" value="2" <?php restoreRadio('civilite', '2'); ?> />
                                    <span>Femme</span>
                                </label>
                                <label>
                                    <input id="e4_3" class="with-gap" name="civilite" type="radio" value="3" <?php restoreRadio('civilite', '3'); ?> />
                                    <span>Non genré</span>
                                </label>
                                <label>
                                    <input id="e4_4" class="with-gap" name="civilite" type="radio" value="4" <?php restoreRadio('civilite', '4'); ?> />
                                    <span>Je suis non
                                        binaire</span>
                                </label>
                                <label>
                                    <input id="e4_5" class="with-gap" name="civilite" type="radio" value="5" <?php restoreRadio('civilite', '5'); ?> />
                                    <span>Un troll</span>
                                </label>
                                <br />
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="row">
                            <div class="row col s12">
                                <p>Sport (optionnel)</p>

                                <label>
                                    <input id="e5_1" type="checkbox" name="checkbox []" class="filled-in" value="football" <?php restoreCheckBox('civilite', '1'); ?> />
                                    <span>Football</span>
                                </label>
                                <label>
                                    <input id="e5_2" type="checkbox" name="checkbox []" class="filled-in" value="tennis" />
                                    <span>Tennis</span>
                                </label>
                                <label>
                                    <input id="e5_3" type="checkbox" name="checkbox []" class="filled-in" value="handball" />
                                    <span>Handball</span>
                                </label>
                                <label>
                                    <input id="e5_4" type="checkbox" name="checkbox []" class="filled-in" value="equitation" />
                                    <span>Equitation</span>
                                </label>
                                <label>
                                    <input id="e5_5" type="checkbox" name="checkbox []" class="filled-in" value="natation" />
                                    <span>Natation</span>
                                </label>
                                <label>
                                    <input id="e5_6" type="checkbox" name="checkbox []" class="filled-in" value="golf" />
                                    <span>Golf</span>
                                </label>
                                <br />
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="row">
                            <div class="row col s12">
                                <p>Votre photo</p>
                                <div class="file-field input-field">
                                    <div class="btn teal darken-3">
                                        <span>Parcourir</span>
                                        <input type="file" accept="image/*,.pdf" name="file" />
                                    </div>

                                    <div class="file-path-wrapper">
                                        <input class="file-path validate" type="text" placeholder="Télécharger un fichier" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field row col s12">
                            <textarea id="textarea" class="materialize-textarea" name="textarea"><?php restore_text('textarea') ?></textarea>
                            <label for="textarea">Description</label>
                        </div>
                    </div>

                    <div class="row">
                        <br>
                        <button id="send" class="btn waves-effect waves-light teal darken-3 col s12" type="submit" name="action">Envoyer le formulaire
                            <i class="material-icons right">send</i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>

<footer class="page-footer deep-purple darken-4">
    <div class="container">
        <div class="row">
            <div class="col l6 s12">
                <h5 class="white-text">CCI Pays la loire</h5>
                <p class="grey-text text-lighten-4">
                    Institut Informatique Appliquée
                    Laval, Saint Nazaire, Saumur
                </p>
            </div>
            <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Accès rapides</h5>
                <ul>
                    <li><a class="grey-text text-lighten-3" href="#!">Nos formations</a></li>
                    <li><a class="grey-text text-lighten-3" href="#!">Nos métiers</a></li>
                    <li><a class="grey-text text-lighten-3" href="#!">Les actualités</a></li>
                    <li><a class="grey-text text-lighten-3" href="#!">Centre de formation CCI53</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            © Institut Informatique Appliquée - CCI 2022
            <a class="grey-text text-lighten-4 right" href="mailto:ambassadederussie@russia.ru">Nous contacter</a>
        </div>
    </div>
</footer>

</html>