<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link rel="icon" type="image/x-icon" href="img/favicon.ico">
    <title>TP3 - index</title>
    <script>
        $(document).ready(function() {
            $('select').formSelect();
        });
    </script>
    <nav class="deep-purple darken-4">
        <div class="nav-wrapper">
            <a href="/" class="brand-logo"><img class="logo" src="img/iia_logo.png" alt=""></a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a style="font-size:larger;" href="#">TP3 - index</a></li>
            </ul>
        </div>
    </nav>
</head>

<main>
    <div class="container container-form">
        <div class="row">
            <h1>Gestion de l'IIA</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Praesentium nobis tempora dolores, in corporis hic minus mollitia eos culpa doloribus earum consectetur velit dolorum necessitatibus dolor veniam similique ut natus. Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis veritatis dolores earum beatae, eum deleniti reprehenderit fuga sequi iure totam itaque vitae quaerat quam. Recusandae eaque labore explicabo perferendis voluptatum veritatis minus quaerat ipsam, in dignissimos nostrum? Atque soluta alias tempora? Laudantium nesciunt soluta obcaecati autem aliquam dignissimos officiis suscipit?</p>
            <div class="col s12">
                <form action="search.php" method="post">
                    <div class="input-field col s6">
                        <input id="searchBox" type="text" name="searchBox" class="validate">
                        <label for="searchBox">Rechercher un étudiant...</label>
                    </div>
                    <div class="input-field col s2">
                        <button id="search_send" class="btn waves-effect waves-light deep-purple darken-4 col s12" type="submit" name="action">OK
                            <i class="material-icons right">keyboard_return</i>
                        </button>
                    </div>
                </form>
                <div class="input-field col s4">
                    <a href="student.php?p=all">
                        <button id="getallstudents" class="btn waves-effect waves-light deep-purple darken-4 col s12" type="button" name="action">Voir tous les étudiants
                            <i class="material-icons right">person</i>
                        </button>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col s12">
                    <form action="addPromotion.php" method="post">
                        <div class="input-field col s4">
                            <input id="promotion" type="text" name="promotion" class="validate">
                            <label for="promotion">Créer une promotion...</label>
                        </div>
                        <div class="input-field col s2">
                            <button id="send" class="btn waves-effect waves-light deep-purple darken-4 col s12" type="submit" name="action">OK
                                <i class="material-icons right">keyboard_return</i>
                            </button>
                        </div>
                    </form>
                    <div class="input-field col s3">
                        <a href="index.php?view=json">
                            <button id="json" class="btn waves-effect waves-light deep-purple darken-4 col s12" type="submit" name="json">Export to JSON
                                <i class="material-icons right">dehaze</i>
                            </button>
                        </a>
                    </div>
                    <div class="input-field col s3">
                        <a href="index.php?view=csv">
                            <button id="csv" class="btn waves-effect waves-light deep-purple darken-4 col s12" type="button" name="csv">Export to CSV
                                <i class="material-icons right">description</i>
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <hr>
            <div class="col s12">
                <?php
                require '../repository/promotion.php';
                $countPromotion = countPromotion();
                foreach (getPromotions() as $promotion) {
                    $promotionsid = $promotion['id'];
                    $link = "student.php?p=" . $promotionsid;
                    $promolink = "delete.php?p=" . $promotionsid;
                ?>
                    <ul>
                        <li>

                            <a href="<?php echo $link ?>" style="font-weight: bold; font-size: larger;">
                                <?php echo $promotion['nom']; ?>
                            </a>
                            <a href="<?php echo $promolink ?>">
                                <img style="margin-left: 15px; margin-top: 5px;" src="img/delete.png" alt="DELETE" height="25">
                            </a>
                        </li>
                    </ul>
                <?php
                }
                ?>
            </div>
            <p class="right" style="font-style: italic;">Nombre de promotions : <?php echo $countPromotion ?>.</p>
        </div>
    </div>
</main>

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