<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Game.php";

    $app = new Silex\Application();
    $app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use ($app) {
        return $app['twig']->render('index.html.twig', array(
            'form' => true
        ));
    });

    $app->get("/results", function() use ($app) {
        if ($_GET['p1input'] == "rock") {
            $p1input = 'rock';
        } elseif ($_GET['p1input'] == "paper") {
            $p1input = 'paper';
        } elseif ($_GET['p1input'] == "scissors") {
            $p1input = 'scissors';
        }

        $new_game = new Game;
        $result = $new_game->outcome($p1input);

        return $app['twig']->render('index.html.twig', array(
            'message' => array(
                'text' => $result
            )
        ));
    });


    return $app;
?>
