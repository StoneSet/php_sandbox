<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link rel="icon" type="image/x-icon" href="img/favicon.ico">
    <title>TP3 - index</title>
    <script>
        $(document).ready(function() {
            $('select').formSelect();
        });
    </script>
    <nav class="deep-purple darken-4">
        <div class="nav-wrapper">
            <a href="" class="brand-logo"><img class="logo" src="img/iia_logo.png" alt=""></a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a style="font-size:larger;" href="#">TP3 - index</a></li>
            </ul>
        </div>
    </nav>
</head>

<body>
    <div class="container container-form">
        <div class="row">
            <h1>Gestion de l'IIA</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Praesentium nobis tempora dolores, in corporis hic minus mollitia eos culpa doloribus earum consectetur velit dolorum necessitatibus dolor veniam similique ut natus. Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis veritatis dolores earum beatae, eum deleniti reprehenderit fuga sequi iure totam itaque vitae quaerat quam. Recusandae eaque labore explicabo perferendis voluptatum veritatis minus quaerat ipsam, in dignissimos nostrum? Atque soluta alias tempora? Laudantium nesciunt soluta obcaecati autem aliquam dignissimos officiis suscipit?</p>
            <div class="row col s12">
                <?php
                 $p = $_GET["p"];
                if ($p == "all") {
                    #echo("rien");
                    ?>
                    <h4>Liste de tous les étudiants</h4>
                    <?php
                } else {
                ?>
                    <div class="row" id="addStudent">
                        <div class="input-field col s2">
                            <label for="add" style="font-style: italic; font-weight: bold;">Ajouter un étudiant</label>
                        </div>
                        <form action="addStudent.php" method="post">
                            <input type="hidden" name="id" value="<?php echo $_GET['p']; ?>">
                            <div class="input-field col s4">
                                <input id="name" type="text" name="name" class="student">
                                <label for="name">Prénom</label>
                            </div>
                            <div class="input-field col s4">
                                <input id="surname" type="text" name="surname" class="student">
                                <label for="surname">Nom</label>
                            </div>
                            <div class="input-field col s2">
                                <button id="send" class="btn waves-effect waves-light deep-purple darken-4 col s12" type="submit" name="action">OK
                                    <i class="material-icons right">keyboard_return</i>
                                </button>
                            </div>
                        </form>
                    </div>
                <?php
                }
                ?>
                <div class="row">
                    <hr>
                    <div class="text">
                        <?php
                        require '../repository/etudiant.php';
                        $countStudent = countStudent();
                        foreach (getStudents() as $listStudents) {
                            $etudiantid = $listStudents['id'];
                            $promolink = "delete.php?s=" . $etudiantid;
                        ?>
                            <ul>
                                <div style="display: flex;">
                                    <li>
                                        <p style="font-weight: bold; font-size: larger;">
                                            <?php
                                            echo $listStudents['prenom'], ' ';
                                            echo $listStudents['nom']; ?>
                                            <a href="<?php echo $promolink ?>">
                                                <img style="margin-left: 15px; margin-top: 10px;" src="../img/delete.png" alt="DELETE" height="25px">
                                            </a>
                                        </p>
                                    </li>
                                </div>
                            </ul>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
            <p class="right" style="font-style: italic;">Nombre d'étudiant(s) : <?php echo $countStudent ?>.</p>
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