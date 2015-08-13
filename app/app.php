<?php

    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Scrabble.php";

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(),
        array('twig.path' => __DIR__.'/../views'));

    //Main Page
    $app->get("/", function() use($app) {
        return $app['twig']->render('scrabblehome.html.twig');
    });

    $app->get("/score_check", function() use($app) {
        $new_Scrabble = new Scrabble;
        $score = $new_Scrabble->scrabbleGame($_GET['word']);

        return $app['twig']->render('scrabblehome.html.twig', array('result' => $score));
    });

    return $app;

?>
