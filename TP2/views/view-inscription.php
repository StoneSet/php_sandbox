<?php
var_dump($_POST);
?>
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
    ?>
    <div class="container container-form">
        <div class="row">
            <h1 class="center">Inscription</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Praesentium nobis tempora dolores, in corporis hic minus mollitia eos culpa doloribus earum consectetur velit dolorum necessitatibus dolor veniam similique ut natus. Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis veritatis dolores earum beatae, eum deleniti reprehenderit fuga sequi iure totam itaque vitae quaerat quam. Recusandae eaque labore explicabo perferendis voluptatum veritatis minus quaerat ipsam, in dignissimos nostrum? Atque soluta alias tempora? Laudantium nesciunt soluta obcaecati autem aliquam dignissimos officiis suscipit?</p>
            <form action="" method="post" class="col s12">
                <div class="row">
                    <div class="input-field col s6">
                        <input id="pseudo" type="text" class="validate" name="pseudo">
                        <label for="pseudo">Pseudo</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        <input id="password1" type="password" class="validate" name="password1">
                        <label for="password1">Password</label>
                    </div>
                    <div class="input-field col s6">
                        <input id="password2" type="password" name="password2" class="validate">
                        <label for="password2">Repeat password</label>
                    </div>
                </div>
                <div class="row">
                    <button id="send" class="btn waves-effect waves-light teal darken-3 col s12" type="submit" name="action">Créer un compte
                        <i class="material-icons right">send</i>
                    </button>
                    <div class="input-field right">
                        <a class="waves-effect waves-light btn-large" href="index.php">J'ai déjà un compte ?</a>
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