<?php
    date_default_timezone_set("America/Los_Angeles");
    require_once __DIR__.'/../vendor/autoload.php';
    require_once __DIR__.'/../src/Allergies.php';

    $app = new Silex\Application();
    $app["debug"] = true;
    $app->register(new Silex\Provider\TwigServiceProvider(), array("twig.path" => __DIR__."/../views"));
    session_start();

    $app->get('/', function() use ($app) {
        return $app['twig']->render("display.html.twig", array('allergens' => $_SESSION['allergens']));
    });

    $app->post('/post_allergens', function() use ($app) {
        $newAllergies = new Allergies($_POST["score"]);
        $newAllergies->parseAllergens();
        $_SESSION['allergens'] = $newAllergies;
        return $app->redirect("/");
    });

    return $app;
 ?>
