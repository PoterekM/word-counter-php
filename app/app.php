<?php
    date_default_timezone_set("America/Los_Angeles");
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/RepeatCounter.php";

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));
    $app->get("/", function() use ($app) {
        return $app['twig']->render('form.html.twig');
    });

    $app->get("/result", function() use ($app) {
    $my_input = new RepeatCounter;
    $my_repeat_counter = $my_input->countRepeats($_GET['word'], $_GET['phrase']);
    return $app['twig']->render('view_count.html.twig', array('count' => $my_repeat_counter));
    });

    return $app;
?>
