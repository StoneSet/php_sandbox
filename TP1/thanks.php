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
    $directory_name = $_SERVER['REMOTE_ADDR'];
    $directory_name = str_replace(".", "_", $directory_name);
    $directory_name = './storage/' . $directory_name;
    if (isset($errors)) {
        foreach ($errors as $msg) {
            echo '<p class="error">', $msg, '</p>';
        }
    }
    if (isset($_POST['reset'])) {
        echo 'cliqué';
        rmdir($directory_name);
    }
    ?>
    <div class="container container-form">
        <div class="row">
            <h1 class="red accent-4">Thanks a lot !</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est nesciunt ut odio eligendi unde iure maiores, voluptates suscipit temporibus. Voluptate fugit a eius ullam, illum velit dignissimos non cupiditate possimus maxime assumenda asperiores consequuntur neque doloribus commodi similique! Quis voluptate recusandae nemo officiis, inventore in sit neque itaque magni veniam eum ipsa! Suscipit praesentium consequuntur iste eum maiores. Accusantium culpa nesciunt dolor voluptas voluptatem dolorem perspiciatis accusamus quibusdam nostrum quam inventore error numquam recusandae saepe et, repudiandae ab nemo autem dolores facere tempora deserunt unde porro? Quia, fugiat? Dolorum est id asperiores consequuntur repudiandae magnam quaerat eum ipsum, minus incidunt. Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo veritatis assumenda facere ipsa perferendis consequuntur quasi voluptatum magni, reiciendis quia qui aut in dolore iure minus voluptates. Libero eos, perferendis dolor magni molestias voluptatem veniam dolorum, impedit quisquam hic dolores debitis quos? Fugit id optio dolorum eum, ipsam rerum quod magnam delectus, quia necessitatibus alias sunt aliquam voluptatem voluptate nihil! Nulla praesentium sapiente obcaecati aliquam fugiat unde iste consequuntur officiis harum repellat vitae expedita, saepe, voluptatibus aliquid ad consectetur ipsa eligendi adipisci delectus eveniet ducimus. Fugiat obcaecati illo cumque optio nam natus voluptas inventore architecto hic vitae aliquam totam ad soluta saepe accusamus omnis perferendis nihil, repellat ullam voluptates officiis delectus aliquid ex officia! Adipisci delectus velit est provident ducimus possimus, praesentium natus fugiat, veritatis nulla architecto sed sapiente mollitia voluptatibus quibusdam. Id cupiditate libero doloremque sunt quia cumque amet minus recusandae, omnis eius nisi culpa illo nihil qui saepe, tempora odio. Laborum harum at, ullam ut repellat vel suscipit! Nostrum, distinctio, et explicabo vel eius excepturi ullam facilis corporis provident cum iure quibusdam nulla. Modi laudantium optio voluptate reprehenderit architecto. Unde neque cupiditate perferendis eaque quas corporis, quidem id commodi, odit fugiat aspernatur ad debitis facilis aliquid, distinctio consequatur vero. Eum, necessitatibus aspernatur asperiores voluptatem nemo eligendi impedit illum quibusdam tempore ab vel unde magni a laborum, consequuntur odit natus cupiditate nulla? Numquam ullam nostrum dolor quam aspernatur alias non eum neque vitae, consectetur tempore deserunt, omnis cumque laudantium exercitationem culpa voluptatibus sit. Nisi eius suscipit aspernatur consequatur beatae excepturi incidunt vero consequuntur quam, sint in adipisci minima omnis odit odio dicta quasi fuga tempore placeat ea natus dolores quibusdam corrupti nostrum. Quasi eveniet deserunt, nulla corrupti doloremque libero architecto mollitia quis fuga assumenda minima odit exercitationem iusto, placeat quaerat ab sapiente veritatis inventore alias repudiandae odio nobis sequi?</p>
            <button class="btn waves-effect waves-light" type="reset" name="reset">RESET LACCES
            <i class="material-icons right">send</i>
  </button>
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