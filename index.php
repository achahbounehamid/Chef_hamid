<?php
require_once './vendor/autoload.php'; 
require_once './vendor/altorouter/altorouter/AltoRouter.php';

$router = new AltoRouter();

$router->setBasePath('/php/Chef_hamid');

$router->map( 'GET', '/','RecipesController#homePage','home');
$router->map('GET', '/recipe/', '', 'baseHome');//la route d'entrer(POINT)
$router->map( 'GET', '/recipe/[i:id]','RecipesController#getOne', 'baseRecipe' );
$router->map('GET', '/connecter', 'ConnexionController#userConnexion', 'connexion');
$router->map('POST|GET', '/connect', 'ConnexionController#loginConnexion', 'login');
$router->map('GET|POST', '/inscription', 'ConnexionController#pageInscription', 'userInscription');
$router->map('GET', '/logout', 'ConnexionController#logout', 'logout');


$match = $router->match();
var_dump($match);
if(is_array($match)){
    list($controller, $action) = explode('#', $match['target']);
    // on veut que les info soient enreg dans une variable donc on utilise la methode list 
    $obj = new $controller();

    if(is_callable(array($obj, $action))){
        call_user_func_array(array($obj, $action), $match['params']);
        // si ok on l'appelle
    }
}